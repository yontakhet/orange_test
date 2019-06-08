@extends('layouts.main')
@section('content')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>รายงานบันทึกการซ่อมบำรุงครุภัณฑ์</h1>
        </section>
  
  
  
        <!-- Main content -->
        <section class="content">
  
  
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
  
  
              <!-- Form Element sizes -->
              <div class="box box-success">
  
                <div class="box-header" style="padding-bottom: 0px;">
  
                  <h3 class="box-title">ค้นหาบัญรายงานบันทึกการซ่อมบำรุงครุภัณฑ์</h3>
  
                </div>
  
                <form role="form">
                  <div class="box-body" style="padding-top: 0px;">
  
  
  
                    <div class="row">
                      <div class="col-xs-4">
                        <div class="form-group">
                          <h4 for="exampleInputEmail1">หน่วย</h4>
                          <select class="form-control">
                            <option>เงินทุนหมุนเวียน</option>
                            <option>งบประมาณแผ่นดิน</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-xs-4">
                        <div class="form-group">
                          <h4 for="exampleInputEmail1">ปีงบประมาณ</h4>
                          <select class="form-control">
                            <option>2561</option>
                          </select>
                        </div>
                      </div>
  
                      <div class="col-xs-4">
                        <button type="button" class="btn btn-block btn-success" style="margin-top: 38px;">ค้นหารายงานค่าเสื่อม</button>
  
                      </div>
  
                    </div>
  
  
                  </div>
                </form>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
  
  
  
  
  
              <div class="box box-success">
                <div class="box-header">
  
                  <h3 class="box-title">รายงานบันทึกการซ่อมบำรุงครุภัณฑ์</h3>
  
                </div>
  
  
  
  
  
  
  
                <!-- /.box-header -->
                <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped ">
                      <thead>
                        <tr>
                          <th class="text-nowrap" style="text-align: center;">เลขรับ</th>
                          <th class="text-nowrap" style="text-align: center;">วันที่รับ</th>
                          <th class="text-nowrap" style="text-align: center;">วันที่ซ่อม</th>
                          <th class="text-nowrap" style="text-align: center;">เครื่อง</th>
                          <th class="text-nowrap" style="text-align: center;">แผนก</th>
                          <th class="text-nowrap" style="text-align: center;">บริษัท</th>
                          <th class="text-nowrap" style="text-align: center;">ผู้ซ่อม</th>
                          <th class="text-nowrap" style="text-align: center;">จัดหาอะไหล่</th>
                          <th class="text-nowrap" style="text-align: center;">ราคา (บาท)</th>
                          <th class="text-nowrap" style="text-align: center;">อนุมัติ</th>
                          <th class="text-nowrap" style="text-align: center;">อาการ</th>
                          <th class="text-nowrap" style="text-align: center;">สาเหตุ</th>
                          <th class="text-nowrap" style="text-align: center;">รายละเอียดการซ่อม</th>
                          <th class="text-nowrap" style="text-align: center;">หมายเหตุ</th>
                        </tr>
                      </thead>
                      <tbody>
  
                        <tr>
                          <td style="text-align: center;">058</td>
                          <td style="text-align: right;">10 สค 59</td>
                          <td style="text-align: right;">สค 58</td>
                          <td style="text-align: center;">เครื่องบรรจุ Blister pack(Gaoger)</td>
                          <td>ซ่อมบำรุง</td>
                          <td>ห้างหุ้นส่วน ซี บี ดีไซน์</td>
                          <td>พ.อ.ต จักรี</td>
                          <td style="text-align: center;">ชุดตัด</td>
                          <td style="text-align: right;">324,600.00</td>
                          <td style="text-align: center;">065/61</td>
                          <td style="text-align: center;">ขึ้นรูปผิดปกติ</td>
                          <td style="text-align: center;">มอเตอร์ไม่หมุน</td>
                          <td style="text-align: center;">เปลี่ยนสายพาน</td>
                          <td style="text-align: center;">รอตรวจเช็คของ</td>
                        </tr>
  
  
                        <tr>
                          <td style="text-align: center;">058</td>
                          <td style="text-align: right;">10 สค 59</td>
                          <td style="text-align: right;">สค 58</td>
                          <td style="text-align: center;">เครื่องบรรจุ Blister pack(Gaoger)</td>
                          <td>ซ่อมบำรุง</td>
                          <td>ห้างหุ้นส่วน ซี บี ดีไซน์</td>
                          <td>พ.อ.ต จักรี</td>
                          <td style="text-align: center;">ชุดตัด</td>
                          <td style="text-align: right;">324,600.00</td>
                          <td style="text-align: center;">065/61</td>
                          <td style="text-align: center;">ขึ้นรูปผิดปกติ</td>
                          <td style="text-align: center;">มอเตอร์ไม่หมุน</td>
                          <td style="text-align: center;">เปลี่ยนสายพาน</td>
                          <td style="text-align: center;">รอตรวจเช็คของ</td>
                        </tr>
  
  
                        <tr>
                          <td style="text-align: center;">058</td>
                          <td style="text-align: right;">10 สค 59</td>
                          <td style="text-align: right;">สค 58</td>
                          <td style="text-align: center;">เครื่องบรรจุ Blister pack(Gaoger)</td>
                          <td>ซ่อมบำรุง</td>
                          <td>ห้างหุ้นส่วน ซี บี ดีไซน์</td>
                          <td>พ.อ.ต จักรี</td>
                          <td style="text-align: center;">ชุดตัด</td>
                          <td style="text-align: right;">324,600.00</td>
                          <td style="text-align: center;">065/61</td>
                          <td style="text-align: center;">ขึ้นรูปผิดปกติ</td>
                          <td style="text-align: center;">มอเตอร์ไม่หมุน</td>
                          <td style="text-align: center;">เปลี่ยนสายพาน</td>
                          <td style="text-align: center;">รอตรวจเช็คของ</td>
                        </tr>
  
  
  
  
                      </tbody>
                    </table>
                  </div>
                </div>
                <!-- /.box-body -->
              </div>
            </div>
          </div>
        </section>
        <!-- /.content -->
  
  
  
      </div>



@endsection

@section('script')
<script>
    $(function () {
        $("#example1").DataTable({
            "lengthChange": false,
            "ordering": false,
        });

        $('#example2').DataTable({
            "lengthChange": false,
            "ordering": false,
        });
    });

</script>
@endsection
