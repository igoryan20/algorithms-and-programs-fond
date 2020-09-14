<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ProgramsListController extends Controller {
    public function __invoke() {

        $programsData = DB::select('select * from programsList');

        return view('pages/home', ['programsData' => $programsData]);
    }
}
?>
