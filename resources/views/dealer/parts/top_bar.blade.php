<div class="topbar">

    <div class="topbar-left	d-none d-lg-block">
        <div class="text-center">
            
            <a href="" class="logo"><img src="{{ asset('assets/images/logo_big.png') }}" height="20" alt="logo"></a>
           
                <span class="btn btn-sm btn-info rounded-pill ">{{ Auth::user()->role }}</span>
            
        </div>
    </div>

    <nav class="navbar-custom">
    
        <ul class="list-inline float-right mb-0">
           
            <li class="list-inline-item notification-list dropdown d-none d-sm-inline-block">
                <form role="search" class="app-search">
                    <div class="form-group mb-0"> 
                        <a href="{{ url('dealer/users/join') }}" class="btn btn-success rounded-pill">New member registration</a>
                    </div>
                </form> 
            </li>
            
            <li class="list-inline-item dropdown notification-list">
            <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                    aria-haspopup="false" aria-expanded="false">
                    @if(file_exists( public_path().'/assets/images/users/'.Auth::user()->id.'.jpg' ))
                    <img src="{{ url('assets/images/users/'.Auth::user()->id.'.jpg?'.time())}}" class="rounded-circle">
                @else
                    <img src="{{ url('assets/images/users/default.png') }}" class="rounded-circle">
                @endif
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown ">
                    <a class="dropdown-item" href="{{url('/dealer/users/'.base64_encode(Auth::user()->id * Auth::user()->id).'/profile')}}"><i class="mdi mdi-account-circle m-r-5 text-muted"></i> Profile</a>
                   
                    <a class="dropdown-item" href="#"  onclick="event.preventDefault();
                                                     document.getElementById('logout_form').submit();"><i class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
                </div>
            </li>

        </ul>

        <ul class="list-inline menu-left mb-0">
            
            <li class="list-inline-item">
                <button type="button" class="button-menu-mobile open-left waves-effect">
                    <i class="ion-navicon"></i>
                </button>
            </li>
        </ul>

        <div class="clearfix"></div>

    </nav>
        <form id="logout_form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
</div>