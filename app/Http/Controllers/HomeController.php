<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = $this->getPosts();
        $categories = $this->getCategories();
        return view('frontend.home', compact('posts', 'categories'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function contact(){
        return view('frontend.contact');
    }

    /**
     * @return false|string
     */
    public function getPosts(){
        $posts = Post::get();
        return $posts;
    }

    /**
     * @return false|string
     */
    public function getCategories(){
        $categories = Category::get();
        return $categories;
    }
}
