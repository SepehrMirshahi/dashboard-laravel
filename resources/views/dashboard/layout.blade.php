@extends('layout')
@section('side')
    @include('side')
@endsection
@section('main')
    <div class="col-md-8">
        @yield('content')
    </div>
    <div class="col-md-4">
    <div class="card card-profile">
        <div class="card-avatar">
            <img class="img" src="../assets/img/faces/marc.jpg" />
        </div>
        <div class="card-body">
            <h6 class="card-category">CEO / Co-Founder</h6>
            <h4 class="card-title">Alec Thompson</h4>
            <p class="card-description">
                Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
            </p>
            <a href="#pablo" class="btn btn-primary btn-round">Follow</a>
        </div>
    </div>
</div>
@endsection
