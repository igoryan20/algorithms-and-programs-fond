<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class CreateNewsController extends Controller
{
    public function getCreateNewsPage(Request $request) {
        return view('pages/create-news-page');
    }

    public function insertNews(Request $request) {

        $new = new News;
        $new->title = $request->title;
        $new->content = $request->content;
        $new->save();

        return view('pages/create-news-page');
    }
}
