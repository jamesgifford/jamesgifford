<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display the homepage.
     *
     * @return void
     */
    public function index()
    {
        $blogPosts = Post::blog()->featured()->get();
        $workPosts = Post::work()->featured()->get();
        $projectPosts = Post::project()->featured()->get();

        return view('pages.home')->with([
            'blogPosts'     => $blogPosts,
            'workPosts'     => $workPosts,
            'projectPosts'  => $projectPosts
        ]);
    }

    /**
     * Display the work page.
     *
     * @return void
     */
    public function work()
    {
        $workPosts = Post::work()->get();

        return view('pages.work')->with([
            'workPosts' => $workPosts
        ]);
    }

    /**
     * Display the projects page.
     *
     * @return void
     */
    public function projects()
    {
        $projectPosts = Post::project()->get();

        return view('pages.projects')->with([
            'projectPosts' => $projectPosts
        ]);
    }
}
