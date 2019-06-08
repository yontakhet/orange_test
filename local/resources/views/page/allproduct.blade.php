@extends('layouts.main')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>บัญชีครุภัณฑ์</h1>
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
                                <a href="{{url('product')}}" class="btn btn-block btn-success">เพิ่มครุภัณฑ์</a>
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
                                            <option>เงินทุนหมุนเวียน</option>
                                            <option>งบประมาณแผ่นดิน</option>
                                            <option>อื่นๆ</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-2">
                                    <div class="form-group">
                                        <h4 for="exampleInputEmail1">ปีงบประมาณ</h4>
                                        <select class="form-control">
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
                                    <button type="button" class="btn btn-block btn-success" style="margin-top: 38px;">ค้นหา</button>

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
                                <h3 class="box-title">บัญชีครุภัณฑ์ ประเภทเงินทุนหมุนเวียน ปี 2561</h3>
                            </div>
                            <div class="col-md-2">
                                <a href="{{url('exportall')}}" class="btn btn-block btn-success">Excel</a>
                            </div>
                            <div class="col-md-2">
                                <a href="product.php" class="btn btn-block btn-danger">PDF</a>
                            </div>
                        </div>

                    </div>



                    <div id="exTab2">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#1" data-toggle="tab">รออนุมัติ</a>
                            </li>
                            <li><a href="#2" data-toggle="tab">อนุมัติ</a>
                            </li>
                        </ul>

                        <div class="tab-content ">
                            <div class="tab-pane active" id="1">

                                <!-- /.box-header -->
                                <div class="box-body">
                                    <div class="table-responsive">
                                        <table id="allproductwait" class="table table-bordered table-striped ">
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
                                                    <th class="text-nowrap" style="text-align: center;">จัดการ</th>
                                                    @role('Admin')<th class="text-nowrap" style="text-align: center;">อนุมัติ</th>            @endrole
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $j=1; ?>
                                                @foreach ($allproducts as $key => $allproduct)

                                                <?php

                                                $value = $allproduct->totalvalue;
                                                $res = $value*7/100;
                                                $vat = $value + $res;
                                                if($allproduct['status']==0){
                                                    ?>
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
                                                        <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            <td style="text-align: center;">
                                                                <a class="btn btn-xs" href="{{url('productedit',$allproduct->id_allproduct)}}" role="button" style="background-color:  #ffb52d;color: white;    margin: 0;">
                                                                    <i class="fa fa-fw fa-pencil"></i> อัพเดท</a>&nbsp;

                                                                    <a class="btn btn-xs delete_data" data-id="{{$allproduct->id_allproduct}}" role="button" style="background-color:  #ff6c6c;color: white;    margin: 0;">
                                                                        <i class="fa fa-fw fa-trash"></i> ลบ</a>

                                                                    </td>
                                                                    @role('Admin')
                                                                    <td style="text-align: center;">
                                                                        <a class="btn btn-xs" href="{{url('productdetailaprove',$allproduct->id_allproduct)}}" role="button"
                                                                            style="background-color:  #00a659;color: white;    margin: 0;">
                                                                        อนุมัติ</a>&nbsp;

                                                                    </td>
                                                                    @endrole

                                                                </form>
                                                            </tr>
                                                            <?php $j++ ; } ?>
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
                                                             <th class="text-nowrap" style="text-align: center;">แผนก/หน่วยย่อย</th>
                                                             <th class="text-nowrap" style="text-align: center;">รหัสครุภัณฑ์</th>
                                                             <th class="text-nowrap" style="text-align: center;">ยี่ห้อ รุ่น บริษัท</th>
                                                             <th class="text-nowrap" style="text-align: center;">ราคารวมvat</th>
                                                             <th class="text-nowrap" style="text-align: center;">รายละเอียด</th>
                                                             <th class="text-nowrap" style="text-align: center;">จัดการ</th>
                                                             <th class="text-nowrap" style="text-align: center;">Export</th>
                                                         </tr>
                                                     </thead>
                                                     <tbody>
                                                        <?php  $i=1; ?>
                                                        @foreach ($allproducts as $val => $allproduct)

                                                        <?php
                                                        $value = $allproduct->totalvalue;
                                                        $res = $value*7/100;
                                                        $vat = $value + $res;
                                                        if($allproduct['status']==1){
                                                            ?>
                                                            <tr>
                                                                <td style="text-align: center;">{{$i}}</td>
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
                                                                <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                                                                    @csrf
                                                                    <td style="text-align: center;">
                                                                        <a class="btn btn-xs" href="{{url('productedit',$allproduct->id_allproduct)}}" role="button" style="background-color:  #ffb52d;color: white;    margin: 0;">
                                                                            <i class="fa fa-fw fa-pencil"></i> อัพเดท</a>&nbsp;

                                                                            <a class="btn btn-xs delete_data" data-id="{{$allproduct->id_allproduct}}" role="button" style="background-color:  #ff6c6c;color: white;    margin: 0;">
                                                                                <i class="fa fa-fw fa-trash"></i> ลบ</a>

                                                                            </td>
                                                                            <td style="text-align: center;">
                                                                                <a class="btn btn-xs" href="{{url('export').'/'.$allproduct->id_allproduct}}" role="button" style="background-color:  #00a659;color: white;    margin: 0;">                                                                                Excel</a>&nbsp;
                                                                                <a class="btn btn-xs" href="{{url('generate-pdf')}}" role="button" style="background-color:  #ff6c6c;color: white;    margin: 0;">
                                                                                PDF</a>
                                                                            </td>
                                                                        </form>
                                                                    </tr>
                                                                    <?php $i++; } ?>
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
                    {{-- <script type="text/javascript">
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
                    </script>
                    <script>
                        $(function() {
                            $('#allproductwait').DataTable({
                                processing: true,
                                serverSide: true,
            // "bPaginate": false,
            "bLengthChange": false,
            // "bFilter": true,
            // "bInfo": false,
            // "bFilter": false ,
            // "bAutoWidth": false ,
            ajax: {
                "url": "{{url('allproductDatatables')}}",
                "type": "POST"
            },
            columns: [
            { data: 'id_allproduct', name: 'id_allproduct' },
            { data: 'name', name: 'name' },
            { data: 'unit', name: 'unit' },
            { data: 'date_come', name: 'date_come' },
            { data: 'service_for', name: 'service_for' },
            { data: 'responsibleagency', name: 'responsibleagency' },
            { data: 'department', name: 'department' },
            { data: 'code', name: 'code' },
            { data: 'service_for', name: 'service_for' },
            { data: 'brand', name: 'brand' },
            { data: 'totalvalue', name: 'totalvalue' },
            { data: 'Detail', name: 'Detail' },
            { data: 'Manage', name: 'Manage' },
            { data: 'Export', name: 'Export' },
            ]
        });
                        });
                    </script> --}}
                    <script type="text/javascript">
                        $(document).ready(function(){
                           $(document).on("click", ".delete_data", function () {
                            var r = confirm("ยืนยันการลบข้อมูล ?");
                            var uid = $(this).attr("data-id");
                            if (r == true) {
                                $.ajax({
                                    url: "{{url('delallproduct/product')}}/" + uid,
                                    method: "post",
                                    data: {
                            // _method: "DELETE",
                            _token: "{{ csrf_token() }}",
                            id: uid
                        }, //ส่งข้อมูลไปในรูปแบบ JSON

                        success: function (result) {
                            // console.log(result);

                            location.reload();


                        }
                    });
                            }


                        });

                       });
                   </script>

                   @endsection


