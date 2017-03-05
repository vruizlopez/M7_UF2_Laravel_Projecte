<nav class="navbar navbar-default">
    <div class="container">
        <img src="http://sgfm.elcorteingles.es/SGFM/supermarket/ESP/ECI/PORTADAS/Microsites/es/bienvenida_buena_03.jpg" style="width:100%;height:260px" />
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url('/')}}">
                <span class="glyphicon glyphicon-th" aria-hidden="true"></span>
                SuperMercadoOnline
            </a>
        </div>

        @if(Auth::check() )
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li{{ Request::is('catalog*') && !Request::is('catalog/create')? ' class=active' : ''}}>
                    <a href="{{url('/catalog')}}">
                        <span class="glyphicon glyphicon-barcode" aria-hidden="true"></span>
                        Productos
                    </a>
                </li>
                <li{{ Request::is('catalog/create') ? ' class=active' : ''}}>
                    <a href="{{url('/catalog/create')}}">
                        <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
                        Nuevo producto
                    </a>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="{{url('/logout')}}">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        Cerrar sesión
                    </a>
                </li>
            </ul>
        </div>
        @endif
    </div>
</nav>
