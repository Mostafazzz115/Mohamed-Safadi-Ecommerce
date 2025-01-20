@include('layouts.admin.head')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ asset('assets/backend') }}/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  @include('layouts.admin.header')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('layouts.admin.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
  @include('layouts.admin.breadcrumb')
    <!-- /.content-header -->

    <!-- Main content -->
    @yield('main-content')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @include('layouts.admin.footer')
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@include('layouts.admin.scripts')
</body>
</html>
