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
              <th class="text-nowrap" style="text-align: center;">แผนก</th>
              <th class="text-nowrap" style="text-align: center;">วันที่</th>
              <th class="text-nowrap" style="text-align: center;">เลขรับเรื่องส่งซ่อม</th>
              <th class="text-nowrap" style="text-align: center;">เรื่อง</th> 
              <th class="text-nowrap" style="text-align: center;">รายการ</th>  
              <th class="text-nowrap" style="text-align: center;">สายยุทธบริการ</th>     
              <th class="text-nowrap" style="text-align: center;">เลขที่หรือรหัสครุภัณฑ์</th> 
              <th class="text-nowrap" style="text-align: center;">รายละเอียด</th>    
            </tr>
          </thead>

          <tbody>
            <tr>
              <td style="text-align: center;">1.</td>
              <td>{{$repairs->repair_department}}</td>
              <td style="text-align: center;">{{formatdate($repairs->repair_date)}}</td>
              <td style="text-align: center;">{{$repairs->repair_receipt_number}}</td>
              <td>{{$repairs->repair_subject}}</td>   
              <td>{{$repairs->name}}</td>    
              <td style="text-align: center;">{{service_for($repairs->service_for)}}</td>    
              <td style="text-align: center;">{{$repairs->code}}</td>
              <td style="text-align: center;">
               <a class="btn btn-xs" href="../repairdetail/{{$repairs->id_dep}}" role="button" style="background-color:  #00a659;color: white;    margin: 0;">
               รายละเอียด</a>
             </td>      
           </tr>





         </tbody> 
       </table>

     </div>
     <!-- /.box-body -->
   </div> 





   <div class="box box-success">

    <div class="box-header with-border">
      <h3 class="box-title">ใบบันทึกการซ่อมเครื่องจักร</h3>
    </div>

    <form role="form">
      <div class="box-body">


        <div class="row">
          <div class="col-xs-6">
           <div class="form-group">
             <h4 for="exampleInputEmail1">ดำเนินการตรวจสอบแล้วพบว่า <span style="color: red;">*</span></h4>  
             <select class="form-control" >
              <option>ดำเนินการซ่อมเอง</option>
              <option>สั่งซื้ออะไหล่</option>
              <option>ช่างด้านนอกมาดำเนินการซ่อม</option>
            </select>
          </div>
        </div>    
        <div class="col-xs-6">
         <div class="form-group">
           <h4 for="exampleInputEmail1">วันที่ <span style="color: red;">*</span></h4>  
           <input type="email" class="form-control" id="exampleInputEmail1" placeholder=" ">
         </div>
       </div>
     </div>




   </div>
 </form>
</div>    


<div class="box box-success">

  <div class="box-header with-border">

    <h3 class="box-title">ดำเนินการซ่อมโดย</h3>
  </div>

  <form role="form">
    <div class="box-body">

     <div class="row">
      <div class="col-xs-12">
       <div class="form-group">
         <textarea class="form-control" rows="5" id="comment"></textarea>
       </div>
     </div>
   </div>




 </div>
</form>
<!-- /.box-body -->
</div>


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
         <input type="email" class="form-control" id="exampleInputEmail1" placeholder="ผู้ตรวจ">
       </div>
     </div>
     <div class="col-xs-4">
       <div class="form-group">
         <h4 for="exampleInputEmail1">ตำแหน่ง</h4>   
         <input type="email" class="form-control" id="exampleInputEmail1" placeholder="ตำแหน่ง">
       </div>
     </div>
     <div class="col-xs-3">
       <div class="form-group">
         <h4 for="exampleInputEmail1">วันที่</h4>   
         <input type="email" class="form-control" id="exampleInputEmail1" placeholder="วันที่">
       </div>
     </div>
   </div>



 </div>
</form>
<!-- /.box-body -->
</div>
</div>





<div class="col-md-12">
 <div class="row">
   <div class="col-md-8">
     <a href="repair.php" class="btn btn-block btn-success">บันทึกการซ่อม</a>
   </div>   
   <div class="col-md-4">
     <a href="repair.php" class="btn btn-block btn-danger">กลับสู่หน้าหลัก</a>
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
