<?php

namespace App\Models;

class Article
{
    public function __construct(
        public string $title,
        public string $author
    ) {}
}