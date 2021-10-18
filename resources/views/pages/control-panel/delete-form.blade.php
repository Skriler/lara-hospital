@extends('layouts.main-layout')

@section('title', $title . ' delete page')

@section('content')
    @include('includes.control-navbar')

    <div class="container">
        <div class="card-form">
            <h1>Delete {{$title}}</h1>
            <form method="POST" action="{{route('control-panel.' . lcfirst($title) . '.delete')}}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="patient">{{$title}}</label>
                    <select name="target-title" class="form-control" id="patient" required>
                        @foreach($data as $obj)
                            <option>{{$obj->surname != null ? $obj->surname : $obj->title}}</option>
                        @endforeach
                    </select>
                </div>
                @if(Session::get('error'))
                    <div class="error card">
                        Dependent patients exists
                    </div>
                @endif
                @if(Session::get('success'))
                    <div class="success card">
                        Deleted successfully
                    </div>
                @endif
                <div class="button-wrapper">
                    <input type="submit" class="btn btn-dark form-btn" value="Submit">
                </div>
            </form>
        </div>
    </div>

@endsection

