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
 */
class Article extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'desc', 'content'];
}
