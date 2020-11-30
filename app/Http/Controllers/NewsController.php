<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function __invoke() {

        $news = DB::select('select * from news');

        return view('pages/show-news-page', ['news' => $news]);
    }
}
