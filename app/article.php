<?php

use app\Services\ArticleService;
use app\Models\Article;

require app\Services\ArticleService;
require app\Models\Article;


$articleService = new ArticleService();
$article = new Article("Understanding PHP OOP", "This is the content of my first article.", "John Doe");


echo $articleService->publish($article);