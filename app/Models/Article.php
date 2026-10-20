<?php

namespace app\Models;

class Article
{
    public $title;
    public $content;
    public $author;

    public function __construct($title, $content, $author)
    {
        $this->title = $title;
        $this->content = $content;
        $this->author = $author;
    }
}