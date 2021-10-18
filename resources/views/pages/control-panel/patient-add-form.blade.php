@extends('layouts.main-layout')

@section('title', 'Patient add page')

@section('content')
    @include('includes.control-navbar')

    <div class="container">
        <div class="card-form">
            <h1>Add Patient</h1>
            <form method="POST" action="{{route('')}}">
                <div class="form-group">
                    <label for="surname">Surname</label>
                    <input type="text" name="surname" class="form-control" id="surname" placeholder="Enter surname" required>
                </div>
                <div class="form-group">
                    <label for="category">Category</label>
                    <input type="text" name="category" class="form-control" id="category" placeholder="Enter category" required>
                </div>
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select name="gender" class="form-control" id="gender" required>
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="treatmentTerm">Treatment term</label>
                    <input type="number" name="treatmentTerm" class="form-control" id="treatmentTerm" placeholder="Enter treatment term" required>
                </div>
                <div class="form-group">
                    <label for="surgeon">Surgeon</label>
                    <select name="surgeon" class="form-control" id="surgeon" required>
                        @foreach($surgeons as $surgeon)
                            <option>{{$surgeon->surname}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="tariff">Tariff</label>
                    <select name="tariff" class="form-control" id="tariff" required>
                        @foreach($tariffs as $tariff)
                            <option>{{$tariff->title}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="birthDate">Birth Date</label>
                    <input type="date" name="birthDate" class="form-control" id="birthDate"  value="now">
                </div>
                <div class="form-group">
                    <label for="operationDate">Operation Date</label>
                    <input type="date" name="operationDate" class="form-control" id="operationDate"  value="now" required>
                </div>
                <div class="button-wrapper">
                    <input type="submit" class="btn btn-dark form-btn" value="Submit">
                    <input type="reset" class="btn btn-dark form-btn" value="Reset">
                </div>
            </form>
        </div>
    </div>

@endsection

