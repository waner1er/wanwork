<?php

namespace App\Controllers;

require_once BASEDIR . '/vendor/autoload.php';


use PDO;
use App\Models\Post;
use App\Configuration\Helpers;
use App\Controllers\BaseController;

class WelcomeController extends BaseController {

    public function index() {
        // $post = $this->getWhere('post', 'slug', '=', 'welcome');
        $post = Post::first('slug', '=', 'welcome');
        return $this->render('welcome', 'layouts/front',['post' => $post]);
    }
}