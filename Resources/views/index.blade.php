@extends('dashboard::layouts.master')
@section('content')
<div class="card-deck my-3">
    <div class="card col-md-6 col-lg-4">
        <div class="card-body">
             <div class="d-md-flex align-items-center justify-content-center">
                <a class="fa-stack fa-2x" href="/time-track">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fas fa-flag fa-stack-1x fa-inverse"></i>
                  </a>
                  <span class="h4 m-2">Time Sheet</span>
             </div>
        </div>
    </div>
    <div class="card col-md-6 col-lg-4">
        <div class="card-body">

        </div>
    </div>
    <div class="card col-md-6 col-lg-4">
        <div class="card-body">

        </div>
    </div>
    <div class="card col-md-6 col-lg-4">
        <div class="card-body">

        </div>
    </div>
</div>


@stop
