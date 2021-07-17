@extends('dashboard.layout')
@section('title')
    ویدئو ها
@endsection
@section('content')
    @if($movies->count() > 0)
        <table class="table table-hover text-right">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">نام ویدئو</th>
                <th scope="col">دانلود</th>
            </tr>
            </thead>
            <tbody>
            <?php $i=1?>
            @foreach($movies as $movie)
                <tr>
                    <td>{{$i}}</td>
                    <td>{{$movie->name}}</td>
                    <td>
                        <a href="{{asset('storage/videos/'.$movie->address)}}" class="btn btn-sm btn-secondary">
                            <i class="material-icons">file_download</i>
                        </a>
                    </td>
                    <?php $i++?>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <div class="alert alert-warning">
            <h4 class="text-center">تا کنون ویدئویی آپلود نشده است</h4>
        </div>
    @endif
    <a class="btn btn-lg btn-primary" href="{{url('movie/add')}}">افزودن ویدئو</a>
@endsection
@section('rightCard')
    @include('dashboard.card')
@endsection
