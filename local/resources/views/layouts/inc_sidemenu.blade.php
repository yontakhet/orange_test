 <!-- Left side column. contains the sidebar -->
 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <ul class="sidebar-menu">
@role('Admin')
<li class="header">Admin Controller</li>
<li class="{!! (in_array('managepermission',explode('/',URL::current())) ? 'active' : '')  !!}"><a href="{{url('managepermission')}}"><i class="fa fa-home"></i> <span> จัดการPermission</span></a></li>
@endrole
{{-- <li class="header">MAIN NAVIGATION</li>
<li class="{!! (in_array('allproduct',explode('/',URL::current())) ? 'active' : '')  !!}"><a href="{{url('allproduct')}}"><i class="fa fa-home"></i> <span>1 บัญชีครุภัณฑ์</span></a></li>
<li class="{!! (in_array('product',explode('/',URL::current())) ? 'active' : '')  !!}"><a href="{{url('product')}}"><i class="fa fa-home"></i> <span>2 ทะเบียนคุมทรัพสิน</span></a></li>
<li class="{!! (in_array('maxproduct',explode('/',URL::current())) ? 'active' : '')  !!}"><a href="{{url('maxproduct')}}"><i class="fa fa-home"></i> <span>3 บัญชีอัตราสิ่งอุปกรณ์</span></a></li>
<li class="{!! (in_array('lifereport',explode('/',URL::current())) ? 'active' : '')  !!}"><a href="{{url('lifereport')}}"><i class="fa fa-home"></i> <span>4 รายงานค่าเสื่อมประจำปี</span></a></li>
<li class="{!! (in_array('withdraw',explode('/',URL::current())) ? 'active' : '')  !!}"><a href="{{url('withdraw')}}"><i class="fa fa-home"></i> <span>5 เบิกครุภัณฑ์</span></a></li>
<li class="{!! (in_array('sell',explode('/',URL::current())) ? 'active' : '')  !!}"><a href="{{url('sell')}}"><i class="fa fa-home"></i> <span>6 จำหน่ายครุภัณฑ์</span></a></li>
<li class="{!! (in_array('historysell',explode('/',URL::current())) ? 'active' : '')  !!}"><a href="{{url('historysell')}}"><i class="fa fa-home"></i> <span>6.2 ประวัติการจำหน่าย</span></a></li>
<li class="{!! (in_array('repair',explode('/',URL::current())) ? 'active' : '')  !!}"><a href="{{url('repair')}}"><i class="fa fa-home"></i> <span>7 บันทึกการซ่อมบำรุงครุภัณฑ์</span></a></li>
<li class="{!! (in_array('repairreport',explode('/',URL::current())) ? 'active' : '')  !!}"><a href="{{url('repairreport')}}"><i class="fa fa-home"></i> <span>7.2 รายงานบันทึกการซ่อมบำรุงครุภัณฑ์</span></a></li>
<li class="{!! (in_array('transfer',explode('/',URL::current())) ? 'active' : '')  !!}"><a href="{{url('transfer')}}"><i class="fa fa-home"></i> <span>8 โอนย้ายทะเบียนทรัพย์สิน</span></a></li> --}}

