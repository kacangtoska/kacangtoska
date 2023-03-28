<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function index()
    {
        $pageTitle = "Blog";
        return view('pages.blog', compact('pageTitle'));
    }

    public function single_blog()
    {
        $pageTitle = "Single Blog";
        return view('pages.single-blog', compact('pageTitle'));
    }
}
