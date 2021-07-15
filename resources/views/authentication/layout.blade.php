@extends('layout')
@section('main')
    <div class="col-md-8">
        <div class="card card-profile">
            <div class="card-body">
                @yield('content')
            </div>
        </div>
    </div>
@endsection
