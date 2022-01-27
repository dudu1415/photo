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

        $request->images1->storeAs('public/images','file1.jpg');
        $request->images2->storeAs('public/images','file2.jpg');
        return "Deu certo 2";
    }

    public function documents(Request $request){

        $request->documents->storeAs('public/documents','documents');
        return "Deu certo 3";
    }

}


