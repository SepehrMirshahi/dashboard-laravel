@extends('dashboard.layout')
@section('title')
    آزمون ها
@endsection
@section('content')
    @if($quizzes->count() > 0)
        <table class="table table-hover text-right">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">نام آزمون</th>
                <th scope="col">نمره</th>
            </tr>
            </thead>
            <tbody>
            <?php $i=1?>
            @foreach($quizzes as $quiz)
                <tr>
                    <td>{{$i}}</td>
                    <td>{{$quiz->name}}</td>
                    <td>{{$quiz->mark}}</td>
                    <?php $i++?>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <div class="alert alert-warning">
            <h4 class="text-center">تا کنون آزمونی ثبت نشده است</h4>
        </div>
    @endif
    <a class="btn btn-lg btn-primary" href="{{url('quiz/add')}}">افزودن آزمون</a>
@endsection
@section('rightCard')
    @include('dashboard.card')
@endsection
