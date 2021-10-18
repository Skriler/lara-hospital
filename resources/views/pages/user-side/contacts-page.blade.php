@extends('layouts.main-layout')

@section('title', 'Main page')

@section('content')
    @include('includes.main-navbar')

    <div class="container">
        <div class="card-form">
            <h1>Enter your data</h1>
            <form>
                <div class="form-group">
                    <label for="surname">Surname</label>
                    <input type="text" class="form-control" id="surname" placeholder="Enter surname">
                </div>
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select class="form-control" id="gender">
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="home-phone">Home Phone</label>
                    <input type="number" class="form-control" id="home-phone" placeholder="Enter home phone">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="theme">Theme</label>
                    <input type="text" class="form-control" id="theme" placeholder="Enter surname">
                </div>
                <div class="form-group">
                    <label for="question">Question</label>
                    <textarea class="form-control" id="question" rows="4"></textarea>
                </div>
                <div class="button-wrapper">
                    <input type="submit" class="btn btn-dark form-btn" value="Submit">
                    <input type="reset" class="btn btn-dark form-btn" value="Reset">
                </div>
            </form>
        </div>
    </div>

@endsection

