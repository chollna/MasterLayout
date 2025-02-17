@extends('layouts.master')

@section('title', 'Home Page')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
@endsection

@section('content')
    <h2>Welcome to the Home Page</h2>
    <p>This is the main content of the home page.</p>
@endsection

@section('scripts')
    <script src="{{ asset('js/custom.js') }}"></script>
@endsection
