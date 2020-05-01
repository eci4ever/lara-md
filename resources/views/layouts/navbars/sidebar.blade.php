<div class="sidebar" data-color="azure" data-background-color="white"
    data-image="{{ asset('material') }}/img/sidebar-1.jpg">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo">
        <a href="#" class="simple-text logo-normal">
            {{ __('Laravel MD') }}
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('home') }}">
                    <i class="material-icons">dashboard</i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li>
            <li
                class="nav-item {{ ($activePage == 'user' || $activePage == 'role' || $activePage == 'permission') ? ' active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
                    <i class="material-icons">account_box</i>
                    <p>{{ __('User management') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse show" id="laravelExample">
                    <ul class="nav">
                        <li class="nav-item{{ $activePage == 'user' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('user.index') }}">
                                <span class="sidebar-mini"> US </span>
                                <span class="sidebar-normal"> {{ __('User') }} </span>
                            </a>
                        </li>
                        <li class="nav-item{{ $activePage == 'role' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('role.index') }}">
                                <span class="sidebar-mini"> RL </span>
                                <span class="sidebar-normal"> {{ __('Role') }} </span>
                            </a>
                        </li>
                        <li class="nav-item{{ $activePage == 'permission' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('permission.index') }}">
                                <span class="sidebar-mini"> PM </span>
                                <span class="sidebar-normal"> {{ __('Permission') }} </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item{{ $activePage == 'table' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('table') }}">
                    <i class="material-icons">content_paste</i>
                    <p>{{ __('Table List') }}</p>
                </a>
            </li>
        </ul>
    </div>
</div>
