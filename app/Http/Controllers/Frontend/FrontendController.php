<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Repositories\Frontend\Content\Post\PostRepositoryContract;

/**
 * Class FrontendController
 * @package App\Http\Controllers
 */
class FrontendController extends Controller
{
    /**
     * @var PostRepositoryContract
     */
    protected $posts;

    /**
     * @param PostRepositoryContract    $posts
     */
    public function __construct(PostRepositoryContract $posts)
    {
        $this->posts = $posts;
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $posts = $this->posts->findAllForGroup(0);

        javascript()->put([
            '__INITIAL_STATE__' => [
                'posts' => $posts,
            ],
        ]);

        //var_dump(request()->user()); exit;
        return view('frontend.index');
    }

    /**
     * TODO: remove after getting familiar with the boilerplate content
     * @return \Illuminate\View\View
     */
    public function boilerplate()
    {
        javascript()->put([
            'test' => 'it works!',
        ]);

        return view('frontend.boilerplate');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function macros()
    {
        return view('frontend.macros');
    }
}
