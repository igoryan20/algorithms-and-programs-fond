<?php

namespace App\Http\Controllers;

use App\Models\ProgramsList;
use App\Models\Categories;
use App\Models\OS;
use App\Models\ProgramsOS;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomePageController extends Controller {

    public function __invoke(Request $request) {


            $search = $request->input('search');

            if($search) {
                $programsData = ProgramsList::where('programName', 'LIKE', '%'.$search.'%')->get();
            } else {
                $programsData = ProgramsList::all();
            }

            $programsOS = ProgramsOs::all();
            $os = OS::all();

            $helper = [];
            foreach ($programsData as $program) {
                foreach($programsOS as $po) {
                    if($program->id == $po->programId) {
                        array_push($helper, $po->osId);
                    }
                    $program->os = $helper;
                }
                $helper = [];
            }

            $categories = Categories::all();

            return view('/pages/home-page', ['programsData' => $programsData,'os' => $os, 'categories' => $categories]);
    }
}
?>
