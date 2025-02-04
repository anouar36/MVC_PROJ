<?php
namespace App\config;
require_once __DIR__.'/../../vendor/autoload.php';

use PDO;
use PDOException;
use Dotenv;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/../../../'); 

class db {
    public function connection() {
        $servername = $_ENV['DB_HOST'];
        $username = $_ENV['DB_USER'];
        $password = $_ENV['DB_PASSWORD'];
        $dbname = $_ENV['DB_NAME'];
        $port = $_ENV['DB_PORT'];


        try {
            $dsn = "pgsql:host=$servername;port=$port;dbname=$dbname";
            $pdo = new PDO($dsn, $username, $password);

            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo 'connection is succss';
        } catch (PDOException $e) {
            die("erorr conn: " . $e->getMessage());
        }

        return $pdo;
    }
}


