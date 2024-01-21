<?php 

namespace App\Models;

class Post extends BaseModel{
    protected $id;
    protected $slug;
    protected $title;
    protected $content;
    protected $created_at;

    protected static $table = 'post';

    public function __construct($array){
        $this->id = $array['id'] ?? null;
        $this->slug = $array['slug'] ?? null;
        $this->title = $array['title'] ?? null;
        $this->content = $array['content'] ?? null;
        $this->created_at = $array['created_at'] ?? null;
    }

    /** 
     * ----------- GETTERS ---------------
     *  getId() : return the id of the post
     *  getSlug() : return the slug of the post
     *  getContent() : return the content of the post
     *  getCreatedAt() : return the date of the post
     */

    public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getSlug() {
        return $this->slug;
    }

    public function getExcerpt() {
        return substr($this->content, 0, 100) . '...';
    }

    public function getCreatedAt() {
        return date('d/m/Y à H:i', strtotime($this->created_at));
    }

    /** 
     * ----------- SETTERS ---------------
     *  setId() : set the id of the post
     *  setSlug() : set the slug of the post
     *  setContent() : set the content of the post
     *  setCreatedAt() : set the date of the post
     */

    public function setId($id) {
        $this->id = $id;
    }

    public function setSlug($slug) {
        $this->slug = $slug;
    }

    public function setContent($content) {
        $this->content = $content;
    }

    public function setCreatedAt($created_at) {
        $this->created_at = $created_at;
    }

}