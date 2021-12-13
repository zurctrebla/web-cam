<?php

class Category
{
    public $name;
}

class Post
{
    public $name;
    public $content;
    private $category;

    public function setCategory(Category $category)
    {
        $this->category = $category;
    }

    public function category() : Category
    {
        return $this->category;
    }
}

$php = new Category;
$php->name = 'PHP';

$post01 = new Post;
$posto01->title = 'PHP é legal';
$post01->content = '...';
// $post01->category = $php;
// echo $post01->category->name;
$post01->setCategory($php);
$category = $post01->category();
echo $category->name;