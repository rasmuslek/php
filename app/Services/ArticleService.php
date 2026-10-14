<?php

namespace App\Services;

use app\Models\Article;

class ArticleService
{
    public function publish(Article $article): void
    {
        echo 'Publishing article: "' . $article->title
            . '" by ' . $article->author;
    }
}