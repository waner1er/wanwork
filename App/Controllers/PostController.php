<?php

namespace App\Controllers;

require_once BASEDIR . '/vendor/autoload.php';


use PDO;
use App\Models\Post;
use App\Configuration\Helpers;
use App\Controllers\BaseController;

class PostController extends BaseController {

    public function index() {
        // $post = $this->getWhere('post', 'slug', '=', 'welcome');
        $posts = Post::getAll();
        
        return $this->render('posts', 'layouts/front',['posts' => $posts]);
    }
}