@extends('layouts.main-layout')

@section('title', 'Tariff add page')

@section('content')
    @include('includes.control-navbar')

    <div class="container">
        <div class="card-form">
            <h1>Add Tariff</h1>
            <form>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" placeholder="Enter title" required>
                </div>
                <div class="form-group">
                    <label for="code">Code</label>
                    <input type="number" class="form-control" id="code" placeholder="Enter code" required>
                </div>
                <div class="form-group">
                    <label for="operationPrice">Operation price</label>
                    <input type="number" class="form-control" id="operationPrice" placeholder="Enter operation price" required>
                </div>
                <div class="form-group">
                    <label for="rehabilitationDayPrice">Rehabilitation day price</label>
                    <input type="number" class="form-control" id="rehabilitationDayPrice" placeholder="Enter rehabilitation day price" required>
                </div>
                <div class="button-wrapper">
                    <input type="submit" class="btn btn-dark form-btn" value="Submit">
                    <input type="reset" class="btn btn-dark form-btn" value="Reset">
                </div>
            </form>
        </div>
    </div>

@endsection
