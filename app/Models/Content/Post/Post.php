<?php

namespace App\Models\Content\Post;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Post
 * @package App\Models\Content\Post
 */
class Post extends Model
{
    /**
     * The attributes that are mass assignable
     *
     * @var array
     */
    protected $fillable = ['content', 'type', 'status'];
}
