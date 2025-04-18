<?php

namespace App\Core;

use PDO;
use PDOException;

class Database
{
    private static $instance = null;
    private $pdo;

    private $host = 'localhost';
    private $db_name = 'db_restaurants';
    private $username = 'root';
    private $password = '';

    private function __construct()
    {
        try {
            $this->pdo = new PDO("mysql:host=$this->host;dbname=$this->db_name;charset=utf8", $this->username, $this->password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Erreur de connexion à la base de données: " . $e->getMessage());
        }
    }

    public static function getConnection()
    {
        if (self::$instance === null) {
            self::$instance = new Database();
        }
        return self::$instance->pdo;
    }
}
<?php

use App\Core\Database;

$pdo = Database::getConnection();

// Exemple de requête
$stmt = $pdo->query("SELECT * FROM users");
$users = $stmt->fetchAll(PDO::FETCH_OBJ);

print_r($users);
private $host = 'localhost';
private $db_name = 'db_restaurants';
private $username = 'root';
private $password = '';
