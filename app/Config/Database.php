<?php
namespace App\Config;

use PDO;
use PDOException;

class Database
{
    private $db;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=wanwork', 'root', 'Sh@ft3r44');
    }

    public function query($sql)
    {
        $stmt = $this->db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function prepare($sql, $params)
    {
        $stmt = $this->db->prepare($sql);
        $stmt->execute($params);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function executeSqlScript($sql)
    {
        try {
            $this->db->exec($sql);
            echo "Script SQL exécuté avec succès.\n";
        } catch (PDOException $e) {
            echo "Erreur lors de l'exécution du script SQL : " . $e->getMessage() . "\n";
        }
    }
}