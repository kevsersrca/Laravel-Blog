<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PostViewController extends Controller
{
    public function getView($id)
    {
        $index=\App\Post::find($id)->get();
        return view('post.show',compact('index'));
    }
}
