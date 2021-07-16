<div class="card card-profile">
    <div class="card-avatar">
        <img class="img" src="{{asset('storage/avatars/'.\Illuminate\Support\Facades\Auth::user()->avatar)}}"/>
    </div>
    <div class="card-body">
        <h4 class="card-title">{{\Illuminate\Support\Facades\Auth::user()->name}}</h4>
        <div class="card-description">
            <h6 class="text-right">پست الکترونیک</h6>
            <h5>{{\Illuminate\Support\Facades\Auth::user()->email}}</h5>
            <h6 class="text-right">شماره تلفن</h6>
            <h5>{{\Illuminate\Support\Facades\Auth::user()->phone}}</h5>
            <h6 class="text-right">آدرس</h6>
            <h5>{{\Illuminate\Support\Facades\Auth::user()->address?:'تعیین نشده'}}</h5>
            <h6 class="text-right">کد پستی</h6>
            <h5>{{\Illuminate\Support\Facades\Auth::user()->zipCode?:'تعیین نشده'}}</h5>
            <h6 class="text-right">شماره کارت</h6>
            <h5>{{\Illuminate\Support\Facades\Auth::user()->CC?:'تعیین نشده'}}</h5>
        </div>
        <a href="/edit" class="btn btn-primary btn-round">ویرایش پروفایل</a>
    </div>
</div>
