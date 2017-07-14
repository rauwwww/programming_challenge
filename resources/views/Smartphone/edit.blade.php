@extends('adminlte::page')

@section('title', 'Edit')
@section('content_header')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('Smartphone.index') }}"> Back</a>
            </div>
        </div>
    </div>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Looks like you didn't fill some fields correctly.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {!! Form::model($smartPhones, ['method' => 'PATCH','route' => ['Smartphone.update', $smartPhones->id]]) !!}
    @include('smartphone.form')
    {!! Form::close() !!}
@endsection