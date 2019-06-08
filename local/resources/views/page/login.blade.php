@extends('layouts.login')

<div class="login-box">

    <div class="login-logo">
        <h2><b>Pharmacy</b>System</h2>

    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Please Login </p>

    <form action="{{route('login')}}" method="post">
         @csrf
            <div class="form-group has-feedback">
                <input type="email" name="email" class="form-control" placeholder="User">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password"  name="password" class="form-control" placeholder="Password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            {{-- <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox"> Remember Me
                        </label>
                    </div>
                </div>

            </div> --}}


        <div class="social-auth-links text-center">

            <button type="submit" class="btn btn-success btn-block btn-flat">Sign In</button>


        </div>
      </form>
        <!-- /.social-auth-links -->

        {{-- <button type="submit" class="btn btn-warning btn-block btn-flat">Register</button> --}}
         {{-- <a href="{{url('register')}}" class="btn btn-warning btn-block btn-flat">Register </a> --}}

    </div>
    <!-- /.login-box-body -->
</div>

@section('script')
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' /* optional */
        });
    });

</script>
@endsection
