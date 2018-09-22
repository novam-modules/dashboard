@extends('dashboard::layouts.master')

@section('content')

    <div class="my-3 py-3">
        <div class="row">
            @foreach (range(1, 10) as $item)
            <div class="col-md-4 col-lg-3">
                <div class="box">
                    <a href="#" class="icon btn btn-outline-primary">
                        <i class="material-icons md-48">watch_later</i>
                    </a>
                    <div class="content">
                        <h4 class="title">Time Sheet</h4>
                        <hr class="my-2">
                        <a href="/" class="">Clock In</a>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
@stop
