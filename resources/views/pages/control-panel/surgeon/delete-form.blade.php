@extends('layouts.main-layout')

@section('title', 'Delete surgeon page')

@section('content')
    @include('includes.control-navbar')

    <div class="container">
        <div class="card-form">
            <h1>Delete Surgeon</h1>
            <form>
                <div class="form-group">
                    <label for="surgeon">Surgeon</label>
                    <select class="form-control" id="surgeon">
                        @foreach($surgeons as $surgeon)
                            <option>{{$surgeon->surname}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="button-wrapper">
                    <input type="submit" class="btn btn-dark" value="Submit">
                </div>
            </form>
        </div>
    </div>

@endsection
