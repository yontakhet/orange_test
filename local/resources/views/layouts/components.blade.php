<!DOCTYPE html>
<html lang="en" class="no-js">

<head>

    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Meta -->
    {{-- <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
          content="Gradient Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs."/>
    <meta name="keywords"
          content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive"/>
    <meta name="author" content="codedthemes"/>
    <!-- Favicon icon -->
    <link rel="icon" href="{!! URL::asset('backend/files/assets/images/favicon.ico')!!}" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css"
          href="{!! URL::asset('backend/files/bower_components/bootstrap/css/bootstrap.min.css')!!}">

    <link rel="stylesheet" type="text/css"
          href="{!! URL::asset('backend/files/assets/icon/ion-icon/css/ionicons.min.css')!!}">

    <!-- themify icon -->
    <link rel="stylesheet" type="text/css"
          href="{!! URL::asset('backend/files/assets/icon/themify-icons/themify-icons.css')!!}">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css"
          href="{!! URL::asset('backend/files/assets/icon/icofont/css/icofont.css')!!}"> --}}

    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Data Table Css -->
    <link rel="stylesheet" type="text/css"
        href="{!! URL::asset('backend/files/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css')!!}">
    <link rel="stylesheet" type="text/css"
        href="{!! URL::asset('backend/files/assets/pages/data-table/css/buttons.dataTables.min.css')!!}">
    <link rel="stylesheet" type="text/css"
        href="{!! URL::asset('backend/files/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')!!}">


    <link rel="stylesheet" type="text/css"
        href="{!! URL::asset('backend/files/assets/icon/font-awesome/css/font-awesome.min.css')!!}">
    <!-- scrollbar.css -->
    <link rel="stylesheet" type="text/css"
        href="{!! URL::asset('backend/files/assets/css/jquery.mCustomScrollbar.css')!!}">
    <!-- radial chart.css -->
    <link rel="stylesheet" href="{!! URL::asset('backend/files/assets/pages/chart/radial/css/radial.css')!!}"
        type="text/css" media="all">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{!! URL::asset('backend/files/assets/css/style.css')!!}">
    <link rel="stylesheet" type="text/css"
        href="{!! URL::asset('backend/files/bower_components/datedropper/css/datedropper.min.css')!!}">
    <script src="{!! URL::asset('backend/files/bower_components/jquery/js/jquery.min.js')!!}"></script>
    <script src="{!! URL::asset('backend/files/bower_components/jquery-ui/js/jquery-ui.min.js')!!}"></script>
    <script src="{!! URL::asset('backend/files/bower_components/popper.js/js/popper.min.js')!!}"></script>
    <script src="{!! URL::asset('backend/files/bower_components/bootstrap/js/bootstrap.min.js')!!}"></script>
    <script src="{!! URL::asset('backend/files/assets/pages/widget/excanvas.js')!!}"></script>
    <!--sweetalert-->
    <script src="{!! URL::asset('backend/files/assets/js/sweetalert.js')!!}"></script>

    <!-- jpro forms css -->
    <link rel="stylesheet" type="text/css" href="{!! URL::asset('backend/files/assets/pages/j-pro/css/demo.css')!!}">
    <link rel="stylesheet" type="text/css"
        href="{!! URL::asset('backend/files/assets/pages/j-pro/css/font-awesome.min.css')!!}">
    <link rel="stylesheet" type="text/css"
        href="{!! URL::asset('backend/files/assets/pages/j-pro/css/j-pro-modern.css')!!}">

    <link rel="stylesheet" type="text/css"
        href="{!! URL::asset('backend/files/bower_components/select2/css/select2.min.css')!!}">
    <!-- Multi Select css -->
    <link rel="stylesheet" type="text/css"
        href="{!! URL::asset('backend/files/bower_components/bootstrap-multiselect/css/bootstrap-multiselect.css')!!}" />
    <link rel="stylesheet" type="text/css"
        href="{!! URL::asset('backend/files/bower_components/multiselect/css/multi-select.css')!!}" />

    <link rel="stylesheet" type="text/css"
        href="{!! URL::asset('backend/files/bower_components/switchery/css/switchery.min.css')!!}">


    <link rel="stylesheet" type="text/css" href="{!! URL::asset('backend/files/assets/input_file.css')!!}">





    @if(Session::has('success'))
    {!! alertSuccess(Session::get("success"),'success') !!}
    @endif
    @if(Session::has('error'))
    {!! alertError(Session::get("error"),'error') !!}
    @endif
    @if(Session::has('info'))
    {!! alertInfo(Session::get("info"),'info') !!}
    @endif

<?php 

