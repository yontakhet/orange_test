<?php


if (! function_exists('month')) {
    function formatdate($month){
        $m = array(
            '01'=>'ม.ค.',
            '02'=>'ก.พ.',
            '03'=>'มี.ค.',
            '04'=>'ม.ย.',
            '05'=>'พ.ค.',
            '06'=>'มิ.ย.',
            '07'=>'ก.ค.',
            '08'=>'ส.ค.',
            '09'=>'ก.ย.',
            '10'=>'ต.ค.',
            '11'=>'พ.ย.',
            '12'=>'ธ.ค.');
        $format = explode('-', $month);
        $date = $format[2].' '.$m[$format[1]].' '.$format[0];
        return $date;
    }
}


if (! function_exists('department')) {
    function department($val) {
     if($val == 1){
        return 'สำนักผู้บังคับบัญชา';
    }elseif($val == 2){
        return 'นายทหารพระธรรมนูญ';
    }elseif($val == 3){
        return 'นายทหารตรวจสอบภายใน';
    }elseif($val == 4){
        return 'บก.กองกลาง';
    }elseif($val == 5){
        return 'แผนธุรการและกำลังพล';
    }elseif($val == 6){
        return 'แผนกจัดหา';
    }elseif($val == 7){
        return 'แผนกเก็บรักษาและแจกจ่าย';
    }elseif($val == 8){
        return 'แผนกขนส่ง';
    }elseif($val == 9){
        return 'บก.กองนโยบายและแผน';
    }elseif($val == 10){
        return 'แผนกขาย';
    }elseif($val == 11){
        return 'แผนกนโยบายและแผน';
    }elseif($val == 12){
        return 'แผนกบัญชีคุม';
    }elseif($val == 13){
        return 'ศูนย์สารสนเทศ';
    }elseif($val == 14){
        return 'บก.กองวิจัยและประกันคุณภาพ';
    }elseif($val == 15){
        return 'แผนกควบคุมคุณภาพ 1';
    }elseif($val == 16){
        return 'แผนกควบคุมคุณภาพ 2';
    }elseif($val == 17){
        return 'แผนกวิจัยและพัฒนา';
    }elseif($val == 18){
        return 'บก.กองโรงงานผลิตยา';
    }elseif($val == 19){
        return 'แผนกซ่อมบำรุงและบริการการผลิต';
    }elseif($val == 20){
        return 'แผนกยาน้ำและขี้ผึ้ง';
    }elseif($val == 21){
        return 'แผนกยาเม็ดและยาผง';
    }elseif($val == 22){
        return 'แผนกยาปราศจากเชื้อ';
    }elseif($val == 23){
        return 'แผนกผลิตภัณฑ์สมุนไพร';
    }elseif($val == 24){
        return 'บก.กองบริการ';
    }elseif($val == 25){
        return 'แผนกพยาบาล';
    }elseif($val == 26){
        return 'แผนกบริการ';
    }else{
        return ' - ';
    }
}
}


if (! function_exists('responsibleagency')) {
    function responsibleagency($val) {
     if($val == 1){
        return 'สำนักงานผู้บังคับบัญชา';
    }elseif($val == 2){
        return 'สำนักงานการเงิน';
    }elseif($val == 3){
        return 'สำนักงานงบประมาณ';
    }elseif($val == 4){
        return 'กองกลาง';
    }elseif($val == 5){
        return 'กองนโยบายและแผน';
    }elseif($val == 6){
        return 'กองวิจัยและประกันสุขภาพ';
    }elseif($val == 7){
        return 'กองโรงงานผลิตยา';
    }elseif($val == 8){
        return 'กองบริการ';
    }else{
        return ' - ';
    }
}
}

if (! function_exists('service_for')) {
    function service_for($val) {
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
    }else{
        return ' - ';
    }
}
}

