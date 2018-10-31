@extends('dashboard::layouts.master')

@section('content')

@if(request()->is("*admin*"))
    @include('dashboard::content.dash')
@else
    @include('dashboard::content.portal')
@endif

@endsection
