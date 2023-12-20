<?php

namespace App\Config;

include  __DIR__ .'/Database.php';
$db = new Database();

$sql = "
CREATE TABLE posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
";

$db->executeSqlScript($sql);