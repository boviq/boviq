<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

/**
 * Class FrontendController
 * @package App\Http\Controllers
 */
class FrontendController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        javascript()->put([
            'test' => [
                'name' => 'Boviq',
                'year' => 2016,
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
