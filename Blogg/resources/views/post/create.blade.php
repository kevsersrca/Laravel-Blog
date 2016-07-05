@extends('layouts.app')

@section('content')
    <form action="{{route('post.store')}}" method="post">
        {{ csrf_field() }}
        <div class="container">
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" value="{{old('title')}}" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input type="text" value="{{old('description')}}" name="description" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Content</label>
                <textarea type="text" value="{{old('content')}}" name="content" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="">İmage</label>
                <input type="file" value="{{old('image')}}" name="image">
            </div>
            <div class="form-group">
                <button class="btn btn-default">Create</button>
            </div>
        </div>
    </form>

@endsection
