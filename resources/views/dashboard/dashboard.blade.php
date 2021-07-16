@if(!isset(\Illuminate\Support\Facades\Auth::user()->name))
    <script>window.location = "/login";</script>
@else
@extends('dashboard.layout')
@section('title')
    داشبورد
@endsection
@section('content')
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">play_circle_outline</i>
                    </div>
                    <p class="card-category">ویدئو های آپلود شده</p>
                    <h3 class="card-title">
                        //number
                    </h3>
                    <small>ویدئو</small>
                </div>
                <div class="card-footer">
                    <div class="stats">

                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">article</i>
                    </div>
                    <p class="card-category">آزمون ها</p>
                    <h3 class="card-title">//number</h3>
                    <small>آزمون</small>
                </div>
                <div class="card-footer">
                    <div class="stats">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('rightCard')
    @include('dashboard.card')
@endsection
@endif
