<div class="left side-menu">
    <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
        <i class="ion-close"></i>
    </button>

    <div class="left-side-logo d-block d-lg-none">
        <div class="text-center">
            
            <a href="" class="logo"><img src="{{ asset('assets/images/logo_big.png') }}" height="20" alt="logo"></a>
        </div>
    </div>

    <div class="sidebar-inner slimscrollleft">
        
        <div id="sidebar-menu">
            <ul>
                <li class="menu-title"><b>{{ Auth::user()->name}}</b>
                    
                </li>

                <li>
                    <a href="{{ url('admin/dashboard')}}" class="waves-effect">
                        <i class="dripicons-meter"></i>
                        <span> Dashboard </span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('admin/users')}}" class="waves-effect">
                        <i class="dripicons-user"></i>
                        <span> Users </span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('admin/genealogy-tree')}}" class="waves-effect">
                    <i class="dripicons-preview"></i>
                        <span> Genealogy Tree </span>
                    </a>
                </li>
                
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-broadcast"></i> <span> Fund Management </span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ url('admin/funds') }}">Manage Fund</a></li>
                        <li><a href="{{ url('admin/funds/transfer') }}">Transfer</a></li>
                        <li><a href="{{ url('admin/funds/transfer-report') }}">All transaction</a></li>
                        <li><a href="{{ url('admin/funds/income-report') }}">All Income</a></li>
                    </ul>
                </li>

                
            </ul>
        </div>
        <div class="clearfix"></div>
    </div> <!-- end sidebarinner -->
</div>