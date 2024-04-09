<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;

class UploadPhotoController extends Controller
{
    public function create()
    {
        return view('upload.upload_photo');
    }

    public function result(Request $request)
    {
        $photo = $this->store($request);

        return view('upload.result_photo', ['result_photo_url' => $photo['path_url'], 'frontend_url' => $photo['frontend_url']]);
    }

    public function store(Request $request)
    {
        $this->fileValidate($request);
        $photo = $this->InsertPhoto();
        $file = $request->file('file')->move('uploads', "{$photo->id}.png");

        return ['status' => 'ok', 'path_url' => url("/uploads/{$photo->id}.png"), 'frontend_url' => route('photo.show', ['id' => $photo->id])];
    }

    public function fileValidate($request)
    {
        $request->validate([
            'file' => ['max:102400', 'required', 'extensions:jpg,png']
        ]);
    }

    public function InsertPhoto()
    {
        $photo = Photo::create([
            'path' => 'waited'
        ]);
        $photo->path = "uploads/{$photo->id}";
        $photo->save();
        return $photo;
    }
}
