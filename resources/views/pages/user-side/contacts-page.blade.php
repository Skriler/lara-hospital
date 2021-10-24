@extends('layouts.main-layout')

@section('title', 'Contacts page')

@section('content')
    @include('includes.main-navbar')

    <div class="container">
        <div class="card-form">
            <h1>Enter your data</h1>
            <form method="POST" action="{{route('user-side.create-mail')}}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="user-email">Your email</label>
                    <input type="text" class="form-control" id="user-email" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="addressee-email">Addressee email</label>
                    <input type="text" class="form-control" id="addressee-email" placeholder="Enter addressee email">
                </div>
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" class="form-control" id="subject" placeholder="Enter subject">
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" id="message" rows="4"></textarea>
                </div>
                @if(Session::get('error'))
                    <div class="error card">
                        {{Session::get('error')}}
                    </div>
                @endif
                @if(Session::get('success'))
                    <div class="success card">
                        {{Session::get('success')}}
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

