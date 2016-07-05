@extends('layouts.app')

@section('content')
    <form action="{{route('post.update',$update->id)}}" method="post">
        {{ csrf_field() }}
        {{method_field('put')}}
        <div class="container">
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" value="{{$update->title}}" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input type="text" value="{{$update-> description}}" name="description" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Content</label>
                <textarea type="textarea"  name="content" class="form-control">{{$update->content}}</textarea>
            </div>
            <div class="form-group">
                <label for="">İmage</label>
                <input type="file" value="{{$update->image}}" name="image">
            </div>
            <div class="form-group">
                <button class="btn btn-default">UPDATE</button>
            </div>
        </div>
    </form>

@endsection
