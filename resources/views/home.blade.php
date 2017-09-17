@extends('layouts.app')

@section('content')
    <p>Dashboard</p>
    @if (session('status'))
        <p> {{ session('status') }} </p>
    @endif
    <p> You are logged in! </p>
@endsection
