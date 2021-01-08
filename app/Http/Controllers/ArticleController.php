<?php

namespace App\Http\Controllers;

use App\Http\Resources\ArticleList;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * @param Request $request
     * @return array [App\Models\Article]
     */
    public function index(Request $request): array
    {
        return ArticleList::collection(Article::all())->toArray($request);
    }

    /**
     * @param $id
     * @return Article
     */
    public function show($id): Article
    {
        return Article::find($id);
    }

}