<li class="header">MAIN NAVIGATION</li>
<li class="{!! (in_array('allproduct',explode('/',URL::current())) ? 'active' : '')  !!}"><a href="{{url('allproduct')}}"><i class="fa fa-home"></i> <span>นำเข้าบัญชีครุภัณฑ์</span></a></li>
{{-- <li><a href="allproduct.php"><i class="fa fa-home"></i><span>นำเข้าบัญชีครุภัณฑ์</span></a></li>   --}}
<li class="{!! (in_array('withdraw',explode('/',URL::current())) ? 'active' : '')  !!}"><a href="{{url('withdraw')}}"><i class="fa fa-home"></i> <span>เบิกครุภัณฑ์</span></a></li>
{{-- <li><a href="withdraw.php"><i class="fa fa-home"></i><span>เบิกครุภัณฑ์</span></a></li>  --}}
<li class="{!! (in_array('transfer',explode('/',URL::current())) ? 'active' : '')  !!}"><a href="{{url('transfer')}}"><i class="fa fa-home"></i> <span>โอนย้ายทะเบียนทรัพย์สิน</span></a></li>
{{-- <li><a href="transfer.php"><i class="fa fa-home"></i> <span>โอนย้ายทะเบียนทรัพย์สิน</span></a></li>  --}}
<li class="{!! (in_array('sell',explode('/',URL::current())) ? 'active' : '')  !!}"><a href="{{url('sell')}}"><i class="fa fa-home"></i> <span>จำหน่ายครุภัณฑ์</span></a></li>
{{-- <li><a href="sell.php"><i class="fa fa-home"></i> <span>จำหน่ายครุภัณฑ์</span></a></li>  --}}
<li class="{!! (in_array('repair',explode('/',URL::current())) ? 'active' : '')  !!}"><a href="{{url('repair')}}"><i class="fa fa-home"></i> <span>บันทึกการซ่อมบำรุงครุภัณฑ์</span></a></li>
{{-- <li><a href="repair.php"><i class="fa fa-home"></i> <span>แจ้งซ่อมบำรุงครุภัณฑ์</span></a></li>       --}}


<li class="header">รายงาน</li>
<li class="{!! (in_array('repairreport',explode('/',URL::current())) ? 'active' : '')  !!}"><a href="{{url('repairreport')}}"><i class="fa fa-home"></i> <span>รายงานทะเบียนคุมทรัพสิน</span></a></li>
{{-- <li><a href="reportproduct.php"><i class="fa fa-home"></i> <span>รายงานทะเบียนคุมทรัพสิน</span></a></li>    --}}
<li class="{!! (in_array('maxproduct',explode('/',URL::current())) ? 'active' : '')  !!}"><a href="{{url('maxproduct')}}"><i class="fa fa-home"></i> <span>รายงานบัญชีอัตราสิ่งอุปกรณ์</span></a></li>
{{-- <li><a href="maxproduct.php"><i class="fa fa-home"></i> <span>รายงานบัญชีอัตราสิ่งอุปกรณ์</span></a></li> --}}
<li class="{!! (in_array('lifereport',explode('/',URL::current())) ? 'active' : '')  !!}"><a href="{{url('lifereport')}}"><i class="fa fa-home"></i> <span>รายงานค่าเสื่อมประจำปี</span></a></li>
{{-- <li><a href="lifereport.php"><i class="fa fa-home"></i> <span>รายงานค่าเสื่อมประจำปี</span></a></li>  --}}
<li class="{!! (in_array('historysell',explode('/',URL::current())) ? 'active' : '')  !!}"><a href="{{url('historysell')}}"><i class="fa fa-home"></i> <span>ประวัติการจำหน่ายครุภัณฑ์</span></a></li>
{{-- <li><a href="historysell.php"><i class="fa fa-home"></i> <span>ประวัติการจำหน่ายครุภัณฑ์</span></a></li>   --}}
<li class="{!! (in_array('repairreport',explode('/',URL::current())) ? 'active' : '')  !!}"><a href="{{url('repairreport')}}"><i class="fa fa-home"></i> <span>รายงานการซ่อมบำรุงครุภัณฑ์</span></a></li>
{{-- <li><a href="repairreport.php"><i class="fa fa-home"></i> <span>รายงานการซ่อมบำรุงครุภัณฑ์</span></a></li>  --}}

        {{-- <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Example Page</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="ex_blank.php"><i class="fa fa-circle-o"></i> Page blank</a></li>
            <li><a href="ex_form.php"><i class="fa fa-circle-o"></i> Form</a></li>
            <li><a href="ex_table.php"><i class="fa fa-circle-o"></i> Table</a></li>
            <li><a href="ex_icon.php"><i class="fa fa-circle-o"></i> Icon</a></li>
            <li><a href="ex_button.php"><i class="fa fa-circle-o"></i> button</a></li>
          </ul>
        </li> --}}

{{-- <li class="header">Master Data</li> --}}
{{-- <li class="{!! (in_array('transfer',explode('/',URL::current())) ? 'active' : '')  !!}"><a href="{{url('transfer')}}"><i class="fa fa-home"></i> <span> โอนย้ายทะเบียนทรัพย์สิน</span></a></li> --}}

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
