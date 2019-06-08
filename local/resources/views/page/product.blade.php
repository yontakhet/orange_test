@extends('layouts.main')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>ทะเบียนคุมทรัพสิน</h1>
    </section>


    <section class="content">

        <div class="row">
            <div class="col-md-12">
                <div class="box box-success">

                    <div class="box-header with-border">
                        <h3 class="box-title">ทะเบียนคุมทรัพสิน (งป.)</h3>
                    </div>

                    <form action="{{route('allproduct.store')}}" method="POST" autocomplete="off">
                        @csrf
                        <div class="box-body">
                            <div class="row">
                                <div class="col-xs-3">
                                    <div class="form-group">       
                                        <h4 for="exampleInputEmail1">รหัส <span style="color: red;">* </span></h4>
                                        <input type="text" name="code" class="form-control" id="code"  placeholder=" " >
                                        <!-- <input id="code" name="code" type="text"  /> -->
                                    </div>
                                </div>
                                <div class="col-xs-3">
                                    <div class="form-group">
                                        <h4 for="exampleInputEmail1">ลักษณะ/คุณสมบัติ <span style="color: red;">*</span>
                                        </h4>
                                        <input type="text" name="property" class="form-control" id="exampleInputEmail1"
                                        placeholder=" ">
                                    </div>
                                </div>
                                <div class="col-xs-3">
                                    <div class="form-group">
                                        <h4 for="exampleInputEmail1">รุ่น/แบบ <span style="color: red;">*</span></h4>
                                        <input type="text" class="form-control" name="model" id="exampleInputEmail1" placeholder=" ">
                                    </div>
                                </div>
                                <div class="col-xs-3">
                                    <div class="form-group">
                                        <h4 for="exampleInputEmail1">ยี่ห้อ <span style="color: red;">*</span></h4>
                                        <input type="text" class="form-control" name="brand" id="exampleInputEmail1" placeholder=" ">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-4">
                                    <div class="form-group">
                                        <h4 for="exampleInputEmail1">รายการ <span style="color: red;">*</span></h4>
                                        <input type="text" name="name" class="form-control" autocomplete="off" id="exampleInputEmail1"
                                        placeholder=" ">
                                    </div>
                                </div>
                                <div class="col-xs-2">
                                    <div class="form-group">
                                        <h4 for="exampleInputEmail1">จำนวนหน่วย <span style="color: red;">*</span></h4>
                                        <input type="text" name="unit" class="form-control" id="unit"
                                        placeholder=" ">
                                    </div>
                                </div>
                                <div class="col-xs-3">
                                    <div class="form-group">
                                        <h4 for="exampleInputEmail1">ราคาต่อหน่วย/ชุด/กลุ่ม <span
                                            style="color: red;">*</span></h4>
                                            <input type="text" name="priceperunit" class="form-control"
                                            id="priceperunit" placeholder=" ">
                                        </div>
                                    </div>
                                    <div class="col-xs-3">
                                        <div class="form-group">
                                            <h4 for="exampleInputEmail1">มูลค่ารวม <span style="color: red;">*</span></h4>
                                            <input type="text" name="totalvalue" class="form-control"
                                            id="totalvalue" readonly="">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-2">
                                        <div class="form-group">
                                            <h4 for="exampleInputEmail1">วันที่ได้มา <span style="color: red;">*</span></h4>
                                            <input type="date" name="date_come" class="form-control" id="exampleInputEmail1"
                                            placeholder=" ">
                                        </div>
                                    </div>
                                    <div class="col-xs-3">
                                        <div class="form-group">
                                            <h4 for="exampleInputEmail1">ประเภท <span style="color: red;">*</span></h4>
                                            <select class="form-control" name="category">
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
                                    <div class="col-xs-2">
                                        <div class="form-group">
                                            <h4 for="exampleInputEmail1">สายยุทธบริการ <span style="color: red;">*</span>
                                            </h4>
                                            <select class="form-control" name="service_for" id="service_for">
                                                <option selected disabled></option>
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

                                    <div class="col-xs-2">
                                        <div class="form-group">
                                            <h4 for="exampleInputEmail1">รหัส อสอ. <span style="color: red;">*</span></h4>
                                            <select class="form-control" name="code_asa" id="code_asa">

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-3">
                                        <div class="form-group">
                                            <h4 for="exampleInputEmail1">GFMIS</h4>
                                            <input type="text" class="form-control" name="gfmis" disabled id="gfmis"
                                            placeholder=" ">
                                        </div>
                                    </div>
                                </div>



                                <div class="row">

                                    <div class="col-xs-3">
                                        <div class="form-group">
                                            <h4 for="exampleInputEmail1">หน่วยงานรับผิดชอบ <span
                                                style="color: red;">*</span></h4>
                                                <select class="form-control" name="responsibleagency">
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

                                        <div class="col-xs-3">
                                            <div class="form-group">
                                                <h4 for="exampleInputEmail1">แผนก/หน่วยย่อย <span style="color: red;">*</span>
                                                </h4>
                                                <select class="form-control" name="department">
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

                                        <div class="col-xs-6">
                                            <div class="form-group">
                                                <h4 for="exampleInputEmail1">สถานที่ตั้ง</h4>
                                                <input type="text" class="form-control" name="location" id="exampleInputEmail1" placeholder=" ">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-xs-3">
                                            <div class="form-group">
                                                <h4 for="exampleInputEmail1">ชื่อผู้ขาย/ผู้รับจ้าง/ผู้บริจาค <span
                                                    style="color: red;">*</span></h4>
                                                    <input type="text" class="form-control" name="dealer" id="exampleInputEmail1" placeholder=" ">
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="form-group">
                                                    <h4 for="exampleInputEmail1">ที่อยู่ <span style="color: red;">*</span></h4>
                                                    <input type="text" class="form-control" name="address" id="exampleInputEmail1" placeholder=" ">
                                                </div>
                                            </div>
                                            <div class="col-xs-3">
                                                <div class="form-group">
                                                    <h4 for="exampleInputEmail1">โทรศัพท์ <span style="color: red;">*</span></h4>
                                                    <input type="text" class="form-control" name="tel" id="exampleInputEmail1" placeholder=" ">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-xs-6">
                                                <div class="form-group">
                                                    <h4 for="exampleInputEmail1">ประเภทเงิน <span style="color: red;">*</span></h4>
                                                    <select class="form-control" name="typemoney" id="typemoney">
                                                        <option selected disabled>  </option>
                                                        <option value="1">เงินงบประมาณ</option>
                                                        <option value="2">เงินนอกงบประมาณ ง/ท.</option>
                                                        <option value="3">เงินบริจาค/เงินช่วยเหลือ</option>
                                                        <option value="4">อื่นๆ</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="form-group">
                                                    <h4 for="exampleInputEmail1">วิธีการได้มา <span style="color: red;">*</span>
                                                    </h4>
                                                    <select class="form-control" name="howtocome">
                                                        <option value="1">ตกลงราคา</option>
                                                        <option value="2">สอบราคา</option>
                                                        <option value="3">ประกวดราคา</option>
                                                        <option value="4">วิธีพิเศษ</option>
                                                        <option value="5">เฉพาะเจาะจง</option>
                                                        <option value="6">รับบริจาค</option>
                                                        <option value="7">ประกาศอิเล็กทรอนิคส์</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

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
                                                    <th style="width: 60px;">ลำดับ</th>
                                                    <th>เอกสาร</th>
                                                    <th>ที่</th>
                                                    <th>ลง</th>
                                                    <!-- <th>รายละเอียด</th>
                                                        <th style="width: 130px;">จัดการ</th> -->
                                                    </tr>
                                                </thead>

                                                <tbody id="data_document">

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
                                                        <th style="width: 60px;">ลำดับ</th>
                                                        <th>รายการ</th>
                                                        <th>จำนวนหน่วย</th>
                                                        <!-- <th style="width: 130px;">จัดการ</th> -->

                                                    </tr>
                                                </thead>

                                                <tbody id="sub_main">

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
                                                        text-align: center;
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


                                    <div class="box-body">

                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="form-group">
                                                    <textarea class="form-control" rows="5" name="comment" id="comment"></textarea>
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
                                                    <input type="text" class="form-control" id="inspector" name="inspector"
                                                    placeholder="ผู้ตรวจ">
                                                </div>
                                            </div>
                                            <div class="col-xs-4">
                                                <div class="form-group">
                                                    <h4 for="exampleInputEmail1">ตำแหน่ง</h4>
                                                    <input type="text" class="form-control" id="position" name="position"
                                                    placeholder="ตำแหน่ง">
                                                </div>
                                            </div>
                                            <div class="col-xs-3">
                                                <div class="form-group">
                                                    <h4 for="exampleInputEmail1">วันที่</h4>
                                                    <input type="date" class="form-control" id="date" name="date"
                                                    placeholder="วันที่">
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
                                        {{-- <a href="allproduct.php" class="btn btn-block btn-success">สร้างเอกสาร</a> --}}
                                        <button type="submit" class="btn btn-block btn-success">สร้างเอกสาร</button>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="{{ url()->previous() }}" class="btn btn-block btn-danger">ยกเลิกการสร้างเอกสาร</a>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </form>


                </section>
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
       <input type="text" id="num_document" style="width:20%" >
       &nbsp;  &nbsp; <label for="recipient-name" class="col-form-label">  ลงวันที่ : </label>
       <input type="date" id="date_document" >
   </div>

   <div class="form-group">
    <label for="recipient-name" class="col-form-label"> เอกสาร : </label>
    <input type="text" class="form-control" id="sub_document" >
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

        $("#code").inputmask({"mask": "999-999-9999-9999-9/99"});

        $("#priceperunit").keyup(function(){
            var unit = $("#unit").val();
            var price = $("#priceperunit").val();
            var x = unit * price;
            $("#totalvalue").val(x);
        })

        $("#unit  ").keyup(function(){
            var unit = $("#unit").val();
            var price = $("#priceperunit").val();
            var x = unit * price;
            $("#totalvalue").val(x);
        })
        $("#typemoney").change(function(){
            var c = $(this).val()
            if( c == 1 ){
                $("#gfmis").removeAttr("disabled");
                // alert(c);
            } else if( c != 1 ) {
                $("#gfmis").attr("disabled", 'disabled');

            }
        })

        $("#code_asa").attr('disabled','disabled');

        $("#service_for").change(function(){

            var s  = $(this).val();

            $("#code_asa").html('');

            $.ajax({

                method: 'get',

                url: "{{url('line')}}/" + s,

                data: {
                    id: s
                },
                success:function(data){
                    $("#code_asa").removeAttr('disabled');

                    $.each( data, function( val ) {
                        $("#code_asa").append("<option value="+data[val].id_line+">"+data[val].name+" </option>");
                    })

                }

            }); 
        })

        $("#code").change(function(){
            var code = $(this).val();
            $("#code_chk").html("");
            $.ajax({
                method: 'POST',
                url: "{{url('code')}}", 
                data:{
                  _token: "{{ csrf_token() }}", 
                  code : code },
                  success:function(data){
                    if(data == 0 ){
                        $("#code").css("background-color","#ddffdd");
                    }else{
                        $("#code").css("background-color","#F8E1E1");
                    }
                    // $("#code").append('');
                }
            })
        })


        // ------------------------------------ durable
        var count = 0;
        $(".durable_submit").click(function(){
          count++;
          var sub_durable= $("#sub_durable").val();
          var num_durable= $("#num_durable").val();
          $("#sub_main").append(
            '<tr> <td> '+ count +'. </td> '+
            '<td> '+ sub_durable +' <input type="text" name="sub_durable[]" value="'+sub_durable+'"></td> '+
            '<td> '+ num_durable +' <input type="text" name="num_durable[]" value="'+num_durable+'"></td> '+
            ' </tr>'
            );
          $("#sub_durable").val("");
          $("#num_durable").val("");
      })
        // ------------------------------------ durable

        // ------------------------------------ document
        var doc_count = 0;
        $(".document_submit").click(function(){
          doc_count++;
          var sub_document= $("#sub_document").val();
          var date_document= $("#date_document").val();
          var num_document= $("#num_document").val();
          $("#data_document").append(
            '<tr> <td> '+ doc_count +'. </td> '+
            '<td> '+ sub_document +' <input type="text" name="sub_document[]" value="'+sub_document+'"></td> '+
            '<td> '+ num_document +' <input type="text" name="num_document[]" value="'+num_document+'"></td> '+
            '<td> '+ date_document +' <input type="text" name="date_document[]" value="'+date_document+'"></td> '+
            ' </tr>'
            );
          $("#num_document").val("");
          $("#date_document").val("");
          $("#sub_document").val("");
      })
        // ------------------------------------ document

        // ------------------------------------ note
        var note_count = 0;
        $(".repair_submit").click(function(){
          note_count++;
          var date_repair= $("#date_repair").val();
          var sub_repair= $("#sub_repair").val();
          var amount= $("#amount").val();
          var note= $("#note").val();
          $("#data_note").append(
            '<tr> <td> '+ note_count +'. </td> '+
            '<td> '+ date_repair +' <input type="text" name="date_repair[]" value="'+date_repair+'"></td> '+
            '<td> '+ sub_repair +' <input type="text" name="sub_repair[]" value="'+sub_repair+'"></td> '+
            '<td> '+ amount +' <input type="text" name="amount[]" value="'+amount+'"></td> '+
            '<td> '+ note +' <input type="text" name="note[]" value="'+note+'"></td> '+
            ' </tr>'
            );
          $("#date_repair").val("");
          $("#sub_repair").val("");
          $("#amount").val("");
          $("#note").val("");
      })

        // ------------------------------------ note

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
