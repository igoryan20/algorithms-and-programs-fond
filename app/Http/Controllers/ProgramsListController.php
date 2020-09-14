<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ProgramsListController extends Controller {
    public function __invoke() {

        $data = DB::select('select * from programsList');

        // $data = [
        //     ['id' => 1, 'name' => 'isq', 'img' => asset('img/isq.png')],
        //     ['id' => 2, 'name' => 'Truehero'],
        //     ['id' => 3, 'name' => 'Truecoder']
        // ];

        return view('pages/home', ['data' => $data]);
    }
}
?>
