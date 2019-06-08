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
      <h1>ใบเบิก ทบ.๔๐๐ – ๐๐๖</h1>
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

                     <input type="hidden" class="form-control" name="id" id="awdaw" value="{{$withdraw->withdraw_fk}}">
                     <input type="text" class="form-control" name="code" readonly value="{{$withdraw->code}}">

                   </div>
                 </div>    
                 <div class="col-xs-3">
                   <div class="form-group">
                     <h4 for="exampleInputEmail1">ที่ <span style="color: red;">*</span></h4>  
                     <input type="text" class="form-control" id="address" placeholder=" " disabled="">
                   </div>
                 </div>
                 <div class="col-xs-3">
                   <div class="form-group">
                     <h4 for="exampleInputEmail1">เบิกในกรณี <span style="color: red;">*</span></h4>  
                     <select class="form-control" name="requisition" id="requisition" disabled>
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
               <input type="text" class="form-control" id="jobnumber" name="jobnumber" placeholder=" " disabled>
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
                  <select class="form-control" name="responsibleagency_send" id="responsibleagency_send" disabled>
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
                  <select class="form-control" name="department_send" id="department_send" disabled>
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
                  <input type="text" class="form-control" name="location_send" id="location_send" placeholder=" " disabled>
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
         <input type="text" class="form-control" id="withdrawal" name="withdrawal" disabled>
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
       <select class="form-control" name="see" id="see" disabled>
        <option value="1">เห็นควรอนุมัติจ่าย</option>
        <option value="2">ไม่เห็นควรอนุมัติจ่าย</option>
      </select>
    </div>
  </div>
  <div class="col-xs-3">
   <div class="form-group">
     <h4 for="exampleInputEmail1">ตามใบสั่งซื้อเลขที่</h4>   
     <input type="text" class="form-control" id="purchase" name="purchase" placeholder=" " disabled>
   </div>
 </div>
 <div class="col-xs-6">
   <div class="form-group">
     <h4 for="exampleInputEmail1">ขอเบิกสิ่งอุปกรณ์ตามที่ระบุไว้ในช่อง "จำนวนเบิก" และขอมอบให้</h4>   
     <input type="text" class="form-control" name="amount" id="amount" placeholder="เป็นผู้รับแทน" disabled>
   </div>
 </div>

</div>


<div class="row">

  <div class="col-xs-3">
   <div class="form-group">
     <h4 for="exampleInputEmail1">(ลงนาม) ผู้ตรวจสอบ</h4>   
     <input type="text" class="form-control" name="inspector" id="inspector" placeholder="(ลงนาม) ผู้ตรวจสอบ" disabled>
   </div>
 </div>
 <div class="col-xs-3">
   <div class="form-group">
     <h4 for="exampleInputEmail1">วันที่</h4>   
     <input type="date" class="form-control" id="date" name="date" placeholder=" " disabled>
   </div>
 </div>
 <div class="col-xs-3">
   <div class="form-group">
     <h4 for="exampleInputEmail1">(ลงนาม) ผู้เบิก</h4>   
     <input type="text" class="form-control" id="pathfinder" name="pathfinder" placeholder="(ลงนาม) ผู้เบิก" disabled>
   </div>
 </div>
 <div class="col-xs-3">
   <div class="form-group">
     <h4 for="exampleInputEmail1">วันที่</h4>   
     <input type="date" class="form-control" id="date1" name="date1" placeholder=" " disabled>
   </div>
 </div>
</div>

</div>
<!-- /.box-body -->
</div>





</div>





