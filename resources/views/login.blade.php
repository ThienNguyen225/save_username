@extends('layouts.master')
@section('content')
    <div class="title m-b-md">
        Login
    </div>
    @if (Session::has('not-login'))
        <div class="not-login">
            <p class="text-danger">{{ Session::get('not-login') }}</p>
        </div>
    @endif
    <div class='form-login'>
        <form action="{{route('user.login')}}" method="post" class='text-left'>
            {{csrf_field()}}
            <div class="form-group">
                <lable for="inputUserName">User Name</lable>
                <input type="text" id="inputUserName" name="inputUserName" placeholder="Name" required>
            </div>
            <div class="form-group">
                <lable for="inputPassword">Password</lable>
                <input type="password" id="inputPassword" name="inputPassword" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
    </div>
@endsection