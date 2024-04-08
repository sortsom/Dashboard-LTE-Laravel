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
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0" style="color:#000;font-family:Khmer OS Siemreap">ការ</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item" style="font-family:Khmer OS Siemreap"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" style="font-family:Khmer OS Siemreap">ការបញ្ចូលថ្មី</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">ព័ត៌មានបុគ្គលិក</h3>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="NA" class="form-label" style="font-family:Khmer OS Siemreap">ល.រ</label>
                                        <input type="number" class="form-control" id="​NA">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">ឈ្មោះ</label>
                                        <input type="text" class="form-control" id="name"
                                            placeholder="ឈ្មោះអក្សរខ្មែរ">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="nameeng" class="form-label">ឈ្មោះឡាតាំង</label>
                                        <input type="text" class="form-control" id="nameeng"
                                            placeholder="ឈ្មោះអក្សរឡាតាំង">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="gender" class="form-label">ភេទ</label>
                                        <select class="form-control select2bs4" id="gender" style="width: 100%;">
                                            <option selected="selected">ជ្រើសរើសភេទ</option>
                                            <option>ប្រុស</option>
                                            <option>ស្រី</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="department" class="form-label">អង្គភាព</label>
                                        <input type="text" class="form-control" id="department"
                                            placeholder="ឈ្មោះអង្គភាព">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="position" class="form-label"> មុខតំណែង</label>
                                        <input type="text" class="form-control" id="position"​
                                            placeholder="មុខតំណែង">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="time" class="form-label">រយៈលពល</label>
                                        <input type="number" class="form-control" id="time"placeholder="រយៈពេល">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="startlearning" class="form-label">ទីកន្លែងបំពេញការសិក្សា</label>
                                        <input type="text" class="form-control" id="startlearning"
                                            placeholder="ទីកន្លែងបំពេញការសិក្សា">
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="card-header">
                        <h3 class="card-title">ខ្លឹមសារលិខិត</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="idcode" class="form-label">លេខលិខិត</label>
                                        <input type="number" class="form-control" id="idcode"
                                            placeholder="លេខលិខិត">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="idname" class="form-label">ឈ្មោះលិខិត</label>
                                        <input type="email" class="form-control" id="idname"
                                            placeholder="ឈ្មោះលិខិត">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="startdate" class="form-label">ការបរិច្ឆេទលិខិតចូល</label>
                                        <input type="date" class="form-control" id="startdate"
                                            placeholder="ការបរិច្ឆេទលិខិតចូល">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="notedate" class="form-label">ការបរិច្ឆេទលិខិតចារ</label>
                                        <input type="date" class="form-control" id="notedate"
                                            placeholder="ការបរិច្ឆេទលិខិតចារ">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="endedate" class="form-label">ការបរិច្ឆេទលិខិតចេញ</label>
                                        <input type="date" class="form-control" id="enddate"
                                            placeholder="ការបរិច្ឆេទលិខិតចេញ">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="notedecument" class="form-label">លិខិតយោង</label>
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="លិខិតយោង" id="notedecument"></textarea>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tfooter">
                            <button type="submit" class="btn btn-success float-right">Sumbit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
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
