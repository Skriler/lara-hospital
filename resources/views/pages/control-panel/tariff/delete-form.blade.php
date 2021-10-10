@extends('layouts.main-layout')

@section('title', 'Delete tariff page')

@section('content')
    @include('includes.control-navbar')

    <div class="container">
        <div class="card-form">
        <h1>Delete Tariff</h1>
            <form>
                <div class="form-group">
                    <label for="tariff">Tariff</label>
                    <select class="form-control" id="tariff">
                        @foreach($tariffs as $tariff)
                            <option>{{$tariff->title}}</option>
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

