<?php

namespace App\Http\Controllers;

use App\Models\ProgramsList;
use App\Models\Categories;
use App\Models\OS;
use App\Models\ProgramsOS;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomePageController extends Controller {

    public function invoke(Request $request) {

        $initData = DB::select('SELECT pl.*, os.os FROM programsList
                                AS pl, os, programsOS AS po WHERE po.programId = pl.id
                                AND po.osId = os.os_id;');

        $os = OS::all();
        $categories = Categories::all();

        $search = $request->search;
        if ($search) {
            $initData = DB::select("SELECT pl.*, os.os FROM programsList
                        AS pl, os, programsOS AS po WHERE po.programId = pl.id
                        AND po.osId = os.os_id");
        }

        if(!$initData) {
            $programsData = [];
        } else {
            $programsData = $this->convert_init_data($initData);
        }


        return view('/pages/home-page',
                    ['programsData' => $programsData,'os' => $os, 'categories' => $categories]);
    }

    private function convert_init_data($data) {

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
