# Electronic E-Commerce (OSMS)

A lightweight PHP-based electronic e‑commerce project prepared for containerized deployment (Docker & Kubernetes). The repo includes a PHP web app, MySQL StatefulSet, phpMyAdmin, and CI workflows to build/publish container images to GHCR.

## Key features

- PHP (mysqli) based web frontend
- MySQL StatefulSet with persistent storage and init SQL
- phpMyAdmin for DB management
- Dockerfile optimized for php:8.3-fpm-alpine + nginx + php-fpm
- Kubernetes manifests for namespace, StatefulSet, Deployments, Services, PVCs
- GitHub Actions workflow to build & push images to GHCR
- Cleanup workflow sample to prune GHCR package versions

## Build & push to GHCR (CI)

- `push-image.yml` builds and pushes two tags: SHA and `latest`.
- It is recommended to prefer digest/SHA pinned images for deployments.
- Use `GITHUB_TOKEN` or a PAT with `packages: write` to authenticate.

Example local push:

```bash
docker login ghcr.io -u <username> --password-stdin
docker build -t ghcr.io/<owner>/electronic-e-commerce:<sha> -t ghcr.io/<owner>/electronic-e-commerce:latest .
docker push ghcr.io/<owner>/electronic-e-commerce:<sha>
docker push ghcr.io/<owner>/electronic-e-commerce:latest
```

## Kubernetes deployment notes

- Namespace: `ecommerce`
- MySQL StatefulSet (kubernetes/04-statefulset.yml)
  - serviceName: `ele-osms-mysql`
  - PVC template for persistent storage
  - Init SQL provided via ConfigMap `mysql-initdb`
- Web Deployment (kubernetes/05-deployment.yml)
  - Ensure `DATABASE_HOST` env is set to the service FQDN (recommended):
    `ele-osms-mysql.ecommerce.svc.cluster.local`
  - Example env:

    ```yaml
    - name: DATABASE_HOST
      value: ele-osms-mysql.ecommerce.svc.cluster.local
    - name: DB_PORT
      value: "3306"
    - name: DB_NAME
      valueFrom:
        secretKeyRef:
          name: mysql-credentials
          key: MYSQL_DATABASE
    - name: DB_USER
      valueFrom:
        secretKeyRef:
          name: mysql-credentials
          key: MYSQL_ROOT_USER
    - name: DB_PASSWORD
      valueFrom:
        secretKeyRef:
          name: mysql-credentials
          key: MYSQL_ROOT_PASSWORD
    ```

- If you prefer `mysql` as host, create a Service named `mysql` or change StatefulSet serviceName accordingly.

### Apply manifests

```bash
# Create DB via configmap
kubectl -n ecommerce create configmap mysql-initdb --from-file=osms_db.sql=osms_db.sql

kubectl apply -f kubernetes/04-statefulset.yml
kubectl apply -f kubernetes/05-deployment.yml
```

## Secrets & credentials

- Store DB credentials in Kubernetes Secret `mysql-credentials` with keys:
  - MYSQL_ROOT_PASSWORD
  - MYSQL_DATABASE
  - MYSQL_ROOT_USER
  - MYSQL_PASSWORD (optional)
- Do not hardcode credentials in manifests or source code.

## Troubleshooting

- DNS failure resolving MySQL inside pod:
  - Verify Service name matches what application expects: `kubectl get svc -n ecommerce`
  - Test DNS from a debug pod:

    ```bash
    kubectl run -n ecommerce dns-test --rm -it --image=busybox --restart=Never -- nslookup ele-osms-mysql.ecommerce.svc.cluster.local
    ```

- PHP errors: "Session cannot be started after headers" — ensure `session_start()` is the very first output in PHP files (no BOM/whitespace above `<?php`).
- phpMyAdmin Apache ServerName warning is harmless; to suppress set `ServerName` in phpMyAdmin container config.
- MySQL connection "No such file or directory" typically indicates using socket/localhost from CLI vs remote host. Use TCP host+port (FQDN) in `dbConnection.php`.
- Verify MySQL pod is Ready and logs: `kubectl get pods -n ecommerce` and `kubectl logs -n ecommerce <mysql-pod>`

## Security & best practices

- Pin images to digests for production deployments.
- Keep `latest` for convenience but do not rely on it in manifests.
- Automate registry cleanup (example workflow to keep last N versions).
- Use HTTPS/TLS in production and secure secrets with sealed-secrets/vault where possible.
- Use prepared statements (mysqli prepared) for DB interactions — some examples in code already show prepared usage.

## Build optimization notes (Docker)

- The Dockerfile uses `php:8.3-fpm-alpine` and nginx to keep image small.
- Use a `.dockerignore` to avoid copying unnecessary files.
- Combine `RUN` instructions, remove package caches, and clean temp files to reduce size.

## Contributing

- Open issues and PRs for bugs or enhancements.
- Keep commits small and descriptive.
- Run tests (if any) before submitting a PR.

---
