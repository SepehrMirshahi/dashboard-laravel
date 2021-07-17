@extends('dashboard.layout')
@section('title')
افزودن ویدئو
@endsection
@section('content')
<form enctype="multipart/form-data" method="post" action="{{url('/movie/add')}}">
    @csrf
    <div class="form-group">
        <label for="name" class="text-right">نام ویدئو</label>
        <input type="text" id="name" name="name" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="movie" class="btn btn-secondary">آپلود ویدئو</label>
        <input type="file" id="movie" name="movie" class="form-control" required>
    </div>
    <div>
        <button type="submit" class="btn btn-primary btn-lg">افزودن</button>
    </div>
</form>
@endsection
@section('rightCard')
@include('dashboard.card')
@endsection
