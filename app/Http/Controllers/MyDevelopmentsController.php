<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use App\Models\{
    ProgramsList,
    ProgramsOS
};

class MyDevelopmentsController extends Controller
{

    public function getPrograms(Request $request) {

        $data = ProgramsList::where('developed_by', 6)->get();

        $programsOS = new Collection([]);
        foreach ($data as $program)
        {
            $po = ProgramsOS::where('programId', $program->id)->get();
            foreach ($po as $pp) {
                // var_dump($pp);
            }
            $programsOS->push(ProgramsOS::where('programId', $program->id)->get());
        }
        $programsOS = $programsOS->flatten();

        $myPrograms = $this->add_os($data, $programsOS);

        return view('/pages/my-developments', ['myPrograms' => $myPrograms]);
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
