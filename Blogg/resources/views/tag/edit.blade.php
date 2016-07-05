@extends('layouts.app')

@section('content')
    <form action="{{route('tag.update',$update->id)}}" method="post">
        {{ csrf_field() }}
        {{method_field('put')}}
        <div class="container">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" value="{{$update->name}}" name="name" class="form-control">
            </div>
            <div class="form-group">
                <button class="btn btn-default">UPDATE</button>
            </div>
        </div>
    </form>
@endsection
