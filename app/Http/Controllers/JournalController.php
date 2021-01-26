<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Release;

class JournalController extends Controller
{
    public function getRelises($id, Request $request) {

        $releases = Release::all()->where('program_id', $id);

        return view('/pages/journal', ['releases' => $releases]);
    }
}
