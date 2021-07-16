@extends('layout')
@section('side')
    @include('side')
@endsection
@section('main')
    <div class="col-md-8">
        @yield('content')
    </div>
    <div class="col-md-4">
        @yield('rightCard')
    </div>
@endsection