if (!function_exists('checkError')) {
    function errorValidate($error, $name)
    {
        if ($error) {
            $text = ' <span style="color:red"><strong> ' . $name . ' </strong></span>';
        } else {
            $text = '';
        }
        return $text;
    }
}
if (!function_exists('FormatDate')) {
    function FormatDate($data,$format)
    {
        $dateCreate = date_create($data);
        $dateFormat = date_format($dateCreate, $format);
        return $dateFormat;
    }
}
if (!function_exists('postDate')) {
    function postDate($data)
    {
        $dateCreate = date_create($data);
        $dateFormat = date_format($dateCreate, 'Y-m-d');
        return $dateFormat;
    }
}
if (!function_exists('postNumber')) {
    function postNumber($val)
    {
        $value = (str_replace(',', '', $val) =='' ?'0':str_replace(',', '', $val));
        return $value;
    }
}
if (!function_exists('spanTH')) {
    function spanTH()
    {
        return '<span style="color:red">(Thai)</span>';
    }
}
if (!function_exists('spanAlert')) {
    function spanAlert($text)
    {
        return '<span style="color:red">' . $text . '</span>';
    }
}
if (!function_exists('spanEN')) {
    function spanEN()
    {
        return '<span style="color:red">(English)</span>';
    }
}
if (!function_exists('permissionRoutUrl')) {

    function permissionRoutUrl($stat, $idAdmin, $url)
    {
        if ($stat == 'poweradmin') {
            $statUse = 'true';
        } else {
            $menu = App\Model\MenuModel::query()->get();
            $link = 'profile,';
            foreach ($menu As $rowMenu) {
                $adminMenu = App\Model\MenuPermissionModel::query()->where('admin_id', $idAdmin)->where('main_menu_id', $rowMenu->id_menu)->first();
                if (@$adminMenu->main_menu_id != '') {
                    $link .= $rowMenu->link_menu . ',';
                    if (count(explode(',', $adminMenu->submenu_id)) > 0) {
                        foreach (explode(',', $adminMenu->submenu_id) AS $idSubLeft) {
                            $subLeft = App\Model\SubMenuModel::query()->where('id_menu_sub', $idSubLeft)->first();
                            $link .= $subLeft->link_menu . ',';

                        }
                    }
                }
            }
            if (in_array($url, explode(',', $link))) {
                $statUsess = 'true';
            } else {
                $statUsess = 'false';
            }
            $statUse = $statUsess;
        }
        if ($statUse == 'false') {
//            echo $statUse;
            echo redirect(url('backoffice/logout'));
        }
    }
}
if (!function_exists('alertSuccess')) {
    function alertSuccess($title, $text)
    {
        return '<script>swal({
          title: "' . $title . '",
          text: "' . $text . '",
          icon: "success",
          timer: 3000,
          button: "OK",
      });</script>';
  }
}
if (!function_exists('alertInfo')) {
    function alertInfo($title, $text)
    {
        return '<script>swal({
          title: "' . $title . '",
          text: "' . $text . '",
          icon: "info",
          timer: 3000,
          button: "OK",
      });</script>';
  }
}


if (!function_exists('alertError')) {
    function alertError($title, $text)
    {
        return '<script>swal({
          title: "' . $title . '",
          text: "' . $text . '",
          icon: "error",
          timer: 3000,
          button: "OK",
      });</script>';
  }
}

if (!function_exists('unsetAdmin')) {
    function unsetAdmin()
    {
        Session::forget('id_admin');
        Session::forget('name_admin');
        Session::forget('lastname_admin');
        Session::forget('status_admin');
        Session::forget('main_id_at');
        Session::forget('email_admin');
        Session::forget('file_img_admin');
        Session::forget('username_admin');
    }
}

if (!function_exists('left_sub_menu')) {
    function left_sub_menu($text, $link, $icon, $active)
    {
        return '<li class="nav-item">
        <a href="' . $link . '" class="nav-link ' . $active . '">
        <i class="fa ' . $icon . '"></i>
        <p>' . $text . '</p>
        </a>
        </li>';
    }
}

if (!function_exists('storeAsMake')) {
    function storeAsMake($path)
    {
        return 'local/storage/app/public/' . $path;
    }
}

if (!function_exists('left_menu')) {
    function left_menu($text, $text2, $link, $icon, $classSmall, $active)
    {
        return '<li class="nav-item">
        <a href="' . $link . '" class="nav-link ' . $active . '">
        <i class="' . $icon . '"></i>
        <p>
        ' . $text . '
        <span class="right badge badge-' . $classSmall . '">' . $text2 . '</span>
        </p>
        </a>
        </li>';
    }
}
if (!function_exists('inputMultipleFile')) {
    function inputMultipleFile($text, $name, $classTop, $event)
    {

        return '<div class="col-' . $classTop . '">
        <div class="form-group">
        <div class="col-md-12 row ">
        <label class="block">' . $text . '</label>
        </div>
        <div class="input-group">
        <input type="text" class="form-control" readonly>
        <div class="input-group-btn">
        <span class="fileUpload btn btn-primary">
        <span class="upl"
        id="upload">Select Files Image</span>
        <input type="file" name="' . $name . '" class="upload up" id="up"
        ' . $event . '  onchange="readURL(this);" multiple/>
        </span>
        </div>
        </div>
        </div>
        </div>';
    }
}
if (!function_exists('inputFiles')) {
    function inputFiles($text, $name, $id, $classTop, $event)
    {

        return '<div class="col-' . $classTop . '">
        <div class="row">
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
        <center>
        <div class="box">
        <input type="file"  name="' . $name . '" id="' . $id . '" class="inputfile2 inputfile-4" ' . $event . '/>
        <label for="' . $id . '">
        <figure>
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="17"
        viewBox="0 0 20 17">
        <path
        d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/>
        </svg>
        </figure>
        <span>' . $text . '&hellip;</span></label>
        </div>
        </center>
        </div>
        <div class="col-md-4">
        </div>
        </div>
        </div>';
    }
}


