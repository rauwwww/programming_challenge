@extends('adminlte::page')

@section('title', 'Create')
@section('content_header')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Smartphone</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('Smartphone.index') }}"> Back</a>
            </div>
        </div>
    </div>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {!! Form::open(array('route' => 'Smartphone.store','method'=>'POST')) !!}
    @include('SmartPhone.form')
    {!! Form::close() !!}
@endsection