@extends('layouts.login')

<div class="login-box">

    <div class="login-logo">
        <h2><b>Pharmacy</b>System</h2>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Register</p>

        <div class="box-body">
                {{-- <label>Date masks:</label> --}}
                <div class="form-group">
                        <label>แผนก:</label>
                        <select class="form-control">
                          <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>
                      </div>

                <!-- Date dd/mm/yyyy -->
                  {{-- <label>Date masks:</label> --}}
                  <div class="form-group">
                        <label>ยศ:</label>
                        <select class="form-control">
                          <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>
                      </div>


                <!-- Date mm/dd/yyyy -->
                <div class="form-group">
                <label>ชื่อ-นามสกุล:</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" class="form-control" >
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <!-- phone mask -->
                <div class="form-group">
                  <label></label>

                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-phone"></i>
                    </div>
                    <input type="text" class="form-control" >
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <!-- phone mask -->
                <div class="form-group">
                  <label>Telephone:</label>

                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-phone"></i>
                    </div>
                    <input type="text" class="form-control">
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <!-- IP mask -->
                <div class="form-group">
                  <label>Email:</label>

                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-laptop"></i>
                    </div>
                    <input type="text" class="form-control" >
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->
                <!-- IP mask -->
                <div class="form-group">
                        <label>Password:</label>

                        <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-laptop"></i>
                        </div>
                        <input type="text" class="form-control" >
                        </div>
                        <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
              </div>
        <!-- /.social-auth-links -->

        <div class="social-auth-links text-center">

                <button type="submit" class="btn btn-success btn-block btn-flat">Sign In</button>


            </div>
        <a href="#">I forgot my password</a><br>
    <a href="{{url('register')}}" class="text-center">Register a new membership</a>

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
