<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Release;

class ReleaseFileController extends Controller
{

    // Загружаю релиз продукта
    public function upload(Request $request) {

        var_dump($request->id);

        if($request->hasFile('release')) {
            $path = $request->file('release')->store('releases');
            (new Release)->create($request, $path);
        }       

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
