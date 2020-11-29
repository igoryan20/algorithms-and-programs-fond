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
        foreach ($this->data as $program) {
            foreach ($this->checkboxOsRequest as $request) {
                if(in_array($request, $program->os)) {
                    array_push($checkData, $program);
                }
            }
        }
        return $checkData;
    }
}
