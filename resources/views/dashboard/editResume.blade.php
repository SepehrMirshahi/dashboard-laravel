@extends('dashboard.layout')
@section('content')
    <script src="https://cdn.tiny.cloud/1/xcy7xys9d9vz9jq4benlq7aa46ysypm3quile8nxhyh14m4h/tinymce/5/tinymce.min.js"
            referrerpolicy="origin"></script>
    <script>tinymce.init({selector: 'textarea'});</script>
    <h3 class="text-right">رزومه خود را ویرایش کنید! </h3>
    <form method="post" action="{{url('/resume')}}">
        @csrf
        <textarea name="resume">{!! \Illuminate\Support\Facades\Auth::user()->resume !!}</textarea>
        <button class="btn btn-primary btn-lg">ویرایش</button>
    </form>
@endsection
@section('title')
ویرایش رزومه
@endsection
@section('rightCard')
    @include('dashboard.card')
@endsection
