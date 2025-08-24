<?php
use Dotenv\Dotenv;


require_once '../../vendor/autoload.php';

$dotenv = Dotenv::createImmutable('../../');
$dotenv->load();

$host = $_ENV['DB_HOST'];
$dbName = $_ENV['DB_NAME'];
$user = $_ENV['DB_USER'];
$pass = $_ENV['DB_PASS'];

$conn = "mysql:host=$host;dbname=$dbName";

try{
    $pdo = new PDO($conn, $user, $pass);
}
catch(PDOException $e){
    throw new PDOException($e->getMessage());
}