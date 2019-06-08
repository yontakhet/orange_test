@extends('layouts.main')
@section('content')
<style type="text/css">
  #select2-code-container{
    height: 30px;
    background : white;
    }span.select2-selection.select2-selection--single{

      height: 38px;

    }
  </style>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>ใบเบิก ทบ.๔๐๐ – ๐๐๖ </h1>
    </section>


    <section class="content">

      <div class="row">
        <div class="col-md-12">
          <div class="box box-success">

            <div class="box-header with-border">
              <h3 class="box-title">ใบเบิก</h3>
            </div>

            <form action="{{route('withdraw.store')}}" method="POST" autocomplete="off">
              @csrf
              <div class="box-body">


                <div class="row">
                  <div class="col-xs-6">
                   <div class="form-group">
                     <h4 for="exampleInputEmail1">รหัสครุภัณฑ์  <span style="color: red;">*</span></h4>  


                     @if(isset($allproduct->id_allproduct))
                     <input type="hidden" class="form-control" name="id" id="awdaw" value="{{$allproduct->id_allproduct}}">
                     <input type="text" class="form-control" name="code" readonly value="{{$allproduct->code}}">
                     @else
                     <input type="hidden" class="form-control" name="id" id="awdaw" >
                     <select type="text" class="form-control" id="code" name="code" ></select>
                   </select>
                   @endif
                 </div>
               </div>    
               <div class="col-xs-3">
                 <div class="form-group">
                   <h4 for="exampleInputEmail1">ที่ <span style="color: red;">*</span></h4>  
                   <input type="text" class="form-control" id="address" placeholder=" " disabled="">
                   <input type="hidden" class="form-control" id="address_1" name="location">
                 </div>
               </div>
               <div class="col-xs-3">
                 <div class="form-group">
                   <h4 for="exampleInputEmail1">เบิกในกรณี <span style="color: red;">*</span></h4>  
                   <select class="form-control" name="requisition" id="requisition" >
                    <option value="1">ชั้นต้น</option>
                    <option value="2">ทดแทน</option>
                    <option value="3">ยืม</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="row">

              <div class="col-xs-3">
               <div class="form-group">
                 <h4 for="exampleInputEmail1">สายบริการเทคนิคที่ควบคุม <span style="color: red;">*</span></h4>  
                 <input type="hidden" name="service_for" id="service_for" >
                 <select class="form-control" id="service_forget" disabled>
                   <option value="1">สายพลาธิการ</option>
                   <option value="2">สายขนส่ง</option>
                   <option value="3">สายสื่อสาร (ปกติ และ ทสอ)</option>
                   <option value="4">สายแพทย์(พยาบาล)</option>
                   <option value="5">สายยุทธโยธา</option>
                   <option value="6">สายสรรพาวุธ</option>
                   <option value="7">สายแพทย์</option>
                   <option value="8">สายวิทยาศาสตร์</option>
                   <option value="9">สายช่าง</option>
                 </select>
               </div>
             </div>   
             <div class="col-xs-3">
              <div class="form-group">
                <h4 for="exampleInputEmail1">ประเภทสิ่งอุปกรณ์ <span style="color: red;">*</span></h4>  
                <input type="hidden" name="category" id="category">
                <select class="form-control" id="category_get" disabled >
                  <option value="1">1. อาคารถาวร</option>
                  <option value="2">2. อาคารชั่วคราว/โรงเรือน</option>
                  <option value="3">3.1 สิ่งก่อสร้างใช้คอนกรีตเสริมเหล็กหรือโครงเหล็กเป็นส่วนประกอบ</option>
                  <option value="4">3.2 สิ่งก่อสร้างใช้ไม้หรือวัสดุอื่นๆ เป็นส่วนประกอบหลัก</option>
                  <option value="5">4. ครุภัณฑ์สำนักงาน</option>
                  <option value="6">5. ครุภัณฑ์ยานพาหนะและขนส่ง</option>
                  <option value="7">6. ครุภัณฑ์ไฟฟ้าและวิทยุ</option>
                  <option value="8">7. ครุภัณฑ์โฆษณาและเผยแพร่</option>
                  <option value="9">8.1 ครุภัณฑ์การเกษตรเครื่องมือและอุปกรณ์</option>
                  <option value="10">8.2 ครุภัณฑ์การเกษตรเครื่องจักรกล</option>
                  <option value="11">9.1 ครุภัณฑ์โรงงานเครื่องมือและอุปกรณ์</option>
                  <option value="12">9.2 ครุภัณฑ์โรงงานเครื่องจักรกล</option>
                  <option value="13">10.1 ครุภัณฑ์ก่อสร้างเครื่องมือและอุปกรณ์</option>
                  <option value="14">10.2 ครุภัณฑ์ก่อสร้างเครื่องจักรกล</option>
                  <option value="15">11. ครุภัณฑ์สำรวจ</option>
                  <option value="16">12. ครุภัณฑ์วิทยาศาสตร์และการแพทย์</option>
                  <option value="17">13. ครุภัณฑ์คอมพิวเตอร์</option>
                  <option value="18">14. ครุภัณฑ์การศึกษา</option>
                  <option value="19">15. ครุภัณฑ์งานบ้านงานครัว</option>
                  <option value="20">16. ครุภัณฑ์กีฬา/กายภาพ</option>
                  <option value="21">17. ครุภัณฑ์ดนตรี/นาฏศิลป์</option>
                  <option value="22">18. ครุภัณฑ์อาวุธ</option>
                  <option value="23">19. ครุภัณฑ์สนาม</option>
                  <option value="24">20.1 สินทรัพย์โครงสร้างพื้นฐาน ถนนคอนกรีต</option>
                  <option value="25">20.2 สินทรัพย์โครงสร้างพื้นฐาน ถนนราดยาง</option>
                  <option value="26">20.3 สินทรัพย์โครงสร้างพื้นฐาน สะพานคอนกรีตเสิรมเหล็ก</option>
                  <option value="27">20.4 สินทรัพย์โครงสร้างพื้นฐาน เขื่อนดิน</option>
                  <option value="28">20.5 สินทรัพย์โครงสร้างพื้นฐาน เขื่อนปูน</option>
                  <option value="29">20.6 สินทรัพย์โครงสร้างพื้นฐาน อ่างเก็บน้ำ</option>
                  <option value="30">21. ครุภัณฑ์อื่น</option>
                  <option value="31">22. สินทรัพย์ไม่มีตัวตน</option>
                </select>
              </div>
            </div> 

            <div class="col-xs-3">
             <div class="form-group">
              <h4 for="exampleInputEmail1">ประเภทเงิน <span style="color: red;">*</span></h4>   
              <input type="hidden" name="typemoney" id="typemoney">
              <select class="form-control" id="typemoney_get" disabled>
                <option value="1">เงินงบประมาณ</option>
                <option value="2">เงินนอกงบประมาณ ง/ท.</option>
                <option value="3">เงินบริจาค/เงินช่วยเหลือ</option>
                <option value="4">อื่นๆ</option>
              </select>
            </div>
          </div>
          <div class="col-xs-3">
           <div class="form-group">
             <h4 for="exampleInputEmail1">เลขงานที่ <span style="color: red;">*</span></h4>  
             <input type="text" class="form-control" id="jobnumber" name="jobnumber" placeholder=" " >
           </div>
         </div>
       </div>


     </div>
     <!-- </form> -->
   </div>

   <div class="row">
    <div class="col-md-6 col-xs-12">

      <div class="box box-success">

        <div class="box-header with-border">
          <h3 class="box-title">จาก</h3>
        </div>

        <form role="form">
          <div class="box-body">


            <div class="row">

              <div class="col-xs-4">
                <div class="form-group">
                  <h4 for="exampleInputEmail1">หน่วยงานรับผิดชอบ <span style="color: red;">*</span></h4>   
                  <input type="hidden" name="responsibleagency" id="responsibleagency">
                  <select class="form-control"  id="responsibleagency_get" disabled="">
                   <option value="1">สำนักงานผู้บังคับบัญชา</option>
                   <option value="2">สำนักงานการเงิน</option>
                   <option value="3">สำนักงานงบประมาณ</option>
                   <option value="4">กองกลาง</option>
                   <option value="5">กองนโยบายและแผน</option>
                   <option value="6">กองวิจัยและประกันสุขภาพ</option>
                   <option value="7">กองโรงงานผลิตยา</option>
                   <option value="8">กองบริการ</option>
                 </select>
               </div>
             </div>

             <div class="col-xs-4">
              <div class="form-group">
                <h4 for="exampleInputEmail1">แผนก/หน่วยย่อย <span style="color: red;">*</span></h4>   
                <input type="hidden" name="department" id="department">

                <select class="form-control" id="department_get" disabled="">
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
               </select>
             </div>
           </div>

           <div class="col-xs-4">
            <div class="form-group">
              <h4 for="exampleInputEmail1">awdawd</h4>   
              <input type="text" class="form-control" id="location_get" placeholder=" " disabled="">
              <input type="hidden" class="form-control" name="location_get" id="location_get1">
            </div>
          </div>

        </div>



      </div>
      <!-- </form> -->
    </div>   
  </div>  
  <div class="col-md-6 col-xs-12">

    <div class="box box-success">

      <div class="box-header with-border">
        <h3 class="box-title">ถึง</h3>
      </div>

      <form role="form">
        <div class="box-body">


          <div class="row">

            <div class="col-xs-4">
              <div class="form-group">
                <h4 for="exampleInputEmail1">หน่วยงานรับผิดชอบ <span style="color: red;">*</span></h4>   
                <select class="form-control" name="responsibleagency_send">
                  <option value="1">สำนักงานผู้บังคับบัญชา</option>
                  <option value="2">สำนักงานการเงิน</option>
                  <option value="3">สำนักงานงบประมาณ</option>
                  <option value="4">กองกลาง</option>
                  <option value="5">กองนโยบายและแผน</option>
                  <option value="6">กองวิจัยและประกันสุขภาพ</option>
                  <option value="7">กองโรงงานผลิตยา</option>
                  <option value="8">กองบริการ</option>
                </select>
              </div>
            </div>

            <div class="col-xs-4">
              <div class="form-group">
                <h4 for="exampleInputEmail1">แผนก/หน่วยย่อย <span style="color: red;">*</span></h4>   
                <select class="form-control" name="department_send">
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
                </select>
              </div>
            </div>

            <div class="col-xs-4">
              <div class="form-group">
                <h4 for="exampleInputEmail1">สถานที่ตั้ง</h4>   
                <input type="text" class="form-control" name="location_send" id="exampleInputEmail1" placeholder=" ">
              </div>
            </div>

          </div>



        </div>
        <!-- </form> -->
      </div>   
    </div>



  </div>






  <div class="box box-success">
    <div class="box-header">



      <div class="row">
        <div class="col-md-12">
         <h3 class="box-title">รายการเบิก</h3> 
       </div>  
     </div>
   </div>

   <div class="box-body">
    <table id="example2" class="table table-bordered table-hover">
      <thead>
        <tr>
         <th class="text-nowrap" style="text-align: center;">ลำดับ</th>
         <th class="text-nowrap" style="text-align: center;">รายการ</th>
         <th class="text-nowrap" style="text-align: center;">จำนวนหน่วย</th>
         <th class="text-nowrap" style="text-align: center;">วันที่ได้มา</th>
         <th class="text-nowrap" style="text-align: center;">สายแบบกองทัพ </th> 
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
      <tr id="data_detail">

      </tr>





    </tbody> 
  </table>

  <div class="row">
    <div class="col-xs-12">
     <div class="form-group">
       <h4 for="exampleInputEmail1">หลักฐานที่ใช้ในการเบิก</h4>   
       <input type="text" class="form-control" id="exampleInputEmail1" name="withdrawal" placeholder="หลักฐานที่ใช้ในการเบิก">
     </div>
   </div>
 </div>


