@extends('dashboard::layouts.master')

@section('content')

@if(request()->is("*admin*") && auth()->user()->can('view-dashboard'))
    @include('dashboard::content.dash')
@else
    @include('dashboard::content.portal')
@endif

@endsection
