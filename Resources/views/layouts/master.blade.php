@extends('layouts.master')
@section('styles')
@parent
<link rel="stylesheet" href="{{ mix('css/dashboard.css') }}">
@endsection
@section('layout')
    <main id="dashboard">
        @yield('content')
    </main>
@endsection
@section('scripts')
@parent
<script src="{{ mix('js/dashboard.js') }}"></script>
@endsection
