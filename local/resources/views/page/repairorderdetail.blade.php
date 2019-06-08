@extends('layouts.main')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>บันทึกการซ่อมเครื่องจักร</h1>
  </section>


  <section class="content">

    <div class="row">
      <div class="col-md-12">
        <div class="box box-success">

          <div class="box-header with-border">
            <h3 class="box-title">ใบบันทึกการซ่อมเครื่องจักร</h3>
          </div>

          <form role="form">
            <div class="box-body">


              <div class="row">
                <div class="col-xs-3">
                 <div class="form-group">
                   <h4 for="exampleInputEmail1">แผนก <span style="color: red;">*</span></h4>  
                   <input type="text" class="form-control" name="department" placeholder="{{$repairs->repair_department}}" disabled>
                   <!-- <select class="form-control" name="department" >
                    <option value="1">สำนักผู้บังคับบัญชา</option>
                    <option value="2">นายทหารพระธรรมนูญ</option>
                    <option value="3">นายทหารตรวจสอบภายใน</option>
                    <option value="4">บก.กองกลาง</option>
                    <option value="5">แผนธุรการและกำลังพล</option>
                    <option value="6">แผนกจัดหา</option>
                    <option value="7">แผนกเก็บรักษาและแจกจ่าย</option>
                    <option value="8">แผนกขนส่ง</option>
                    <option value="9">บก.กองนโยบายและแผน</option>
                    <option value="10">แผนกขาย</option>
                    <option value="11">แผนกนโยบายและแผน</option>
                    <option value="12">แผนกบัญชีคุม</option>
                    <option value="13">ศูนย์สารสนเทศ</option>
                    <option value="14">บก.กองวิจัยและประกันคุณภาพ</option>
                    <option value="15">แผนกควบคุมคุณภาพ 1</option>
                    <option value="16">แผนกควบคุมคุณภาพ 2</option>
                    <option value="17">แผนกวิจัยและพัฒนา</option>
                    <option value="18">บก.กองโรงงานผลิตยา</option>
                    <option value="19">แผนกซ่อมบำรุงและบริการการผลิต</option>
                    <option value="20">แผนกยาน้ำและขี้ผึ้ง</option>
                    <option value="21">แผนกยาเม็ดและยาผง</option>
                    <option value="22">แผนกยาปราศจากเชื้อ</option>
                    <option value="23">แผนกผลิตภัณฑ์สมุนไพร</option>
                    <option value="24">บก.กองบริการ</option>
                    <option value="25">แผนกพยาบาล</option>
                    <option value="26">แผนกบริการ</option>
                  </select> -->
                </div>
              </div>    
              <div class="col-xs-3">
               <div class="form-group">
                 <h4 for="exampleInputEmail1">วันที่ <span style="color: red;">*</span></h4>  
                 <input type="text" class="form-control" id="exampleInputEmail1" placeholder="{{$repairs->repair_date}}"  disabled="">
               </div>
             </div>
             <div class="col-xs-3">
               <div class="form-group">
                 <h4 for="exampleInputEmail1">เลขที่รับเรื่องซ่อม <span style="color: red;">*</span></h4>  
                 <input type="text" class="form-control" id="exampleInputEmail1" placeholder="{{$repairs->repair_receipt_number}}" disabled="">
               </div>
             </div>
             <div class="col-xs-3">
               <div class="form-group">
                 <h4 for="exampleInputEmail1">เรื่อง <span style="color: red;">*</span></h4>  
                 <input type="text" class="form-control" id="exampleInputEmail1" placeholder="{{$repairs->repair_subject}}" disabled="">
               </div>
             </div>
           </div>



           <div class="row">

            <div class="col-xs-3">
             <div class="form-group">
               <h4 for="exampleInputEmail1">รหัส <span style="color: red;">*</span></h4>  
               <input type="text" class="form-control" id="exampleInputEmail1" placeholder="{{$repairs->code}}" disabled="">
             </div>
           </div>  
           <div class="col-xs-3">
             <div class="form-group">
               <h4 for="exampleInputEmail1">สายบริการเทคนิคที่ควบคุม <span style="color: red;">*</span></h4>  
               <select class="form-control"  disabled="">
                 <option <?= $repairs->service_for == 1 ? 'selected' : ''; ?> value="1">สายแพทย์</option>
                 <option <?= $repairs->service_for == 2 ? 'selected' : ''; ?> value="2">สายแพทย์(พยาบาล)</option>
                 <option <?= $repairs->service_for == 3 ? 'selected' : ''; ?> value="3">สายพลาธิการ</option>
                 <option <?= $repairs->service_for == 4 ? 'selected' : ''; ?> value="4">สายยุทธโยธา</option>
                 <option <?= $repairs->service_for == 5 ? 'selected' : ''; ?> value="5">สายสื่อสาร (ปกติ และ ทสอ)</option>
                 <option <?= $repairs->service_for == 6 ? 'selected' : ''; ?> value="6">สายวิทยาศาสตร์</option>
                 <option <?= $repairs->service_for == 7 ? 'selected' : ''; ?> value="7">สายขนส่ง</option>
                 <option <?= $repairs->service_for == 8 ? 'selected' : ''; ?> value="8">สายสรรพาวุธ</option>
                 <option <?= $repairs->service_for == 9 ? 'selected' : ''; ?> value="9">สายช่าง</option>
               </select>
             </div>
           </div>   
           <div class="col-xs-3">
            <div class="form-group">
              <h4 for="exampleInputEmail1">ประเภทสิ่งอุปกรณ์ <span style="color: red;">*</span></h4>  
              <select class="form-control"  disabled="">
                <option <?= $repairs->category == 1 ? 'selected' : ''; ?> value="1">1. อาคารถาวร</option>
                <option <?= $repairs->category == 2 ? 'selected' : ''; ?> value="2">2. อาคารชั่วคราว/โรงเรือน</option>
                <option <?= $repairs->category == 3 ? 'selected' : ''; ?> value="3">3.1 สิ่งก่อสร้างใช้คอนกรีตเสริมเหล็กหรือโครงเหล็กเป็นส่วนประกอบ</option>
                <option <?= $repairs->category == 4 ? 'selected' : ''; ?> value="4">3.2 สิ่งก่อสร้างใช้ไม้หรือวัสดุอื่นๆ เป็นส่วนประกอบหลัก</option>
                <option <?= $repairs->category == 5 ? 'selected' : ''; ?> value="5">4. ครุภัณฑ์สำนักงาน</option>
                <option <?= $repairs->category == 6 ? 'selected' : ''; ?> value="6">5. ครุภัณฑ์ยานพาหนะและขนส่ง</option>
                <option <?= $repairs->category == 7 ? 'selected' : ''; ?> value="7">6. ครุภัณฑ์ไฟฟ้าและวิทยุ</option>
                <option <?= $repairs->category == 8 ? 'selected' : ''; ?> value="8">7. ครุภัณฑ์โฆษณาและเผยแพร่</option>
                <option <?= $repairs->category == 9 ? 'selected' : ''; ?> value="9">8.1 ครุภัณฑ์การเกษตรเครื่องมือและอุปกรณ์</option>
                <option <?= $repairs->category == 10 ? 'selected' : ''; ?> value="10">8.2 ครุภัณฑ์การเกษตรเครื่องจักรกล </option>
                <option <?= $repairs->category == 11 ? 'selected' : ''; ?> value="11">9.1 ครุภัณฑ์โรงงานเครื่องมือและอุปกรณ์</option>
                <option <?= $repairs->category == 12 ? 'selected' : ''; ?> value="12">9.2 ครุภัณฑ์โรงงานเครื่องจักรกล</option>
                <option <?= $repairs->category == 13 ? 'selected' : ''; ?> value="13">10.1 ครุภัณฑ์ก่อสร้างเครื่องมือและอุปกรณ์</option>
                <option <?= $repairs->category == 14 ? 'selected' : ''; ?> value="14">10.2 ครุภัณฑ์ก่อสร้างเครื่องจักรกล</option>
                <option <?= $repairs->category == 15 ? 'selected' : ''; ?> value="15">11. ครุภัณฑ์สำรวจ</option>
                <option <?= $repairs->category == 16 ? 'selected' : ''; ?> value="16">12. ครุภัณฑ์วิทยาศาสตร์และการแพทย์</option>
                <option <?= $repairs->category == 17 ? 'selected' : ''; ?> value="17">13. ครุภัณฑ์คอมพิวเตอร์</option>
                <option <?= $repairs->category == 18 ? 'selected' : ''; ?> value="18">14. ครุภัณฑ์การศึกษา</option>
                <option <?= $repairs->category == 19 ? 'selected' : ''; ?> value="19">15. ครุภัณฑ์งานบ้านงานครัว</option>
                <option <?= $repairs->category == 20 ? 'selected' : ''; ?> value="20">16. ครุภัณฑ์กีฬา/กายภาพ</option>
                <option <?= $repairs->category == 21 ? 'selected' : ''; ?> value="21">17. ครุภัณฑ์ดนตรี/นาฏศิลป์</option>
                <option <?= $repairs->category == 22 ? 'selected' : ''; ?> value="22">18. ครุภัณฑ์อาวุธ</option>
                <option <?= $repairs->category == 23 ? 'selected' : ''; ?> value="23">19. ครุภัณฑ์สนาม</option>
                <option <?= $repairs->category == 24 ? 'selected' : ''; ?> value="24">20.1 สินทรัพย์โครงสร้างพื้นฐาน ถนนคอนกรีต</option>
                <option <?= $repairs->category == 25 ? 'selected' : ''; ?> value="25">20.2 สินทรัพย์โครงสร้างพื้นฐาน ถนนราดยาง</option>
                <option <?= $repairs->category == 26 ? 'selected' : ''; ?> value="26">20.3 สินทรัพย์โครงสร้างพื้นฐาน สะพานคอนกรีตเสิรมเหล็ก</option>
                <option <?= $repairs->category == 27 ? 'selected' : ''; ?> value="27">20.4 สินทรัพย์โครงสร้างพื้นฐาน เขื่อนดิน</option>
                <option <?= $repairs->category == 28 ? 'selected' : ''; ?> value="28">20.5 สินทรัพย์โครงสร้างพื้นฐาน เขื่อนปูน</option>
                <option <?= $repairs->category == 29 ? 'selected' : ''; ?> value="29">20.6 สินทรัพย์โครงสร้างพื้นฐาน อ่างเก็บน้ำ</option>
                <option <?= $repairs->category == 30 ? 'selected' : ''; ?> value="30">21. ครุภัณฑ์อื่น</option>
                <option <?= $repairs->category == 31 ? 'selected' : ''; ?> value="31">22. สินทรัพย์ไม่มีตัวตน</option>
              </select>
            </div>
          </div> 
          <div class="col-xs-3">
           <div class="form-group">
            <h4 for="exampleInputEmail1">ประเภทเงิน <span style="color: red;">*</span></h4>   
            <select class="form-control"  disabled="">
             <option  <?= $repairs->typemoney == 1 ? 'selected' : ''; ?> value="1">เงินงบประมาณ</option>
             <option  <?= $repairs->typemoney == 2 ? 'selected' : ''; ?> value="2">เงินนอกงบประมาณ ง/ท.</option>
             <option  <?= $repairs->typemoney == 3 ? 'selected' : ''; ?> value="3">เงินบริจาค/เงินช่วยเหลือ</option>
             <option  <?= $repairs->typemoney == 4 ? 'selected' : ''; ?> value="4">อื่นๆ</option>
           </select>
         </div>
       </div>
     </div>


   </div>
 </form>
