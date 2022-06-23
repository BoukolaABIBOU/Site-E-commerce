<div class="top_nav">
    <div class="nav_menu">
        <nav>
            <div class="nav toggle" @click="toggleSideBar">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
                <li class="">
                    <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" data-toggle="dropdown" aria-expanded="false">
                        {{ \Illuminate\Support\Facades\Auth::user()->fullName() }}
                        <span class=" fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu  pull-right">
                        <li><a href="{{ url('/') }}"><i class="fa fa-browser pull-right"></i>Site</a></li>
                        <li><a href="{{ url('logout') }}"><i class="fa fa-sign-out pull-right"></i> Déconnexion</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>