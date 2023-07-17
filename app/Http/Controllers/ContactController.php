<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    function page(Request $request)
    {
        return view('frontend.pages.contact');
    }

    function contactRequest(Request $request)
    {
        // sleep(5); // testing loading data
        return DB::table('contacts')->insert($request->input());
    }
}
