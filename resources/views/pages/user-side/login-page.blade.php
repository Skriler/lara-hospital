@extends('layouts.main-layout')

@section('title', 'Login page')

@section('content')
    @include('includes.main-navbar')

    <div class="container">
        <div class="card-form">
            <h1>Login</h1>
            <form method="POST" action="{{route('user-side.auth.login')}}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control" id="username" placeholder="Enter username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Enter password" required>
                </div>
                @if(Session::get('error'))
                    <div class="error card">
                        Data is invalid
                    </div>
                @endif
                <div class="button-wrapper">
                    <input type="submit" class="btn btn-dark form-btn" value="Submit">
                    <input type="reset" class="btn btn-dark form-btn" value="Reset">
                </div>
            </form>
        </div>
    </div>

@endsection