<div class="col-md-12">
 <div class="row">
  <div class="col-md-12">
  <!--   <a href="{{ url()->previous() }}">
      <button  class="btn btn-block btn-success">กลับหน้าแรก</button>
    </a> -->
    <!-- <a href="" class="btn btn-block btn-success">กลับสู่หน้าหลัก</a> -->
    <a href="{{ url('withdraw') }}" class="btn btn-block btn-success">กลับสู่หน้าหลัก</a>
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

   var id = $("#awdaw").val();

   if(id != null){
    $.ajax({
      url: "{{url('withdrawdetail/product/get')}}/" + id, 
      method: "post", 
      data: {
                            // _method: "DELETE",
                            _token: "{{ csrf_token() }}",
                            id: id
                        }, //ส่งข้อมูลไปในรูปแบบ JSON
                        dataType: 'json',
                        success: function (data) { 
                          console.log(data);
                          $("#address").val(data.withdraw.location);
                          $("#service_forget").val(data.withdraw.service_for);
                          $("#category_get").val(data.withdraw.category);
                          $("#typemoney_get").val(data.withdraw.typemoney);
                          $("#responsibleagency_get").val(data.withdraw.responsibleagency);
                          $("#department_get").val(data.withdraw.department);
                          // value text
                          $("#responsibleagency").val(data.withdraw.responsibleagency);
                          $("#department").val(data.withdraw.department);
                          $("#service_for").val(data.withdraw.service_for);
                          $("#category").val(data.withdraw.category);
                          $("#typemoney").val(data.withdraw.typemoney);
                          $("#location_get").val(data.withdraw.location);
                          $("#location_get1").val(data.withdraw.location);
                          $("#jobnumber").val(data.withdraw.jobnumber);
                          $("#responsibleagency_send").val(data.withdraw.responsibleagency_send);
                          $("#department_send").val(data.withdraw.department_send);
                          $("#location_send").val(data.withdraw.location_send);
                          $("#jobnumber").val(data.withdraw.jobnumber);
                          $("#see").val(data.withdraw.see);
                          $("#withdrawal").val(data.withdraw.withdrawal);
                          $("#purchase").val(data.withdraw.purchase);
                          $("#amount").val(data.withdraw.amount);
                          $("#inspector").val(data.withdraw.inspector);
                          $("#date").val(data.withdraw.date);
                          $("#pathfinder").val(data.withdraw.pathfinder);
                          $("#date1").val(data.withdraw.date1);

                          var service_for;

                          if(data.withdraw.service_for == 1 ){
                            service_for = 'สายพลาธิการ';
                          }else if (data.withdraw.service_for == 2 ){
                            service_for = 'สายขนส่ง';
                          }else if (data.withdraw.service_for == 3 ){
                            service_for = 'สายสื่อสาร (ปกติ และ ทสอ)';
                          }else if (data.withdraw.service_for == 4 ){
                            service_for = 'สายแพทย์(พยาบาล)';
                          }else if (data.withdraw.service_for == 5 ){
                            service_for = 'สายยุทธโยธา';
                          }else if (data.withdraw.service_for == 6 ){
                            service_for = 'สายสรรพาวุธ';
                          }else if (data.withdraw.service_for == 7 ){
                            service_for = 'สายแพทย์';
                          }else if (data.withdraw.service_for == 8 ){
                            service_for = 'สายวิทยาศาสตร์';
                          }else if (data.withdraw.service_for == 9 ){
                            service_for = 'สายช่าง';
                          }

                          var res = data.allproduct.totalvalue*7/100;
                          var vat = parseFloat(res)+parseFloat(data.allproduct.totalvalue);

                          $("#data_detail").html(
                           '<td style="text-align: center;">1.</td> ' +
                           '<td>'+ data.allproduct.name +'</td>'+
                           '<td style="text-align: center;">'+ data.allproduct.unit +'</td>'+
                           '<td style="text-align: center;">'+ data.allproduct.date_come +'</td>' +
                           '<td style="text-align: center;">'+ service_for +'</td>' +
                           '<td style="text-align: center;">'+ data.allproduct.property +'</td>' +
                           '<td style="text-align: center;">กอง2</td>'+
                           '<td style="text-align: center;">'+ data.allproduct.code +'</td>'+
                           '<td>'+ data.allproduct.location +'</td>'+
                           '<td>ข.001/61 ฐ.010/61</td>' +
                           '<td style="text-align: right;">'+ vat +'</td>'+
                           '<td style="text-align: center;">'+
                           '<a class="btn btn-xs" href="../../productdetail/'+data.allproduct.id_allproduct+'" role="button" style="background-color:  #00a659;color: white;    margin: 0;">รายละเอียด</a>'+
                           '</td>'
                           );

                        }
                      });
}


});

</script>

@endsection

