<?php

namespace App\Http\Controllers;

use App\Http\Resources\ArticleList;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        return ArticleList::collection(Article::all());
    }

    public function show($id)
    {
        return Article::find($id);
    }

}
