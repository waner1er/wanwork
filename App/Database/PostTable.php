<?php

try {
    $db = new PDO('sqlite:database.sqlite');
 
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $db->exec("DROP TABLE IF EXISTS post");

    $db->exec("CREATE TABLE IF NOT EXISTS post (
                    id INTEGER PRIMARY KEY, 
                    slug VARCHAR(255),
                    title VARCHAR(255), 
                    content TEXT, 
                    created_at TEXT)");
    $db->exec("INSERT INTO post (slug, title, content, created_at) VALUES ('welcome', 'Bienvenue sur mon blog', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae nisi eg', '2019-01-01 00:00:00')");
    $db->exec("INSERT INTO post (slug, title, content, created_at) VALUES ('hello-world', 'Hello world', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae nisi eg', '2019-01-01 00:00:00')");
    echo "La base de données et la table Post ont été créées avec succès.";

} catch(PDOException $e) {
    echo $e->getMessage();
}