@extends('layouts.main')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>ทะเบียนคุมทรัพสิน</h1>
    </section>


    <!-- Main content -->
    <section class="content">


        <div class="row">
          <!-- left column -->
          <div class="col-md-12">

            <!-- Form Element sizes -->
            <div class="box box-success">

              <div class="box-header with-border">

                <h3 class="box-title">ทะเบียนคุมทรัพสิน (งป.)</h3>
            </div>

            <form action="{{url('product/update')}}" method="POST">
               @csrf
               <input type="hidden" name="id" id="id_allproduct" value="{{$allproduct->id_allproduct}}">
               <div class="box-body">

                <div class="row">
                    <div class="col-xs-3">

                        <div class="form-group">
                            <h4 for="exampleInputEmail1">ประเภท  <span style="color: red;">*</span></h4>
                            <select class="form-control" name="category" id="category">
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
                     value="{{$allproduct->code}}">
                 </div>
                 <div class="col-xs-3">
                    <div class="form-group">
                        <h4 for="exampleInputEmail1">ลักษณะ/คุณสมบัติ <span style="color: red;">*</span>
                        </h4>
                        <input type="text" name="property" class="form-control" id="property"
                        value="{{$allproduct->property}}">
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="form-group">
                        <h4 for="exampleInputEmail1">รุ่น/แบบ <span style="color: red;">*</span></h4>
                        <input type="text" class="form-control" name="model" id="model"  value="{{$allproduct->model}}">
                    </div>
                </div>

            </div>


            <div class="row">
                <div class="col-xs-3">
                    <div class="form-group">
                        <h4 for="exampleInputEmail1">หน่วยงานรับผิดชอบ <span
                            style="color: red;">*</span></h4>
                            <select class="form-control" name="responsibleagency" id="responsibleagency">
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
                            <select class="form-control" name="service_for" id="service_for" >
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
                                <input type="text" class="form-control" id="dealer" name="dealer" value="{{$allproduct->dealer}}">
                            </div>
                        </div>

                        <div class="col-xs-3">
                            <div class="form-group">
                                <h4 for="exampleInputEmail1">ยี่ห้อ <span style="color: red;">*</span></h4>
                                <input type="text" class="form-control" name="brand" value="{{$allproduct->brand}}" placeholder=" ">
                            </div>
                        </div>

                    </div>


                    <div class="row">



                        <div class="col-xs-8">
                           <div class="form-group">
                            <h4 for="exampleInputEmail1">ที่อยู่</h4>   
                            <input type="text" class="form-control" name="location" id="exampleInputEmail1" value="{{$allproduct->location}}">
                        </div>
                    </div>

                    <div class="col-xs-4">
                     <div class="form-group">
                        <h4 for="exampleInputEmail1">โทรศัพท์</h4>   
                        <input type="text" class="form-control" id="exampleInputEmail1" name="tel" value="{{$allproduct->tel}}">
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-xs-6">
                    <div class="form-group">
                        <h4 for="exampleInputEmail1">ประเภทเงิน <span style="color: red;">*</span></h4>
                        <select class="form-control" name="typemoney" id="typemoney">
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
                        <select class="form-control" name="howtocome" id="howtocome">
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


        <div class="row">
            <div class="col-md-10">
                <h3 class="box-title">เอกสารที่เกี่ยวข้อง</h3>
            </div>
            <div class="col-md-2">
                <button type="button" class="btn btn-block btn-success" data-toggle="modal" data-target="#document">เพิ่มเอกสาร</button>
            </div>
        </div>

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
                    <th style="width: 130px;">ลบ</th>

                </tr>
            </thead>

            <tbody id="data_document">
                <?php $i=1; ?>
                @foreach ($documents as $key => $document)
                <tr>
                   <td>{{$i}}</td> 
                   <td>{{$document->note}}</td> 
                   <td>{{$document->number_note}}</td> 
                   <td>{{formatdate($document->date_note)}}</td> 
                   <td>
                    <button class="btn btn-danger btn-xs delete_sub_document" data-id="{{$document->id_note}}">ลบ</button>
                </td> 
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
                <h3 class="box-title">ครุภัณฑ์ประกอบ</h3>
            </div>
            <div class="col-md-2">
                <button type="button" class="btn btn-block btn-success" data-toggle="modal" data-target="#durable">  เพิ่มครุภัณฑ์ประกอบ</button>
            </div>
        </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="example2" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th style="width: 13px;">ลำดับ</th>
                    <th>รายการ</th>
                    <th>จำนวนหน่วย</th>
                    <th style="width: 130px;">ลบ</th>

                </tr>
            </thead>

            <tbody id="sub_main">
                <?php $i=1; ?>
                @foreach ($durables as $key => $durable)
                <tr>
                   <td>{{$i}}</td> 
                   <td>{{$durable->sub_durable}}</td> 
                   <td>{{$durable->num_durable}}</td> 
                   <td>
                    <button class="btn btn-danger btn-xs delete_sub_durable" data-id="{{$durable->id_durable}}">ลบ</button>
                </td> 
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
            <div class="col-md-2">
                <button type="button"
                class="btn btn-block btn-success" data-toggle="modal" data-target="#repair">เพิ่มประวัติการซ่อมบำรุง</button>
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
                    <th style="width: 130px;">ลบ</th>

                    <!-- <th style="width: 130px; text-align: center;">จัดการ</th> -->

                </tr>
            </thead>

            <tbody id="data_note">
               <?php $i=1; ?>
               @foreach ($historys as $key => $history)
               <tr>
                   <td>{{$i}}</td> 
                   <td>{{formatdate($history->history_date)}}</td> 
                   <td>{{$history->history_list}}</td> 
                   <td>{{$history->history_cur}}</td> 
                   <td>{{$history->history_note}}</td> 
                   <td>
                    <button class="btn btn-danger btn-xs delete_sub_history" data-id="{{$history->id_history}}">ลบ</button>
                </td> 
            </tr>
            <?php $i++; ?>
            @endforeach

        </tbody>
        <tfoot>

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

