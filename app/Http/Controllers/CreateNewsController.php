<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CreateNewsController extends Controller
{
    public function invoke(Request $request) {
        return view('pages/create-news-page');
    }

    public function insertNews(Request $request) {
        DB::insert('insert into news values (null, ?, ?)', [$request->title,  $request->content ]);
        return view('pages/create-news-page');
    }
}
