@extends('layouts.main')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>ใบโอนย้าย ทบ.๔๐๐ – ๐๐๖</h1>
  </section>



  <!-- Main content -->
  <section class="content">

    <div class="row">
      <div class="col-md-12">
        <div class="box box-success">

          <div class="box-header with-border">
            <h3 class="box-title">ใบโอนย้ายทะเบียนทรัพย์สิน</h3>
          </div>

          <form action="{{route('transfer.store')}}" method="POST" autocomplete="off">
            @csrf
            <div class="box-body">
              <input type="hidden" class="form-control" name="id" value="{{$find->id_allproduct}}" >
              <div class="row">
                <div class="col-xs-4">
                 <div class="form-group">
                  <h4 for="exampleInputEmail1">รหัส <span style="color: red;">*</span></h4>  
                  <input type="text" class="form-control" name="code" value="{{$find->transfer_code}}" disabled>
                </div>
              </div>    
              <div class="col-xs-4">
               <div class="form-group">
                 <h4 for="exampleInputEmail1">เลขคำสั่ง <span style="color: red;">*</span></h4>  
                 <input type="text" class="form-control" name="ordernumber" id="ordernumber" disabled value="{{$find->transfer_ordernumber}}" >
               </div>
             </div>
             <div class="col-xs-4">
               <div class="form-group">
                 <h4 for="exampleInputEmail1">ได้รับอนุมัติตามคำสั่งจาก <span style="color: red;">*</span></h4>  
                 <input type="text" class="form-control" name="accept" id="accept" placeholder=" " disabled value="{{$find->transfer_accept}}">
               </div>
             </div>
           </div>

           <div class="row">

            <div class="col-xs-4">
             <div class="form-group">
               <h4 for="exampleInputEmail1">สายบริการเทคนิคที่ควบคุม <span style="color: red;">*</span></h4>  
               <!-- <input type="hidden" class="form-control" name="service_for" value="{{$find->service_for}}" > -->
               <select class="form-control"  disabled="">
                <option value="1" {{$find->service_for == 1 ? 'selected' : ''}} >สายพลาธิการ</option>
                <option value="2" {{$find->service_for == 2 ? 'selected' : ''}} >สายขนส่ง</option>
                <option value="3" {{$find->service_for == 3 ? 'selected' : ''}} >สายสื่อสาร (ปกติ และ ทสอ)</option>
                <option value="4" {{$find->service_for == 4 ? 'selected' : ''}} >สายแพทย์(พยาบาล)</option>
                <option value="5" {{$find->service_for == 5 ? 'selected' : ''}} >สายยุทธโยธา</option>
                <option value="6" {{$find->service_for == 6 ? 'selected' : ''}} >สายสรรพาวุธ</option>
                <option value="7" {{$find->service_for == 7 ? 'selected' : ''}} >สายแพทย์</option>
                <option value="8" {{$find->service_for == 8 ? 'selected' : ''}} >สายวิทยาศาสตร์</option>
                <option value="9" {{$find->service_for == 9 ? 'selected' : ''}} >สายช่าง</option>
              </select>
            </div>
          </div>   
          <div class="col-xs-4">
            <div class="form-group">
              <h4 for="exampleInputEmail1">ประเภทสิ่งอุปกรณ์ <span style="color: red;">*</span></h4>  
              <!-- <input type="hidden" class="form-control" name="category" value="{{$find->category}}" > -->
              <select class="form-control"  disabled="">
                <option value="1" {{$find->category == 1 ? 'selected' :'' }}>1. อาคารถาวร</option>
                <option value="2" {{$find->category == 2 ? 'selected' :'' }}>2. อาคารชั่วคราว/โรงเรือน</option>
                <option value="3" {{$find->category == 3 ? 'selected' :'' }}>3.1 สิ่งก่อสร้างใช้คอนกรีตเสริมเหล็กหรือโครงเหล็กเป็นส่วนประกอบ</option>
                <option value="4" {{$find->category == 4 ? 'selected' :'' }}>3.2 สิ่งก่อสร้างใช้ไม้หรือวัสดุอื่นๆ เป็นส่วนประกอบหลัก</option>
                <option value="5" {{$find->category == 5 ? 'selected' :'' }}>4. ครุภัณฑ์สำนักงาน</option>
                <option value="6" {{$find->category == 6 ? 'selected' :'' }}>5. ครุภัณฑ์ยานพาหนะและขนส่ง</option>
                <option value="7" {{$find->category == 7 ? 'selected' :'' }}>6. ครุภัณฑ์ไฟฟ้าและวิทยุ</option>
                <option value="8" {{$find->category == 8 ? 'selected' :'' }}>7. ครุภัณฑ์โฆษณาและเผยแพร่</option>
                <option value="9" {{$find->category == 9 ? 'selected' :'' }}>8.1 ครุภัณฑ์การเกษตรเครื่องมือและอุปกรณ์</option>
                <option value="10" {{$find->category == 10 ? 'selected' :'' }}>8.2 ครุภัณฑ์การเกษตรเครื่องจักรกล</option>
                <option value="11" {{$find->category == 11 ? 'selected' :'' }}>9.1 ครุภัณฑ์โรงงานเครื่องมือและอุปกรณ์</option>
                <option value="12" {{$find->category == 12 ? 'selected' :'' }}>9.2 ครุภัณฑ์โรงงานเครื่องจักรกล</option>
                <option value="13" {{$find->category == 13 ? 'selected' :'' }}>10.1 ครุภัณฑ์ก่อสร้างเครื่องมือและอุปกรณ์</option>
                <option value="14" {{$find->category == 14 ? 'selected' :'' }}>10.2 ครุภัณฑ์ก่อสร้างเครื่องจักรกล</option>
                <option value="15" {{$find->category == 15 ? 'selected' :'' }}>11. ครุภัณฑ์สำรวจ</option>
                <option value="16" {{$find->category == 16 ? 'selected' :'' }}>12. ครุภัณฑ์วิทยาศาสตร์และการแพทย์</option>
                <option value="17" {{$find->category == 17 ? 'selected' :'' }}>13. ครุภัณฑ์คอมพิวเตอร์</option>
                <option value="18" {{$find->category == 18 ? 'selected' :'' }}>14. ครุภัณฑ์การศึกษา</option>
                <option value="19" {{$find->category == 19 ? 'selected' :'' }}>15. ครุภัณฑ์งานบ้านงานครัว</option>
                <option value="20" {{$find->category == 20 ? 'selected' :'' }}>16. ครุภัณฑ์กีฬา/กายภาพ</option>
                <option value="21" {{$find->category == 21 ? 'selected' :'' }}>17. ครุภัณฑ์ดนตรี/นาฏศิลป์</option>
                <option value="22" {{$find->category == 22 ? 'selected' :'' }}>18. ครุภัณฑ์อาวุธ</option>
                <option value="23" {{$find->category == 23 ? 'selected' :'' }}>19. ครุภัณฑ์สนาม</option>
                <option value="24" {{$find->category == 24 ? 'selected' :'' }}>20.1 สินทรัพย์โครงสร้างพื้นฐาน ถนนคอนกรีต</option>
                <option value="25" {{$find->category == 25 ? 'selected' :'' }}>20.2 สินทรัพย์โครงสร้างพื้นฐาน ถนนราดยาง</option>
                <option value="26" {{$find->category == 26 ? 'selected' :'' }}>20.3 สินทรัพย์โครงสร้างพื้นฐาน สะพานคอนกรีตเสิรมเหล็ก</option>
                <option value="27" {{$find->category == 27 ? 'selected' :'' }}>20.4 สินทรัพย์โครงสร้างพื้นฐาน เขื่อนดิน</option>
                <option value="28" {{$find->category == 28 ? 'selected' :'' }}>20.5 สินทรัพย์โครงสร้างพื้นฐาน เขื่อนปูน</option>
                <option value="29" {{$find->category == 29 ? 'selected' :'' }}>20.6 สินทรัพย์โครงสร้างพื้นฐาน อ่างเก็บน้ำ</option>
                <option value="30" {{$find->category == 30 ? 'selected' :'' }}>21. ครุภัณฑ์อื่น</option>
                <option value="31" {{$find->category == 31 ? 'selected' :'' }}>22. สินทรัพย์ไม่มีตัวตน</option>
              </select>
            </div>
          </div> 

          <div class="col-xs-4">
           <div class="form-group">
            <h4 for="exampleInputEmail1">ประเภทเงิน <span style="color: red;">*</span></h4>   
            <!-- <input type="hidden" class="form-control" name="typemoney" value="{{$find->typemoney}}" > -->
            <select class="form-control"  disabled="">
              <option value="1" {{$find->typemoney == 1 ? 'selected':'' }} >เงินงบประมาณ</option>
              <option value="2" {{$find->typemoney == 2 ? 'selected':'' }} >เงินนอกงบประมาณ ง/ท.</option>
              <option value="3" {{$find->typemoney == 3 ? 'selected':'' }} >เงินบริจาค/เงินช่วยเหลือ</option>
              <option value="4" {{$find->typemoney == 4 ? 'selected':'' }} >อื่นๆ</option>
            </select>
          </div>
        </div>
      </div>


    </div>
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
                  <!-- <input type="hidden" class="form-control" name="responsibleagency" value="{{$find->responsibleagency}}" > -->
                  <select class="form-control" disabled="">
                    <option value="1" {{$find->responsibleagency == 1 ? 'selected' : ''}} >สำนักงานผู้บังคับบัญชา</option>
                    <option value="2" {{$find->responsibleagency == 2 ? 'selected' : ''}} >สำนักงานการเงิน</option>
                    <option value="3" {{$find->responsibleagency == 3 ? 'selected' : ''}} >สำนักงานงบประมาณ</option>
                    <option value="4" {{$find->responsibleagency == 4 ? 'selected' : ''}} >กองกลาง</option>
                    <option value="5" {{$find->responsibleagency == 5 ? 'selected' : ''}} >กองนโยบายและแผน</option>
                    <option value="6" {{$find->responsibleagency == 6 ? 'selected' : ''}} >กองวิจัยและประกันสุขภาพ</option>
                    <option value="7" {{$find->responsibleagency == 7 ? 'selected' : ''}} >กองโรงงานผลิตยา</option>
                    <option value="8" {{$find->responsibleagency == 8 ? 'selected' : ''}} >กองบริการ</option>
                  </select>
                </div>
              </div>

              <div class="col-xs-4">
                <div class="form-group">
                  <h4 for="exampleInputEmail1">แผนก/หน่วยย่อย <span style="color: red;">*</span></h4>   
                  <!-- <input type="hidden" class="form-control" name="department" value="{{$find->department}}" > -->
                  <select class="form-control" disabled="">
                    <option value="1" {{$find->department == 1 ? 'selected' : ''}} >สำนักผู้บังคับบัญชา</option>
                    <option value="2" {{$find->department == 2 ? 'selected' : ''}} >นายทหารพระธรรมนูญ</option>
                    <option value="3" {{$find->department == 3 ? 'selected' : ''}} >นายทหารตรวจสอบภายใน</option>
                    <option value="4" {{$find->department == 4 ? 'selected' : ''}} >บก.กองกลาง</option>
                    <option value="5" {{$find->department == 5 ? 'selected' : ''}} >แผนธุรการและกำลังพล</option>
                    <option value="6" {{$find->department == 6 ? 'selected' : ''}} >แผนกจัดหา</option>
                    <option value="7" {{$find->department == 7 ? 'selected' : ''}} >แผนกเก็บรักษาและแจกจ่าย</option>
                    <option value="8" {{$find->department == 8 ? 'selected' : ''}} >แผนกขนส่ง</option>
                    <option value="9" {{$find->department == 9 ? 'selected' : ''}} >บก.กองนโยบายและแผน</option>
                    <option value="10" {{$find->department == 10 ? 'selected' : ''}} >แผนกขาย</option>
                    <option value="11" {{$find->department == 11 ? 'selected' : ''}} >แผนกนโยบายและแผน</option>
                    <option value="12" {{$find->department == 12 ? 'selected' : ''}} >แผนกบัญชีคุม</option>
                    <option value="13" {{$find->department == 13 ? 'selected' : ''}} >ศูนย์สารสนเทศ</option>
                    <option value="14" {{$find->department == 14 ? 'selected' : ''}} >บก.กองวิจัยและประกันคุณภาพ</option>
                    <option value="15" {{$find->department == 15 ? 'selected' : ''}} >แผนกควบคุมคุณภาพ 1</option>
                    <option value="16" {{$find->department == 16 ? 'selected' : ''}} >แผนกควบคุมคุณภาพ 2</option>
                    <option value="17" {{$find->department == 17 ? 'selected' : ''}} >แผนกวิจัยและพัฒนา</option>
                    <option value="18" {{$find->department == 18 ? 'selected' : ''}} >บก.กองโรงงานผลิตยา</option>
                    <option value="19" {{$find->department == 19 ? 'selected' : ''}} >แผนกซ่อมบำรุงและบริการการผลิต</option>
                    <option value="20" {{$find->department == 20 ? 'selected' : ''}} >แผนกยาน้ำและขี้ผึ้ง</option>
                    <option value="21" {{$find->department == 21 ? 'selected' : ''}} >แผนกยาเม็ดและยาผง</option>
                    <option value="22" {{$find->department == 22 ? 'selected' : ''}} >แผนกยาปราศจากเชื้อ</option>
                    <option value="23" {{$find->department == 23 ? 'selected' : ''}} >แผนกผลิตภัณฑ์สมุนไพร</option>
                    <option value="24" {{$find->department == 24 ? 'selected' : ''}} >บก.กองบริการ</option>
                    <option value="25" {{$find->department == 25 ? 'selected' : ''}} >แผนกพยาบาล</option>
                    <option value="26" {{$find->department == 26 ? 'selected' : ''}} >แผนกบริการ</option>  
                  </select>
                </div>
              </div>

              <div class="col-xs-4">
                <div class="form-group">
                  <h4 for="exampleInputEmail1">สถานที่ตั้ง</h4>   
                  <input type="text" class="form-control" placeholder="{{$find->location}}" disabled="">
                </div>
              </div>

            </div>



          </div>
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
                    <select class="form-control" disabled name="responsible">
                      <option value="1" {{$find->transfer_responsible == 1 ? 'selected' : ''}} >สำนักงานผู้บังคับบัญชา</option>
                      <option value="2" {{$find->transfer_responsible == 2 ? 'selected' : ''}} >สำนักงานการเงิน</option>
                      <option value="3" {{$find->transfer_responsible == 3 ? 'selected' : ''}} >สำนักงานงบประมาณ</option>
                      <option value="4" {{$find->transfer_responsible == 4 ? 'selected' : ''}} >กองกลาง</option>
                      <option value="5" {{$find->transfer_responsible == 5 ? 'selected' : ''}} >กองนโยบายและแผน</option>
                      <option value="6" {{$find->transfer_responsible == 6 ? 'selected' : ''}} >กองวิจัยและประกันสุขภาพ</option>
                      <option value="7" {{$find->transfer_responsible == 7 ? 'selected' : ''}} >กองโรงงานผลิตยา</option>
                      <option value="8" {{$find->transfer_responsible == 8 ? 'selected' : ''}} >กองบริการ</option>
                    </select>
                  </div>
                </div>

                <div class="col-xs-4">
                  <div class="form-group">
                    <h4 for="exampleInputEmail1">แผนก/หน่วยย่อย <span style="color: red;">*</span></h4>   
                    <select class="form-control" disabled name="department">
                      <option value="1" {{$find->transfer_department == 1 ? 'selected' : ''}} >สำนักผู้บังคับบัญชา</option>
                      <option value="2" {{$find->transfer_department == 2 ? 'selected' : ''}} >นายทหารพระธรรมนูญ</option>
                      <option value="3" {{$find->transfer_department == 3 ? 'selected' : ''}} >นายทหารตรวจสอบภายใน</option>
                      <option value="4" {{$find->transfer_department == 4 ? 'selected' : ''}} >บก.กองกลาง</option>
                      <option value="5" {{$find->transfer_department == 5 ? 'selected' : ''}} >แผนธุรการและกำลังพล</option>
                      <option value="6" {{$find->transfer_department == 6 ? 'selected' : ''}} >แผนกจัดหา</option>
                      <option value="7" {{$find->transfer_department == 7 ? 'selected' : ''}} >แผนกเก็บรักษาและแจกจ่าย</option>
                      <option value="8" {{$find->transfer_department == 8 ? 'selected' : ''}} >แผนกขนส่ง</option>
                      <option value="9" {{$find->transfer_department == 9 ? 'selected' : ''}} >บก.กองนโยบายและแผน</option>
                      <option value="10" {{$find->transfer_department == 10 ? 'selected' : ''}} >แผนกขาย</option>
                      <option value="11" {{$find->transfer_department == 11 ? 'selected' : ''}} >แผนกนโยบายและแผน</option>
                      <option value="12" {{$find->transfer_department == 12 ? 'selected' : ''}} >แผนกบัญชีคุม</option>
                      <option value="13" {{$find->transfer_department == 13 ? 'selected' : ''}} >ศูนย์สารสนเทศ</option>
                      <option value="14" {{$find->transfer_department == 14 ? 'selected' : ''}} >บก.กองวิจัยและประกันคุณภาพ</option>
                      <option value="15" {{$find->transfer_department == 15 ? 'selected' : ''}} >แผนกควบคุมคุณภาพ 1</option>
                      <option value="16" {{$find->transfer_department == 16 ? 'selected' : ''}} >แผนกควบคุมคุณภาพ 2</option>
                      <option value="17" {{$find->transfer_department == 17 ? 'selected' : ''}} >แผนกวิจัยและพัฒนา</option>
                      <option value="18" {{$find->transfer_department == 18 ? 'selected' : ''}} >บก.กองโรงงานผลิตยา</option>
                      <option value="19" {{$find->transfer_department == 19 ? 'selected' : ''}} >แผนกซ่อมบำรุงและบริการการผลิต</option>
                      <option value="20" {{$find->transfer_department == 20 ? 'selected' : ''}} >แผนกยาน้ำและขี้ผึ้ง</option>
                      <option value="21" {{$find->transfer_department == 21 ? 'selected' : ''}} >แผนกยาเม็ดและยาผง</option>
                      <option value="22" {{$find->transfer_department == 22 ? 'selected' : ''}} >แผนกยาปราศจากเชื้อ</option>
                      <option value="23" {{$find->transfer_department == 23 ? 'selected' : ''}} >แผนกผลิตภัณฑ์สมุนไพร</option>
                      <option value="24" {{$find->transfer_department == 24 ? 'selected' : ''}} >บก.กองบริการ</option>
                      <option value="25" {{$find->transfer_department == 25 ? 'selected' : ''}} >แผนกพยาบาล</option>
                      <option value="26" {{$find->transfer_department == 26 ? 'selected' : ''}} >แผนกบริการ</option>      
                    </select>
                  </div>
                </div>

                <div class="col-xs-4">
                  <div class="form-group">
                    <h4 for="exampleInputEmail1">สถานที่ตั้ง</h4>   
                    <input type="text" class="form-control" disabled name="location" id="exampleInputEmail1" value="{{$find->transfer_location}}" placeholder=" " >
                  </div>
                </div>

              </div>



            </div>
          </div>   
        </div>



      </div>






      <div class="box box-success">
        <div class="box-header">



          <div class="row">
            <div class="col-md-12">
             <h3 class="box-title">รายการโอนย้าย</h3> 
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

         <tbody>
          <tr>
           <td style="text-align: center;">1.</td>
           <td>อ่างล้างอุปกรณ์</td>
           <td style="text-align: center;">1 ชุด</td>
           <td style="text-align: center;">4 ธ.ค. 60</td>
           <td style="text-align: center;">พ.</td>    
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





       </tbody> 
     </table>

   </div>
   <!-- /.box-body -->
 </div> 





 <div class="row">

  <div class="col-md-6">
    <div class="box box-success">
      <div class="box-header with-border">            
        <h4 class="box-title">อนุมัติให้จ่ายได้เฉพาะในรายการและจำนวนที่ผู้ตรวจสอบเสนอ</h4>
      </div>

      <form role="form">
        <div class="box-body">
          <div class="row">

            <div class="col-xs-6">
              <div class="form-group">
                <h4 for="exampleInputEmail1">(ลงนาม) ผู้สั่งจ่าย</h4>   
                <input type="text" class="form-control" name="namepay" value="{{$find->transfer_namepay}}" id="exampleInputEmail1"  disabled placeholder="(ลงนาม) ผู้เบิก" >
              </div>
            </div>

            <div class="col-xs-6">
              <div class="form-group">
                <h4 for="exampleInputEmail1">วันที่</h4>   
                <input type="date" class="form-control" name="date" value="{{$find->transfer_date}}" id="exampleInputEmail1" disabled placeholder=" " >
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="box box-success">
        <div class="box-header with-border">            
          <h4 class="box-title">ได้รับสิ่งอุปกรณ์ตามรายการและจำนวนที่แจ้งไว้ในช่อง "จ่ายจริง/ค้างจ่าย" แล้ว</h4>
        </div>

        <form role="form">
          <div class="box-body">
            <div class="row">

              <div class="col-xs-6">
                <div class="form-group">
                  <h4 for="exampleInputEmail1">(ลงนาม) ผู้รับ</h4>   
                  <input type="text" class="form-control" name="nameget" value="{{$find->transfer_nameget}}" id="exampleInputEmail1" disabled placeholder="(ลงนาม) ผู้เบิก" >
                </div>
              </div>

              <div class="col-xs-6">
                <div class="form-group">
                  <h4 for="exampleInputEmail1">วันที่</h4>   
                  <input type="date" class="form-control" name="date1" value="{{$find->transfer_date1}}" id="exampleInputEmail1" disabled placeholder=" " >
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>

    </div>    





  </div>





  <div class="col-md-12">
   <div class="row">
    
     <div class="col-md-12">
       <a href="{{ url()->previous() }}" class="btn btn-block btn-success">กลับหน้าแรก</a>
     </div>    
   </div>

 </div>
</form>

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
