<?php
namespace App\Models;

use PDO;
use App\Core\Database;

class ArticleModel
{
    public static function getAll()
    {
        $db = new Database();
        $pdo = $db->connection();

        $stmt = $pdo->prepare("SELECT * FROM articles");
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC); // Return all articles as an associative array
    }
}
