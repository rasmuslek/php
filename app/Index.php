<?php

require_once __DIR__ . '/app/Models/Article.php';
require_once __DIR__ . '/app/Services/ArticleService.php';

use App\Models\Article;
use App\Services\ArticleService;

$article = new Article('Understanding PHP OOP', 'John Doe');

$service = new ArticleService();
$service->publish($article);