</div> 

<div class="box box-success">
  <div class="box-header">



    <div class="row">
      <div class="col-md-12">
       <h3 class="box-title">รายการซ่อม</h3> 
     </div>  
   </div>
 </div>
 <!-- /.box-header -->
 <div class="box-body">
  <table id="example2" class="table table-bordered table-hover">
    <thead>
      <tr>
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
     </tr>
   </thead>
   <?php  $value = $repairs->totalvalue;
   $res = $value*7/100;
   $vat = $value + $res;
   ?>
   <tbody>
    <tr>
     <td style="text-align: center;">1.</td>
     <td>{{$repairs->name}}</td>
     <td style="text-align: center;">{{$repairs->unit}}</td>
     <td style="text-align: center;">{{formatdate($repairs->date_come)}}</td>
     <td style="text-align: center;">{{service_for($repairs->service_for)}}</td>    
     <td style="text-align: center;">{{$repairs->property}}</td>    
     <td style="text-align: center;">{{department($repairs->department)}}</td>
     <td style="text-align: center;">{{$repairs->code}}</td>
     <td>{{$repairs->brand}}</td>
     <td> - </td> 
     <td style="text-align: right;">{{$vat}}</td>   
     <td style="text-align: center;">
      <a class="btn btn-xs" href="../productdetail/{{$repairs->id_allproduct}}" role="button" style="background-color:  #00a659;color: white;    margin: 0;">
      รายละเอียด</a>
    </td>  
  </tr>





