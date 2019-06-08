@extends('layouts.main')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>โอนย้ายทะเบียนทรัพย์สิน</h1>
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
                <h3 class="box-title">ค้นหาบัญชีครุภัณฑ์</h3>
              </div>
              <div class="col-md-2">
                <a href="transferorder.php" class="btn btn-block btn-success">โอนย้ายครุภัณฑ์</a>
              </div>
            </div>

          </div>

          <form role="form">
            <div class="box-body" style="padding-top: 0px;">



              <div class="row">
                <div class="col-xs-2">
                  <div class="form-group">
                    <h4 for="exampleInputEmail1">ประเภทเงิน</h4>
                    <select class="form-control">
                      <option>ทั้งหมด</option>
                      <option>เงินทุนหมุนเวียน</option>
                      <option>งบประมาณแผ่นดิน</option>
                    </select>
                  </div>
                </div>

                <div class="col-xs-2">
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
                <h3 class="box-title">บัญชีครุภัณฑ์</h3>
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
                <a href="#1" data-toggle="tab">ครุภัณฑ์ทั้งหมด</a>
              </li>
              <li><a href="#2" data-toggle="tab">รออนุมัติ</a>
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
                        <th class="text-nowrap" style="text-align: center;">รายการ</th>
                        <th class="text-nowrap" style="text-align: center;">จำนวนหน่วย</th>
                        <th class="text-nowrap" style="text-align: center;">วันที่ได้มา</th>
                        <th class="text-nowrap" style="text-align: center;">สายควบคุม</th>
                        <th class="text-nowrap" style="text-align: center;">ครอบครอง</th>
                        <th class="text-nowrap" style="text-align: center;">กอง</th>
                        <th class="text-nowrap" style="text-align: center;">แผนก/หน่วยย่อย</th>
                        <th class="text-nowrap" style="text-align: center;">รหัสครุภัณฑ์</th>
                        <th class="text-nowrap" style="text-align: center;">ยี่ห้อ รุ่น บริษัท</th>
                        <th class="text-nowrap" style="text-align: center;">ราคารวมvat</th>
                        <th class="text-nowrap" style="text-align: center;">รายละเอียด</th>
                        <th class="text-nowrap" style="text-align: center;">เบิกครุภัณฑ์</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $j=1; ?>
                      @foreach ($allproducts as $key => $allproduct)

                      <?php 
                      $value = $allproduct->totalvalue;
                      $res = $value*7/100;
                      $vat = $value + $res;
                      ?>
                      @if($allproduct->status == 1 && $allproduct->withdraw == 1)
                      <tr>
                        <td style="text-align: center;">{{$j}}</td>
                        <td style="text-align: center;">{{$allproduct->id_allproduct}}</td>
                        <td>{{$allproduct->name}}</td>
                        <td style="text-align: center;">{{$allproduct->unit}}ชุด</td>
                        <td style="text-align: center;">{{formatdate($allproduct->date_come)}}</td>
                        <td style="text-align: center;">{{service_for($allproduct->service_for)}}</td>
                        <td style="text-align: center;">{{$allproduct->property}}</td>
                        <td style="text-align: center;">{{responsibleagency($allproduct->responsibleagency)}}</td>
                        <td style="text-align: center;">{{department($allproduct->department)}}</td>
                        <td>{{$allproduct->code}}</td>
                        <td>{{$allproduct->brand}}</td>
                        <td style="text-align: right;">
                          {{$vat}}
                        </td>
                        <td style="text-align: center;">
                          <a class="btn btn-xs" href="{{url('productdetail',$allproduct->id_allproduct)}}" role="button"
                            style="background-color:  #00a659;color: white;    margin: 0;">
                          รายละเอียด</a>
                        </td>
                        <td style="text-align: center;">
                         <a class="btn btn-xs" href="{{url('transfer/product',$allproduct->id_allproduct)}}" role="button" style="background-color:  #ffb52d;color: white;margin: 0;">โอนย้ายครุภัณฑ์</a>
                       </td>
                     </tr>
                     <?php $j++ ;  ?>

                     @endif
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
                      <th class="text-nowrap" style="text-align: center;">#</th>
                      <th class="text-nowrap" style="text-align: center;">ลำดับ</th>
                      <th class="text-nowrap" style="text-align: center;">รายการ</th>
                      <th class="text-nowrap" style="text-align: center;">จำนวนหน่วย</th>
                      <th class="text-nowrap" style="text-align: center;">วันที่ได้มา</th>
                      <th class="text-nowrap" style="text-align: center;">สายควบคุม</th>
                      <th class="text-nowrap" style="text-align: center;">ครอบครอง</th>
                      <th class="text-nowrap" style="text-align: center;">กอง</th>
                      <th class="text-nowrap" style="text-align: center;">เลขที่หรือรหัส</th>
                      <th class="text-nowrap" style="text-align: center;">ยี่ห้อ รุ่น บริษัท</th>
                      <th class="text-nowrap" style="text-align: center;">เลขที่ใบสั่ง/ใบเบิก</th>
                      <th class="text-nowrap" style="text-align: center;">ราคารวมvat</th>
                      <th class="text-nowrap" style="text-align: center;">รายละเอียด</th>
                      <th class="text-nowrap" style="text-align: center;">สถานะ</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $j=1; ?>
                    @foreach ($transfers as $key => $transfers)

                    <?php 
                    $value = $transfers->totalvalue;
                    $res = $value*7/100;
                    $vat = $value + $res;
                    ?>
                    <tr>
                      <td style="text-align: center;">{{$j}}</td>
                      <td style="text-align: center;">{{$transfers->id_transfer}}</td>
                      <td>{{$transfers->name}}</td>
                      <td style="text-align: center;">{{$transfers->unit}}ชุด</td>
                      <td style="text-align: center;">{{formatdate($transfers->date_come)}}</td>
                      <td style="text-align: center;">{{service_for($transfers->service_for)}}</td>
                      <td style="text-align: center;">{{$transfers->property}}</td>
                      <td style="text-align: center;">{{responsibleagency($transfers->responsibleagency)}}</td>
                      <td style="text-align: center;">{{department($transfers->department)}}</td>
                      <td>{{$transfers->code}}</td>
                      <td>{{$transfers->brand}}</td>
                      <td style="text-align: right;">
                        {{$vat}}
                      </td>
                      <td style="text-align: center;">
                        <a class="btn btn-xs" href="{{url('transferdetail',$transfers->id_transfer)}}" role="button"
                          style="background-color:  #00a659;color: white;    margin: 0;">
                        รายละเอียด</a>
                      </td>
                      <td style="text-align: center;">
                        <a class="btn btn-xs " href="{{url('transfer/product',$transfers->id_allproduct)}}" role="button" style="background-color:  #ffb52d;color: white;margin: 0;">รออนุมัติ</a>
                      </td>
                    </tr>
                    <?php $j++ ;  ?>

                    @endforeach
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
