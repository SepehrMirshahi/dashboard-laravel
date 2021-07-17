<div class="sidebar" data-color="purple" data-background-color="black">
    <!--
    Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

    Tip 2: you can also add an image using data-image tag
-->
    <div class="logo">
        <span class="simple-text logo-normal">
            Sample Project
        </span>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item active  ">
                <a class="nav-link" href="{{url('/')}}">
                    <i class="material-icons">dashboard</i>
                    <span>داشبورد</span>
                </a>
            </li>
            <li class="nav-item active  ">
                <a class="nav-link" href="{{url('/edit')}}">
                    <i class="material-icons">edit</i>
                    <span>ویرایش اطلاعات</span>
                </a>
            </li>
            <li class="nav-item active  ">
                <a class="nav-link" href="{{url('/quiz')}}">
                    <i class="material-icons">quiz</i>
                    <span>آزمون های شما</span>
                </a>
            </li>
            <li class="nav-item active  ">
                <a class="nav-link" href="javascript:void(0)">
                    <i class="material-icons">assignment</i>
                    <span>رزومه شما</span>
                </a>
            </li>
            <li class="nav-item active  ">
                <a class="nav-link" href="{{url('/movie')}}">
                    <i class="material-icons">video_library</i>
                    <span>ویدئو های شما</span>
                </a>
            </li>
            <li class="nav-item active  ">
                <a class="nav-link" href="/logout">
                    <i class="material-icons">logout</i>
                    <span>خروج از حساب</span>
                </a>
            </li>
            <!-- your sidebar here -->
        </ul>
    </div>
</div>
