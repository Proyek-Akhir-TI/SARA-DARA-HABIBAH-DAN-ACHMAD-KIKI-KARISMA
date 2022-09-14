<aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img class="logo" src="{{asset('public/images/Easywash logo.png')}}" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="{{asset('public/images/Easywash logo.png')}}" alt="Logo"></a>
                <style>
                        .logo{
                            width:50%;
                        }
                 </style>
            </div>


            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">

                        <a href="{{url('/admin/kategori')}}"> <i class="menu-icon fa fa-dashboard"></i>Kategori </a>
                        <a href="{{url('/admin/pesanan')}}"> <i class="menu-icon fa fa-dashboard"></i>Daftar Pesanan </a>
                        @role('admin')
                        <a href="{{url('/admin/roles')}}"> <i class="menu-icon fa fa-dashboard"></i>Role </a>
                        <a href="{{url('/admin/users')}}"> <i class="menu-icon fa fa-dashboard"></i>User </a>\
                        @endrole
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->
