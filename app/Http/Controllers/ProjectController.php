<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //
    public function index()
    {
        $pageTitle = "Project";
        return view('pages.project', compact('pageTitle'));
    }
}
