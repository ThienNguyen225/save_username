@extends('layouts.master')
@section('content')
    <div class="title m-b-md">
        Raising the bar
        @if (Session::has('login-fail'))
            <div class="login-fail">
                <p class="text-danger">{{ Session::get('login-fail') }}</p>
            </div>
        @endif
    </div>
    <a href="{{ route('user.logout') }}">
        <button type="button" class="btn btn-outline-primary">Đăng Xuất</button>
    </a>
    <hr>
@endsection