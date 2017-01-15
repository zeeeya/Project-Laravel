@extends('layouts.master')

@section('content')
<div class="container" >
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <br>
            <br>
            <img src="/uploads/avatars/{{ $user->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">

            <form enctype="multipart/form-data" action="/profile" method="POST">
                <label>
                    <p style="font-size: 25px">{{ $user->first_name}} {{ $user->last_name}}</p>
                    <p style="font-size: 20px">{{ $user->email}}</p>
                    <p style="font-size: 15px">{{ $user->phone}}</p>
                </label>
                <input type="file" name="avatar">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" value="save" class="pull-right btn btn-sm btn-primary">
            </form>
        </div>
    </div>
</div>
@endsection
