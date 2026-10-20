<?php

require_once __DIR__ . '/app/Models/Article.php';
require_once __DIR__ . '/app/Services/ArticleService.php';

use app\Services\ArticleService;
use app\Models\Article;


$articleService = new ArticleService();
$article = new Article("Understanding PHP OOP", "This is the content of my first article.", "John Doe");


echo $articleService->publish($article);