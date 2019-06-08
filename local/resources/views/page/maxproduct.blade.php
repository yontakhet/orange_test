@extends('layouts.main')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>บัญชีอัตราสิ่งอุปกรณ์</h1>
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
                  <h3 class="box-title">ค้นหาบัญชีอัตราสิ่งอุปกรณ์</h3>
                </div>
              </div>

            </div>

            <form role="form">
              <div class="box-body" style="padding-top: 0px;">



                <div class="row">
                  <div class="col-xs-3">
                    <div class="form-group">
                      <h4 for="exampleInputEmail1">ปีงบประมาณ</h4>
                      <select class="form-control">
                        <option>ทั้งหมด</option>
                        <option>2560</option>
                        <option>2561</option>
                        <option>2562</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-xs-3">
                    <div class="form-group">
                      <h4 for="exampleInputEmail1">สายยุทธบริการ</h4>
                      <select class="form-control">
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

                  <div class="col-xs-3">
                    <div class="form-group">
                      <h4 for="exampleInputEmail1">รายการ</h4>
                      <select class="form-control">
                        <option>ทั้งหมด</option>
                        <option>2001 เครื่องส่องคอชนิดโค้ง</option>
                        <option>2002 เครื่องตรวจน้ำตาลในเลือด</option>
                        <option>2003 เครื่องอบด้วยไอน้ำและความดัน</option>
                        <option>2004 เครื่องตรวจตา หู คอ จมูก</option>
                        <option>2005 เครื่องกรองน้ำ</option>
                        <option>2006 เครื่องวัดควมดันโลหิต</option>
                        <option>2007 เตียงคนไข้ (ปรับเตียงมีล้อเข็น)</option>
                        <option>2008 รถเข็นคนไข้ (ชนิดนั่ง พับได้)</option>
                        <option>2009 เครื่องช่วยหายใจชนิดมือบีบ</option>
                        <option>2010 เครื่องดูดเสมหะ</option>
                        <option>2011 รถทำแผล</option>
                        <option>2012 เครื่องให้ออกซิเจน (ขนาดใหญ่ : G)</option>
                        <option>2013 เครื่องให้ออกซิเจน (ขนาดใหญ่ : E)</option>
                        <option>2014 หม้อนึ่งสำลี</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-xs-3">
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
                  <h3 class="box-title">บัญชีอัตราสิ่งอุปกรณ์ สายแพทย์(พญาบาล) รายการทั้งหมด</h3>
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
                      <th class="text-nowrap" style="text-align: center;">CODE</th>
                      <th class="text-nowrap" style="text-align: center;">ลำดับ</th>
                      <th class="text-nowrap" style="text-align: center;">รายการ</th>
                      <th class="text-nowrap" style="text-align: center;">หน่วยนับ</th>
                      <th class="text-nowrap" style="text-align: center;">จำนวนที่มีได้</th>
                      <th class="text-nowrap" style="text-align: center;">จำนวนที่มี</th>
                      <th class="text-nowrap" style="text-align: center;">รายละเอียด</th>
                    </tr>
                  </thead>
                  <tbody>

                    <tr>
                      <td style="text-align: center;">2001</td>
                      <td style="text-align: center;">1.</td>
                      <td>เครื่องส่องคอชนิดโค้ง</td>
                      <td style="text-align: center;">ชุด</td>
                      <td style="text-align: center;">1</td>
                      <td style="text-align: center;">1</td>
                      <td style="text-align: center;">
                        <a class="btn btn-xs" href="maxproductdetail.php" role="button" style="background-color:  #00a659;color: white;    margin: 0;">
                          รายละเอียด</a>
                      </td>
                    </tr>

                    <tr>
                      <td style="text-align: center;">2002</td>
                      <td style="text-align: center;">2.</td>
                      <td>เครื่องตรวจน้ำตาลในเลือด</td>
                      <td style="text-align: center;">เครื่อง</td>
                      <td style="text-align: center;">1</td>
                      <td style="text-align: center;">1</td>
                      <td style="text-align: center;">
                        <a class="btn btn-xs" href="maxproductdetail.php" role="button" style="background-color:  #00a659;color: white;    margin: 0;">
                          รายละเอียด</a>
                      </td>
                    </tr>

                    <tr>
                      <td style="text-align: center;">2003</td>
                      <td style="text-align: center;">3.</td>
                      <td>เครื่องอบด้วยไอน้ำและความดัน</td>
                      <td style="text-align: center;">เครื่อง</td>
                      <td style="text-align: center;">1</td>
                      <td style="text-align: center;">1</td>
                      <td style="text-align: center;">
                        <a class="btn btn-xs" href="maxproductdetail.php" role="button" style="background-color:  #00a659;color: white;    margin: 0;">
                          รายละเอียด</a>
                      </td>
                    </tr>


                    <tr>
                      <td style="text-align: center;">2004</td>
                      <td style="text-align: center;">4.</td>
                      <td>เครื่องตรวจตา หู คอ จมูก</td>
                      <td style="text-align: center;">เครื่อง</td>
                      <td style="text-align: center;">1</td>
                      <td style="text-align: center;">1</td>
                      <td style="text-align: center;">
                        <a class="btn btn-xs" href="maxproductdetail.php" role="button" style="background-color:  #00a659;color: white;    margin: 0;">
                          รายละเอียด</a>
                      </td>
                    </tr>

                    <tr>
                      <td style="text-align: center;">2005</td>
                      <td style="text-align: center;">5.</td>
                      <td>เครื่องกรองน้ำ</td>
                      <td style="text-align: center;">เครื่อง</td>
                      <td style="text-align: center;">1</td>
                      <td style="text-align: center;">1</td>
                      <td style="text-align: center;">
                        <a class="btn btn-xs" href="maxproductdetail.php" role="button" style="background-color:  #00a659;color: white;    margin: 0;">
                          รายละเอียด</a>
                      </td>
                    </tr>

                    <tr>
                      <td style="text-align: center;">2006</td>
                      <td style="text-align: center;">6.</td>
                      <td>เครื่องวัดควมดันโลหิตำ</td>
                      <td style="text-align: center;">เครื่อง</td>
                      <td style="text-align: center;">1</td>
                      <td style="text-align: center;">1</td>
                      <td style="text-align: center;">
                        <a class="btn btn-xs" href="maxproductdetail.php" role="button" style="background-color:  #00a659;color: white;    margin: 0;">
                          รายละเอียด</a>
                      </td>
                    </tr>

                    <tr>
                      <td style="text-align: center;">2007</td>
                      <td style="text-align: center;">7.</td>
                      <td>เตียงคนไข้ (ปรับเตียงมีล้อเข็น)</td>
                      <td style="text-align: center;">เตียง</td>
                      <td style="text-align: center;">1</td>
                      <td style="text-align: center;">1</td>
                      <td style="text-align: center;">
                        <a class="btn btn-xs" href="maxproductdetail.php" role="button" style="background-color:  #00a659;color: white;    margin: 0;">
                          รายละเอียด</a>
                      </td>
                    </tr>

                    <tr>
                      <td style="text-align: center;">2008</td>
                      <td style="text-align: center;">8.</td>
                      <td>รถเข็นคนไข้ (ชนิดนั่ง พับได้)</td>
                      <td style="text-align: center;">คัน</td>
                      <td style="text-align: center;">1</td>
                      <td style="text-align: center;">1</td>
                      <td style="text-align: center;">
                        <a class="btn btn-xs" href="maxproductdetail.php" role="button" style="background-color:  #00a659;color: white;    margin: 0;">
                          รายละเอียด</a>
                      </td>
                    </tr>

                    <tr>
                      <td style="text-align: center;">2009</td>
                      <td style="text-align: center;">9.</td>
                      <td>เครื่องช่วยหายใจชนิดมือบีบ</td>
                      <td style="text-align: center;">เครื่อง</td>
                      <td style="text-align: center;">1</td>
                      <td style="text-align: center;">1</td>
                      <td style="text-align: center;">
                        <a class="btn btn-xs" href="maxproductdetail.php" role="button" style="background-color:  #00a659;color: white;    margin: 0;">
                          รายละเอียด</a>
                      </td>
                    </tr>

                    <tr>
                      <td style="text-align: center;">2010</td>
                      <td style="text-align: center;">10.</td>
                      <td>เครื่องดูดเสมหะำ</td>
                      <td style="text-align: center;">เครื่อง</td>
                      <td style="text-align: center;">1</td>
                      <td style="text-align: center;">1</td>
                      <td style="text-align: center;">
                        <a class="btn btn-xs" href="maxproductdetail.php" role="button" style="background-color:  #00a659;color: white;    margin: 0;">
                          รายละเอียด</a>
                      </td>
                    </tr>

                    <tr>
                      <td style="text-align: center;">2011</td>
                      <td style="text-align: center;">11.</td>
                      <td>รถทำแผล</td>
                      <td style="text-align: center;">คัน</td>
                      <td style="text-align: center;">1</td>
                      <td style="text-align: center;">1</td>
                      <td style="text-align: center;">
                        <a class="btn btn-xs" href="maxproductdetail.php" role="button" style="background-color:  #00a659;color: white;    margin: 0;">
                          รายละเอียด</a>
                      </td>
                    </tr>

                    <tr>
                      <td style="text-align: center;">2012</td>
                      <td style="text-align: center;">12.</td>
                      <td>เครื่องให้ออกซิเจน (ขนาดใหญ่ : G)</td>
                      <td style="text-align: center;">ถัง</td>
                      <td style="text-align: center;">1</td>
                      <td style="text-align: center;">1</td>
                      <td style="text-align: center;">
                        <a class="btn btn-xs" href="maxproductdetail.php" role="button" style="background-color:  #00a659;color: white;    margin: 0;">
                          รายละเอียด</a>
                      </td>
                    </tr>

                    <tr>
                      <td style="text-align: center;">2013</td>
                      <td style="text-align: center;">13.</td>
                      <td>เครื่องให้ออกซิเจน (ขนาดใหญ่ : E)</td>
                      <td style="text-align: center;">ถัง</td>
                      <td style="text-align: center;">1</td>
                      <td style="text-align: center;">1</td>
                      <td style="text-align: center;">
                        <a class="btn btn-xs" href="maxproductdetail.php" role="button" style="background-color:  #00a659;color: white;    margin: 0;">
                          รายละเอียด</a>
                      </td>
                    </tr>

                    <tr>
                      <td style="text-align: center;">2014</td>
                      <td style="text-align: center;">14.</td>
                      <td>หม้อนึ่งสำลี</td>
                      <td style="text-align: center;">ใบ</td>
                      <td style="text-align: center;">3</td>
                      <td style="text-align: center;">3</td>
                      <td style="text-align: center;">
                        <a class="btn btn-xs" href="maxproductdetail.php" role="button" style="background-color:  #00a659;color: white;    margin: 0;">
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
