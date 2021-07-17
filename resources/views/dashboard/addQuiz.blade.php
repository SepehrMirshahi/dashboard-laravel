@extends('dashboard.layout')
@section('title')
    افزودن آزمون
@endsection
@section('content')
    <form enctype="multipart/form-data" method="post" action="{{url('/quiz/add')}}">
        @csrf
        <div class="form-group">
            <label for="name" class="text-right">نام آزمون</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="mark" class="text-right">نمره</label>
            <input type="text" id="mark" name="mark" class="form-control" required>
        </div>
        <div>
            <button type="submit" class="btn btn-primary btn-lg">افزودن</button>
        </div>
    </form>
@endsection
@section('rightCard')
    @include('dashboard.card')
@endsection
