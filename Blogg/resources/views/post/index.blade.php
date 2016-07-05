@extends("layouts.app")

@section("content")
    <a href="{{url('/post/create')}}" class="btn btn-primary pull-left ">Create Post</a>
    <table class="table table-striped table-hover ">
        <thead>
        <tr class="active">
            <td>Title</td>
            <td>Description</td>
            <td>Content</td>
            <td>İmage</td>
            <td></td>
        </tr>
        </thead>
        <tbody>
        @foreach($index as $row)
            <tr class="active">
                <td>{{$row->title}}</td>
                <td>{{$row->description}}</td>
                <td>{{$row->content}}</td>
                <td>{{$row->image}}</td>
                <td>
                    <a href="{{route('post.edit',$row->id)}}" class="btn btn-info">EDIT</a>
                    <a href="javascript:;" class="btn btn-danger">DELETE</a>
                    <a href="{{url('/postview',$row->id)}}" class="btn btn-success">Post View</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
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