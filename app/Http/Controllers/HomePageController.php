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

            $programsData = ProgramsList::all();
            $programsOS = ProgramsOs::all();

            $search = $request->input('search');
            $checkbox_category = $request->input('checkbox-category');
            $checkbox_os = $request->input('checkbox-os');

            if($search) {
                $programsData = ProgramsList::where('programName', 'LIKE', '%'.$search.'%')->get();
            }
            // if($checkbox_category) {
            //     foreach ($programsData as $program) {
            //         foreach($checkbox_category as $cat) {
            //             $programsCategory =
            //         }
            //     }
            // }

            if($checkbox_os) {
                $newProgramsData = [];
                $id = null;
                foreach ($programsData as $program) {
                    foreach($checkbox_os as $os) {
                        foreach($programsOS as $po) {
                            if($program->id == $po->programId && $os == $po->osId) {
                                if ($id != $program->id) {
                                    array_push($newProgramsData, $program);
                                }
                                $id = $program->id;
                            }
                        }
                    }
                }
                $programsData = $newProgramsData;
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

            return view('/pages/home-page',
                        ['programsData' => $programsData,'os' => $os, 'categories' => $categories]);
        }
}
?>