</div>   



</div> 



<div class="box box-success">

  <div class="box-header with-border">

    <h3 class="box-title">ตรวจถูกต้อง</h3>
  </div>

  <div class="box-body">

   <div class="row">
    <div class="col-xs-3">
     <div class="form-group">
       <h4 for="exampleInputEmail1">ตรวจแล้วเห็นว่า</h4>   
       <select class="form-control" name="see" id="see">
        <option value="1">เห็นควรอนุมัติจ่าย</option>
        <option value="2">ไม่เห็นควรอนุมัติจ่าย</option>
      </select>
    </div>
  </div>
  <div class="col-xs-3">
   <div class="form-group">
     <h4 for="exampleInputEmail1">ตามใบสั่งซื้อเลขที่</h4>   
     <input type="text" class="form-control" id="purchase" name="purchase" placeholder=" ">
   </div>
 </div>
 <div class="col-xs-6">
   <div class="form-group">
     <h4 for="exampleInputEmail1">ขอเบิกสิ่งอุปกรณ์ตามที่ระบุไว้ในช่อง "จำนวนเบิก" และขอมอบให้</h4>   
     <input type="text" class="form-control" name="amount" id="amount" placeholder="เป็นผู้รับแทน">
   </div>
 </div>

</div>


<div class="row">

  <div class="col-xs-3">
   <div class="form-group">
     <h4 for="exampleInputEmail1">(ลงนาม) ผู้ตรวจสอบ</h4>   
     <input type="text" class="form-control" name="inspector" id="inspector" placeholder="(ลงนาม) ผู้ตรวจสอบ">
   </div>
 </div>
 <div class="col-xs-3">
   <div class="form-group">
     <h4 for="exampleInputEmail1">วันที่</h4>   
     <input type="date" class="form-control" id="date" name="date" placeholder=" ">
   </div>
 </div>
 <div class="col-xs-3">
   <div class="form-group">
     <h4 for="exampleInputEmail1">(ลงนาม) ผู้เบิก</h4>   
     <input type="text" class="form-control" id="pathfinder" name="pathfinder" placeholder="(ลงนาม) ผู้เบิก">
   </div>
 </div>
 <div class="col-xs-3">
   <div class="form-group">
     <h4 for="exampleInputEmail1">วันที่</h4>   
     <input type="date" class="form-control" id="date1" name="date1" placeholder=" ">
   </div>
 </div>
