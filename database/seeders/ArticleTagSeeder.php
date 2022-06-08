<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article;
use App\Models\Tag;

class ArticleTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Get all the tags, attaching up to 3 random tags to each article
$tags = Tag::all();

// Populate the pivot table
Article::all()->each(function ($article) use ($tags) { 
    $article->tags()->attach(
        $tags->random(rand(1, 3))->pluck('id')->toArray()
    ); 
});
    }
}