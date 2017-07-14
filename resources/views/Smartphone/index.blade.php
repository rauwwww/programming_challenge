@extends('adminlte::page')

@section('title', 'Overview')
@section('content_header')
    <h1>Overview</h1>

    @if ($message = Session::get('success'))
        <div class="alert alert-success success-box">
            <p>{{ $message }}</p>
        </div>
    @endif
@stop

@section('content')
    <div class="row">
        <table class="table table-striped table-hover table-responsive table-bordered table-condensed" id="smartphone-table">
            <thead>
            <div class="pull-right new-smartphone">
                <a class="btn btn-success " href="{{ route('Smartphone.create') }}"> Create New Smartphone</a>
            </div>
            <tr>
                <th>Modelname</th>
                <th>Manufacturer</th>
                <th>EAN</th>
                <th>DKR</th>
                <th>Actions</th>
            </tr>
            </thead>
            @if($smartPhones)
                <tbody>
                @foreach ($smartPhones as $smartPhone)
                    <tr>
                        <td>{{$smartPhone->modelname}}</td>
                        <td>{{$smartPhone->manufacturer}}</td>
                        <td>{{$smartPhone->barcode}}</td>
                        <td>{{$smartPhone->price}}</td>
                        <td>
                            <a class="btn btn-info" href="{{ route('Smartphone.show',$smartPhone->id) }}">Show</a>
                            <a class="btn btn-primary" href="{{ route('Smartphone.edit',$smartPhone->id) }}">Edit</a>
                            {!! Form::open(['method' => 'DELETE','route' => ['Smartphone.destroy', $smartPhone->id],'style'=>'display:inline']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </td>

                    </tr>
                @endforeach
                </tbody>
            @endif
        </table>
    </div>
@stop

@section('css')
    <link href="{{ asset('/css/custom.css') }}" rel="stylesheet">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop