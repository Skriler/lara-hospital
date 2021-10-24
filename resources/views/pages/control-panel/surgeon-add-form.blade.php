@extends('layouts.main-layout')

@section('title', 'Surgeon add page')

@section('content')
    @include('includes.control-navbar')

    <div class="container">
        <div class="card-form">
            <h1>Add Surgeon</h1>
            <form method="POST" action="{{route('control-panel.surgeon.add')}}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="surname">Surname</label>
                    <input type="text" name="surname" class="form-control" id="surname" placeholder="Enter surname" required>
                </div>
                <div class="form-group">
                    <label for="code">Code</label>
                    <input type="number" name="code" class="form-control" id="code" placeholder="Enter code" required>
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
                    <label for="home-phone">Home Phone</label>
                    <input type="number" name="home-phone" class="form-control" id="home-phone" placeholder="Enter home phone">
                </div>
                <div class="form-group">
                    <label for="birth-date">Birth Date</label>
                    <input type="date" name="birth-date" class="form-control" id="birth-date" value="now">
                </div>
                @if($errors->any())
                    {!! implode('', $errors->all('<div class="error card">:message</div>')) !!}
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