function category($value)
{
    if($value == 1){
        $res = 'อาคารถาวร';
    }elseif($value == 2){
        $res = 'อาคารชั่วคราว/โรงเรือน';
    }elseif($value == 3){
        $res = 'สิ่งก่อสร้างใช้คอนกรีตเสริมเหล็กหรือโครงเหล็กเป็นส่วนประกอบ';
    }elseif($value == 4){
        $res = 'สิ่งก่อสร้างใช้ไม้หรือวัสดุอื่นๆ เป็นส่วนประกอบหลัก';
    }elseif($value == 5){
        $res = 'ครุภัณฑ์สำนักงาน';
    }elseif($value == 6){
        $res = 'ครุภัณฑ์ยานพาหนะและขนส่ง';
    }elseif($value == 7){
        $res = 'ครุภัณฑ์ไฟฟ้าและวิทยุ';
    }elseif($value == 8){
        $res = 'ครุภัณฑ์โฆษณาและเผยแพร่';
    }elseif($value == 9){
        $res = 'ครุภัณฑ์การเกษตรเครื่องมือและอุปกรณ์';
    }elseif($value == 10){
        $res = 'ครุภัณฑ์การเกษตรเครื่องจักรกล';
    }elseif($value == 11){
        $res = 'ครุภัณฑ์โรงงานเครื่องมือและอุปกรณ์';
    }elseif($value == 12){
        $res = 'ครุภัณฑ์โรงงานเครื่องจักรกล';
    }elseif($value == 13){
        $res = 'ครุภัณฑ์ก่อสร้างเครื่องมือและอุปกรณ์';
    }elseif($value == 14){
        $res = 'ครุภัณฑ์ก่อสร้างเครื่องจักรกล';
    }elseif($value == 15){
        $res = 'ครุภัณฑ์สำรวจ';
    }elseif($value == 16){
        $res = 'ครุภัณฑ์วิทยาศาสตร์และการแพทย์';
    }elseif($value == 17){
        $res = 'ครุภัณฑ์คอมพิวเตอร์';
    }elseif($value == 18){
        $res = 'ครุภัณฑ์การศึกษา';
    }elseif($value == 19){
        $res = 'ครุภัณฑ์งานบ้านงานครัว';
    }elseif($value == 20){
        $res = 'ครุภัณฑ์กีฬา/กายภาพ';
    }elseif($value == 21){
        $res = 'ครุภัณฑ์ดนตรี/นาฏศิลป์';
    }elseif($value == 22){
        $res = 'ครุภัณฑ์อาวุธ';
    }elseif($value == 23){
        $res = 'ครุภัณฑ์สนาม';
    }elseif($value == 24){
        $res = 'สินทรัพย์โครงสร้างพื้นฐาน ถนนคอนกรีต';
    }elseif($value == 25){
        $res = 'สินทรัพย์โครงสร้างพื้นฐาน ถนนราดยาง';
    }elseif($value == 26){
        $res = 'สินทรัพย์โครงสร้างพื้นฐาน สะพานคอนกรีตเสิรมเหล็ก';
    }elseif($value == 27){
        $res = 'สินทรัพย์โครงสร้างพื้นฐาน เขื่อนดิน';
    }elseif($value == 28){
        $res = 'สินทรัพย์โครงสร้างพื้นฐาน เขื่อนปูน';
    }elseif($value == 29){
        $res = 'สินทรัพย์โครงสร้างพื้นฐาน อ่างเก็บน้ำ';
    }elseif($value == 30){
        $res = 'ครุภัณฑ์อื่น';
    }elseif($value == 31){
        $res = 'สินทรัพย์ไม่มีตัวตน';
    }
    return $res;
}

function service($val){
    if($val == 1){
        return 'สายพลาธิการ';
    }elseif($val == 2){
        return 'สายขนส่ง';
    }elseif($val == 3){
        return 'สายสื่อสาร (ปกติ และ ทสอ)';
    }elseif($val == 4){
        return 'สายแพทย์(พยาบาล)';
    }elseif($val == 5){
        return 'สายยุทธโยธา';
    }elseif($val == 6){
        return 'สายสรรพาวุธ';
    }elseif($val == 7){
        return 'สายแพทย์';
    }elseif($val == 8){
        return 'สายวิทยาศาสตร์';
    }elseif($val == 9){
        return 'สายช่าง';
    }
}

