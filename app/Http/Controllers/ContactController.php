<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    function page(Request $request)
    {
        $seo = DB::table('seoproperties')->where('pageName', '=', 'contact')->first();
        return view('frontend.pages.contact', ['seo' => $seo]);
    }

    function contactRequest(Request $request)
    {
        // sleep(5); // testing loading data
        return DB::table('contacts')->insert($request->input());
    }
}
