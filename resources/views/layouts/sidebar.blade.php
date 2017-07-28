 <div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <div class="user-details">
            <div class="pull-left">
                <img src="{{asset('images/users/avatar-1.jpg')}}" alt="" class="thumb-md img-circle">
            </div>
            <div class="user-info">
                <div class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">John Doe <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="javascript:void(0)"><i class="md md-face-unlock"></i> Profile<div class="ripple-wrapper"></div></a></li>
                        <li><a href="javascript:void(0)"><i class="md md-settings"></i> Settings</a></li>
                        <li><a href="javascript:void(0)"><i class="md md-lock"></i> Lock screen</a></li>
                        <li><a href="javascript:void(0)"><i class="md md-settings-power"></i> Logout</a></li>
                    </ul>
                </div>

                <p class="text-muted m-0">Administrator</p>
            </div>
        </div>
        <!--- Divider -->
        <div id="sidebar-menu">
            <ul>
                <li>
                    <a href="{{url('home')}}" class="waves-effect active"><i class="md md-home"></i><span> Dashboard </span></a>
                </li>

                <li class="has_sub">
                    <a href="#" class="waves-effect"><i class="md md-mail"></i><span> Users </span><span class="pull-right"></a>

                </li>

                <li>
                    <a href="{{ url('daily') }}" class="waves-effect"><i class="md md-event"></i><span> Daily's </span></a>
                </li>

                <li class="has_sub">
                    <a href="{{ url('acount') }}" class="waves-effect"><i class="md md-palette"></i> <span> Accounts </span> <span class="pull-right"></span></a>

                </li>

            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