?>
    <!-- Older IE warning message -->
    <!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers
        to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="{!! URL::asset('backend/files/assets/images/browser/chrome.png')!!}" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="{!! URL::asset('backend/files/assets/images/browser/firefox.png')!!}" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="{!! URL::asset('backend/files/assets/images/browser/opera.png')!!}" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="{!! URL::asset('backend/files/assets/images/browser/safari.png')!!}" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="{!! URL::asset('backend/files/assets/images/browser/ie.png')!!}" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->

    <script src="{!! URL::asset('backend/files/bower_components/datatables.net/js/jquery.dataTables.min.js')!!}">
    </script>
    <script
        src="{!! URL::asset('backend/files/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js')!!}">
    </script>
    <script
        src="{!! URL::asset('backend/files/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js')!!}">
    </script>
    <script
        src="{!! URL::asset('backend/files/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')!!}">
    </script>

    <script
        src="{!! URL::asset('backend/files/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js') !!}">
    </script>
    <script src="{!! URL::asset('backend/files/assets/pages/data-table/js/jszip.min.js') !!}"></script>
    <script src="{!! URL::asset('backend/files/assets/pages/data-table/js/pdfmake.min.js') !!}"></script>
    <script src="{!! URL::asset('backend/files/assets/pages/data-table/js/vfs_fonts.js') !!}"></script>
    <script src="{!! URL::asset('backend/files/bower_components/datatables.net-buttons/js/buttons.print.min.js') !!}">
    </script>
    <script src="{!! URL::asset('backend/files/bower_components/datatables.net-buttons/js/buttons.html5.min.js') !!}">
    </script>


    <script src="{!! URL::asset('backend/files/assets/pages/ckeditor/ckeditor.js')!!}"></script>

    <script src="{!! URL::asset('backend/files/assets/pages/advance-elements/moment-with-locales.min.js')!!}"></script>
    <script
        src="{!! URL::asset('backend/files/bower_components/bootstrap-datepicker/js/bootstrap-datepicker.min.js')!!}">
    </script>
    <script src="{!! URL::asset('backend/files/assets/pages/advance-elements/bootstrap-datetimepicker.min.js')!!}">
    </script>
    <!-- Date-range picker js -->
    <script src="{!! URL::asset('backend/files/bower_components/bootstrap-daterangepicker/js/daterangepicker.js')!!}">
    </script>
    <!-- Date-dropper js -->
    <script src="{!! URL::asset('backend/files/bower_components/datedropper/js/datedropper.min.js')!!}"></script>
    <!-- jquery slimscroll js -->
    <script src="{!! URL::asset('backend/files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js')!!}">
    </script>
    <!-- modernizr js -->
    <script src="{!! URL::asset('backend/files/bower_components/modernizr/js/modernizr.js')!!}"></script>
    <script src="{!! URL::asset('backend/files/bower_components/modernizr/js/css-scrollbars.js')!!}"></script>

    <!-- slimscroll js -->
    <script src="{!! URL::asset('backend/files/assets/js/SmoothScroll.js')!!}"></script>
    <script src="{!! URL::asset('backend/files/assets/js/jquery.mCustomScrollbar.concat.min.js')!!}"></script>

    <!-- j-pro js -->

    <!-- Switch component js -->
    <script src="{!! URL::asset('backend/files/bower_components/switchery/js/switchery.min.js')!!}"></script>

    <script src="{!! URL::asset('backend/files/bower_components/select2/js/select2.full.min.js')!!}"></script>
    <script
        src="{!! URL::asset('backend/files/bower_components/bootstrap-multiselect/js/bootstrap-multiselect.js') !!}">
    </script>




    <script src="{!! URL::asset('backend/files/assets/pages/j-pro/js/jquery.ui.min.js')!!}"></script>
    <script src="{!! URL::asset('backend/files/assets/pages/j-pro/js/jquery.maskedinput.min.js')!!}"></script>
    <!-- Chart js -->
    <script src="{!! URL::asset('backend/files/bower_components/chart.js/js/Chart.js')!!}"></script>
    {{-- <!-- amchart js -->
<script src="{!! URL::asset('backend/files/assets/pages/widget/amchart/amcharts.js')!!}"></script>
<script src="{!! URL::asset('backend/files/assets/pages/widget/amchart/gauge.js')!!}"></script>
<script src="{!! URL::asset('backend/files/assets/pages/widget/amchart/serial.js')!!}"></script>
<script src="{!! URL::asset('backend/files/assets/pages/widget/amchart/ammap.js')!!}"></script>
<script src="{!! URL::asset('backend/files/assets/pages/widget/amchart/continentsLow.js')!!}"></script>
<script src="{!! URL::asset('backend/files/assets/pages/widget/amchart/light.js')!!}"></script>
<!-- menu js -->


<script src="{!! URL::asset('backend/files/assets/js/pcoded.min.js')!!}"></script>
<script src="{!! URL::asset('backend/files/assets/js/vertical/vertical-layout.min.js')!!}"></script>
<!-- custom js -->
<script src="{!! URL::asset('backend/files/assets/pages/dashboard/ecommerce-dashboard.js')!!}"></script>
<script src="{!! URL::asset('backend/files/assets/js/script.js')!!}"></script>
<script src="{!! URL::asset('backend/files/assets/input_file.js')!!}"></script>

<script src="{!! URL::asset('backend/files/assets/pages/form-masking/autoNumeric.js')!!}"></script> --}}


    {{-- <script>


    $('#divBtnImg').hide();

    function alertSuccessJs(title, text, success) {
        swal({
            title: "" + title + "",
            text: "" + text + "",
            icon: "" + success + "",
            timer: 3000,
            button: "OK",
        });
    }

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#img-preview').attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
            $('#divBtnImg').show();
        } else {
            $('#divBtnImg').hide();

        }
    }

    function readURL2(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#img-preview2').attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
            $('#divBtnImg').show();

        } else {
            $('#divBtnImg').hide();

        }
    }

    $(".dropper-default").dateDropper({
        dropWidth: 200,
        dropPrimaryColor: "#1abc9c",
        dropBorder: "1px solid #1abc9c",
        maxYear: "{!! date('Y')+30 !!}",
        dateFormat: 'dddd-mmmm-yy'
    });
    $('.select2').select2();
    $('.autonumber').autoNumeric('init');

</script> --}}
