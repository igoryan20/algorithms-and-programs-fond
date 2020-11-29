<?php

namespace App\Http\Controllers;

use App\Models\ProgramsList;
use App\Models\Categories;
use App\Models\OS;
use App\Models\ProgramsOS;
use App\Http\Controllers\Controller;
use App\Http\Controllers\SearchProgramController;
use App\Http\Controllers\CheckboxOsConroller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomePageController extends Controller {

    public function invoke(Request $request) {

         // Операционные системы и категории
         $os = OS::all();
         $categories = Categories::all();

        // Начальные данные
        $data = DB::select('SELECT pl.*, os.os, os.id AS os_id FROM programsList
                                AS pl, os, programsOS AS po WHERE po.programId = pl.id
                                AND po.osId = os.id;');

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
            // // Проверка по категориям
            // $checkbox_os = $request->checkbox_os;
            // $ccoc = array();
            // if ($checkbox_os) {
            //     $ccoc = new CheckboxOsController($checkbox_os, $data);
            //     $data = $ccoc->check();
            // }
            // Проверка по операционным системам
            $checkbox_os = $request->checkbox_os;
            $ccoc = array();
            if ($checkbox_os) {
                $ccoc = new CheckboxOsController($checkbox_os, $data);
                $data = $ccoc->check();
            }
            $programsData = $this->add_os($data);
        }

        return view('/pages/home-page',
                    ['programsData' => $programsData,'os' => $os, 'categories' => $categories,
                    'search' => $search, 'request' => 0]);
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
