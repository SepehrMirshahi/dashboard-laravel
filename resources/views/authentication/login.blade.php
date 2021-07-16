@extends('authentication.layout')
@section('title')
    ورود
@endsection
@section('content')
    @if($errors->any())
        <div class="alert alert-danger alert-important">
            <ul>
                {!! implode('</li><li>',$errors->all()) !!}
            </ul>
        </div>
    @endif
    <form enctype="multipart/form-data"  method="post" action="{{url('/user/auth')}}">
        @csrf
        <div class="form-group">
            <label for="email" class="text-right">پست الکترونیک</label>
            <input type="email" id="email" name="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="pass" class="text-right">رمز عبور</label>
            <input type="password" id="pass" name="password" class="form-control">
        </div>
        <p>عضو نیستید؟ <a href="/signup">ثبت نام کنید!</a></p>
        <div>
            <button type="submit" class="btn btn-primary btn-lg">ورود</button>
        </div>
    </form>
@endsection
