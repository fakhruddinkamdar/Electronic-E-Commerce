# Kubernetes manifests tuned to docker-compose services

- **`web (php-apache)`** -> Deployment + Service (NodePort to approximate docker host ports)
- **`db (mysql:8.0)`** -> StatefulSet + Service + PVC (persistent storage like dbdata)
- **`phpmyadmin`** -> Deployment + Service

## Notes

- The web service in docker-compose is built from local source (`build: .`).
  In Kubernetes you normally build an image push to a registry and reference it in the `Deployment`.
- The docker-compose bind-mount (`.:/var/www/html`) is not portable to k8s; for development you can mount a `hostPath` (example commented below) or use a sync tool (skaffold, telepresence, tilt).
- The init SQL file (`./osms_db.sql`) is provided here as a ConfigMap and mounted into `/docker-entrypoint-initdb.d/`.
  If your SQL file is large, prefer using a Kubernetes `Secret`, an `initContainer` that downloads the file, or use a PV with the file.

```bash
kubectl apply -f kubernetes/
kubectl -n ecommerce create configmap mysql-initdb --from-file=osms_db.sql=osms_db.sql
```
