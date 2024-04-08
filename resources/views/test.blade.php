@include('partails.head')

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        {{-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div> --}}

        @include('partails.navbar')

        <!-- Main Sidebar Container -->
        @include('partails.menu')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0" style="color:#000">Dashboard</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
          
            <!-- Main content -->
            <section class="content ">
                <div class="container ">
                    <h3 class="text-center">នាយកដ្ឋានបុគ្គលិក</h3>
                </div>
                <div class="container-fluid card pt-3">
                    <!-- Info boxes -->
                    <div class="row">

                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="info-box bg-info">
                                <span class="info-box-icon"><i class="far fa-bookmark"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">ការិយាល័យរដ្ឋបាល</span>
                                    <span class="info-box-number">41,410</span>

                                    <div class="progress">
                                        <div class="progress-bar" style="width: 70%"></div>
                                    </div>
                                    <span class="progress-description">
                                        70% Increase in 30 Days
                                    </span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="info-box bg-info">
                                <span class="info-box-icon"><i class="far fa-thumbs-up"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">ការិយាល័យធនធាន</span>
                                    <span class="info-box-number">41,410</span>

                                    <div class="progress">
                                        <div class="progress-bar" style="width: 70%"></div>
                                    </div>
                                    <span class="progress-description">
                                        70% Increase in 30 Days
                                    </span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>

                        <!-- /.col -->
                    </div>
                    <!-- /.row -->


                </div><!--/. container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        @include('partails.footer')
