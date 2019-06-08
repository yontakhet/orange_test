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


          <form id="form_edit" method="POST">
           @csrf
           <input type="hidden" name="id" value="{{$repairs->id_dep}}">
           <div class="box-body">


            <div class="row">
              <div class="col-xs-3">
               <div class="form-group">
                 <h4 for="exampleInputEmail1">แผนก <span style="color: red;">*</span></h4>  
                 <input type="text" class="form-control" id="department" name="department" value="{{$repairs->repair_department}}">
               </div>
             </div>    
             <div class="col-xs-3">
               <div class="form-group">
                 <h4 for="exampleInputEmail1">วันที่ <span style="color: red;">*</span></h4>  
                 <input type="date" class="form-control" id="date" name="date" value="{{$repairs->repair_date}}">
               </div>
             </div>
             <div class="col-xs-3">
               <div class="form-group">
                 <h4 for="exampleInputEmail1">เลขที่รับเรื่องซ่อม <span style="color: red;">*</span></h4>  
                 <input type="text" class="form-control" id="receipt_number" name="receipt_number" value="{{$repairs->repair_receipt_number}}">
               </div>
             </div>
             <div class="col-xs-3">
               <div class="form-group">
                 <h4 for="exampleInputEmail1">เรื่อง <span style="color: red;">*</span></h4>  
                 <input type="text" class="form-control" id="subject" name="subject" value="{{$repairs->repair_subject}}">
               </div>
             </div>
           </div>



           <div class="row">

            <div class="col-xs-3">
             <div class="form-group">
               <h4 for="exampleInputEmail1">รหัส <span style="color: red;">*</span></h4>  
               <input type="text" class="form-control"  placeholder="{{$repairs->repair_code}}" disabled>
               <input type="hidden" class="form-control" id="code" name="code" value="{{$repairs->repair_code}}" >
             </div>
           </div>  
           <div class="col-xs-3">
             <div class="form-group">
               <h4 for="exampleInputEmail1">สายบริการเทคนิคที่ควบคุม <span style="color: red;">*</span></h4>  
               <select class="form-control"  disabled="">
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
          <div class="col-xs-3">
            <div class="form-group">
              <h4 for="exampleInputEmail1">ประเภทสิ่งอุปกรณ์ <span style="color: red;">*</span></h4>  
              <select class="form-control"  disabled="">
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
            <h4 for="exampleInputEmail1">ประเภทเงิน <span style="color: red;">*</span></h4>   
            <select class="form-control"  disabled="">
              <option>เงินงบประมาณ</option>
              <option>เงินนอกงบประมาณ ง/ท.</option>
              <option>เงินบริจาค/เงินช่วยเหลือ</option>
              <option>อื่นๆ</option>
            </select>
          </div>
        </div>
      </div>


    </div>

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

  <div class="box-body">

   <div class="row">
    <div class="col-xs-12">
     <div class="form-group">
       <textarea class="form-control" rows="5" id="symptoms" name="symptoms">{{$repairs->repair_symptoms}}</textarea>
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
       <input type="text" class="form-control" id="officer" name="officer" value="{{$repairs->repair_officer}}">
     </div>
   </div>
   <div class="col-xs-4">
     <div class="form-group">
       <h4 for="exampleInputEmail1">ตำแหน่ง</h4>   
       <input type="text" class="form-control" id="position" name="position" value="{{$repairs->repair_position}}">
     </div>
   </div>
   <div class="col-xs-3">
     <div class="form-group">
       <h4 for="exampleInputEmail1">วันที่</h4>   
       <input type="date" class="form-control" id="date_officer" name="date_officer" value="{{$repairs->date_officer}}">
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
   <div class="col-md-8">
    <button type="button" data-id="{{$repairs->id_dep}}" class="btn btn-block btn-success submit_form">แก้ไขเอกสาร</button>

  </div>   
  <div class="col-md-4">
   <a onclick="window.history.back();" class="btn btn-block btn-danger">ยกเลิกการสร้างเอกสาร</a>
 </div>    
</div>

</div>

</div>
</form>




</section>
<!-- /.content -->



</div>
<!-- /.content-wrapper -->

</div>
<!-- ./wrapper -->

<script type="text/javascript">
  $(document).on("click", ".submit_form", function () {
            // $('#memthod').val("put");
            var uid = $(this).attr("data-id"); //รับค่า id จากปุ่มวิวมาใส่ไว้ใน uid

            $.ajax({

              method: 'PUT',

              url: "{{url('repair')}}/" + uid,

              data: {
                _token: "{{ csrf_token() }}",
                _method: "PUT",
                department : $("#department").val(),
                date : $("#date").val(),
                receipt_number : $("#receipt_number").val(),
                subject : $("#subject").val(),
                code : $("#code").val(),
                symptoms : $("#symptoms").val(),
                officer : $("#officer").val(),
                position : $("#position").val(),
                date_officer : $("#date_officer").val(),

              },

              success: function (data) {

               window.history.back();

             }

           });
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
