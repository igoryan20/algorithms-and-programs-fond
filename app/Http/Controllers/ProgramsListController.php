<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ProgramsListController extends Controller {
    public function __invoke() {


        $data = [
            ['id' => 1, 'name' => 'isq', 'img' => asset('img/isq.png')],
            ['id' => 2, 'name' => 'Truehero'],
            ['id' => 3, 'name' => 'Truecoder']
        ];

        return view('pages/home', ['data' => $data]);
    }
}
?>
