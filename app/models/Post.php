<?php 

namespace App\Models;
class Post 
{
    private $id;
    private $title;
    private $content;
    private $author;
    private $createdAt;
    private $updatedAt;

    public function __construct($id, $title, $content, $author, $createdAt, $updatedAt)
    {
        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
        $this->author = $author;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
    }

    public function getId() 
    {
        return $this->id;
    }

    public function getTitle() 
    {
        return $this->title;
    }

    public function getContent() 
    {
        return $this->content;
    }

    public function getAuthor() 
    {
        return $this->author;
    }

    public function getCreatedAt() 
    {
        return $this->createdAt;
    }

    public function getUpdatedAt() 
    {
        return $this->updatedAt;
    }

    public function setId($id) 
    {
        $this->id = $id;
    }

    public function setTitle($title) 
    {
        $this->title = $title;
    }

    public function setContent($content) 
    {
        $this->content = $content;
    }

    public function setAuthor($author) 
    {
        $this->author = $author;
    }

    public function setCreatedAt($createdAt) 
    {
        $this->createdAt = $createdAt;
    }

    public function setUpdatedAt($updatedAt) 
    {
        $this->updatedAt = $updatedAt;
    }

   
}