@extends('layouts.app')

@section('title', 'Dashboard')
@section('content')
    <div class="container">
        <h1 class="display-5 mt-4 mb-4">@yield('title')</h1>

        <p>You are logged in!</p>
    </div>
@endsection
