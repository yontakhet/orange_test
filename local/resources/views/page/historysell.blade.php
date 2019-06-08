@extends('layouts.main')
@section('content')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>ประวัติการจำหน่ายครุภัณฑ์</h1>
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
                  <div class="col-md-12">
                    <h3 class="box-title">ค้นหาบัญชีครุภัณฑ์</h3>
                  </div>
                </div>

              </div>

              <form role="form">
                <div class="box-body" style="padding-top: 0px;">



                  <div class="row">

                    <div class="col-xs-2">
                      <div class="form-group">
                        <h4 for="exampleInputEmail1">ปีที่จำหน่าย</h4>
                        <select class="form-control">
                          <option>ทั้งหมด</option>
                          <option>2560</option>
                          <option>2561</option>
                          <option>2562</option>
                        </select>
                      </div>
                    </div>


                    <div class="col-xs-2">
                      <div class="form-group">
                        <h4 for="exampleInputEmail1">ประเภทเงิน</h4>
                        <select class="form-control">
                          <option>ทั้งหมด</option>
                          <option>เงินทุนหมุนเวียน</option>
                          <option>งบประมาณแผ่นดิน</option>
                          <option>อื่นๆ</option>
                        </select>
                      </div>
                    </div>



                    <div class="col-xs-3">
                      <div class="form-group">
                        <h4 for="exampleInputEmail1">ประเภท</h4>
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
                          <option>สายแพทย์(พยาบาล)</option>
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
                      <button type="button" class="btn btn-block btn-success" style="margin-top: 38px;">ค้นหาบัญชีครุภัณฑ์</button>

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
                    <h3 class="box-title">ประวัติการจำหน่ายครุภัณฑ์ ปี2562</h3>
                  </div>
                  <div class="col-md-2">
                    <a href="product.php" class="btn btn-block btn-success">Excel</a>
                  </div>
                  <div class="col-md-2">
                    <a href="product.php" class="btn btn-block btn-danger">PDF</a>
                  </div>
                </div>

              </div>








              <!-- /.box-header -->
              <div class="box-body">
                <div class="table-responsive">
                  <table id="example1" class="table table-bordered table-striped ">
                    <thead>
                      <tr>
                        <th class="text-nowrap" style="text-align: center;">ลำดับ</th>
                        <th class="text-nowrap" style="text-align: center;">รายการ</th>
                        <th class="text-nowrap" style="text-align: center;">จำนวนหน่วย</th>
                        <th class="text-nowrap" style="text-align: center;">วันที่ได้มา</th>
                        <th class="text-nowrap" style="text-align: center;">วันที่จำหน่าย</th>
                        <th class="text-nowrap" style="text-align: center;">วิธีจำหน่าย</th>
                        <th class="text-nowrap" style="text-align: center;">สายยุทธบริการ</th>
                        <th class="text-nowrap" style="text-align: center;">ครอบครอง</th>
                        <th class="text-nowrap" style="text-align: center;">กอง</th>
                        <th class="text-nowrap" style="text-align: center;">เลขที่หรือรหัส</th>
                        <th class="text-nowrap" style="text-align: center;">ยี่ห้อ รุ่น บริษัท</th>
                        <th class="text-nowrap" style="text-align: center;">เลขที่ใบสั่ง/ใบเบิก</th>
                        <th class="text-nowrap" style="text-align: center;">ราคารวมvat</th>
                        <th class="text-nowrap" style="text-align: center;">รายละเอียด</th>
                      </tr>
                    </thead>
                    <tbody>

                      <tr>
                        <td style="text-align: center;">1.</td>
                        <td>อ่างล้างอุปกรณ์</td>
                        <td style="text-align: center;">1 ชุด</td>
                        <td style="text-align: center;">4 ธ.ค. 60</td>
                        <td style="text-align: center;">18 ก.พ. 62</td>
                        <td style="text-align: center;">ทิ้ง/ทำลาย</td>
                        <td style="text-align: center;">สายแพทย์</td>
                        <td style="text-align: center;">สมุนไพร</td>
                        <td style="text-align: center;">กอง2</td>
                        <td style="text-align: center;">3650-007-1001-2615</td>
                        <td>หจก. เอ็นพีอาร์ สแตนเลส</td>
                        <td>ข.001/61 ฐ.010/61</td>
                        <td style="text-align: right;">29,960.00</td>
                        <td style="text-align: center;">
                          <a class="btn btn-xs" href="product02.php" role="button" style="background-color:  #00a659;color: white;    margin: 0;">
                            รายละเอียด</a>
                        </td>
                      </tr>

                      <tr>
                        <td style="text-align: center;">2.</td>
                        <td>เครื่องคอมพิวเตอร์สำหรับงานสำนักงาน</td>
                        <td style="text-align: center;">1 ชุด</td>
                        <td style="text-align: center;">21 ธ.ค. 60</td>
                        <td style="text-align: center;">18 ก.พ. 62</td>
                        <td style="text-align: center;">ขายทอดตลาด</td>
                        <td style="text-align: center;">สายแพทย์</td>
                        <td style="text-align: center;">ผ.ควบคุม คุณภาพ 2</td>
                        <td style="text-align: center;">กอง2</td>
                        <td style="text-align: center;">7440-001-1002-2614</td>
                        <td>ยี่ห้อ HP รุ่น 570-p040L (#Z8H4PA)</td>
                        <td>พธ.18/61 บ.1330/61</td>
                        <td style="text-align: right;">16,692.00</td>
                        <td style="text-align: center;">
                          <a class="btn btn-xs" href="product02.php" role="button" style="background-color:  #00a659;color: white;    margin: 0;">
                            รายละเอียด</a>
                        </td>

                      </tr>

                      <tr>
                        <td style="text-align: center;">3.</td>
                        <td>เครื่องคอมพิวเตอร์ประมวลผล แบบที่ 2</td>
                        <td style="text-align: center;">1 ชุด</td>
                        <td style="text-align: center;">21 ธ.ค. 60</td>
                        <td style="text-align: center;">18 ก.พ. 62</td>
                        <td style="text-align: center;">ขายทอดตลาด</td>
                        <td style="text-align: center;">สายแพทย์</td>
                        <td style="text-align: center;">ศูนย์สารสนเทศ</td>
                        <td style="text-align: center;">กอง2</td>
                        <td style="text-align: center;">7440-001-1018-2613</td>
                        <td>ยี่ห้อ HP รุ่น Predesk 400 G4 MT (#2YV79PA)</td>
                        <td>พธ.18/61 บ.1/61</td>
                        <td style="text-align: right;">27,285.00</td>
                        <td style="text-align: center;">
                          <a class="btn btn-xs" href="product02.php" role="button" style="background-color:  #00a659;color: white;    margin: 0;">
                            รายละเอียด</a>
                        </td>

                      </tr>


                      <tr>
                        <td style="text-align: center;">4.</td>
                        <td>อ่างล้างอุปกรณ์</td>
                        <td style="text-align: center;">1 ชุด</td>
                        <td style="text-align: center;">4 ธ.ค. 60</td>
                        <td style="text-align: center;">18 ก.พ. 62</td>
                        <td style="text-align: center;">โอนออกนอกระบบ</td>
                        <td style="text-align: center;">สายแพทย์</td>
                        <td style="text-align: center;">สมุนไพร</td>
                        <td style="text-align: center;">กอง2</td>
                        <td style="text-align: center;">3650-007-1001-2615</td>
                        <td>หจก. เอ็นพีอาร์ สแตนเลส</td>
                        <td>ข.001/61 ฐ.010/61</td>
                        <td style="text-align: right;">29,960.00</td>
                        <td style="text-align: center;">
                          <a class="btn btn-xs" href="product02.php" role="button" style="background-color:  #00a659;color: white;    margin: 0;">
                            รายละเอียด</a>
                        </td>

                      </tr>

                      <tr>
                        <td style="text-align: center;">5.</td>
                        <td>เครื่องคอมพิวเตอร์สำหรับงานสำนักงาน</td>
                        <td style="text-align: center;">1 ชุด</td>
                        <td style="text-align: center;">21 ธ.ค. 60</td>
                        <td style="text-align: center;">18 ก.พ. 62</td>
                        <td style="text-align: center;">ทิ้ง/ทำลาย</td>
                        <td style="text-align: center;">สายแพทย์</td>
                        <td style="text-align: center;">ผ.ควบคุม คุณภาพ 2</td>
                        <td style="text-align: center;">กอง2</td>
                        <td style="text-align: center;">7440-001-1002-2614</td>
                        <td>ยี่ห้อ HP รุ่น 570-p040L (#Z8H4PA)</td>
                        <td>พธ.18/61 บ.1330/61</td>
                        <td style="text-align: right;">16,692.00</td>
                        <td style="text-align: center;">
                          <a class="btn btn-xs" href="product02.php" role="button" style="background-color:  #00a659;color: white;    margin: 0;">
                            รายละเอียด</a>
                        </td>

                      </tr>

                      <tr>
                        <td style="text-align: center;">6.</td>
                        <td>เครื่องคอมพิวเตอร์ประมวลผล แบบที่ 2</td>
                        <td style="text-align: center;">1 ชุด</td>
                        <td style="text-align: center;">21 ธ.ค. 60</td>
                        <td style="text-align: center;">18 ก.พ. 62</td>
                        <td style="text-align: center;">ขายทอดตลาด</td>
                        <td style="text-align: center;">สายแพทย์</td>
                        <td style="text-align: center;">ศูนย์สารสนเทศ</td>
                        <td style="text-align: center;">กอง2</td>
                        <td style="text-align: center;">7440-001-1018-2613</td>
                        <td>ยี่ห้อ HP รุ่น Predesk 400 G4 MT (#2YV79PA)</td>
                        <td>พธ.18/61 บ.1/61</td>
                        <td style="text-align: right;">27,285.00</td>
                        <td style="text-align: center;">
                          <a class="btn btn-xs" href="product02.php" role="button" style="background-color:  #00a659;color: white;    margin: 0;">
                            รายละเอียด</a>
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
