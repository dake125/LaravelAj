<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PostController extends Controller
{
    //
    public function create(){
        return view('post.create');
    }

    public function store(Request $request){
        //
    }
}
