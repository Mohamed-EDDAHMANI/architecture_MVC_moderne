<?php
namespace App\Core;

// require_once("../../vendor/autoload.php");
use PDO;
use PDOException;
// use Dotenv;

// $dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/../../../'); 

class Database {
    private $pdo = null;

    public function connection() {
        $servername = 'postgres_container';
        $username   = "postgres";
        $password   = "anwar36flow";
        $dbname     = "mvc_db";
        $port       = "5432";

        // var_dump($this->pdo != null);
        // if ($this->pdo != null) {
        //     echo 'seccess';
        //     return $this->pdo;
        // }

        try {
            $dsn = "pgsql:host=$servername;port=$port;dbname=$dbname";
            $pdo = new PDO($dsn, $username, $password);

            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo 'connection is succss';
        } catch (PDOException $e) {
            die("erorr conn: " . $e->getMessage());
        }

        return $pdo;
    }
}

