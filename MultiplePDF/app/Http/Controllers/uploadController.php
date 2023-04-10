<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

//este controlador convierte archivos a base64 JSON
class uploadController extends Controller
{

    public function loadFile(){
        $files=[];
        


        return view('files',["files"=>$files]);
    }

    public function storeFile(Request $req){
        
    }

}
