<!DOCTYPE html>
<html>
<head>
    <title>Pharmacy | System</title>
  <link rel="stylesheet" href="{{asset('assets/plugins/datatables/dataTables.bootstrap.css')}}">
  @include('layouts.components')
  @include('layouts.inc_header')
</head>
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">

  @include('layouts.inc_navbar')
  @include('layouts.inc_sidemenu')

  @yield('content')

  @include('layouts.inc_footer')
</div>
<!-- ./wrapper -->
</body>
</html>
@include('layouts.inc_script')

<script src="{{asset ('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset ('assets/plugins/datatables/dataTables.bootstrap.min.js')}}"></script>
@yield('script')