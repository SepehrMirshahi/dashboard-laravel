@extends('dashboard.layout')
@section('content')
    <h3 class="text-right">رزومه</h3>
    <div class="text-light">
        @if($resume)
            {!! $resume !!}
        @else
            <div class="alert-warning text-center alert">تا کنون رزومه ای ثبت نشده است</div>
        @endif
    </div>
    <a class="btn-lg btn btn-primary" href="{{url('/resume/edit')}}">ویرایش رزومه</a>
@endsection
@section('title')
    رزومه
@endsection
@section('rightCard')
    @include('dashboard.card')
@endsection
