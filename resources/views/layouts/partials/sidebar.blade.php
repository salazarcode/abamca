<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{asset('/img/blue-user-icon.png')}}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif


        <!-- Sidebar Menu -->
        <br>
        <br>
        <br>
        <ul class="sidebar-menu">
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ url('home') }}"><i class='glyphicon glyphicon-tree-conifer'></i> <span>Inicio</span></a></li>

            @if(Auth::user()->hasRole('User'))
            <li><a href="{{url('/remitentes')}}"><i class='glyphicon glyphicon-home'></i> <span>Remitentes</span></a></li>
            @endif


            @if(Auth::user()->hasRole('User'))
            <li><a href="{{url('/destinatarios')}}"><i class='glyphicon glyphicon-flag'></i> <span>Destinatarios</span></a></li>
            @endif


            @if(Auth::user()->hasRole('User'))
            <li><a href="{{url('/envios')}}"><i class='glyphicon glyphicon-envelope'></i> <span>Envíos</span></a></li>
            @endif


            @if(Auth::user()->hasRole('Admin'))
            <li><a href="{{url('/todos-los-envios')}}"><i class='glyphicon glyphicon-globe'></i> <span>Todos los envíos</span></a></li>
            @endif


            @if(Auth::user()->hasRole('SuperAdmin'))
            <li><a href="{{url('/estados')}}"><i class='glyphicon glyphicon-pushpin'></i> <span>Estados</span></a></li>
            @endif


            @if(Auth::user()->hasRole('Admin'))
            <li><a href="{{url('/usuarios')}}"><i class='glyphicon glyphicon-user'></i> <span>Usuarios</span></a></li>
            @endif
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
