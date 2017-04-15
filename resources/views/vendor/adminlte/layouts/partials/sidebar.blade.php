<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ Gravatar::get($user->email) }}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif

        <!-- Sidebar Menu -->
        @if(Auth::user()->privilegios->contains(1))
        <ul class="sidebar-menu">
            <li class="header">ADMINISTRADOR</li>
            <li id="cargos">
                <a href=""><i class='fa fa-cube'></i> <span>Cargos</span></a>
            </li>
            <li id="empleados">
                <a href=""><i class='fa fa-user'></i> <span>Empleados</span></a>
            </li>
            <li id="usuarios">
                <a href=""><i class='fa fa-user-plus'></i> <span>Usuarios</span></a>
            </li>
        </ul><!-- /.sidebar-menu -->
        @endif

        @if(Auth::user()->privilegios->contains(2))
        <ul class="sidebar-menu">
            <li class="header">USUARIO</li>
        </ul><!-- /.sidebar-menu -->
        @endif

        @if(Auth::user()->privilegios->contains(3))
        <ul class="sidebar-menu">
            <li class="header">REPORTES</li>
        </ul><!-- /.sidebar-menu -->
        @endif
    </section>
    <!-- /.sidebar -->
</aside>
