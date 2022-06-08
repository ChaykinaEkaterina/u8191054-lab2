<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Tag;

class ArticlesNumberCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tag:count {id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get number of articles with tag {id}';

    
    public function handle()
    {
        $articles = Tag::all()->where('id', $this->argument('id'))->first()->articles;
        $this->info('Number of articles: '.count($articles));
    }
}