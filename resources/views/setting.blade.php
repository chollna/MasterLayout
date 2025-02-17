@extends('layouts.master') <!-- Extend the master layout -->

@section('title', 'Dashboard') <!-- Page title -->

@section('content')
@section('page_title')
    <div class="container mt-5">
        <h2>Welcome to the Dashboard</h2>
        <p>this is user content</p>

        <p>A background image for a p element:</p>

<p style="background-image: url('data:image/png;base64,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');">
You can specify background images<br>
for any visible HTML element.<br>
In this example, the background image<br>
is specified for a p element.<br>
By default, the background-image<br>
will repeat itself in the direction(s)<br>
where it is smaller than the element<br>
where it is specified. (Try resizing the<br>
browser window to see how the<br>
background image behaves.
</p>
    </div>
@endsection

@section('scripts')
    <script>
        console.log('Dashboard page loaded.');
    </script>
@endsection
