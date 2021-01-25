<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReleaseFileController extends Controller
{

    // Upload the release of product
    public function upload(Request $request) {

        if($request->hasFile('release')) {
            var_dump($request->file('release')->store('releases'));
        }
        return view('pages/release-done');
    }

}