<div class="box-body">

  <div class="row">
    <div class="col-xs-12">
      <div class="form-group">
        <textarea class="form-control" rows="5" id="comment" name="comment"> {{$allproduct->comment}} </textarea>
    </div>
</div>
</div>




</div>
<!-- /.box-body -->
</div>
<!-- /.box -->



<!-- Form Element sizes -->
<div class="box box-success">

  <div class="box-header with-border">

    <h3 class="box-title">ตรวจถูกต้อง</h3>
</div>

<div class="box-body">

    <div class="row">
        <div class="col-xs-5">
            <div class="form-group">
                <h4 for="exampleInputEmail1">ผู้ตรวจ</h4>
                <input type="text" class="form-control" id="inspector" name="inspector" value="{{$allproduct->inspector}}">
            </div>
        </div>
        <div class="col-xs-4">
            <div class="form-group">
                <h4 for="exampleInputEmail1">ตำแหน่ง</h4>
                <input type="text" class="form-control" id="position" name="position" value="{{$allproduct->position}}">
            </div>
        </div>
        <div class="col-xs-3">
            <div class="form-group">
                <h4 for="exampleInputEmail1">วันที่</h4>
                <input type="date" class="form-control" id="date" name="date" value="{{$allproduct->date}}">
            </div>
        </div>
    </div>



</div>
<!-- /.box-body -->
</div>
<!-- /.box -->

</div>






<div class="col-md-12">
    <div class="row">
      <div class="col-md-12">
       <!-- <a class="btn btn-xs submit_form" role="button" data-id="{{$allproduct->id_allproduct}}" style="background-color:  #ff6c6c;color: white;    margin: 0;"> -->
        <!-- <i class="fa fa-fw fa-trash"></i> ลบ</a> -->
        <button type="submit" data-id="{{$allproduct->id_allproduct}}" class="btn btn-block btn-success submit_form">แก้ไขเอกสาร</button>

    </div>

</div>

</div>

</div>
</form>




</section>
<!-- /.content -->
<!-- /.content -->

<!-- Modal -->
<div class="modal fade" id="durable" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">เพิ่มครุภัณฑ์ประกอบ</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
  </div>
  <div class="modal-body">
      <div class="form-group">
        <label for="recipient-name" class="col-form-label"> รายการ : </label>
        <input type="text" class="form-control" id="sub_durable" >
    </div>
    <div class="form-group row ">
     &nbsp;  &nbsp; <label for="recipient-name" class="col-form-label"> จำนวนหน่วย : </label>
     <input type="text" id="num_durable" style="width:20%" >
 </div>

</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
    <button type="button" class="btn btn-primary durable_submit">เพิ่ม</button>
</div>
</div>
</div>
</div>


<!-- document -->
<!-- Modal -->
<div class="modal fade" id="document" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">เพิ่มเอกสาร</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
  </div>
  <div class="modal-body">
     <div class="form-group row ">
         &nbsp;  &nbsp; <label for="recipient-name" class="col-form-label"> เลขที่ : </label>
         <input type="text" name="num_document" id="num_document" style="width:20%" >
         &nbsp;  &nbsp; <label for="recipient-name" class="col-form-label">  ลงวันที่ : </label>
         <input type="date" name="date_document" id="date_document" >
     </div>

     <div class="form-group">
        <label for="recipient-name" class="col-form-label"> เอกสาร : </label>
        <textarea type="text" class="form-control" name="sub_document" id="sub_document" ></textarea>
    </div>



    </>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
    <button type="button" class="btn btn-primary document_submit">เพิ่ม</button>
