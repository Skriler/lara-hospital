@extends('layouts.main-layout')

@section('title', ucfirst($title) . ' list')

@section('content')
    @include('includes.main-navbar')

    <div class="container-fluid">
        <div class="table-wrapper">
            <div class="row table-responsive table-bordered table-striped">
                <h1>{{ucfirst($title)}}</h1>
                <table class="table table-light">
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
                    {{ $data->appends($params)->links("pagination::bootstrap-4") }}
                </div>
            </div>
        </div>

        <div class="card-form">
            <h1>Parameters</h1>
            <form method="POST" action="{{route('user-side.list.sorted-table', ['table' => $title])}}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="order-by-field">Order By</label>
                    <select name="order-by-field" class="form-control" id="order-by-field" required>
                        @foreach($data_fields as $field)
                            <option {{ $field == $params['order_by_field'] ? "selected" : "" }}>
                                {{ucfirst($field)}}
                            </option>
                        @endforeach
                    </select>
                </div>
                @if($title === 'surgeons')
                    @include('includes.surgeon-filters', $params)
                @elseif($title === 'tariffs')
                    @include('includes.tariff-filters')
                @elseif($title === 'patients')
                    @include('includes.patients-filters', [
                        'surgeons'  => \App\Models\Surgeon::all(),
                        'tariffs'   => \App\Models\Tariff::all()
                        ])
                @endif
                <div class="button-wrapper">
                    <input type="submit" class="btn btn-dark form-btn" value="Submit">
                </div>
            </form>
        </div>
    </div>

@endsection

