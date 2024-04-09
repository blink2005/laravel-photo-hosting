<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;

class SelectPhotoController extends Controller
{
    public function show($id)
    {
        $result = $this->store($id);

        if ($result['status'] === 'ok')
        {
            return view('select.select_photo', ['path_url' => $result['path_url']]);
        }
        else
        {
            return view('select.error_select_photo');
        }
    }

    public function store($id)
    {
        if (Photo::find($id) != null)
        {
            return ['status' => 'ok', 'path_url' => url("/uploads/{$id}.png"),];
        }
        else 
        {
            return ['status' => 'fail'];
        }
    }
}
