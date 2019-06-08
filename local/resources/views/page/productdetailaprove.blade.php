@extends('layouts.main')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>ทะเบียนคุมทรัพสิน อนุมัติ</h1>
  </section>


  <!-- Main content -->
  <section class="content">


    <div class="row">
      <!-- left column -->
      <div class="col-md-12">

        <!-- Form Element sizes -->
        <div class="box box-success">

          <div class="box-header with-border">

            <h3 class="box-title">ทะเบียนคุมทรัพสิน (งป.) </h3>
          </div>

          <form role="form" >
            <div class="box-body">

              <div class="row">
                <div class="col-xs-3">

                  <div class="form-group">
                    <h4 for="exampleInputEmail1">ประเภท  <span style="color: red;">*</span></h4>
                    <select class="form-control" name="category" id="category" disabled>
                      <option <?= $allproduct->category == 1 ? 'selected' : ''; ?> value="1">1. อาคารถาวร</option>
                      <option <?= $allproduct->category == 2 ? 'selected' : ''; ?> value="2">2. อาคารชั่วคราว/โรงเรือน</option>
                      <option <?= $allproduct->category == 3 ? 'selected' : ''; ?> value="3">3.1 สิ่งก่อสร้างใช้คอนกรีตเสริมเหล็กหรือโครงเหล็กเป็นส่วนประกอบ</option>
                      <option <?= $allproduct->category == 4 ? 'selected' : ''; ?> value="4">3.2 สิ่งก่อสร้างใช้ไม้หรือวัสดุอื่นๆ เป็นส่วนประกอบหลัก</option>
                      <option <?= $allproduct->category == 5 ? 'selected' : ''; ?> value="5">4. ครุภัณฑ์สำนักงาน</option>
                      <option <?= $allproduct->category == 6 ? 'selected' : ''; ?> value="6">5. ครุภัณฑ์ยานพาหนะและขนส่ง</option>
                      <option <?= $allproduct->category == 7 ? 'selected' : ''; ?> value="7">6. ครุภัณฑ์ไฟฟ้าและวิทยุ</option>
                      <option <?= $allproduct->category == 8 ? 'selected' : ''; ?> value="8">7. ครุภัณฑ์โฆษณาและเผยแพร่</option>
                      <option <?= $allproduct->category == 9 ? 'selected' : ''; ?> value="9">8.1 ครุภัณฑ์การเกษตรเครื่องมือและอุปกรณ์</option>
                      <option <?= $allproduct->category == 10 ? 'selected' : ''; ?> value="10">8.2 ครุภัณฑ์การเกษตรเครื่องจักรกล </option>
                      <option <?= $allproduct->category == 11 ? 'selected' : ''; ?> value="11">9.1 ครุภัณฑ์โรงงานเครื่องมือและอุปกรณ์</option>
                      <option <?= $allproduct->category == 12 ? 'selected' : ''; ?> value="12">9.2 ครุภัณฑ์โรงงานเครื่องจักรกล</option>
                      <option <?= $allproduct->category == 13 ? 'selected' : ''; ?> value="13">10.1 ครุภัณฑ์ก่อสร้างเครื่องมือและอุปกรณ์</option>
                      <option <?= $allproduct->category == 14 ? 'selected' : ''; ?> value="14">10.2 ครุภัณฑ์ก่อสร้างเครื่องจักรกล</option>
                      <option <?= $allproduct->category == 15 ? 'selected' : ''; ?> value="15">11. ครุภัณฑ์สำรวจ</option>
                      <option <?= $allproduct->category == 16 ? 'selected' : ''; ?> value="16">12. ครุภัณฑ์วิทยาศาสตร์และการแพทย์</option>
                      <option <?= $allproduct->category == 17 ? 'selected' : ''; ?> value="17">13. ครุภัณฑ์คอมพิวเตอร์</option>
                      <option <?= $allproduct->category == 18 ? 'selected' : ''; ?> value="18">14. ครุภัณฑ์การศึกษา</option>
                      <option <?= $allproduct->category == 19 ? 'selected' : ''; ?> value="19">15. ครุภัณฑ์งานบ้านงานครัว</option>
                      <option <?= $allproduct->category == 20 ? 'selected' : ''; ?> value="20">16. ครุภัณฑ์กีฬา/กายภาพ</option>
                      <option <?= $allproduct->category == 21 ? 'selected' : ''; ?> value="21">17. ครุภัณฑ์ดนตรี/นาฏศิลป์</option>
                      <option <?= $allproduct->category == 22 ? 'selected' : ''; ?> value="22">18. ครุภัณฑ์อาวุธ</option>
                      <option <?= $allproduct->category == 23 ? 'selected' : ''; ?> value="23">19. ครุภัณฑ์สนาม</option>
                      <option <?= $allproduct->category == 24 ? 'selected' : ''; ?> value="24">20.1 สินทรัพย์โครงสร้างพื้นฐาน ถนนคอนกรีต</option>
                      <option <?= $allproduct->category == 25 ? 'selected' : ''; ?> value="25">20.2 สินทรัพย์โครงสร้างพื้นฐาน ถนนราดยาง</option>
                      <option <?= $allproduct->category == 26 ? 'selected' : ''; ?> value="26">20.3 สินทรัพย์โครงสร้างพื้นฐาน สะพานคอนกรีตเสิรมเหล็ก</option>
                      <option <?= $allproduct->category == 27 ? 'selected' : ''; ?> value="27">20.4 สินทรัพย์โครงสร้างพื้นฐาน เขื่อนดิน</option>
                      <option <?= $allproduct->category == 28 ? 'selected' : ''; ?> value="28">20.5 สินทรัพย์โครงสร้างพื้นฐาน เขื่อนปูน</option>
                      <option <?= $allproduct->category == 29 ? 'selected' : ''; ?> value="29">20.6 สินทรัพย์โครงสร้างพื้นฐาน อ่างเก็บน้ำ</option>
                      <option <?= $allproduct->category == 30 ? 'selected' : ''; ?> value="30">21. ครุภัณฑ์อื่น</option>
                      <option <?= $allproduct->category == 31 ? 'selected' : ''; ?> value="31">22. สินทรัพย์ไม่มีตัวตน</option>
                    </select>

                  </div>
                </div>
                <div class="col-xs-3">
                 <h4 for="exampleInputEmail1">รหัส <span style="color: red;">*</span></h4>
                 <input type="text" name="code" class="form-control" id="code"
                 value="{{$allproduct->code}}" disabled>
               </div>
               <div class="col-xs-3">
                <div class="form-group">
                  <h4 for="exampleInputEmail1">ลักษณะ/คุณสมบัติ <span style="color: red;">*</span>
                  </h4>
                  <input type="text" name="property" class="form-control" id="property"
                  value="{{$allproduct->property}}" disabled>
                </div>
              </div>
              <div class="col-xs-3">
                <div class="form-group">
                  <h4 for="exampleInputEmail1">รุ่น/แบบ <span style="color: red;">*</span></h4>
                  <input type="text" class="form-control" name="model" id="model"  value="{{$allproduct->model}}" disabled>
                </div>
              </div>

            </div>


            <div class="row">
              <div class="col-xs-3">
                <div class="form-group">
                  <h4 for="exampleInputEmail1">หน่วยงานรับผิดชอบ <span
                    style="color: red;">*</span></h4>
                    <select class="form-control" name="responsibleagency" id="responsibleagency" disabled>
                      <option <?= $allproduct->responsibleagency == 1 ? 'selected' : ''; ?> value="1">สำนักงานผู้บังคับบัญชา</option>
                      <option <?= $allproduct->responsibleagency == 2 ? 'selected' : ''; ?> value="2">สำนักงานการเงิน</option>
                      <option <?= $allproduct->responsibleagency == 3 ? 'selected' : ''; ?> value="3">สำนักงานงบประมาณ</option>
                      <option <?= $allproduct->responsibleagency == 4 ? 'selected' : ''; ?> value="4">กองกลาง</option>
                      <option <?= $allproduct->responsibleagency == 5 ? 'selected' : ''; ?> value="5">กองนโยบายและแผน</option>
                      <option <?= $allproduct->responsibleagency == 6 ? 'selected' : ''; ?> value="6">กองวิจัยและประกันสุขภาพ</option>
                      <option <?= $allproduct->responsibleagency == 7 ? 'selected' : ''; ?> value="7">กองโรงงานผลิตยา</option>
                      <option <?= $allproduct->responsibleagency == 8 ? 'selected' : ''; ?> value="8">กองบริการ</option>
                    </select>
                  </div>
                </div>


                <div class="col-xs-3">
                  <div class="form-group">
                    <h4 for="exampleInputEmail1">สายยุทธบริการ <span style="color: red;">*</span>
                    </h4>
                    <select class="form-control" name="service_for" id="service_for" disabled>
                      <option <?= $allproduct->service_for == 1 ? 'selected' : ''; ?> value="1">สายแพทย์</option>
                      <option <?= $allproduct->service_for == 2 ? 'selected' : ''; ?> value="2">สายแพทย์(พยาบาล)</option>
                      <option <?= $allproduct->service_for == 3 ? 'selected' : ''; ?> value="3">สายพลาธิการ</option>
                      <option <?= $allproduct->service_for == 4 ? 'selected' : ''; ?> value="4">สายยุทธโยธา</option>
                      <option <?= $allproduct->service_for == 5 ? 'selected' : ''; ?> value="5">สายสื่อสาร (ปกติ และ ทสอ)</option>
                      <option <?= $allproduct->service_for == 6 ? 'selected' : ''; ?> value="6">สายวิทยาศาสตร์</option>
                      <option <?= $allproduct->service_for == 7 ? 'selected' : ''; ?> value="7">สายขนส่ง</option>
                      <option <?= $allproduct->service_for == 8 ? 'selected' : ''; ?> value="8">สายสรรพาวุธ</option>
                      <option <?= $allproduct->service_for == 9 ? 'selected' : ''; ?> value="9">สายช่าง</option>
                    </select>
                  </div>
                </div>

                <div class="col-xs-3">
                  <div class="form-group">
                    <h4 for="exampleInputEmail1">ชื่อผู้ขาย/ผู้รับจ้าง/ผู้บริจาค <span
                      style="color: red;">*</span></h4>
                      <input type="text" class="form-control" id="dealer" name="dealer" value="{{$allproduct->dealer}}" disabled>
                    </div>
                  </div>

                  <div class="col-xs-3">
                    <div class="form-group">
                      <h4 for="exampleInputEmail1">ยี่ห้อ <span style="color: red;">*</span></h4>
                      <input type="text" class="form-control" name="brand" value="{{$allproduct->brand}}" placeholder=" " disabled>
                    </div>
                  </div>

                </div>


                <div class="row">



                  <div class="col-xs-8">
                   <div class="form-group">
                    <h4 for="exampleInputEmail1">ที่อยู่</h4>
                    <input type="email" class="form-control" id="exampleInputEmail1" value="{{$allproduct->location}}" disabled>
                  </div>
                </div>

                <div class="col-xs-4">
                 <div class="form-group">
                  <h4 for="exampleInputEmail1">โทรศัพท์</h4>
                  <input type="email" class="form-control" id="exampleInputEmail1" value="{{$allproduct->tel}}" disabled>
                </div>
              </div>

            </div>

            <div class="row">
              <div class="col-xs-6">
                <div class="form-group">
                  <h4 for="exampleInputEmail1">ประเภทเงิน <span style="color: red;">*</span></h4>
                  <select class="form-control" name="typemoney" id="typemoney" disabled>
                    <option  <?= $allproduct->typemoney == 1 ? 'selected' : ''; ?> value="1">เงินงบประมาณ</option>
                    <option  <?= $allproduct->typemoney == 2 ? 'selected' : ''; ?> value="2">เงินนอกงบประมาณ ง/ท.</option>
                    <option  <?= $allproduct->typemoney == 3 ? 'selected' : ''; ?> value="3">เงินบริจาค/เงินช่วยเหลือ</option>
                    <option  <?= $allproduct->typemoney == 4 ? 'selected' : ''; ?> value="4">อื่นๆ</option>
                  </select>
                </div>
              </div>
              <div class="col-xs-6">
                <div class="form-group">
                  <h4 for="exampleInputEmail1">วิธีการได้มา <span style="color: red;">*</span>
                  </h4>
                  <select class="form-control" name="howtocome" id="howtocome" disabled>
                    <option <?= $allproduct->howtocome == 1 ? 'selected' : ''; ?> value="1">ตกลงราคา</option>
                    <option <?= $allproduct->howtocome == 2 ? 'selected' : ''; ?> value="2">สอบราคา</option>
                    <option <?= $allproduct->howtocome == 3 ? 'selected' : ''; ?> value="3">ประกวดราคา</option>
                    <option <?= $allproduct->howtocome == 4 ? 'selected' : ''; ?> value="4">วิธีพิเศษ</option>
                    <option <?= $allproduct->howtocome == 5 ? 'selected' : ''; ?> value="5">เฉพาะเจาะจง</option>
                    <option <?= $allproduct->howtocome == 6 ? 'selected' : ''; ?> value="6">รับบริจาค</option>
                    <option <?= $allproduct->howtocome == 7 ? 'selected' : ''; ?> value="7">ประกาศอิเล็กทรอนิคส์</option>
                  </select>
                </div>
              </div>
            </div>

          </div>
        </form>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

      <div class="box box-success">
        <div class="box-header">

          <h3 class="box-title">ครุภัณฑ์</h3>


        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>ว/ด/ป</th>
                <th>รายการ</th>
                <th>จำนวนหน่วย</th>
                <th>ราคาต่อหน่วย/ชุด/กลุ่ม</th>
                <th>มูลค่ารวม</th>

              </tr>
            </thead>

            <tbody>
              <tr>
                <td>{{formatdate($allproduct->date_come)}}</td>
                <td>{{$allproduct->name}}</td>
                <td>{{$allproduct->unit}}</td>
                <td>{{$allproduct->priceperunit}}</td>
                <td>{{$allproduct->totalvalue}}</td>

              </tr>


            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>

      <div class="box box-success">
        <div class="box-header">

          <h3 class="box-title">เอกสารที่เกี่ยวข้อง</h3>

        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th style="width: 13px;">ลำดับ</th>
                <th>เอกสาร</th>
                <th>ที่</th>
                <th>ลง</th>

              </tr>
            </thead>

            <tbody>
             <?php $i=1; ?>
             @foreach ($documents as $key => $document)
             <tr>
               <td>{{$i}}</td>
               <td>{{$document->note}}</td>
               <td>{{$document->number_note}}</td>
               <td>{{$document->date_note}}</td>

             </tr>
             <?php $i++; ?>
             @endforeach

           </tbody>
         </table>
       </div>
       <!-- /.box-body -->
     </div>




     <div class="box box-success">
      <div class="box-header">

        <h3 class="box-title">ครุภัณฑ์ประกอบ</h3>

      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table id="example2" class="table table-bordered table-hover">
          <thead>
            <tr>
              <th style="width: 13px;">ลำดับ</th>
              <th>รายการ</th>
              <th>จำนวนหน่วย</th>
            </tr>
          </thead>

          <tbody>
           <?php $i=1; ?>
           @foreach ($durables as $key => $durable)
           <tr>
             <td>{{$i}}</td>
             <td>{{$durable->sub_durable}}</td>
             <td>{{$durable->num_durable}}</td>

           </tr>
           <?php $i++; ?>
           @endforeach


         </tbody>
       </table>
     </div>
     <!-- /.box-body -->
   </div>

   <div class="box box-success">
    <div class="box-header">

      <div class="row">
        <div class="col-md-10">
          <h3 class="box-title">ประวัติการซ่อมบำรุงรักษาทรัพย์</h3>
        </div>

      </div>


    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <table id="example2" class="table table-bordered table-hover">
        <thead>
          <tr>
            <th style="
            text-align: center;width: 13px;
            ">ครั้งที่</th>
            <th style="
            text-align: center;
            ">วันเดือนปี</th>
            <th style="
            text-align: center;
            ">รายการ</th>
            <th style="
            text-align: center;
            ">จำนวนเงิน</th>
            <th style="
            text-align: center;
            ">หมายเหตุ</th>

            <!-- <th style="width: 130px; text-align: center;">จัดการ</th> -->

          </tr>
        </thead>

        <tbody id="data_note">
         <?php $i=1; ?>
         @foreach ($historys as $key => $history)
         <tr>
           <td>{{$i}}</td>
           <td>{{$history->history_date}}</td>
           <td>{{$history->history_list}}</td>
           <td>{{$history->history_cur}}</td>
           <td>{{$history->history_note}}</td>
         </tr>
         <?php $i++; ?>
         @endforeach

       </tbody>
       <tfoot>
                                              <!--   <tr>
                                                    <th colspan="3" style="
                                                    text-align: right;
                                                    ">รวม</th>
                                                    <th style="text-align: right;">322,200.00</th>

                                                    <th> </th>

                                                    <th> </th>
                                                  </tr> -->
                                                </tfoot>

                                              </table>
                                            </div>
                                            <!-- /.box-body -->
                                          </div>

                                          <!-- Form Element sizes -->
                                          <div class="box box-success">

                                            <div class="box-header with-border">

                                              <h3 class="box-title">หมายเหตุ</h3>
                                            </div>

                                            <form role="form">
                                              <div class="box-body">

                                                <div class="row">
                                                  <div class="col-xs-12">
                                                    <div class="form-group">
                                                      <textarea class="form-control" rows="5" id="comment"
                                                      disabled="">{{$allproduct->comment}}</textarea>
                                                    </div>
                                                  </div>
                                                </div>




                                              </div>
                                            </form>
                                            <!-- /.box-body -->
                                          </div>
                                          <!-- /.box -->



                                          <!-- Form Element sizes -->
                                          <div class="box box-success">

                                            <div class="box-header with-border">

                                              <h3 class="box-title">ตรวจถูกต้อง</h3>
                                            </div>

                                            <form role="form">
                                              <div class="box-body">

                                                <div class="row">
                                                  <div class="col-xs-5">
                                                    <div class="form-group">
                                                      <h4 for="exampleInputEmail1">ผู้ตรวจ</h4>
                                                      <input type="text" class="form-control" id="exampleInputEmail1"
                                                      disabled value="{{$allproduct->inspector}}" disabled="">
                                                    </div>
                                                  </div>
                                                  <div class="col-xs-4">
                                                    <div class="form-group">
                                                      <h4 for="exampleInputEmail1">ตำแหน่ง</h4>
                                                      <input type="email" class="form-control" id="exampleInputEmail1"
                                                      disabled value="{{$allproduct->position}}" disabled="">
                                                    </div>
                                                  </div>
                                                  <div class="col-xs-3">
                                                    <div class="form-group">
                                                      <h4 for="exampleInputEmail1">วันที่</h4>
                                                      <input type="email" class="form-control" id="exampleInputEmail1" disabled value="{{$allproduct->date}}"
                                                      disabled="">
                                                    </div>
                                                  </div>
                                                </div>



                                              </div>
                                            </form>
                                            <!-- /.box-body -->
                                          </div>
                                          <!-- /.box -->

                                        </div>






                                        <div class="col-md-12">
                                          <div class="row">
                                            <div class="col-md-12">

                                              <a href="{{url('submitproductdetailaprove',$allproduct->id_allproduct)}}" class="btn btn-block btn-success">อนุมัติ</a>

                                            </div>

                                          </div>

                                        </div>

                                      </div>




                                    </section>
                                    <!-- /.content -->
                                    <!-- /.content -->



                                  </div>
                                  <!-- /.content-wrapper -->
                                  @endsection

                                  @section('script')
                                  {{-- <script>
                                    $(function () {
                                      $("#example1").DataTable();
    // $('#example2').DataTable({
    //   "paging": false,
    //   "lengthChange": false,
    //   "searching": false,
    //   "ordering": false,
    //   "info": false,
    //   "autoWidth": false
    // });
  });
</script> --}}
@endsection
