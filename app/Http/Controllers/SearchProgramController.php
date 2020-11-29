<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class SearchProgramController extends Controller
{
    private $searchRequest;
    private $data;
    public function __construct(String $searchRequest, Array $data)
    {
        $this->searchRequest = $searchRequest;
        $this->data = $data;
    }

    public function search() {

        $searchData = array();
        foreach ($this->data as $program) {
            if(stristr($program->programName, $this->searchRequest)) {
                array_push($searchData, $program);
            }
        }
        return $searchData;
    }
}
