<?php
$db_host = getenv('DATABASE_HOST') ?: 'mysql.ecommerce.svc.cluster.local';
// $db_port = getenv('DB_PORT') ?: '3306';
$db_user = getenv('DB_USER') ?: getenv('MYSQL_ROOT_USER') ?: 'root';
$db_password = getenv('DB_PASSWORD') ?: getenv('MYSQL_ROOT_PASSWORD') ?: '';
$db_name = getenv('DB_NAME') ?: getenv('MYSQL_DATABASE') ?: 'osms_db';

// Create Connection
$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

// Check Connection
if($conn -> connect_error)
    die("connection failed");
?>