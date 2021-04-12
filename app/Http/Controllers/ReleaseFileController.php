<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Release;
use App\Models\Product;
use App\Notifications\ReleasePublished;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Hash;

class ReleaseFileController extends Controller
{
    static private $hash;
    // Загружаю релиз продукта на сервер
    public function upload(Request $request) {

        if($request->hasFile('release')) {
            $path = $request->file('release')->store('releases');

            (new Release)->create($request, $path);
        }       

        return view('pages/release-done');
    }

    public function download($id) {
        $headers = array(
            'Content-Type: multipart/formdata'
        );
        $release = Release::find($id);
        if ($release->hash == md5(Storage::get($release->path))) {
            return Storage::download($release->path, $release->name.'.exe', $headers);
        } else {
            return view('/pages/success', ['id' => $release->product->id, "title" => 'Произошла ошибка', "info" => 'Произошла ошибка при скачивании, повторите попытку']);
        }
        
    }

    public function publish($productId, $releaseId) {
    
        $release = Release::find($releaseId);
        $release->is_published = true;
        $release->save();
        $release->refresh();

        $product = Product::find($productId);
        $users = $product->users;

        Notification::send($users, new ReleasePublished($release));

        return redirect()->route('journal', ['id' => $productId]);

    }
}
