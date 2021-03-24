<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\{
    News,
    NewsCreator
};

class CreateNewsController extends Controller
{
    public function getCreateNewsPage(Request $request) {
        return view('pages/create-news-page');
    }

    public function createNews(Request $request) {

        $new = new News;
        $new->title = $request->title;
        $new->content = $request->content;
        $new->save();

        $newsCreator = new NewsCreator;
        $newsCreator->new_id = $new->id;
        $newsCreator->creator_id = Auth::user()->id;
        $newsCreator->save();

        return (new NewsController)->getNewsPage();
    }
}
