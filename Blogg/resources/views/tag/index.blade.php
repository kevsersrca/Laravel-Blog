@extends("layouts.app")
@section('style')
    <style>
        .table > tbody > tr > td
        {
            border-top: 0px;
        }
    </style>

@endsection
@section("content")
    <a href="{{url('/tag/create')}}" class="btn btn-primary pull-left ">Create Tag</a>
    <table class="table table-striped table-hover ">
        <thead>
        <tr class="active">
            <td>Name</td>
            <td></td>
            
        </tr>
        </thead>
        <tbody>
        @foreach($index as $row)
            <tr >
                <td>{{ $row->name }}</td>
                <td style="float: right;">
                    <a href="{{route('tag.edit',$row->id)}}" class="btn btn-info">EDIT</a>
                    <a href="javascript:;" class="btn btn-danger">DELETE</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop
@section("script")
    <script>
        @foreach($index as $row)
        $(document).ready(function () {
            $(".btn-danger").click(function () {
                if(confirm("Are you sure ?"))
                {
                    $(location).attr('href','{{route('tag.show', $row->id)}}');
                    return;
                }
            });
        });
        @endforeach
    </script>
@stop