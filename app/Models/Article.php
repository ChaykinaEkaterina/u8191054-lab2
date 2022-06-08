<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Article extends Model{

    use HasFactory;
    protected $table = 'articles';

    protected $filltable = [
        'name',
        'code',
        'content',
        'added_on',
        'author'
    ];

    public function tags(){
        return $this->belongsToMany(Tag::class, 'articles_tags', 'article_id', 'tag_id');
    }
} 