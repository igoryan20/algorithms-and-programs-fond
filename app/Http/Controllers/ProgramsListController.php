<?php

namespace App\Http\Controllers;

use App\ProgramsList;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProgramsListController extends Controller {

    public function __invoke(Request $request) {


            $search = $request->input('search');

            if ($search) {
                $programsData = ProgramsList::where('name', 'LIKE', '%'.$search.'%')->get();
            } else {
                $programsData = ProgramsList::all();
            }
            return view('/pages/home-page', ['programsData' => $programsData]);
    }
}
?>