</div>

</div>
<!-- /.box-body -->
</div>





</div>





<div class="col-md-12">
 <div class="row">
   <div class="col-md-8">
    <button type="submit" class="btn btn-block btn-success">สร้างเอกสาร</button>
  </div>   
  <div class="col-md-4">
   <a href="withdraw.php" class="btn btn-block btn-danger">ยกเลิกการสร้างเอกสาร</a>
 </div>    
</div>

</div>

</div>
</form>




</section>
<!-- /.content -->



</div>
<!-- /.content-wrapper -->

<script type="text/javascript">
  $(document).ready(function(){

   $('#code').select2({
    placeholder: "Choose tags...",
    minimumInputLength: 1,
    ajax: {
      url: "{{url('/tags/find')}}",
      dataType: 'json',
      delay: 250,
      data: function (params) {
        return {
          q: $.trim(params.term)
        };
      },
      processResults: function(data) {
        return {
          results: $.map(data,function(item) {
            return {
              id: item.id_allproduct,
              text: item.code
            };
          }),

        };
      },
      
      cache: true
    }

  });

   var id = $("#awdaw").val();

   if(id != null){
    $.ajax({
      url: "{{url('withdraw/product')}}/" + id, 
      method: "post", 
      data: {
                            // _method: "DELETE",
                            _token: "{{ csrf_token() }}",
                            id: id
                        }, //ส่งข้อมูลไปในรูปแบบ JSON
                        dataType: 'json',
                        success: function (data) { 
                          $("#address").attr('placeholder',data.address);
                          $("#address_1").val(data.address);
                          $("#service_forget").val(data.service_for);
                          $("#category_get").val(data.category);
                          $("#typemoney_get").val(data.typemoney);
                          $("#responsibleagency_get").val(data.responsibleagency);
                          $("#department_get").val(data.department);
                          // value text
                          $("#responsibleagency").val(data.responsibleagency);
                          $("#department").val(data.department);
                          $("#service_for").val(data.service_for);
                          $("#category").val(data.category);
                          $("#typemoney").val(data.typemoney);
                          $("#location_get").val(data.location);
                          $("#location_get1").val(data.location);

                          var service_for;

                          if(data.service_for == 1 ){
                            service_for = 'สายพลาธิการ';
                          }else if (data.service_for == 2 ){
                            service_for = 'สายขนส่ง';
                          }else if (data.service_for == 3 ){
                            service_for = 'สายสื่อสาร (ปกติ และ ทสอ)';
                          }else if (data.service_for == 4 ){
                            service_for = 'สายแพทย์(พยาบาล)';
                          }else if (data.service_for == 5 ){
                            service_for = 'สายยุทธโยธา';
                          }else if (data.service_for == 6 ){
                            service_for = 'สายสรรพาวุธ';
                          }else if (data.service_for == 7 ){
                            service_for = 'สายแพทย์';
                          }else if (data.service_for == 8 ){
                            service_for = 'สายวิทยาศาสตร์';
                          }else if (data.service_for == 9 ){
                            service_for = 'สายช่าง';
                          }

                          var res = data.totalvalue*7/100;
                          var vat = parseFloat(res)+parseFloat(data.totalvalue);

                          $("#data_detail").html(
                           '<td style="text-align: center;">1.</td> ' +
                           '<td>'+ data.name +'</td>'+
                           '<td style="text-align: center;">'+ data.unit +'</td>'+
                           '<td style="text-align: center;">'+ data.date_come +'</td>' +
                           '<td style="text-align: center;">'+ service_for +'</td>' +
                           '<td style="text-align: center;">'+ data.property +'</td>' +
                           '<td style="text-align: center;">กอง2</td>'+
                           '<td style="text-align: center;">'+ data.code +'</td>'+
                           '<td>'+ data.location +'</td>'+
                           '<td>ข.001/61 ฐ.010/61</td>' +
                           '<td style="text-align: right;">'+ vat +'</td>'+
                           '<td style="text-align: center;">'+
                           '<a class="btn btn-xs" href="../../productdetail/'+data.id_allproduct+'" role="button" style="background-color:  #00a659;color: white;    margin: 0;">รายละเอียด</a>'+
                           '</td>'
                           );

                        }
                      });
  }

  $("#code").change(function(){
    var x = $(this).val();

    $.ajax({
      url: "{{url('withdraw/product')}}/" + x, 
      method: "post", 
      data: {
                            // _method: "DELETE",
                            _token: "{{ csrf_token() }}",
                            id: x
                        }, //ส่งข้อมูลไปในรูปแบบ JSON
                        dataType: 'json',
                        success: function (data) { 
                          $("#awdaw").val(data.id_allproduct);
                          $("#address").attr('placeholder',data.address);
                          $("#address_1").val(data.address);
                          $("#service_forget").val(data.service_for);
                          $("#category_get").val(data.category);
                          $("#typemoney_get").val(data.typemoney);
                          $("#responsibleagency_get").val(data.responsibleagency);
                          $("#department_get").val(data.department);
                          // value text
                          $("#responsibleagency").val(data.responsibleagency);
                          $("#department").val(data.department);
                          $("#service_for").val(data.service_for);
                          $("#category").val(data.category);
                          $("#typemoney").val(data.typemoney);
                          $("#location_get").val(data.location);
                          $("#location_get1").val(data.location);

                          var service_for;

                          if(data.service_for == 1 ){
                            service_for = 'สายพลาธิการ';
                          }else if (data.service_for == 2 ){
                            service_for = 'สายขนส่ง';
                          }else if (data.service_for == 3 ){
                            service_for = 'สายสื่อสาร (ปกติ และ ทสอ)';
                          }else if (data.service_for == 4 ){
                            service_for = 'สายแพทย์(พยาบาล)';
                          }else if (data.service_for == 5 ){
                            service_for = 'สายยุทธโยธา';
                          }else if (data.service_for == 6 ){
                            service_for = 'สายสรรพาวุธ';
                          }else if (data.service_for == 7 ){
                            service_for = 'สายแพทย์';
                          }else if (data.service_for == 8 ){
                            service_for = 'สายวิทยาศาสตร์';
                          }else if (data.service_for == 9 ){
                            service_for = 'สายช่าง';
                          }

                          var res = data.totalvalue*7/100;
                          var vat = parseFloat(res)+parseFloat(data.totalvalue);

                          $("#data_detail").html(
                           '<td style="text-align: center;">1.</td> ' +
                           '<td>'+ data.name +'</td>'+
                           '<td style="text-align: center;">'+ data.unit +'</td>'+
                           '<td style="text-align: center;">'+ data.date_come +'</td>' +
                           '<td style="text-align: center;">'+ service_for +'</td>' +
                           '<td style="text-align: center;">'+ data.property +'</td>' +
                           '<td style="text-align: center;">กอง2</td>'+
                           '<td style="text-align: center;">'+ data.code +'</td>'+
                           '<td>'+ data.location +'</td>'+
                           '<td>ข.001/61 ฐ.010/61</td>' +
                           '<td style="text-align: right;">'+ vat +'</td>'+
                           '<td style="text-align: center;">'+
                           '<a class="btn btn-xs" href="./productdetail/'+data.id_allproduct+'" role="button" style="background-color:  #00a659;color: white;    margin: 0;">รายละเอียด</a>'+
                           '</td>'
                           );

                        }
                      });

  });


});

</script>

@endsection