</div>
</div>
</div>
</div>

<!-- repair -->

<!-- Modal -->
<div class="modal fade" id="repair" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">เพิ่มประวัติการซ่อมบำรุง</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
  </div>
  <div class="modal-body">
     <div class="form-group row ">
         &nbsp;  &nbsp; <label for="recipient-name" class="col-form-label">  วัน/เดือน/ปี : </label>
         <input type="date" id="date_repair" >
     </div>

     <div class="form-group">
        <label for="recipient-name" class="col-form-label"> รายการ : </label>
        <input type="text" class="form-control" id="sub_repair" >
    </div>

    <div class="form-group">
        <label for="recipient-name" class="col-form-label"> จำนวนเงิน : </label>
        <input type="text" class="form-control" id="amount" >
    </div>

    <div class="form-group">
        <label for="recipient-name" class="col-form-label"> หมายเหตุ : </label>
        <textarea class="form-control" id="note"></textarea>
    </div>


</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
    <button type="button" class="btn btn-primary repair_submit">เพิ่ม</button>
</div>
</div>
</div>
</div>

</div>
<!-- /.content-wrapper -->

<script type="text/javascript">
    $(document).ready(function(){
            // ------------------------------------ durable
            var id = $("#id_allproduct").val();

            $(".durable_submit").click(function(){
              var sub_durable= $("#sub_durable").val();
              var num_durable= $("#num_durable").val();

              $.ajax({
                method: 'POST',
                url: "{{url('durable')}}", 
                data:{
                  _token: "{{ csrf_token() }}", 
                  id : id,
                  sub_durable : sub_durable,
                  num_durable : num_durable
              },
              success:function(data){
                location.reload();
            }
        });


          })
        // ------------------------------------ durable

        // ------------------------------------ document
        var doc_count = 0;
        $(".document_submit").click(function(){
          doc_count++;
          var sub_document= $("#sub_document").val();
          var date_document= $("#date_document").val();
          var num_document= $("#num_document").val();
          $.ajax({
            method: 'POST',
            url: "{{url('document')}}", 
            data:{
              _token: "{{ csrf_token() }}", 
              id : id,
              sub_document : sub_document,
              date_document : date_document,
              num_document : num_document
          },
          success:function(data){
            location.reload();
        }
    });
      })
        // ------------------------------------ document

        // ------------------------------------ note
        var note_count = 0;
        $(".repair_submit").click(function(){
          note_count++;

          var history_date= $("#date_repair").val();
          var history_list= $("#sub_repair").val();
          var history_cur= $("#amount").val();
          var history_note= $("#note").val();

          $.ajax({
            method: 'POST',
            url: "{{url('history')}}", 
            data:{
              _token: "{{ csrf_token() }}", 
              id : id,
              history_date : history_date,
              history_list : history_list,
              history_cur : history_cur,
              history_note : history_note
          },
          success:function(data){
            location.reload();
        }
    });


      })

        $(".delete_sub_history").click(function(){
            var x = $(this).attr("data-id");
            var r = confirm("ยืนยันการลบข้อมูล ?");
            if (r == true) {
                $.ajax({
                    url: "{{url('delete/history')}}/" + x, 
                    method: "post", 
                    data: {
                        _token: "{{ csrf_token() }}",
                        id: x
                    },

                    success: function (result) { 

                        location.reload();


                    }
                });
            }
        })

        $(".delete_sub_durable").click(function(){
            var x = $(this).attr("data-id");
            var r = confirm("ยืนยันการลบข้อมูล ?");
            if (r == true) {
                $.ajax({
                    url: "{{url('delete/durable')}}/" + x, 
                    method: "post", 
                    data: {
                        _token: "{{ csrf_token() }}",
                        id: x
                    },

                    success: function (result) { 

                        location.reload();


                    }
                });
            }
        })

        $(".delete_sub_document").click(function(){
            var x = $(this).attr("data-id");
            var r = confirm("ยืนยันการลบข้อมูล ?");
            if (r == true) {
                $.ajax({
                    url: "{{url('delete/document')}}/" + x, 
                    method: "post", 
                    data: {
                        _token: "{{ csrf_token() }}",
                        id: x
                    },

                    success: function (result) { 

                        location.reload();


                    }
                });
            }
        })
        
    });
</script>

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
