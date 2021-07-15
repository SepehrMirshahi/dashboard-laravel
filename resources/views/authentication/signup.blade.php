@extends('authentication.layout')
@section('content')
    @if($errors->any())
        <div class="alert alert-danger alert-important">
            <ul>
                {!! implode('</li><li>',$errors->all()) !!}
            </ul>
        </div>
    @endif
    <form enctype="multipart/form-data"  method="post" action="{{url('/user/add')}}">
        @csrf
        <div class="form-group">
            <label for="name" class="text-right">نام و نام خانوادگی</label>
            <input type="text" id="name" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="email" class="text-right">پست الکترونیک</label>
            <input type="email" id="email" name="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="pass" class="text-right">رمز عبور</label>
            <input type="password" id="pass" name="pass" class="form-control">
        </div>
        <div class="form-group">
            <label for="phone" class="text-right">تلفن همراه</label>
            <input type="tel" id="phone" name="phone" class="form-control">
        </div>
        <div>
            <button type="submit" class="btn btn-primary btn-lg">ثبت نام</button>
        </div>
    </form>
@endsection
