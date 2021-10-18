@extends('layouts.main-layout')

@section('title', $title . ' list')

@section('content')
    @include('includes.main-navbar')

    <div class="container-fluid">
        <div class="table-wrapper">
            <div class="row table-responsive table-bordered table-striped">
                <h1>{{$title}}</h1>
                <table class="table table-dark">
                    <thead>
                    <tr>
                        @foreach($data_fields as $field)
                            <th class="col-sm-1" scope="col">{{ucfirst($field)}}</th>
                        @endforeach
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $obj)
                        <tr>
                            @foreach($data_fields as $field)
                                <th class="col-sm-1" data-sortable="true">{{$obj[$field]}}</th>
                            @endforeach
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                <div class="pagination">
                    {{$data->links("pagination::bootstrap-4")}}
                </div>
            </div>
        </div>
    </div>

@endsection

