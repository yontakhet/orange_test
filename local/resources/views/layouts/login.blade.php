<!DOCTYPE html>
<html>
<head>
  <title>Pharmacy | Login</title>
  <link rel="stylesheet" href="{{asset('assets/plugins/datatables/dataTables.bootstrap.css')}}">
  <link rel="stylesheet" href="{{asset('assets/plugins/iCheck/square/blue.css')}}">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  @include('layouts.components')
  @include('layouts.inc_header')
</head>
<body class="hold-transition login-page">
  
    @yield('content')


  <!-- /.login-box -->
  
</body>
</html>
@include('layouts.inc_script')

<script src="{{asset ('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset ('assets/plugins/datatables/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset ('assets/plugins/iCheck/icheck.min.js')}}"></script>
  @yield('script')