<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class CheckboxOsController extends Controller
{
    private $checkboxOsRequest;
    private $data;

    public function __construct(Array $checkboxOsRequest, Array $data)
    {
        $this->checkboxOsRequest = $checkboxOsRequest;
        $this->data = $data;
    }

    public function check() {

        $checkData = array();
        $names = array();
        foreach ($this->data as $program) {
            if(in_array($program->os_id, $this->checkboxOsRequest)) {
                array_push($checkData, $program);
                array_push($names, $program->programName);
            }
            else if(in_array($program->programName, $names)) {
                array_push($checkData, $program);
            }
        }
        return $checkData;
    }
}
