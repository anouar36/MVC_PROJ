<?php
namespace App\config;
require_once __DIR__.'/../../vendor/autoload.php';

use PDO;
use PDOException;
use Dotenv;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/../../../'); // تأكد من صحة المسار
$dotenv->load();

class db {
    public function connection() {
        // تكوين قاعدة البيانات
        $servername = $_ENV['DB_HOST'];
        $username = $_ENV['DB_USER'];
        $password = $_ENV['DB_PASSWORD'];
        $dbname = $_ENV['DB_NAME'];

        try {
            // إنشاء اتصال PDO
            $dsn = "mysql:host=$servername;dbname=$dbname;charset=utf8mb4";
            $pdo = new PDO($dsn, $username, $password);

            // تعيين وضع الخطأ في PDO إلى استثناء
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo 'تم الاتصال بنجاح';
        } catch (PDOException $e) {
            // التعامل مع أخطاء الاتصال
            die("فشل الاتصال: " . $e->getMessage());
        }

        return $pdo;
    }
}


