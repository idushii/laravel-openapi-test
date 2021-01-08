<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Article
 * @package App\Models
 * @property int id
 * @property string title
 * @property string desc
 * @property string content
 * @OA\Schema(
 *     description="Article model",
 *     title="Article model",
 *     required={"title", "content"},
 * )
 */
class Article extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'desc', 'content'];

    /**
     * @OA\Property(
     *     format="int64",
     *     description="ID",
     *     title="ID",
     * )
     *
     * @var integer
     */
    private $id;
}
