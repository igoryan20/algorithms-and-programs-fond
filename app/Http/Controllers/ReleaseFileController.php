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

            $release = (new Release)->create($request, $path);
        }       

        return view('pages/success', ['id' => $release->product->id, "title" => 'Релиз добавлен', "info" => 'Ваш релиз доставлен на сервер']);
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
        $product->is_published = true;
        $users = $product->users;
        $product->save();

        Notification::send($users, new ReleasePublished($release));

        return redirect()->route('journal', ['id' => $productId]);

    }

    public function getReleases($productId) {
        $product = Product::find($productId);
        $releases = $product->releases->where('is_published', '1');
        
        return view('/pages/releases-list', ["releases" => $releases]);
    }
}
