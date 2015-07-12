<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateArticleRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;


class ArticlesController extends Controller
{

   public  function index()
   {
       $articles = Article::latest('published_at')->published()->get();
       return view('articles.index',compact('articles'));
   }

   public function show($id)
   {
       dd($id);
       $articles = Article::findorFail($id);
       ($articles->published_at);

       return view('articles.show', compact('articles'));
   }
    public function create()
    {
        return view('articles.create');
    }
    public function store(CreateArticleRequest $request)
    {
        $articles= new Article($request->all());

       return redirect('cerebro');
    }
    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.edit',compact('article'));
    }
    public function update($id, Request $request)
    {
        $article = Article::findOrFail($id);
        $article->update($request->all());
        return redirect('cerebro');
    }
}