if (!function_exists('inputFile')) {
    function inputFile($text, $name, $id, $classTop, $event, $img)
    {
        if ($img == '') {
            $sort = url('backend/files/assets/images/3901.png');
        } else {
            $sort = $img;
        }
        return '<div class="col-' . $classTop . '">
        <div class="row">
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
        <center>
        <img src="' . $sort . '"  id="img-preview"
        class="img-fluid rounded maxInputImg" alt="Responsive image"><br>
        <div class="box">
        <input type="file" name="' . $name . '" id="' . $id . '" class="inputfile inputfile-4" ' . $event . '
        />
        <label for="' . $id . '" class="btn btn-primary">
        <span>' . $text . '&hellip;</span></label>
        </div>
        </center>
        </div>
        <div class="col-md-4">
        </div>
        </div>
        </div>';
    }
}


if (!function_exists('inputFileNew')) {
    function inputFileNew($text, $name, $id, $classTop, $event, $img)
    {
        if ($img == '') {
            $sort = url('backend/files/assets/images/3901.png');
            $display1 = '';
            $display2 = '';
        } else {
            $sort = $img;
            $display1 = 'display:none!important;';
            $display2 = 'display:block!important;';
        }

        return '<div class="col-' . $classTop . '">

        <div class="file-upload' . $id . '">
        <button class="file-upload-btn" type="button" onclick="$(\'.inputU' . $id . '\').trigger( \'click\' )">' . $text . '</button>

        <div class="image-upload-wrap wrap' . $id . '" style="' . $display1 . '">
        <input name="' . $name . '" id="' . $id . '" ' . $event . ' class="file-upload-input  inputU' . $id . '" type=\'file\' onchange="readURLNew(this,\'' . $id . '\');" accept="image/*" />
        <div class="drag-text">
        <h3>Drag and drop a file or select add Image</h3>
        </div>
        </div>
        <div class="file-upload-content divContent' . $id . '" style="' . $display2 . '">
        <img class="fileCss file-upload-image img' . $id . '" src="' . $sort . '" alt="your image" />
        <div class="image-title-wrap  ">
        <button type="button" onclick="removeUpload(\'' . $id . '\')" class="remove-image">Remove <span class="image-title titleWrap' . $id . '">' . $text . '</span></button>
        </div>
        </div>
        </div>
        <br>
        </div>';
    }
}

if (!function_exists('inputSelect2')) {
    function inputSelect2($text, $name, $id, $classTop, $event, $validate, $option)
    {
        return '<div class="col-' . $classTop . '">
        <div class="form-group row">
        <div class="col-sm-12">
        <label for="' . $id . '" class="block">' . $text . '</label>
        </div>
        <div class="col-sm-12">
        <select id="' . $id . '" name="' . $name . '" ' . $event . '  class="form-control select2">
        ' . $option . '
        </select>
        ' . $validate . '
        </div>
        </div>
        </div>';
    }
}


if (!function_exists('inputCheckbox')) {
    function inputCheckbox($text, $name, $id, $checked, $value)
    {
        return ' <div class="checkbox-fade fade-in-primary">
        <label class="check-task">
        <input ' . $id . ' type="checkbox" class="classMenu" ' . $checked . ' name="' . $name . '" value="' . $value . '">
        <span class="cr"><i  class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
        <span class="task-title-sp">' . $text . '</span>
        </label>
        </div>';
    }
}
if (!function_exists('inputSetImage')) {
    function inputSetImage($text, $name, $id, $checked, $value)
    {
        return '<div class="form-group">

        <label class="label-checkbox">' . $text . '
        ' . ($text == '' ? '' : ' <input type="radio" name="' . $name . '" id="' . $id . '" ' . $checked . ' value="' . $value . '">') . '


        &nbsp;&nbsp;&nbsp;&nbsp;<a  href="javascript:void;" onclick="del(' . $value . ')" title="ลบรูปภาพนี้" class="btn btn-flat btn-outline-danger">

        <i class="fas fa-trash" aria-hidden="true"></i></a>
        ' . ($text == '' ? '' : ' <span class="checkmark"></span>') . '
        </label>

        </div>';
    }
}


