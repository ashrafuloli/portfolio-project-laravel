<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    function page(Request $request)
    {
        return view('frontend.pages.projects');
    }

    function projectData(Request $request)
    {
        return DB::table('projects')->get();
    }
}
