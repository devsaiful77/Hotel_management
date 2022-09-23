<div class="topbar">
    <div class="topbar-left">
        <div class="text-center">
            <a href="{{ route('admin.dashboard') }}" class="logo">
                <img src="{{asset('contents/admin/assets/images/logo.png')}}" alt="logo-img" style="height: 50px">
            </a>
        </div>
    </div>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <ul class="list-inline menu-left mb-0">
                <li class="float-left">
                    <a href="#" class="button-menu-mobile open-left">
                        <i class="fa fa-bars"></i>
                    </a>
                </li>
                <li class="hide-phone float-left">
                    <form role="search" class="navbar-form">
                        <input type="text" placeholder="Type here for search..." class="form-control search-bar">
                        <a href="#" class="btn btn-search"><i class="fa fa-search"></i></a>
                    </form>
                </li>
            </ul>
            <ul class="nav navbar-right float-right list-inline">
                <li class="d-none d-sm-block">
                    <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="md md-crop-free"></i></a>
                </li>
                <li class="dropdown open">
                    <a href="#" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true">
                      @if (Auth::user()->photo == NULL)
                        <img src="{{asset('contents')}}/admin/assets/images/avatar-1.jpg" alt="user-img" class="rounded-circle"> </a>
                      @else
                        <img src="{{asset(Auth::user()->photo)}}" alt="user-img" class="rounded-circle"> </a>
                      @endif

                    <ul class="dropdown-menu">
                        <li><a href="{{url('admin/settings')}}" class="dropdown-item"><i class="md md-settings-power mr-2"></i> Change Password</a></li>
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="dropdown-item"><i class="md md-settings-power mr-2"></i> Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</div>