if (!function_exists('inputText')) {
    function inputText($text, $name, $id, $placeholder, $classTop, $event, $validate, $value)
    {
        return '<div class="col-' . $classTop . '">
        <div class="form-group row">
        <div class="col-sm-12">
        <label for="' . $id . '" class="block">' . $text . '</label>
        </div>
        <div class="col-sm-12">
        <input id="' . $id . '" name="' . $name . '" type="text" value="' . $value . '"
        class="form-control " placeholder="' . $placeholder . '" ' . $event . '>
        ' . $validate . '
        </div>
        </div>
        </div>';
    }
}
if (!function_exists('inputNumber')) {
    function inputNumber($text, $name, $id, $placeholder, $classTop, $event, $validate, $value)
    {
        return '<div class="col-' . $classTop . '">
        <div class="form-group row">
        <div class="col-sm-12">
        <label for="' . $id . '" class="block">' . $text . '</label>
        </div>
        <div class="col-sm-12">
        <input id="' . $id . '" name="' . $name . '" type="text" value="' . $value . '"
        class="form-control autonumber" placeholder="' . $placeholder . '" ' . $event . '>
        ' . $validate . '
        </div>
        </div>
        </div>';
    }
}
if (!function_exists('inputDate')) {
    function inputDate($text, $name, $id, $placeholder, $classTop, $event, $validate, $value)
    {
        return '<div class="col-' . $classTop . '">
        <div class="form-group row">
        <div class="col-sm-12">
        <label for="' . $id . '" class="block">' . $text . '</label>
        </div>
        <div class="col-sm-12">
        <input id="' . $id . '" name="' . $name . '" type="text" value="' . $value . '"
        class="form-control dropper-default" placeholder="' . $placeholder . '" ' . $event . '>
        ' . $validate . '
        </div>
        </div>
        </div>';
    }
}
if (!function_exists('inputTextArea')) {
    function inputTextArea($text, $name, $id, $class, $placeholder, $classTop, $event, $validate, $value)
    {
        return '<div class="col-' . $classTop . '">
        <div class="form-group row">
        <div class="col-sm-12">
        <label for="' . $id . '" class="block">' . $text . '</label>
        </div>
        <div class="col-sm-12">
        <textarea  name="' . $name . '" id="' . $id . '"  placeholder="' . $placeholder . '" class="form-control ' . $class . '" ' . $event . '>' . $value . '</textarea>
        ' . $validate . '
        </div>
        </div>
        </div>';
    }
}
if (!function_exists('inputSelect')) {
    function inputSelect($text, $name, $id, $classTop, $event, $validate, $option)
    {
        return '<div class="col-' . $classTop . '">
        <div class="form-group row">
        <div class="col-sm-12">
        <label for="' . $id . '" class="block">' . $text . '</label>
        </div>
        <div class="col-sm-12">
        <select id="' . $id . '" name="' . $name . '" ' . $event . '  class="form-control">
        ' . $option . '
        </select>
        ' . $validate . '
        </div>
        </div>
        </div>';
    }
}


if (!function_exists('inputEmail')) {
    function inputEmail($text, $name, $id, $placeholder, $classTop, $event, $validate, $value)
    {
        return '<div class="col-' . $classTop . '">
        <div class="form-group row">
        <div class="col-sm-12">
        <label for="' . $id . '" class="block">' . $text . '</label>
        </div>
        <div class="col-sm-12">
        <input id="' . $id . '" name="' . $name . '" type="email" value="' . $value . '"
        class="form-control " placeholder="' . $placeholder . '" ' . $event . '>
        ' . $validate . '
        </div>
        </div>
        </div>';
    }
}
if (!function_exists('inputPassword')) {
    function inputPassword($text, $name, $id, $placeholder, $classTop, $event, $validate, $value)
    {
        return '<div class="col-' . $classTop . '">
        <div class="form-group row">
        <div class="col-sm-12">
        <label for="' . $id . '" class="block">' . $text . '</label>
        </div>
        <div class="col-sm-12">
        <input id="' . $id . '" name="' . $name . '" type="password" value="' . $value . '"
        class="form-control " placeholder="' . $placeholder . '" ' . $event . '>
        ' . $validate . '
        </div>
        </div>
        </div>';
    }
}
if (!function_exists('inputTimeRank')) {
    function inputTimeRank($text, $name, $id, $placeholder, $classTop, $null, $value)
    {
        return '  <div class="col-xs-12 col-' . $classTop . '">

        <div class="form-group">

        <label>' . $text . '</label>

        <div class="input-group">

        <div class="input-group-prepend">

        <span class="input-group-text"><i class="far fa-clock"></i></span>

        </div>

        <input type="text" ' . $null . ' value="' . $value . '" class="form-control " placeholder="' . $placeholder . '" name="' . $name . '"

        id="' . $id . '">

        </div>

        </div>

        </div>';
    }
}
if (!function_exists('inputTextArea')) {
    function inputTextAreaOld($text, $name, $id, $ckeditor, $classTop, $null, $value)
    {
        return '<div class="col-xs-12 col-' . $classTop . '" >
        <div class="form-group">
        <label>' . $text . '</label>
        <textarea  name="' . $name . '" id="' . $id . '" class="form-control ' . $ckeditor . '" ' . $null . '>' . $value . '</textarea>
        </div>
        </div>';
    }
}

if (!function_exists('uploadMultipleImage')) {
    function uploadMultipleImage($file, $text, $sizeText, $classDiv, $width, $height)
    {
        $html = ' <div class="col-' . $classDiv . '" style="margin-bottom: 5px">
        <center><div class="form-group">
        <div class="card bg-dark text-white" style="width:' . $width . ' ;height: ' . $height . '!important;">
        <img  src="' . $file . '" id="img-preview2" style="width:' . $width . ' ;height: ' . $height . '!important;" class="">
        <div class="card-img-overlay "><br><br>
        <h4 class="text-center" >' . $sizeText . '</h4>
        </div>
        </div>
        </div>
        <input type="file" accept="image/png, image/jpg, image/gif, image/jpeg" id="fileUpload2"  name="files[]" multiple class="filestyle" data-buttonName="btn-success"

        data-icon="false" data-buttonText="' . $text . '" data-input="false"  onchange="readURL2(this)" ></center></div>';
        return $html;
    }
}
if (!function_exists('uploadSingleImage')) {
    function uploadSingleImage($file, $text, $sizeText, $classDiv, $width, $height)
    {
        $html = ' <div class="col-' . $classDiv . '" style="margin-bottom: 5px">
        <center><div class="form-group">
        <div class="card bg-dark text-white" style="width:' . $width . ' ;height: ' . $height . '!important;">
        <img  src="' . $file . '" id="img-preview" style="width:' . $width . ' ;height: ' . $height . '!important;" class="">
        <div class="card-img-overlay "><br><br>
        <h4 class="text-center" >' . $sizeText . '</h4>
        </div>
        </div>
        </div>
        <input type="file" accept="image/png, image/jpg, image/gif, image/jpeg" id="fileUpload"  name="fileToUpload" class="filestyle" data-buttonName="btn-success"
        data-icon="false" data-buttonText="' . $text . '" data-input="false"  onchange="readURL(this)" ></center></div>';

        return $html;
    }
}

