@extends('layouts.main')
@section('content')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>บัญชีครุภัณฑ์</h1>
  </section>



  <!-- Main content -->
  <section class="content">


    <div class="row">
      <!-- left column -->
      <div class="col-md-12">


        <!-- Form Element sizes -->
        <div class="box box-success">

          <div class="box-header" style="padding-bottom: 0px;">

            <div class="row">
              <div class="col-md-10">
                <h3 class="box-title">ค้นหาทะเบียนครุภัณณ์</h3>
              </div>
              <div class="col-md-2">
                <a href="{{url('repairorder')}}" class="btn btn-block btn-success">แจ้งซ่อม</a>
              </div>
            </div>

          </div>

          <form role="form">
            <div class="box-body" style="padding-top: 0px;">



              <div class="row">
                <div class="col-xs-2">
                  <div class="form-group">
                    <h4 for="exampleInputEmail1">ชื่อเครื่อง</h4>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder=" ">
                  </div>
                </div>

                <div class="col-xs-2">
                  <div class="form-group">
                    <h4 for="exampleInputEmail1">วันที่แจ้ง</h4>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder=" ">
                  </div>
                </div>

                <div class="col-xs-3">
                  <div class="form-group">
                    <h4 for="exampleInputEmail1">แผนกที่แจ้ง</h4>
                    <select class="form-control">
                      <option>ทั้งหมด</option>
                      <option>1. อาคารถาวร</option>
                      <option>2. อาคารชั่วคราว/โรงเรือน</option>
                      <option>3.1 สิ่งก่อสร้างใช้คอนกรีตเสริมเหล็กหรือโครงเหล็กเป็นส่วนประกอบ</option>
                      <option>3.2 สิ่งก่อสร้างใช้ไม้หรือวัสดุอื่นๆ เป็นส่วนประกอบหลัก</option>
                      <option>4. ครุภัณฑ์สำนักงาน</option>
                      <option>5. ครุภัณฑ์ยานพาหนะและขนส่ง</option>
                      <option>6. ครุภัณฑ์ไฟฟ้าและวิทยุ</option>
                      <option>7. ครุภัณฑ์โฆษณาและเผยแพร่</option>
                      <option>8.1 ครุภัณฑ์การเกษตรเครื่องมือและอุปกรณ์</option>
                      <option>8.2 ครุภัณฑ์การเกษตรเครื่องจักรกล</option>
                      <option>9.1 ครุภัณฑ์โรงงานเครื่องมือและอุปกรณ์</option>
                      <option>9.2 ครุภัณฑ์โรงงานเครื่องจักรกล</option>
                      <option>10.1 ครุภัณฑ์ก่อสร้างเครื่องมือและอุปกรณ์</option>
                      <option>10.2 ครุภัณฑ์ก่อสร้างเครื่องจักรกล</option>
                      <option>11. ครุภัณฑ์สำรวจ</option>
                      <option>12. ครุภัณฑ์วิทยาศาสตร์และการแพทย์</option>
                      <option>13. ครุภัณฑ์คอมพิวเตอร์</option>
                      <option>14. ครุภัณฑ์การศึกษา</option>
                      <option>15. ครุภัณฑ์งานบ้านงานครัว</option>
                      <option>16. ครุภัณฑ์กีฬา/กายภาพ</option>
                      <option>17. ครุภัณฑ์ดนตรี/นาฏศิลป์</option>
                      <option>18. ครุภัณฑ์อาวุธ</option>
                      <option>19. ครุภัณฑ์สนาม</option>
                      <option>20.1 สินทรัพย์โครงสร้างพื้นฐาน ถนนคอนกรีต</option>
                      <option>20.2 สินทรัพย์โครงสร้างพื้นฐาน ถนนราดยาง</option>
                      <option>20.3 สินทรัพย์โครงสร้างพื้นฐาน สะพานคอนกรีตเสิรมเหล็ก</option>
                      <option>20.4 สินทรัพย์โครงสร้างพื้นฐาน เขื่อนดิน</option>
                      <option>20.5 สินทรัพย์โครงสร้างพื้นฐาน เขื่อนปูน</option>
                      <option>20.6 สินทรัพย์โครงสร้างพื้นฐาน อ่างเก็บน้ำ</option>
                      <option>21. ครุภัณฑ์อื่น</option>
                      <option>22. สินทรัพย์ไม่มีตัวตน</option>
                    </select>
                  </div>
                </div>
                <div class="col-xs-3">
                  <div class="form-group">
                    <h4 for="exampleInputEmail1">สายยุทธบริการ</h4>
                    <select class="form-control">
                      <option>ทั้งหมด</option>
                      <option>สายแพทย์</option>
                      <option>สายพลาธิการ</option>
                      <option>สายยุทธโยธา</option>
                      <option>สายสื่อสาร (ปกติ และ ทสอ)</option>
                      <option>สายวิทยาศาสตร์</option>
                      <option>สายขนส่ง</option>
                      <option>สายสรรพาวุธ</option>
                      <option>สายช่าง</option>
                    </select>
                  </div>
                </div>

                <div class="col-xs-2">
                  <button type="button" class="btn btn-block btn-success" style="margin-top: 38px;">ค้นหา</button>

                </div>

              </div>


            </div>
          </form>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->





        <div class="box box-success">
          <div class="box-header" style="padding-bottom: 0px;">

            <div class="row">
              <div class="col-md-8">
                <h3 class="box-title">บัญชีครุภัณฑ์ ประเภทเงินทุนหมุนเวียน ปี 2561</h3>
              </div>
              <div class="col-md-2">
                <a href="product.php" class="btn btn-block btn-success">Excel</a>
              </div>
              <div class="col-md-2">
                <a href="product.php" class="btn btn-block btn-danger">PDF</a>
              </div>
            </div>

          </div>



          <div id="exTab2">
            <ul class="nav nav-tabs">
              <li class="active">
                <a href="#1" data-toggle="tab">แจ้งซ่อม</a>
              </li>
              <li><a href="#2" data-toggle="tab">ดำเนินการซ่อมเสร็จสิ้น</a>
              </li>
            </ul>

            <div class="tab-content ">
              <div class="tab-pane active" id="1">

                <!-- /.box-header -->
                <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped ">
                      <thead>
                        <tr>
                          <th class="text-nowrap" style="text-align: center;">#</th>
                          <th class="text-nowrap" style="text-align: center;">ลำดับ</th>
                          <th class="text-nowrap" style="text-align: center;">วันที่แจ้ง</th>
                          <th class="text-nowrap" style="text-align: center;">เลขรับเรื่องส่งซ่อม</th>
                          <th class="text-nowrap" style="text-align: center;">รายการ</th>
                          <th class="text-nowrap" style="text-align: center;">เลขที่หรือรหัสครุภัณฑ์</th>
                          <th class="text-nowrap" style="text-align: center;">แผนก</th>
                          <th class="text-nowrap" style="text-align: center;">รายละเอียด</th>
                          <th class="text-nowrap" style="text-align: center;">จัดการ</th>
                          <th class="text-nowrap" style="text-align: center;">ซ่อม</th>
                        </tr>
                      </thead>
                      <tbody>

                        @foreach ($repairs as $key => $repair)
                        <tr>
                          <td style="text-align: center;">{{$key+1}}</td>
                          <td style="text-align: center;">{{$repair->id_dep}}</td>
                          <td style="text-align: center;">{{formatdate($repair->repair_date)}}</td>
                          <td style="text-align: center;">{{$repair->repair_receipt_number}}</td>
                          <td style="text-align: center;">{{$repair->repair_subject}}</td>
                          <td style="text-align: center;"> {{$repair->code}} </td>
                          <td>{{$repair->repair_department}}</td>
                          <td style="text-align: center;">
                            <a class="btn btn-xs" href="{{url('repairdetail',$repair->id_dep)}}" role="button" style="background-color:#00a659;color: white;margin: 0;">รายละเอียด</a>
                          </td>
                          <td style="text-align: center;">
                            <a class="btn btn-xs" href="{{url('repairedit',$repair->id_dep)}}" role="button" style="background-color:  #ffb52d;color: white;    margin: 0;">
                              <i class="fa fa-fw fa-pencil"></i> แก้ไข</a>&nbsp;
                              <a class="btn btn-xs delete_data" href="#" data-id="{{$repair->id_dep}}" role="button" style="background-color:  #ff6c6c;color: white;    margin: 0;">
                                <i class="fa fa-fw fa-trash"></i> ลบ</a>
                              </td>
                              <td>
                                <a class="btn btn-xs" href="{{url('repaircomplete',$repair->id_dep)}}" role="button" style="background-color:  #00a659;color: white;margin: 0;">ดำเนินการซ่อม</a>
                              </td>
                            </tr>
                            @endforeach




                          </tbody>
                        </table>
                      </div>
                    </div>
                    <!-- /.box-body -->
                  </div>

                  <div class="tab-pane" id="2">

                    <!-- /.box-header -->
                    <div class="box-body">
                      <div class="table-responsive">
                        <table id="example2" class="table table-bordered table-striped ">
                          <thead>
                            <tr>
                              <th class="text-nowrap" style="text-align: center;">ลำดับ</th>
                              <th class="text-nowrap" style="text-align: center;">เลขรับเรื่องส่งซ่อม</th>
                              <th class="text-nowrap" style="text-align: center;">วันที่แจ้ง</th>
                              <th class="text-nowrap" style="text-align: center;">วันที่ซ่อม</th>
                              <th class="text-nowrap" style="text-align: center;">รายการ</th>
                              <th class="text-nowrap" style="text-align: center;">เลขที่หรือรหัสครุภัณฑ์</th>
                              <th class="text-nowrap" style="text-align: center;">แผนก</th>
                              <th class="text-nowrap" style="text-align: center;">ผู้ซ่อม</th>
                              <th class="text-nowrap" style="text-align: center;">ดำเนินการ</th>
                              <th class="text-nowrap" style="text-align: center;">รายละเอียด</th>
                              <th class="text-nowrap" style="text-align: center;">จัดการ</th>
                            </tr>
                          </thead>
                          <tbody>


                            <tr>
                              <td style="text-align: center;">1.</td>
                              <td style="text-align: center;">62/03/08</td>
                              <td style="text-align: center;">8 มี.ค. 2562</td>
                              <td style="text-align: center;">8 มี.ค. 2562</td>
                              <td>เครื่องคอมพิวเตอร์สำหรับงานสำนักงาน</td>
                              <td style="text-align: center;">3650-007-1001-2615</td>
                              <td style="text-align: center;">กรง.รถท.ศอพท.</td>
                              <td style="text-align: center;">พอต.จักกรี</td>
                              <td style="text-align: center;">ซ่อมเอง</td>
                              <td style="text-align: center;">
                                <a class="btn btn-xs" href="repaircompletedetail.php" role="button" style="background-color:#00a659;color: white;margin: 0;">รายละเอียด</a>
                              </td>
                              <td style="text-align: center;">
                                <a class="btn btn-xs" href="product.php" role="button" style="background-color:  #ffb52d;color: white;    margin: 0;">
                                  <i class="fa fa-fw fa-pencil"></i> แก้ไข</a>&nbsp;
                                  <a class="btn btn-xs" href="#" role="button" style="background-color:  #ff6c6c;color: white;    margin: 0;">
                                    <i class="fa fa-fw fa-trash"></i> ลบ</a>
                                  </td>

                                </tr>


                              </tbody>
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

        <script type="text/javascript">
          $(document).ready(function(){
           $(document).on("click", ".delete_data", function () { 
            var r = confirm("ยืนยันการลบข้อมูล ?");
            var uid = $(this).attr("data-id");
            if (r == true) {
                                            // txt = "You pressed OK!";
                                            $.ajax({
                                              url: "{{url('delrepair/repair')}}/" + uid, 
                                              method: "post", 
                                              data: {
                            // _method: "DELETE",
                            _token: "{{ csrf_token() }}",
                            id: uid
                        }, //ส่งข้อมูลไปในรูปแบบ JSON

                        success: function (result) { 
                            // console.log(result);

                            location.reload();
                            

                          }
                        });
                                          }


                                        });

         });
       </script>
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
