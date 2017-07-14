@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Here i imagine addding stuff, like topsellers, just sold, employees etc.
    </p>  <table class="table table-striped">
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
        </tr>
        </thead>
        @if($users)
            <tbody>

            @foreach ($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                </tr>
            @endforeach

            </tbody>
        @endif

    </table>
    </br>


@stop

@section('css')
    <link href="{{ asset('/css/custom.css') }}" rel="stylesheet">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop