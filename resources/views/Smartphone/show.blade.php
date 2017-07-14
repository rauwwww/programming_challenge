@extends('adminlte::page')

@section('title', 'Overview')
@section('content_header')
    <h1>Smartphone</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2></h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('Smartphone.index') }}"> Back</a>
            </div>
        </div>
    </div>


<div class="col-xs-6">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2>{{ $smartPhones->manufacturer}}</h2>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-8">
                <div class="well-lg">
                    <div class="row">
                        <div class="col-sm-12 col-md-4">
                            <img src="http://placehold.it/380x500" alt="" class="img-rounded img-responsive" />
                        </div>
                        <div class="col-sm-12 col-md-8">
                            <br>
                            <h4><strong>Model:</strong> {{ $smartPhones->modelname}}</h4>
                            <h4><strong>Barcode:</strong> {{ $smartPhones->barcode}}</h4>
                            <h4><strong>Price:</strong> {{ $smartPhones->price}}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop

@section('css')
    <link href="{{ asset('/css/custom.css') }}" rel="stylesheet">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop