@extends('layouts.main-layout')

@section('title', 'Delete patient page')

@section('content')
    @include('includes.control-navbar')

    <div class="container">
        <div class="card-form">
            <h1>Delete Patient</h1>
            <form>
                <div class="form-group">
                    <label for="patient">Patient</label>
                    <select class="form-control" id="patient">
                        @foreach($patients as $patient)
                            <option>{{$patient->surname}}</option>
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

