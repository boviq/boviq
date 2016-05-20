<?php

namespace App\Repositories\Frontend\Content\Post;

/**
 * Interface PostRepositoryContract
 * @package App\Repositories\Frontend\Content\Post
 */
interface PostRepositoryContract
{
    /**
     * @param $id
     * @return mixed
     */
    public function find($id);

    /**
     * @param $id
     */
}
