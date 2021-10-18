@extends('layouts.main-layout')

@section('title', 'Tariff add page')

@section('content')
    @include('includes.control-navbar')

    <div class="container">
        <div class="card-form">
            <h1>Add Tariff</h1>
            <form method="POST" action="{{route('control-panel.tariff.add')}}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="Enter title" required>
                </div>
                <div class="form-group">
                    <label for="code">Code</label>
                    <input type="number" name="code" class="form-control" id="code" placeholder="Enter code" required>
                </div>
                <div class="form-group">
                    <label for="operation-price">Operation price</label>
                    <input type="number" name="operation-price" class="form-control" id="operation-price" placeholder="Enter operation price" required>
                </div>
                <div class="form-group">
                    <label for="rehabilitation-day-price">Rehabilitation day price</label>
                    <input type="number" name="rehabilitation-day-price" class="form-control" id="rehabilitation-day-price" placeholder="Enter rehabilitation day price" required>
                </div>
                @if($errors->any())
                    {!! implode('', $errors->all('<div class="error card">:message</div>')) !!}
                @endif
                @if(Session::get('success'))
                    <div class="success card">
                        Added successfully
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

