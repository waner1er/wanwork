<?php

namespace App\Controllers;

include ROOT_PATH . '/app/Config/Database.php';
use PDO;
use App\Config\Database;

class PostController
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    public function index()
    {
        $posts = $this->db->query('SELECT * FROM posts');
        ob_start();
        include ROOT_PATH . '/app/views/post/index.php';
        $content = ob_get_clean();

        include ROOT_PATH . '/app/views/layout.php';
    }

    public function show($id)
    {
        $post = $this->db->prepare('SELECT * FROM posts WHERE id = ?', [$id]);

        if (!$post) {
            header('HTTP/1.0 404 Not Found');
            echo 'Pas d\'article trouvé';
            exit;
        }
        ob_start();
        include ROOT_PATH . '/app/views/post/show.php';
        $content = ob_get_clean();

        include ROOT_PATH . '/app/views/layout.php';
    }

    public function create()
    {
        session_start();

        if (empty($_SESSION['csrf_token'])) {
            $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
        }

        ob_start();
        include ROOT_PATH . '/app/views/post/create.php';
        $content = ob_get_clean();

        include ROOT_PATH . '/app/views/layout.php';
    }

    public function store()
    {
        session_start();

        if (!hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])) {
            // Les tokens CSRF ne correspondent pas
            die('Invalid CSRF token');
        }


        $title = $_POST['title'];
        $content = $_POST['content'];

        $this->db->prepare('INSERT INTO posts (title, content) VALUES (?, ?)', [$title, $content]);

        header('Location: /posts');
    }

    public function edit($id)
    {
        session_start();

        if (empty($_SESSION['csrf_token'])) {
            $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
        }

        $post = $this->db->prepare('SELECT * FROM posts WHERE id = ?', [$id]);

        if (!$post) {
            header('HTTP/1.0 404 Not Found');
            echo 'Pas d\'article trouvé';
            exit;
        }

        ob_start();
        include ROOT_PATH . '/app/views/post/edit.php';
        $content = ob_get_clean();

        include ROOT_PATH . '/app/views/layout.php';
    }

    public function update($id)
    {
        session_start();

        if (!hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])) {
            // Les tokens CSRF ne correspondent pas
            die('Invalid CSRF token');
        }

        $title = $_POST['title'];
        $content = $_POST['content'];

        $this->db->prepare('UPDATE posts SET title = ?, content = ? WHERE id = ?', [$title, $content, $id]);

        header('Location: /posts');
    }
}