<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\OS;
use App\Models\ProgramsOS;
use App\Http\Controllers\Controller;
use App\Http\Controllers\SearchProgramController;
use App\Http\Controllers\CheckboxOsConroller;
use App\Http\Controllers\CheckboxCategoryConroller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomePageController extends Controller {

    public function invoke(Request $request) {

         // Операционные системы и категории
         $os = OS::all();
         $categories = Categories::all();

        $data = DB::select('select * from programsList');
        $programsOS = DB::select('select * from programsOS');
        $data = $this->add_os($data, $programsOS);

        // Проверка данных
        if(!$data) {
            $programsData = [];
        } else {
            // Проверка по поисковой строке
            $search = $request->search;
            if ($search) {
                $spc = new SearchProgramController($search, $data);
                $data = $spc->search();
            }
        // Проверка по категориям
            $checkbox_category = $request->checkbox_category;
            $ccc = array();
            if ($checkbox_category) {
                $ccc = new CheckboxCategoryController($checkbox_category, $data);
                $data = $ccc->check();
            }
            // Проверка по операционным системам
            $checkbox_os = $request->checkbox_os;
            $coc = array();
            if ($checkbox_os) {
                $coc = new CheckboxOsController($checkbox_os, $data);
                $data = $coc->check();
            }
            $programsData = $this->add_os($data, $programsOS);
        }

        return view('/pages/home-page',
                    ['programsData' => $data,'os' => $os, 'categories' => $categories,
                    'search' => $search, 'checkbox_category' => $checkbox_category,
                    'checkbox_os' => $checkbox_os ]);
    }

    private function add_os($data, $programsOS) {

        $osArray = [];
        foreach ($programsOS as $po) {
            $osArray[$po->programId] = [];
        }
        foreach ($programsOS as $po) {
            array_push($osArray[$po->programId], $po->osId);
        }

        foreach ($data as $item) {
            $item->os = $osArray[$item->id];
        }

        return $data;
    }
}
?>
