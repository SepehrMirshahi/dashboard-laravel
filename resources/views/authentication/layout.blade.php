@extends('layout')
@section('main')
    <div class="col-md-8">
        <div class="card card-profile">
            <div class="card-body">
                @if($errors->any())
                    <div class="alert alert-danger alert-important">
                        <ul>
                            {!! implode('</li><li>',$errors->all()) !!}
                        </ul>
                    </div>
                @endif
                @if(isset(\Illuminate\Support\Facades\Auth::user()->email))
                    <?php redirect('/') ?>
                @endif
                @yield('content')
            </div>
        </div>
    </div>
@endsection
