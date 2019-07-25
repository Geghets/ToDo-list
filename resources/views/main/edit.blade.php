@extends('layouts.app')

@section('content')

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
                    <h4>Edit Plan</h4>
                    <form method="post" action="{{route('update', ["id"=>$item->id])}}">
                        @csrf
                        <input type="text" name="date" id="userName" value="{{ $item->date }}" class="form-control input-sm chat-input" placeholder="date" />
                        </br>
                        <input type="text" name="description" id="userPassword" value="{{ $item->description }}" class="form-control input-sm chat-input" placeholder="description" />
                        </br>
                        <div class="wrapper">
            <span class="group-btn">
                <button type="submit" class="btn btn-primary btn-md">Edit</button>
            </span>
                        </div>
                    </form>
                </div>

            </div>
        </div>

@endsection