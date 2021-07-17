@extends('layout')
@section('side')
    @include('side')
@endsection
@section('main')
    <div class="col-md-8">
        @if($errors->any())
            <div class="alert alert-danger alert-important">
                <ul>
                    {!! implode('</li><li>',$errors->all()) !!}
                </ul>
            </div>
        @endif
        @yield('content')
    </div>
    <div class="col-md-4">
        @yield('rightCard')
    </div>
@endsection
