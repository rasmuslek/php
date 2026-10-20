<?php

namespace app\Services;

use app\Models\Article;

class ArticleService
{
    public function publish(Article $article)
    {
        return "Publishing article: " . $article->title . " by " . $article->author;
    }
}

