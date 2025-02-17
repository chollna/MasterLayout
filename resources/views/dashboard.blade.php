@extends('layouts.master') <!-- Extend the master layout -->

@section('title', 'Dashboard') <!-- Page title -->

@section('content')
    <div class="container mt-5">
        <h2>Welcome to the Dashboard</h2>
        <p>This is the main content area for the dashboard.</p>
    </div>
@endsection

@section('scripts')
    <script>
        console.log('Dashboard page loaded.');
    </script>
@endsection
