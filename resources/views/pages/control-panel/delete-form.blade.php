@extends('layouts.main-layout')

@section('title', $title . ' delete page')

@section('content')
    @include('includes.control-navbar')

    <div class="container">
        <div class="card-form">
            <h1>Delete {{$title}}</h1>
            <form>
                <div class="form-group">
                    <label for="patient">{{$title}}</label>
                    <select class="form-control" id="patient" required>
                        @foreach($data as $obj)
                            <option>{{$obj->surname != null ? $obj->surname : $obj->title}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="button-wrapper">
                    <input type="submit" class="btn btn-dark form-btn" value="Submit">
                </div>
            </form>
        </div>
    </div>

@endsection

