@extends('layouts.app')

@section('content')
    <form action="{{route('tag.store')}}" method="post">
        {{ csrf_field() }}
        <div class="container">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" value="{{old('name')}}" name="name" class="form-control">
            </div>
            <div class="form-group">
                <button class="btn btn-default">Create</button>
            </div>
        </div>
    </form>

@endsection
