<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class SearchProgramController extends Controller
{
    private $searchRequest;
    public function __construct(String $searchRequest)
    {
        $this->searchRequest = $searchRequest;
    }

    public function search() {

        $initData = DB::select('SELECT pl.*, os.os FROM programsList
                                AS pl, os, programsOS AS po WHERE po.programId = pl.id
                                AND po.osId = os.os_id;');

        $searchData = array();
        foreach ($initData as $program) {
            if(strstr($program->programName, $this->searchRequest)) {
                array_push($searchData, $program);
            }
        }
        return $searchData;
    }
}