if (!function_exists('insertSingleImage')) {
    function insertSingleImage($name, $path)
    {
        $fileName = "fileName" . rand() . time() . '.' . $name->getClientOriginalExtension();
        $name->storeAs('' . $path . '', $fileName);
        return $fileName;
//        ->with('success','You have successfully upload image.');
    }
}
if (!function_exists('insertMultipleImage')) {
    function insertMultipleImage($request, $path, $name)
    {
        $images = [];
        $fileName = $request->file('' . $name . '');
        foreach ($fileName as $file) {
//            $name = rand() . time() . $file->getClientOriginalName();
            $name = rand() . time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('' . $path . '', $name);
            $images[] = $name;
        }
        return $images;
//        ->with('success','You have successfully upload image.');
    }
}


if (!function_exists('messageError')) {
    function messageError($message)
    {
        echo '<script>
        alertify.error(\'' . $message . '\');
        </script>';
    }
}
if (!function_exists('messageSuccess')) {
    function messageSuccess($message)
    {
        echo '<script> swal("' . $message . '", {
            icon: "success",
        });</script>';
    }
}
if (!function_exists('messageInfo')) {
    function messageInfo($message)
    {
        echo '<script> swal("' . $message . '", {
            icon: "info",
        });</script>';
    }
}
if (!function_exists('alertConfirm')) {
    function alertConfirm($message, $function)
    {
        echo '<script>
        alertify.confirm("' . $message . '",
        function(){
         ' . $function . '
         alertify.success(\'success\');
         },
         function(){
            alertify.error(\'error\');
            });
            </script>';
        }
    }
    if (!function_exists('buttonManageData')) {
        function buttonManageData($id, $view, $edit, $delete, $route)
        {

            $html = '<center>';
            if ($view === true) {
                $html .= '
                <a  title="View"  href="javascript:void;" onclick="viewShow(' . $id . ')" class="btn btn-primary btn-outline-primary"><i  class="icofont icofont-eye-alt"></i></a>';
            }
            if ($edit === true) {
                $html .= '
                <a title="Edit"  href="' . url('' . $route . '/' . $id . '/edit') . '"  class="btn btn-warning btn-outline-warning"><i  class="icofont icofont-edit"></i></a>
                ';
            }
            if ($delete === true) {
                $html .= '
                <a title="Delete" href="javascript:void;" onclick="deleteData(' . $id . ')" class="btn btn-danger btn-outline-danger"><i  class="icofont icofont-recycling-man"></i></a>
                ';
            }
            $html .= '</center>';
            return $html;
        }
    }

    if (!function_exists('buttonReport')) {
        function buttonReport($url, $report, $id)
        {

            $html = '<center>';

            if ($report === true) {
                $html .= ' <a title="showPDF" href="' . $url . '/' . $id . '"  class="btn btn-flat btn-outline-success"><i class="fas fa-print"></i></a>';
            }

            $html .= '</center>';
            return $html;
        }
    }

//frontEnd
    if (!function_exists('salePercen')) {
        function salePercen($priceAgent, $sale)
        {
            $total = round(($sale * 100) / $priceAgent);
            return $total;
        }
    }


    if (!function_exists('contentIndex')) {
        function contentIndex($name, $link)
        {
            $text = '@extends("layout_backoffice.components")
            @section("content")
            <div class="pcoded-inner-content">
            <div class="main-body">
            <div class="page-wrapper">
            <div class="page-header card">
            <div class="card-block">
            <a class="btn btn-out-dashed btn-info btn-square "
            href="{{url(\'backoffice/' . $link . '/create\')}}" style="float:right;color:white">
            <i class="ion-plus-circled"></i>Add</a>
            <h5 class="m-b-10">' . $name . '</h5>
            <p class="text-muted m-b-10">' . $name . ' management</p>
            <ul class="breadcrumb-title b-t-default p-t-10">
            <li class="breadcrumb-item">
            <a href="index.html"> <i class="fa fa-home"></i> </a>
            </li>
            <li class="breadcrumb-item"><a href="#!">' . $name . '</a>
            </li>
            <li class="breadcrumb-item"><a href="#!">Table admin</a>
            </li>
            </ul>

            </div>
            </div>

            <div class="page-body">
            <div class="row">
            <div class="col-sm-12">
            <div class="card">
            <div class="card-header">
            <h5>' . $name . ' Data Table </h5>
            <span></span>
            </div>
            <div class="card-block">
            <div class="dt-responsive table-responsive">
            <table id="simpletable" class="table table-striped table-hover table-bordered nowrap">
            <thead class="theadStyle"  >
            <tr >
            <th>No</th>
            <th>Name Menu</th>
            <th>Link Menu</th>
            <th>Icon Menu</th>
            <th>Component</th>
            <th>Manage</th>
            </tr>
            </thead>
            <tfoot class="theadStyle">
            <tr>
            <th>No</th>
            <th>Name Menu</th>
            <th>Link Menu</th>
            <th>Icon Menu</th>
            <th>Component</th>
            <th>Manage</th>
            </tr>
            </tfoot>
            </table>
            </div>
            </div>
            </div>

            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            @endsection
            @section("script")
            <input type="hidden" value="{{ csrf_token() }}" id="token">
            <div id="resultDelete"></div>
            <div id="resultMain"></div>
            <div id="resultModal"></div>
            <input type="hidden" value="0" id="reloadCheck">
            <input type="hidden" value="{{url(\'backoffice/data_table/' . $link . '\')}}" id="getUrlTable">
            <input type="hidden" value="{{url(\'backoffice/' . $link . '\')}}" id="urlResource">
            <script>
            $(function () {
                var t = $(\'#simpletable\').DataTable({
                    processing: true,
                    serverSide: true,
                    responsive: true,
                    ajax: {
                        url: $(\'#getUrlTable\').val(),
                        type: "POST",
                        data: {_token: $(\'#token\').val()},
                        },
                        columns: [
                        {data: \'No\', name: \'No\'},
                        {data: \'name\', name: \'name\'},
                        {data: \'Manage\', name: \'Manage\'}
                        ],
                        "iDisplayLength": 5,
                        "aLengthMenu": [
                        [5, 10, 25, 50, -1],
                        [5, 10, 25, 50, "All"]
                        ],
                        dom: \'lBfrtip\',
                        "buttons": [\'copy\', \'excel\', \'csv\', \'pdf\', \'print\'],
                        "columnDefs": [{
                            "searchable": false,
                            "orderable": false,
                            "targets": 0
                            }],
                            "order": [[0, \'asc\']]
                            });
                            t.on(\'draw.dt\', function () {
                                var PageInfo = $(\'#simpletable\').DataTable().page.info();
                                t.column(0, {page: \'current\'}).nodes().each(function (cell, i) {
                                    cell.innerHTML = i + 1 + PageInfo.start;
                                    });
                                    });


                                    setInterval(function () {
                                        var reloadCheck = $(\'#reloadCheck\').val();
                                        if (reloadCheck > 0) {
                                            t.ajax.reload();
                                            $(\'#reloadCheck\').val(0);
                                        }
                                        }, 1300);

                                        });


                                        function viewShow(id) {
                                            $.ajax({
                                                url: $(\'#urlResource\').val() + \'/\' + id,
                                                data: {id: id},
                                                type: \'GET\',
                                                success: function (data) {
                                                    $(\'#resultModal\').html(data);
                                                    $("#large-Modal").modal(\'show\');
                                                    $(\'#large-Modal\').modal({backdrop: \'static\', keyboard: false});
                                                }
                                                });
                                            }


                                            function valDeleteData(id) {
                                                var token = $(\'#token\').val();
                                                $.ajax({
                                                    url: $(\'#urlResource\').val() + "/" + id,
                                                    type: "POST",
                                                    data: {_method: \'delete\', _token: token},
                                                    success: function (data) {
                                                        $(\'#resultDelete\').html(data);
                                                        $(\'#reloadCheck\').val(10);

                                                    }

                                                    });
                                                }


                                                function deleteData(id) {
                                                    swal({
                                                        title: "Are you sure?",
                                                        text: "Once deleted, you will not be able to recover this data file!",
                                                        icon: "warning",
                                                        buttons: true,
                                                        dangerMode: true,
                                                        })
                                                        .then((willDelete) => {
                                                            if (willDelete) {
                                                                swal("Poof! Your imaginary file has been deleted!", {
                                                                    icon: "success",
                                                                    });
                                                                    valDeleteData(id);
                                                                    } else {
                                                                        swal("Your imaginary file is safe!");
                                                                    }
                                                                    });

                                                                }
                                                                </script>

                                                                @endsection
                                                                ';
                                                                return $text;
                                                            }
                                                        }

                                                        if (!function_exists('contentCreate')) {
                                                            function contentCreate($name, $link)
                                                            {
                                                                $text = '@extends("layout_backoffice.components")
                                                                @section("content")
                                                                <div class="pcoded-inner-content">
                                                                <div class="main-body">
                                                                <div class="page-wrapper">
                                                                <div class="page-header card">
                                                                <div class="card-block">
                                                                <a class="btn btn-out-dashed btn-info btn-square "
                                                                href="{{url(\'backoffice/' . $link . '\')}}" style="float:right;color:white">
                                                                <i class="ion-arrow-left-a"></i>Back</a>
                                                                <h5 class="m-b-10">' . $name . '</h5>
                                                                <p class="text-muted m-b-10">' . $name . ' management</p>
                                                                <ul class="breadcrumb-title b-t-default p-t-10">
                                                                <li class="breadcrumb-item">
                                                                <a href="index.html"> <i class="fa fa-home"></i> </a>
                                                                </li>
                                                                <li class="breadcrumb-item"><a href="#!">' . $name . '</a>
                                                                </li>
                                                                <li class="breadcrumb-item"><a href="#!">Table ' . $name . '</a>
                                                                </li>
                                                                </ul>
                                                                </div>
                                                                </div>
                                                                <div class="page-body">
                                                                <form action="">
                                                                <div class="row">
                                                                <div class="col-sm-12">
                                                                <div class="card">
                                                                <div class="card-header">
                                                                <h5>Basic Form Inputs</h5>
                                                                <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
                                                                </div>
                                                                <div class="col-sm-12 borderStrike" ></div>
                                                                <div class="card-block">
                                                                <div class="row">
                                                                <div class="col-md-12">
                                                                <div class="form-group row">
                                                                <div class="col-sm-12">
                                                                <label for="userName-2" class="block">Test *</label>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                <input id="userName-2c" name="userName" type="text"
                                                                class=" form-control">
                                                                </div>
                                                                </div>

                                                                </div>
                                                                </div>
                                                                </div>

                                                                <div class="form-group col-sm-12">
                                                                <center>
                                                                <button type="reset" class="btn btn-warning btn-outline-warning"><i
                                                                class="icofont icofont icofont-eraser-alt"></i>Reset
                                                                </button>
                                                                <button type="submit" class="btn btn-success btn-outline-success"><i
                                                                class="icofont icofont-save"></i>Save
                                                                </button>
                                                                </center>
                                                                </div>


                                                                </div>
                                                                </div>
                                                                </div>
                                                                </form>

                                                                </div>
                                                                </div>
                                                                </div>
                                                                </div>
                                                                @endsection
                                                                @section("script")
                                                                <script>
                                                                </script>

                                                                @endsection
                                                                ';
                                                                return $text;
                                                            }
                                                        }

                                                        if (!function_exists('contentUpdate')) {
                                                            function contentUpdate($name, $link)
                                                            {
                                                                $text = '@extends("layout_backoffice.components")
                                                                @section("content")
                                                                <div class="pcoded-inner-content">
                                                                <div class="main-body">
                                                                <div class="page-wrapper">
                                                                <div class="page-header card">
                                                                <div class="card-block">
                                                                <a class="btn btn-out-dashed btn-info btn-square "
                                                                href="{{url(\'backoffice/' . $link . '\')}}" style="float:right;color:white">
                                                                <i class="ion-arrow-left-a"></i>Back</a>
                                                                <h5 class="m-b-10">' . $name . '</h5>
                                                                <p class="text-muted m-b-10">' . $name . ' management</p>
                                                                <ul class="breadcrumb-title b-t-default p-t-10">
                                                                <li class="breadcrumb-item">
                                                                <a href="index.html"> <i class="fa fa-home"></i> </a>
                                                                </li>
                                                                <li class="breadcrumb-item"><a href="#!">' . $name . '</a>
                                                                </li>
                                                                <li class="breadcrumb-item"><a href="#!">Table admin</a>
                                                                </li>
                                                                </ul>

                                                                </div>
                                                                </div>

                                                                <div class="page-body">
                                                                <div class="row">
                                                                <div class="col-sm-12">
                                                                <div class="card">
                                                                <div class="card-header">
                                                                <h5>Update </h5>
                                                                <span></span>
                                                                </div>
                                                                <div class="card-block">

                                                                </div>
                                                                </div>

                                                                </div>
                                                                </div>
                                                                </div>
                                                                </div>
                                                                </div>
                                                                @endsection
                                                                @section("script")
                                                                <script>
                                                                </script>

                                                                @endsection
                                                                ';
                                                                return $text;
                                                            }
                                                        }

                                                        if (!function_exists('contentShow')) {
                                                            function contentShow()
                                                            {
                                                                $text = '<div class="modal fade" id="large-Modal" tabindex="-1" role="dialog">
                                                                <div class="modal-dialog modal-lg" role="document">
                                                                <div class="modal-content">
                                                                <div class="modal-header">
                                                                <h4 class="modal-title">Head</h4>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                                </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                <h5>Text</h5>
                                                                <p>sub</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-primary waves-effect waves-light ">Save changes</button>
                                                                </div>
                                                                </div>
                                                                </div>
                                                                </div>
                                                                <script>
                                                                $(\'#large-Modal\').modal({backdrop: \'static\', keyboard: false});
                                                                </script>

                                                                ';
                                                                return $text;
                                                            }
                                                        }
                                                        if (!function_exists('contentsModel')) {
                                                            function contentsModel($name)
                                                            {
                                                                $text = '<?php
                                                                namespace App\Model;
                                                                use Illuminate\Database\Eloquent\Model;
                                                                use Illuminate\Database\Eloquent\SoftDeletes;

                                                                class ' . $name . ' extends Model
                                                                {
                                                                    use SoftDeletes;

                                                                    protected $table = "";
                                                                    protected $primaryKey = "";
                                                                    protected $dates = [\'deleted_at\'];


                                                                }';
                                                                return $text;
                                                            }
                                                        }

                                                        if (!function_exists('contentController')) {

                                                            function contentController($name, $forder)
                                                            {

                                                                $text = '<?php
                                                                namespace App\Http\Controllers\backend;
                                                                use Illuminate\Http\Request;
                                                                use App\Http\Controllers\Controller;
                                                                use Yajra\Datatables\Datatables;
                                                                use Validator;
                                                                use DB;
                                                                use Storage;
                                                                use App\Model\UserModel;';

                                                                $class = '
                                                                class ' . $name . ' extends Controller
                                                                {
                                                                    public function index()
                                                                    {
                                                                        return view(\'backoffice.' . $forder . '.index\');

                                                                    }

                                                                    public function create()
                                                                    {
                                                                        return view(\'backoffice.' . $forder . '.create\');

                                                                    }

                                                                    public function store(Request $request)
                                                                    {


                                                                    }

                                                                    public function show($id)
                                                                    {
                                                                        return view(\'backoffice.' . $forder . '.show\');

                                                                    }

                                                                    public function edit($id)
                                                                    {
                                                                        return view(\'backoffice.' . $forder . '.edit\');
                                                                    }

                                                                    public function update(Request $request, $id)
                                                                    {


                                                                    }

                                                                    public function destroy($id)
                                                                    {

                                                                    }

                                                                    public function queryDatatable()
                                                                    {
                                                                     $data = UserModel::query()->where(\'stat_admin\', \'!=\', \'poweradmin\')->get();
                                                                     return Datatables::of($data)->addIndexColumn()
                                                                     ->addcolumn(\'No\', \'\')
                                                                     ->addColumn(\'Manage\', function ($data) {
                                                                        $Manage = buttonManageData($data->id_admin, true, true, true, \'backoffice/admin\');
                                                                        return $Manage;
                                                                        })

                                                                        ->rawColumns([\'No\', \'Manage\'])
                                                                        ->make(true);
                                                                    }

                                                                }';
                                                                return $text . $class;
                                                            }

                                                        }

if (!function_exists('num2wordsThai')) {

    function num2wordsThai($num){
        $num=str_replace(",","",$num);
        $num_decimal=explode(".",$num);
        $num=$num_decimal[0];
        $returnNumWord ='';
        $lenNumber=strlen($num);
        $lenNumber2=$lenNumber-1;
        $kaGroup=array("","สิบ","ร้อย","พัน","หมื่น","แสน","ล้าน","สิบ","ร้อย","พัน","หมื่น","แสน","ล้าน");
        $kaDigit=array("","หนึ่ง","สอง","สาม","สี่","ห้า","หก","เจ็ต","แปด","เก้า");
        $kaDigitDecimal=array("ศูนย์","หนึ่ง","สอง","สาม","สี่","ห้า","หก","เจ็ต","แปด","เก้า");
        $ii=0;
        for($i=$lenNumber2;$i>=0;$i--){
            $kaNumWord[$i]=substr($num,$ii,1);
            $ii++;
        }
        $ii=0;
        for($i=$lenNumber2;$i>=0;$i--){
            if(($kaNumWord[$i]==2 && $i==1) || ($kaNumWord[$i]==2 && $i==7)){
                $kaDigit[$kaNumWord[$i]]="ยี่";
            }else{
                if($kaNumWord[$i]==2){
                    $kaDigit[$kaNumWord[$i]]="สอง";
                }
                if(($kaNumWord[$i]==1 && $i<=2 && $i==0) || ($kaNumWord[$i]==1 && $lenNumber>6 && $i==6)){
                    if($kaNumWord[$i+1]==0){
                        $kaDigit[$kaNumWord[$i]]="หนึ่ง";
                    }else{
                        $kaDigit[$kaNumWord[$i]]="เอ็ด";
                    }
                }elseif(($kaNumWord[$i]==1 && $i<=2 && $i==1) || ($kaNumWord[$i]==1 && $lenNumber>6 && $i==7)){
                    $kaDigit[$kaNumWord[$i]]="";
                }else{
                    if($kaNumWord[$i]==1){
                        $kaDigit[$kaNumWord[$i]]="หนึ่ง";
                    }
                }
            }
            if($kaNumWord[$i]==0){
                if($i!=6){
                    $kaGroup[$i]="";
                }
            }
            $kaNumWord[$i]=substr($num,$ii,1);
            $ii++;
            $returnNumWord.=$kaDigit[$kaNumWord[$i]].$kaGroup[$i];
        }
        if(isset($num_decimal[1])){
            $returnNumWord.="จุด";
            for($i=0;$i<strlen($num_decimal[1]);$i++){
                    $returnNumWord.=$kaDigitDecimal[substr($num_decimal[1],$i,1)];
            }
        }
        return $returnNumWord;

}
}
