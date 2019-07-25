@extends('layouts.app')

<style>
    .custab{
        border: 1px solid #ccc;
        padding: 5px;
        margin: 5% 0;
        box-shadow: 3px 3px 2px #ccc;
        transition: 0.5s;
    }
    .custab:hover{
        box-shadow: 3px 3px 0px transparent;
        transition: 0.5s;
    }
</style>

@section('content')

    <div class="container">
    <div class="row col-md-6 col-md-offset-2 custyle">
        <table class="table table-striped custab">
            <thead>
            <a id="add" href="{{ route('add') }}" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new item</a>
            <tr>
                <th>Number</th>
                <th>Time and Date</th>
                <th>Description</th>
                <th class="text-center">Action</th>
            </tr>
            </thead>
        <tbody>
        @php
         $a = 1;
        @endphp
        @foreach($items as $item)
            <tr>
                <td>{{ $a++ }}</td>
                <td>{{ $item->date}}</td>
                <td>{{ $item->description }}</td>
                <td class="text-center"><a class='btn btn-info btn-xs' href="{{ route('edit', ['id'=>$item->id]) }}"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href="#" data-id="{{$item->id}}" class="btn btn-success btn-xs done"><span class="glyphicon glyphicon-ok"></span>Done</a></td>
            </tr>
            @endforeach
        </tbody>
        </table>
{{--
        <input type="hidden" id="myurl" url="{{route('del')}}" />
--}}

    </div>
</div>

<script src="{{ asset("js/script.js") }}"></script>

@endsection


