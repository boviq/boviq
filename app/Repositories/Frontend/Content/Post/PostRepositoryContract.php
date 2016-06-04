<?php

namespace App\Repositories\Frontend\Content\Post;

/**
 * Interface PostRepositoryContract
 * @package App\Repositories\Frontend\Content\Post
 */
interface PostRepositoryContract
{
    /**
     * @param $id ID of the post
     * @return mixed
     */
    public function find($id);

    /**
     * @param $id ID of the group
     * @return mixed
     */
    public function findAllForGroup($id);
}
