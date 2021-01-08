<?php

namespace App\Http\Controllers;

use App\Http\Resources\ArticleList;
use App\Models\Article;
use Illuminate\Http\Request;
use function PHPUnit\Framework\returnArgument;

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
     * Add a new pet to the store
     *
     * @OA\Post(
     *     path="/article/{id}",
     *     tags={"article"},
     *     operationId="showArticle",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of pet to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/Article"),
     *     ),
     * )
     */
    public function show($id): Article
    {
        return Article::find($id);
    }
}
