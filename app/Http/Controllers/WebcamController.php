<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WebcamController extends Controller
{
    public function index()
    {
        return view('webcam');
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function store(Request $request)
    {
        $img = $request->image;
        $folderPath = "upload/product/";
        
        $image_parts = explode(";base64,", $img);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        
        $image_base64 = base64_decode($image_parts[1]);
        $fileName = uniqid() . '.png';
        
        $file = $folderPath . $fileName;
        Storage::put($file, $image_base64);
        
        return redirect()->route('add.product'); 
    }
}
