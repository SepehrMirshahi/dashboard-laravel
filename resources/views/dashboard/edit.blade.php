@extends('dashboard.layout')
@section('title')
    ویرایش اطلاعات
@endsection
@section('content')
    <form enctype="multipart/form-data" method="post" action="{{url('/user/edit')}}">
        @csrf
        <div class="form-group">
            <label for="name" class="text-right">نام و نام خانوادگی</label>
            <input type="text" id="name" name="name" class="form-control" value="{{\Illuminate\Support\Facades\Auth::user()->name}}" required>
        </div>
        <div class="form-group">
            <label for="email" class="text-right">پست الکترونیک</label>
            <input type="email" id="email" name="email" class="form-control" value="{{\Illuminate\Support\Facades\Auth::user()->email}}" required>
        </div>
        <div class="form-group">
            <label for="phone" class="text-right">تلفن همراه</label>
            <input type="tel" id="phone" name="phone" class="form-control" value="{{\Illuminate\Support\Facades\Auth::user()->phone}}" required>
        </div>
        <div class="form-group">
            <label for="address" class="text-right">آدرس</label>
            <input type="text" id="address" name="address" class="form-control" value="{{\Illuminate\Support\Facades\Auth::user()->address?:''}}">
        </div>
        <div class="form-group">
            <label for="zipCode" class="text-right">کد پستی</label>
            <input type="text" id="zipCode" name="zipCode" class="form-control" value="{{\Illuminate\Support\Facades\Auth::user()->zipCode?:''}}">
        </div>
        <div class="form-group">
            <label for="CC" class="text-right">شماره کارت</label>
            <input type="text" id="CC" name="CC" class="form-control" value="{{\Illuminate\Support\Facades\Auth::user()->CC?:''}}">
        </div>
        <div class="form-group">
            <label for="avatar" class="float-right"><a class="btn btn-outline-primary text-dark"> آپلود تصویر پروفایل</a></label>
            <input type="file" src="" onchange="evt()" id="avatar" name="avatar" >
        </div>
        <div>
            <button type="submit" class="btn btn-primary btn-lg">ویرایش اطلاعات</button>
        </div>
    </form>
    <script>
        function evt(){
            const [file] = document.getElementById('avatar').files
            if (file) {
                document.getElementById('uploaded').src = URL.createObjectURL(file)
            }
        }
    </script>
@endsection
@section('rightCard')
    <div class="card-avatar">
        <img id="uploaded" class="img-thumbnail" src="{{asset("storage/avatars/".\Illuminate\Support\Facades\Auth::user()->avatar?:'NoPhoto.png')}}"/>
    </div>
@endsection
