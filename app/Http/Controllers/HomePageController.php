<?php

namespace App\Http\Controllers;

use App\Models\ProgramsList;
use App\Models\Categories;
use App\Models\OS;
use App\Models\ProgramsOS;
use App\Http\Controllers\Controller;
use App\Http\Controllers\SearchProgramController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomePageController extends Controller {

    public function invoke(Request $request) {

         // Операционные системы и категории
         $os = OS::all();
         $categories = Categories::all();

        // Начальные данные
        $initData = DB::select('SELECT pl.*, os.os FROM programsList
                                AS pl, os, programsOS AS po WHERE po.programId = pl.id
                                AND po.osId = os.os_id;');

        // Есть ли данные
        if(!$initData) {
            $programsData = [];
        } else {
            $programsData = $this->add_os($initData);
        }

        // Данные из поисковой строки
        $search = $request->search;
        if ($search) {
            $spc = new SearchProgramController($search);
            $spc = $spc->search();
            $programsData = $this->add_os($spc);
        }

        // По операционным системам
        $search = $request->checkbox-os;




        return view('/pages/home-page',
                    ['programsData' => $programsData,'os' => $os, 'categories' => $categories,
                    'search' => $search]);
    }

    private function add_os($data) {

        $itemRow;
        $id = 0;
        $repeat = false;
        foreach ($data as $key => $item) {
            if ($item->id == $id) {
                array_push($itemRow->os, $item->os);
                unset($data[$key]);
            } else {
                $item->os = array($item->os);
                $itemRow = $item;
                $id = $item->id;
            }
        }
        return $data;
    }
}
?>
