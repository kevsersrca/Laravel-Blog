<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use App\Tag;


class TagController extends Controller
{

    public function index()
    {
        $index=\App\Tag::get();
        return view('tag.index',compact('index'));
    }
    public function create()
    {
        return view('tag.create');
    }
    public function store(Request $request)
    {
        Tag::create($request->all());
        return redirect()->route('tag.index');
    }
    public function show($id)
    {
        Tag::findOrFail($id)->delete();
        return redirect()->route('tag.index');
    }
    public function edit($id)
    {
        $update =Tag::findOrFail($id);
        return view('tag.edit', compact('update'));
    }
    public function update(Request $request, $id)
    {
        Tag::findOrFail($id)->update($request->all());
        return redirect()->route('tag.index');
    }

}
