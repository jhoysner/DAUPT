 <div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <div class="user-details">
            <div class="pull-left">
                <img src="{{asset('images/users/avatar-1.jpg')}}" alt="" class="thumb-md img-circle">
            </div>
            <div class="user-info">
                <div class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">{{Auth::user()->name}}<span class="caret"></span></a>
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
                    <a href="{{ url('user') }}" class="waves-effect"><i class="md md-account-box"></i><span> Usuarios </span><span class="pull-right"></a>

                </li>

                <li>
                    <a href="{{ url('aula') }}" class="waves-effect"><i class="md md-event"></i><span> Aulas </span></a>
                </li>
                <li>
                    <a href="{{ url('materia') }}" class="waves-effect"><i class="md md-book"></i><span> Materias </span></a>
                </li>
                <li class="has_sub">
                    <a href="{{ url('equipo') }}" class="waves-effect"><i class="md md-folder-shared"></i> <span> Equipos </span> <span class="pull-right"></span></a>

                </li>

            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