</tbody> 
</table>

</div>
<!-- /.box-body -->
</div> 




<!-- Form Element sizes -->
<div class="box box-success">

  <div class="box-header with-border">

    <h3 class="box-title">อาการผิดปกติ</h3>
  </div>

  <form role="form">
    <div class="box-body">

     <div class="row">
      <div class="col-xs-12">
       <div class="form-group">
         <textarea class="form-control" rows="5" id="comment" disabled="">{{$repairs->repair_symptoms}}</textarea>
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
         <h4 for="exampleInputEmail1">ผู้ขอดำเนินการซ่อม</h4>   
         <input type="text" class="form-control" id="exampleInputEmail1" placeholder="{{$repairs->repair_officer}}" disabled="">
       </div>
     </div>
     <div class="col-xs-4">
       <div class="form-group">
         <h4 for="exampleInputEmail1">ตำแหน่ง</h4>   
         <input type="text" class="form-control" id="exampleInputEmail1" placeholder="{{$repairs->repair_position}}" disabled="">
       </div>
     </div>
     <div class="col-xs-3">
       <div class="form-group">
         <h4 for="exampleInputEmail1">วันที่</h4>   
         <input type="text" class="form-control" id="exampleInputEmail1" placeholder="{{$repairs->date_officer}}" disabled="">
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
     <a href="{{url('repair')}}" class="btn btn-block btn-success">กลับสู่หน้าหลัก</a>
   </div>     
 </div>

</div>

</div>




</section>
<!-- /.content -->



</div>
<!-- /.content-wrapper -->
@endsection

@section('script')
{{-- <script>
  $(function () {
    $("#example1").DataTable();

  });
</script> --}}
@endsection
