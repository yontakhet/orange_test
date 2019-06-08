@extends('layouts.main')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>รายงานค่าเสื่อมประจำปี</h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- Form Element sizes -->
                <div class="box box-success">
                    <div class="box-header" style="padding-bottom: 0px;">
                        <h3 class="box-title">ค้นหาบัญรายงานค่าเสื่อม</h3>
                    </div>
                    <form role="form">
                        <div class="box-body" style="padding-top: 0px;">
                            <div class="row">
                                <div class="col-xs-4">
                                    <div class="form-group">
                                        <h4 for="exampleInputEmail1">ประเภทเงิน</h4>
                                        <select class="form-control">
                                            <option>เงินทุนหมุนเวียน</option>
                                            <option>งบประมาณแผ่นดิน</option>
                                            <option>อื่นๆ</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="form-group">
                                        <h4 for="exampleInputEmail1">ปีงบประมาณ</h4>
                                        <select class="form-control">
                                            <option>2560</option>
                                            <option>2561</option>
                                            <option>2562</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <button type="button" class="btn btn-block btn-success"
                                        style="margin-top: 38px;">ค้นหารายงานค่าเสื่อม</button>
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
                                <h3 class="box-title">บัญชีครุภัณฑ์ ประเภทเงินทุนหมุนเวียน ปี 61</h3>
                            </div>
                            <div class="col-md-2">
                                <a href="product.php" class="btn btn-block btn-success">Excel</a>
                            </div>
                            <div class="col-md-2">
                                <a href="{{url('generate-pdf')}}" class="btn btn-block btn-danger">PDF</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped ">
                                <thead>
                                    <tr>
                                        <th class="text-nowrap" style="text-align: center;">ลำดับ</th>
                                        <th class="text-nowrap" style="text-align: center;">รายการ</th>
                                        <th class="text-nowrap" style="text-align: center;">หมายเลขครุภัณฑ์</th>
                                        <th class="text-nowrap" style="text-align: center;">รหัสสินทรัพย์ GFMIS</th>
                                        <th class="text-nowrap" style="text-align: center;">วันที่ได้มา</th>
                                        <th class="text-nowrap" style="text-align: center;">มูลค่าทุน</th>
                                        <th class="text-nowrap" style="text-align: center;">อายุการใข้งาน</th>
                                        <th class="text-nowrap" style="text-align: center;">ค่าเสื่อมราคา สะสมปี 60</th>
                                        <th class="text-nowrap" style="text-align: center;">ค่าเสื่อมราคา ปี 61</th>
                                        <th class="text-nowrap" style="text-align: center;">ค่าเสื่อมราคา สะสมปี 61</th>
                                        <th class="text-nowrap" style="text-align: center;">มูลค่าสุทธิ ณ 30 ก.ย.61</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td style="text-align: center;">1.</td>
                                        <td>อ่างล้างอุปกรณ์</td>
                                        <td style="text-align: center;">3650-007-1001-2615</td>
                                        <td style="text-align: center;">-</td>
                                        <td style="text-align: center;">4 ธ.ค. 60</td>
                                        <td style="text-align: center;">483,300.00</td>
                                        <td style="text-align: center;">3 11 เดือน</td>
                                        <td style="text-align: center;">161,100.00</td>
                                        <td style="text-align: center;">147,675.00</td>
                                        <td style="text-align: center;">147,675.00</td>
                                        <td style="text-align: center;">335,625.00</td>

                                    </tr>

                                    <tr>
                                        <td style="text-align: center;">2.</td>
                                        <td>อ่างล้างอุปกรณ์</td>
                                        <td style="text-align: center;">3650-007-1001-2615</td>
                                        <td style="text-align: center;">-</td>
                                        <td style="text-align: center;">4 ธ.ค. 60</td>
                                        <td style="text-align: center;">483,300.00</td>
                                        <td style="text-align: center;">3 11 เดือน</td>
                                        <td style="text-align: center;">161,100.00</td>
                                        <td style="text-align: center;">147,675.00</td>
                                        <td style="text-align: center;">147,675.00</td>
                                        <td style="text-align: center;">335,625.00</td>

                                    </tr>

                                    <tr>
                                        <td style="text-align: center;">3.</td>
                                        <td>อ่างล้างอุปกรณ์</td>
                                        <td style="text-align: center;">3650-007-1001-2615</td>
                                        <td style="text-align: center;">-</td>
                                        <td style="text-align: center;">4 ธ.ค. 60</td>
                                        <td style="text-align: center;">483,300.00</td>
                                        <td style="text-align: center;">3 11 เดือน</td>
                                        <td style="text-align: center;">161,100.00</td>
                                        <td style="text-align: center;">147,675.00</td>
                                        <td style="text-align: center;">147,675.00</td>
                                        <td style="text-align: center;">335,625.00</td>

                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="2">รวมค่าเสื่อม</th>
                                        <th> </th>
                                        <th> </th>
                                        <th> </th>
                                        <th style="text-align: center;">1449900.00</th>
                                        <th></th>
                                        <th style="text-align: center;">483300.00</th>
                                        <th style="text-align: center;">443025.00</th>
                                        <th style="text-align: center;">443025.00</th>
                                        <th style="text-align: center;">1006875.00</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <!-- /.box-body -->
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
