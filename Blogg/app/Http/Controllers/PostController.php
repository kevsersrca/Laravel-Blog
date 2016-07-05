<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use \App\Post;
use \App\Tag;
use Illuminate\Support\Facades\App;


class PostController extends Controller
{
    /**
     * PostController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * index method
     * @param \Request $request
     * @return mixed
     */
    public function index(\Request $request)
    {
        $index=\Auth::user()->posts()->get();
        return view('post.index',compact('index'));
    }

    /**
     * create page get method
     * @return mixed
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * post method
     * User's save post
     * @param Request $request
     * @return mixed
     */
    public function store(Request $request)
    {
        $post=\Auth::user()->posts();
        $store =  $post->create($request->all());
        return redirect()->route('post.index');
    }

    /**
     * Post view get method
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        \Auth::user()->posts()->findOrFail($id)->delete();
        return redirect()->route('post.index');
    }

    /**
     * edit page get method
     * @param $id
     * @return mixed
     */
    public function edit($id)
    {
        $update =\Auth::user()->posts()->findOrFail($id);
        return view('post.edit', compact('update'));
    }
    /**
     * post method
     * user's have a post edit and save
     * @param Request $request
     * @param $id
     * @return mixed
     */
    public function update(Request $request, $id)
    {
        \Auth::user()->posts()->findOrFail($id)->update($request->all());
        return redirect()->route('post.index');
    }
    
}
