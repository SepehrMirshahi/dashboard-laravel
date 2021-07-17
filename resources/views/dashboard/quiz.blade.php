@extends('dashboard.layout')
@section('title')
    داشبورد
@endsection
@section('content')
    <table class="table table-hover text-right">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">نام آزمون</th>
            <th scope="col">نمره</th>
        </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
    <button class="btn btn-lg btn-primary">افزودن نمره</button>
@endsection
@section('rightCard')
    @include('dashboard.card')
@endsection
