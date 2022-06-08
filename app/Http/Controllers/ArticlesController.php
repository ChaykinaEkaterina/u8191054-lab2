<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Tag;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    /* task 3.2 */
    public function articleCode()
    {
        $article= Article::all()->where('code',last(request()->segments()))->first();
        $article->tags = $article->tags()->orderBy('name')->get();
        return view('articleByCode',['article' => $article]);  
    }

    /* task 3.1 */
    public function articlesList(Request $request)
    {
        $articles=Article::all();

        //tag filter
        if ($request->has('tag'))
        $articles = Tag::where('name', $request->input('tag'))->first()->articles;
        
        //name filter
        if ($request->has('name'))
        $articles = $articles->where('name', $request->input('name'));
        
        //code filter
        if ($request->has('code'))
        $articles = $articles->where('code', $request->input('code'));
        
        if ($articles!=Article::all())
        return view('articles',['articles' => $articles->forPage(1,15)]); 
        else return view('articles',['articles' => Article::paginate(15)]);

    }
}