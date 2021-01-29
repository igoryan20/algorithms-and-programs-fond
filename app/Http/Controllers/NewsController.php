<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
// use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function getNewsPage() {

        $news = News::all();

        return view('pages/show-news-page', ['news' => $news]);
    }
}
