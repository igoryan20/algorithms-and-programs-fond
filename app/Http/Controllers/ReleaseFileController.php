<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Release;
use Illuminate\Support\Facades\Storage;

class ReleaseFileController extends Controller
{

    // Upload the release of product
    public function upload(Request $request) {

        $last = Release::all()->last();
        $release = new Release;
        $release->name = $request->name;
        $release->description = $request->description;
        $release->program_id = $request->id;
        if(is_null($last)) {
            $release->id = 1;
        } else {
            $release->id = $last->id + 1;
        }

        if($request->hasFile('release')) {
            $path = $request->file('release')->store('releases');
        }

        $release->path = $path;

        if($request->Windows) {
            $release->os_id = 1;
        }
        if($request->MacOS) {
            $release->os_id = 2;
        }
        if($request->Linux) {
            $release->os_id = 3;
        }

        $release->save();

        return view('pages/release-done');
    }

    public function download($id) {
        $release = Release::where('id', $id)->first();
        $headers = array(
            'Content-Type: multipart/formdata'
        );
        return Storage::download($release->path, $release->name.'.exe', $headers);
    }
}
