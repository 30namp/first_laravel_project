<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Image;

class ImageController extends Controller
{
    protected $guard = [];

    public function create(Request $request){

        $data = $request->validate([
            "description" => 'required',
            "image" => ['required', 'image'],
        ]);

        $path = $request->file('image')->store('images');

        $image = new Image;
        $image['description'] = $request['description'];
        $image['image'] = '/storage/app/' . $path;
        $image->save();

        dd($image->all());
    }
}
