<?php

namespace App\Repositories\Frontend\Content\Post;

use App\Models\Access\User\User;
use App\Models\Content\Post\Post;
use App\Repositories\Frontend\Content\Post\PostRepositoryContract;

/**
 * Class EloquentPostRepository
 * @package App\Repositories\Frontend\Content\Post
 */
class EloquentPostRepository implements PostRepositoryContract
{
    /**
     * @param $id
     * @return mixed
     */
    public function find($id)
    {
        return Post::findOrFail($id);
    }

    /**
     * @param $id ID of the group
     * @return mixed
     */
    public function findAllForGroup($id){
        return Post::where('group_id', $id)->get();
    }
}
