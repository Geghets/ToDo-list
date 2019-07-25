@extends('layouts.app')

@section('content')

{{--
    <form method="post" action="{{route('add_action')}}">
        @csrf
--}}
{{--
        <label for="name">Date and Time</label>
--}}{{--

        <input placeholder="Date and Time" type="text" name="date">
    </br>
--}}
{{--
        <label for="name">Description</label>
--}}{{--

        <input placeholder="Description" type="text" name="description">
        </br>
        <button class="btn btn-primary btn-md" type="submit">Add</button>

    </form>
--}}

<style>
    body {
        background-color:#fff;
        -webkit-font-smoothing: antialiased;
        font: normal 14px Roboto,arial,sans-serif;
    }

    .container {
        padding: 25px;
        position: fixed;
    }

    .form-login {
        background-color: #EDEDED;
        padding-top: 10px;
        padding-bottom: 20px;
        padding-left: 20px;
        padding-right: 20px;
        border-radius: 15px;
        border-color:#d2d2d2;
        border-width: 5px;
        box-shadow:0 1px 0 #cfcfcf;
    }

    h4 {
        border:0 solid #fff;
        border-bottom-width:1px;
        padding-bottom:10px;
        text-align: center;
    }

    .form-control {
        border-radius: 10px;
    }

    .wrapper {
        text-align: center;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-md-offset-5 col-md-3">
            <div class="form-login">
                <h4>Add Plan</h4>
                <form method="post" action="{{route('add_action')}}">
                    @csrf
                <input type="text" name="date" id="userName" class="form-control input-sm chat-input" placeholder="date" />
                </br>
                <input type="text" name="description" id="userPassword" class="form-control input-sm chat-input" placeholder="description" />
                </br>
                <div class="wrapper">
            <span class="group-btn">
                <button type="submit" class="btn btn-primary btn-md">Add</button>
            </span>
                </div>
                </form>
            </div>

    </div>
</div>

@endsection