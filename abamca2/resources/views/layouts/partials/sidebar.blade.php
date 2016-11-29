<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{asset('/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image" />
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
            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-link'></i> <span>Inicio</span></a></li>

            @if(Auth::user()->hasRole('User'))
            <li><a href="{{url('/remitentes')}}">Remitentes</a></li>
            @endif


            @if(Auth::user()->hasRole('User'))
            <li><a href="{{url('/destinatarios')}}">Destinatarios</a></li>
            @endif


            @if(Auth::user()->hasRole('User'))
            <li><a href="{{url('/envios')}}">Envíos</a></li>
            @endif


            @if(Auth::user()->hasRole('Admin'))
            <li><a href="{{url('/todos-los-envios')}}">Todos los envíos</a></li>
            @endif


            @if(Auth::user()->hasRole('SuperAdmin'))
            <li><a href="{{url('/estados')}}">Estados</a></li>
            @endif


            @if(Auth::user()->hasRole('Admin'))
            <li><a href="{{url('/usuarios')}}">Usuarios</a></li>
            @endif
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
