<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    Release,
    Program
};

class JournalController extends Controller
{
    public function getRelises($id, Request $request) {

        $releases = Release::all()->where('program_id', $id);
        $program = Program::where('id', $id)->first();

        return view('/pages/journal', ['releases' => $releases, 'program' => $program]);
    }
}
