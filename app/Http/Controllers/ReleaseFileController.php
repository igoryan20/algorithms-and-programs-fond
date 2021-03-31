<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Release;
use App\Models\Product;
use App\Events\ReleasePublished;

class ReleaseFileController extends Controller
{

    // Загружаю релиз продукта на сервер
    public function upload(Request $request) {

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

    public function publish($productId, $releaseId) {
    
        $release = Release::find($releaseId);
        $release->is_published = true;
        $release->save();
        $release->refresh();

        ReleasePublished::dispatch(Product::find($productId));

        // return redirect()->route('journal', ['id' => $productId]);

        // $product = Product::find($productId);
        // var_dump($product->users);

    }
}
