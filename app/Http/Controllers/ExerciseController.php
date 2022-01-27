<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerciseController extends Controller
{
    public function photo(Request $request){

        $request->photo->storeAs('public','file.jpg');
        return "Deu certo";
    }

    public function images(Request $request){

        $request->image1->storeAs('public/images','file1.jpg');
        $request->image2->storeAs('public/images','file2.jpg');
        return "Deu certo 2";
    }

    public function documents(Request $request){

        $request->file->storeAs('public/documents','file');
        return "Deu certo 3";
    }

}


