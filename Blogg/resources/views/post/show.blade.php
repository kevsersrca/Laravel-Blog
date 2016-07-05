@extends("layouts.app")
@section("style")
    <style>
        .image
        {
            border: 1px solid white;
            width: 150px;
            height: 150px;
            border-radius: 30px;
        }
        .links
        {
            padding-top: 30%;
            text-align: center;
        }

    </style>
@endsection
@section("content")
    @foreach($index as $row)
        <div class="row">
            <h1>Post Title: {{$row->title}}</h1>
            <div class="col-md-6">
                <h3>Post İmage</h3>
                <div class="image">
                    <img src="{{$row->image}}" alt="{{$row->image}}">
                </div>
            </div>
            <div class="col-md-6">
                <h3>Post Description: <br>{{$row->description}}</h3>
                <p>Post Content: <br>{{$row->content}}</p>
            </div>
            <div class="links">
                <a href="{{route('post.edit',$row->id)}}" class="btn btn-info">EDIT</a>
                <a href="javascript:;" class="btn btn-danger">DELETE</a>
                <a href="" class="btn btn-success">Tag Add</a>
            </div>
        </div>
    @endforeach
@stop
@section("script")
    <script>
        $(document).ready(function () {
            @foreach($index as $row)
                $(".btn-danger").click(function () {
                if(confirm("Are you sure ?"))
                {
                    $(location).attr('href','{{route('post.show', $row->id)}}');
                }
            });
            @endforeach
        });
    </script>
@stop