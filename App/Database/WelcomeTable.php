<?php

try {
    $db = new PDO('sqlite:database.sqlite');
 
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $db->exec("DROP TABLE IF EXISTS welcome");

    $db->exec("CREATE TABLE IF NOT EXISTS welcome (
                    id INTEGER PRIMARY KEY, 
                    title VARCHAR(255), 
                    content TEXT, 
                    created_at TEXT)");

    echo "La base de données et la table Post ont été créées avec succès.";

} catch(PDOException $e) {
    echo $e->getMessage();
}