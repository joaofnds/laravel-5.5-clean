@extends('layouts.app')

@section('content')
    <v-layout>
        <v-flex xs8 offset-xs2 elevation-2 px-3 py-4>
            @foreach($errors->all() as $error)
                <v-alert error value="true">{{ $error }}</v-alert>
            @endforeach

            <app-register-form action="{{ route('register') }}" token="{{ csrf_token() }}"></app-register-form>
        </v-flex>
    </v-layout>
@endsection