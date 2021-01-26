<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Release;


class ReleaseFileController extends Controller
{

    // Upload the release of product
    public function upload(Request $request) {

        $last = Release::all()->last();
        $release = new Release;
        $release->name = $request->name;
        $release->description = $request->description;
        if(is_null($last)) {
            $release->id = 1;
        } else {
            $release->id = $last->id;
        }

        if($request->hasFile('release')) {
            $path = $request->file('release')->store('releases');
        }

        $release->path = $path;

        if($request->Windows) {
            $release->os()->attach(1);
        }
        if($request->Linux) {
            $release->os()->attach(2);
        }
        if($request->MacOS) {
            $release->os()->attach(3);
        }

        $release->save();

        return view('pages/release-done');
    }
}
