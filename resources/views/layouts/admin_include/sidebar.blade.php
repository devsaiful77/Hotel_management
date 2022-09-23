<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <div class="user-details">
            <div class="pull-left">
                @if (Auth::user()->photo == NULL)
                  <img src="{{asset('contents')}}/admin/assets/images/avatar-1.jpg" alt="user-img" class="thumb-md rounded-circle"> </a>
                @else
                  <img src="{{asset(Auth::user()->photo)}}" alt="user-img" class="thumb-md rounded-circle"> </a>
                @endif
            </div>
            <div class="user-info">
                <div class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="text-transform: capitalize;">
                        {{auth()->user()->name}}
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="{{url('dashboard/profile')}}" class="dropdown-item"><i class="md md-face-unlock mr-2"></i> Profile<div class="ripple-wrapper"></div></a></li>
                        <li><a href="{{url('admin/settings')}}" class="dropdown-item"><i class="md md-settings mr-2"></i> Settings</a></li>
                        <li><a href="javascript:void(0)" class="dropdown-item"><i class="md md-lock mr-2"></i> Lock screen</a></li>
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="dropdown-item"><i class="md md-settings-power mr-2"></i> Logout</a></li>
                    </ul>
                </div>
                <p class="text-muted m-0">{{'@ '.Auth::user()->userRole->role_name}}</p>
            </div>
        </div>
        <div id="sidebar-menu">
            <ul>
                <li><a href="{{url('dashboard')}}" class="waves-effect"><i class="fa fa-home"></i><span> Dashboard </span></a></li>
                @if(Auth::user()->role_id==1)

                    <li><a href="{{url('admin/client')}}" class="waves-effect"><i class="fa fa-users"></i><span> Clients </span></a></li>
                    <li><a href="{{url('admin/package')}}" class="waves-effect"><i class="fa fa-gift"></i><span> Packages </span></a></li>
                    <li><a href="#" class="waves-effect"><i class="fa fa-user"></i><span> Customer </span></a></li>
                    @endif

                    @if(Auth::user()->role_id <= 3) <li><a href="{{url('admin/restaurant')}}" class="waves-effect"><i class="fa fa-cutlery"></i><span> Restaurants </span></a></li>
                            @endif
                            @if(Auth::user()->role_id == 2 || Auth::user()->role_id == 3)
                                <li class="has_sub">
                                    <a href="#" class="waves-effect"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span> Order </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                    <ul class="list-unstyled">
                                        @if(Auth::user()->role_id == 3)
                                            <li><a href="{{ url('admin/create-order') }}">Create Order</a></li>
                                            @endif
                                            <li><a href="{{ url('admin/order-request') }}">Order Request</a></li>
                                            {{-- <li><a href="{{ url('admin/confirmed-order') }}">Confirm Order</a>
                                </li> --}}
                                <li><a href="{{url('admin/order-serve')}}">Serve Order</a></li>
                                @if(Auth::user()->role_id == 3)
                                    <li><a href="{{url('admin/bill')}}" class="waves-effect"> Bill </a></li>
                                    @endif
                                    <li><a href="{{ url('admin/delivered-order') }}">Delivered Order</a></li>
                                    <li><a href="{{ url('admin/cancelled-order') }}">Cancelled Order</a></li>

            </ul>
            </li>
            @endif

            @if(Auth::user()->role_id == 2 || Auth::user()->role_id == 3)
                <li class="has_sub">
                    <a href="#" class="waves-effect"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span> Stock Product </span><span class="pull-right"><i class="md md-add"></i></span></a>
                    <ul class="list-unstyled">
                        <li class="nav-item"><a href="{{ route('category.add') }}" class="nav-link">Add Category</a></li>
                        <li class="nav-item"><a href="{{ route('brand.add') }}" class="nav-link">Add Brand</a></li>
                        <li class="nav-item"><a href="{{ route('size.add') }}" class="nav-link">Add Size</a></li>
                    </ul>
                </li>
                @endif

                @if(Auth::user()->role_id == 4)
                    <li id="request"><a href="{{url('admin/order-request')}}" class="waves-effect"><i class="fa fa-shopping-cart"></i><span> Order </span>
                            <order-request :userid="{{ Auth::user()->id }}" :unreads="{{ auth()->user()->unreadNotifications }}"></order-request>
                            <audio id="orderRequestNoty" muted>
                                <source src="{{ asset('sounds/orderRequest/orderRequest.mp3') }}">
                                <source src="{{ asset('sounds/orderRequest/orderRequest.ogg') }}">
                                <source src="{{ asset('sounds/orderRequest/orderRequest.m4r') }}">
                            </audio>
                        </a></li>

                    <li id="request"><a href="{{url('admin/order-serve')}}" class="waves-effect"><i class="fa fa-beer" aria-hidden="true"></i><span> Serve </span>
                            <serve-request :userid="{{ Auth::user()->id }}" :unreads="{{ auth()->user()->unreadNotifications }}"></serve-request>
                            <audio id="serveRequestNoty" muted>
                                <source src="{{ asset('sounds/serveRequest/serveRequest.mp3') }}">
                                <source src="{{ asset('sounds/serveRequest/serveRequest.ogg') }}">
                                <source src="{{ asset('sounds/serveRequest/serveRequest.m4r') }}">
                            </audio>
                        </a></li>
                    @endif
                    @if(Auth::user()->role_id == 5)
                        <li><a href="{{ url('admin/confirmed-order') }}" class="waves-effect"><i class="fa fa-shopping-cart"></i><span> Order </span>
                                <confirm-request :userid="{{ Auth::user()->id }}" :unreads="{{ auth()->user()->unreadNotifications }}"></confirm-request>
                                <audio id="confirmRequestNoty" muted>
                                    <source src="{{ asset('sounds/confirmOrder/confirmOrder.mp3') }}">
                                    <source src="{{ asset('sounds/confirmOrder/confirmOrder.ogg') }}">
                                    <source src="{{ asset('sounds/confirmOrder/confirmOrder.m4r') }}">
                                </audio>
                            </a></li>
                        @endif
                        @if(Auth::user()->role_id == 2)
                            <li><a href="{{url('admin/statistics')}}" class="waves-effect"><i class="fa fa-bar-chart" aria-hidden="true"></i><span> Statistics</span></a></li>
                            @endif
                            @if(Auth::user()->role_id == 3)
                                <li><a href="{{url('admin/incomes')}}" class="waves-effect"><i class="fa fa-plus-square" aria-hidden="true"></i><span> Income</span></a></li>
                                <li><a href="{{url('admin/expense')}}" class="waves-effect"><i class="fa fa-minus-square" aria-hidden="true"></i><span> Expense</span></a></li>
                                <!-- <li><a href="" class="waves-effect"><i class="fa fa-clock-o" aria-hidden="true"></i><span> Total Balance</span></a></li> -->
                                @endif

                                @if(Auth::user()->role_id == 3 || Auth::user()->role_id == 2)
                                    <li><a href="{{url('admin/report')}}" class="waves-effect"><i class="fa fa-file-text-o" aria-hidden="true"></i><span> Report </span></a></li>
                                    @endif
                                    {{-- @if(Auth::user()->role_id<=4)
                    <li class="has_sub">
                        <a href="#" class="waves-effect"><i class="fa fa-cog"></i><span> Manage </span><span class="pull-right"><i class="md md-add"></i></span></a>
                        <ul class="list-unstyled">
                            <li><a href="#">Basic Information</a></li>
                            <li><a href="#">Social Media</a></li>
                            <li><a href="#">Contact Information</a></li>
                        </ul>
                    </li>
                @endif
                <li><a href="{{url('dashboard/recycle')}}" class="waves-effect"><i class="fa fa-trash"></i><span>Recycle Bin </span></a></li> --}}
                                    {{-- <li><a href="{{url('admin/settings')}}" class="waves-effect"><i class="fa fa-cog" aria-hidden="true"></i><span> Settings </span></a></li> --}}
                                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="waves-effect"><i class="fa fa-power-off"></i><span> Logout</span></a></li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    </ul>
                                    <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
