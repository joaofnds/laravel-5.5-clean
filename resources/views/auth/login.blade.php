@extends('layouts.app')

@section('content')
    <v-layout>
        <v-flex xs8 offset-xs2 elevation-2 px-3 py-4>
            @foreach($errors->all() as $error)
                <v-alert error value="true">{{ $error }}</v-alert>
            @endforeach

            <app-login-form action="{{ route('login') }}" token="{{ csrf_token() }}"></app-login-form>
        </v-flex>
    </v-layout>
@endsection
