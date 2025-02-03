<?php

namespace App\Core;

use Dotenv\Dotenv;
use PDO;
use PDOException;


class Database
{
    private $pdo;

    public function connect()
    {
        try {
            if ($this->pdo) {
                return $this->pdo;
            } else {
                $dotenv = Dotenv::createImmutable(__DIR__ . "/../../");
                $dotenv->load();

                $dsn = "pgsql:host={".$_ENV["HOST"]."};port={".$_ENV["PORT"]."};dbname={".$_ENV["DBNAME"]."}";
                return $this->pdo = new PDO($dsn, $_ENV["USER"], $_ENV["PASSWoRD"], [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, 
                ]);
            }

        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }
}
?>