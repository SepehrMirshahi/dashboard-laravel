@extends('dashboard.layout')
@section('title')
    ویزایش اطلاعات
@endsection
@section('content')
    <form enctype="multipart/form-data" method="post" action="{{url('/user/edit')}}">
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
            <label for="phone" class="text-right">تلفن همراه</label>
            <input type="tel" id="phone" name="phone" class="form-control">
        </div>
        <div class="form-group">
            <label for="address" class="text-right">آدرس</label>
            <input type="text" id="address" name="address" class="form-control">
        </div>
        <div class="form-group">
            <label for="zipCode" class="text-right">کد پستی</label>
            <input type="number" id="zipCode" name="zipCode" class="form-control">
        </div>
        <div class="form-group">
            <label for="CC" class="text-right">شماره کارت</label>
            <input type="number" id="CC" name="CC" class="form-control">
        </div>
        <div>
            <button type="submit" class="btn btn-primary btn-lg">ویرایش اطلاعات</button>
        </div>
    </form>
@endsection
