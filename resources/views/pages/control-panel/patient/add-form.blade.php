@extends('layouts.main-layout')

@section('title', 'Add patient page')

@section('content')
    @include('includes.control-navbar')

    <div class="container">
        <div class="card-form">
            <h1>Add Patient</h1>
            <form>
                <div class="form-group">
                    <label for="surname">Surname</label>
                    <input type="text" class="form-control" id="surname" placeholder="Enter surname">
                </div>
                <div class="form-group">
                    <label for="category">Category</label>
                    <input type="text" class="form-control" id="category" placeholder="Enter category">
                </div>
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select class="form-control" id="gender">
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="treatmentTerm">Treatment term</label>
                    <input type="number" class="form-control" id="treatmentTerm" placeholder="Enter treatment term">
                </div>
                <div class="form-group">
                    <label for="surgeon">Surgeon</label>
                    <select class="form-control" id="surgeon">
                        @foreach($surgeons as $surgeon)
                            <option>{{$surgeon->surname}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="tariff">Tariff</label>
                    <select class="form-control" id="tariff">
                        @foreach($tariffs as $tariff)
                            <option>{{$tariff->title}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="birthDate">Birth Date</label>
                    <input type="date" class="form-control" id="birthDate"  value="now">
                </div>
                <div class="form-group">
                    <label for="operationDate">Operation Date</label>
                    <input type="date" class="form-control" id="operationDate"  value="now">
                </div>
                <div class="button-wrapper">
                    <input type="submit" class="btn btn-dark" value="Submit">
                    <input type="reset" class="btn btn-dark" value="Reset">
                </div>
            </form>
        </div>
    </div>

@endsection

