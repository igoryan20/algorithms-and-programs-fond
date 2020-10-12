<?php

namespace App\Http\Controllers;

use App\Models\ProgramsList;
use App\Models\Categories;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomePageController extends Controller {

    public function __invoke(Request $request) {


            $search = $request->input('search');

            if ($search) {
                $programsData = ProgramsList::where('name', 'LIKE', '%'.$search.'%')->get();
            } else {
                $programsData = ProgramsList::all();
            }

            $categories = Categories::all();

            return view('/pages/home-page', ['programsData' => $programsData, 'categories' => $categories]);
    }
}
?>
