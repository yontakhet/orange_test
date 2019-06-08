@extends('layouts.main')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>กำหนดสิทธิ์การใช่งาน</h1>
    </section>



    <!-- Main content -->
    <section class="content">


        <div class="row">
            <!-- left column -->
            <div class="col-md-12">


                <div class="box box-success">
                    <div class="box-header" style="padding-bottom: 0px;">

                        {{-- <div class="row">
                            <div class="col-md-8">
                                <h3 class="box-title">บัญชีครุภัณฑ์</h3>
                            </div>
                            <div class="col-md-2">
                                <a href="product.php" class="btn btn-block btn-success">Excel</a>
                            </div>
                            <div class="col-md-2">
                                <a href="product.php" class="btn btn-block btn-danger">PDF</a>
                            </div>
                        </div> --}}

                    </div>
                    <div id="exTab2">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#1" data-toggle="tab">รายชื่อทั้งหมด</a>
                            </li>
                        </ul>

                        <div class="tab-content ">
                            <div class="tab-pane active" id="1">
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <div class="table-responsive">
                                        <table id="managepermissiontable" class="table table-bordered table-striped " align="center">
                                            <thead>
                                                <tr>
                                                    <th class="text-nowrap" style="text-align: center;">ลำดับ</th>
                                                    <th class="text-nowrap" style="text-align: center;">รายการ</th>
                                                    <th class="text-nowrap " style="text-align: center;">จำนวนหน่วย</th>
                                                    <th class="text-nowrap" style="text-align: center;">รายละเอียด</th>
                                                    <th class="text-nowrap" style="text-align: center;">จัดการ</th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </section>
    <!-- /.content -->
</div>
<div class="modal fade" id="managepermission">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span></button>
            <h4 class="modal-title">กำหนดสิทธิ์การใช่</h4>
        </div>
        <form action="" method="post" id="permissionform">
            @csrf
        <div class="modal-body">
            <div class="form-group">
                <h4 for="exampleInputEmail1">Permission</h4>
                <input type="hidden" name="id_user" id="id_usernow">
                <select class="form-control" name="role">
                        <option selected id="rolename"  >selected</option>
                    @foreach ($roles as $role)
                        <option value="{{$role->id}}" >{{$role->name}}</option>

                    @endforeach

                </select>
            </div>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </form>
  </div>
  <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>

@endsection
@section('script')
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

</script>
<script>
    $(function () {
        $('#managepermissiontable').DataTable({
            "columnDefs": [
            {"className": "dt-center", "targets": "_all"}
            ],
            processing: true,
            serverSide: true,
            // "bPaginate": false,
            "bLengthChange": false,
            // "bFilter": true,
            // "bInfo": false,
            // "bFilter": false ,
            // "bAutoWidth": false ,
            ajax: {
                "url": "{{url('managepermissionDatatables')}}",
                "type": "POST"
            },
            columns: [{
                data: 'id_user',
                name: 'id_user'
            },
            {
                data: 'name',
                name: 'name'
            },
            {
                data: 'email',
                name: 'email'
            },

            {
                data: 'Detail',
                name: 'Detail'
            },
            {
                data: 'Manage',
                name: 'Manage'
            },
            ]
        });
    });

</script>
            <script type="text/javascript">
                $(document).ready(function(){
                 $(document).on("click", ".manage", function () {

                    // var r = confirm("ยืนยันการลบข้อมูล ?");
                    var uid = $(this).attr("data-id");

                    $('#id_usernow').val(uid);

                    alert(uid);
                    // if (r == true) {
                                        // txt = "You pressed OK!";
                                        $.ajax({
                                            url: "{{url('managepermissionSelect')}}" ,
                                            method: "post",
                                            data: {
                        // _method: "DELETE",
                        _token: "{{ csrf_token() }}",
                        id: uid
                    }, //ส่งข้อมูลไปในรูปแบบ JSON

                    success: function (result) {
                        console.log(result);
                        $('#rolename').val(result.id);

                        $('#managepermission').modal('show');

                        // $('#managepermission').modal('show');
                        // location.reload();


                    }
                });
                                    // }


                                });
                               // this is the id of the form
                    $("#permissionform").submit(function(e) {
                        // alert("444444444");
                        e.preventDefault(); // avoid to execute the actual submit of the form.

                        var form = $(this);
                        // var url = form.attr('action');

                        $.ajax({
                            method: "post",
                            url: "{{url('managepermissionUpdate')}}" ,
                            data: form.serialize(), // serializes the form's elements.
                            success: function(data)
                            {
                                alert(data); // show response from the php script.
                                $('#managepermission').modal('hide');
                                $('#managepermissiontable').DataTable().ajax.reload();
                            }
                            });


                    });


             });
         </script>
@endsection
