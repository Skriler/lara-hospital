@extends('layouts.main-layout')

@section('title', 'Surgeon add page')

@section('content')
    @include('includes.control-navbar')

    <div class="container">
        <div class="card-form">
            <h1>Add Surgeon</h1>
            <form>
                <div class="form-group">
                    <label for="surname">Surname</label>
                    <input type="text" class="form-control" id="surname" placeholder="Enter surname" required>
                </div>
                <div class="form-group">
                    <label for="code">Code</label>
                    <input type="number" class="form-control" id="code" placeholder="Enter code" required>
                </div>
                <div class="form-group">
                    <label for="category">Category</label>
                    <input type="text" class="form-control" id="category" placeholder="Enter category" required>
                </div>
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select class="form-control" id="gender" required>
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="homePhone">Home Phone</label>
                    <input type="number" class="form-control" id="homePhone" placeholder="Enter home phone">
                </div>
                <div class="form-group">
                    <label for="birthDate">Birth Date</label>
                    <input type="date" class="form-control" id="birthDate" value="now">
                </div>
                <div class="button-wrapper">
                    <input type="submit" class="btn btn-dark form-btn" value="Submit">
                    <input type="reset" class="btn btn-dark form-btn" value="Reset">
                </div>
            </form>
        </div>
    </div>

@endsection

