
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<style>
    @font-face {
        font-family: 'THSarabunNew';
        font-style: normal;
        font-weight: normal;
        src: url("{{ asset('fonts/THSarabunNew.ttf') }}") format('truetype');
    }
    @font-face {
            font-family: 'THSarabunNew';
            font-style: normal;
            font-weight: bold;
            src: url("{{ asset('fonts/THSarabunNew Bold.ttf') }}") format('truetype');
        }
        @font-face {
            font-family: 'THSarabunNew';
            font-style: italic;
            font-weight: normal;
            src: url("{{ asset('fonts/THSarabunNew Italic.ttf') }}") format('truetype');
        }
        @font-face {
            font-family: 'THSarabunNew';
            font-style: italic;
            font-weight: bold;
            src: url("{{ asset('fonts/THSarabunNew BoldItalic.ttf') }}") format('truetype');
        }
    body {
        font-family: "THSarabunNew";
    }
</style>
</head>
<body>

    <table border="1" width="100%" >
            <tbody>
                <tr rowspan="2">
                    <td colspan="10" rowspan="2" align="center">ทะเบียนคุมทรัพย์สิน(งป.)</td>
                    <td>ส่วนราชการ</td>
                    <td>รภท.ศอพท</td>
                </tr>
                <tr>
                    {{-- <td ></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td> --}}
                    <td>หน่วยงาน</td>
                    <td>กลาง</td>
                </tr>
                <tr>
                    <td>ประเภท</td>
                    <td colspan="3">{{$allproduct->category}}</td>
                    <td>รหัส</td>
                    <td colspan="3">{{$allproduct->code}}</td>
                    <td>ลักษณะ/คุณสมบัติ</td>
                    <td colspan="1">7777777</td>
                    <td>รุ่น/แบบ</td>
                    <td colspan="1">{{$allproduct->brand}}</td>



                </tr>
                <tr>
                    <td>สถานที่ตั่ง/หน่วยงานผู้รับผิดชอบ</td>
                    <td colspan="6">{{$allproduct->category}}</td>
                    <td>ชื่อผู้ขาย/ผู้รับจ้าง/ผู้บริจาค</td>
                    <td colspan="5">{{$allproduct->dealer}}</td>


                </tr>
                <tr>
                    <td>ที่อยู่</td>
                    <td colspan="7">{{$allproduct->address}}</td>
                    <td>โทรศัพท์</td>
                    <td colspan="3">{{$allproduct->tel}}</td>


                </tr>
                <tr>
                    <td>ประเภทเงิน</td>
                    {{-- <img src="{{asset('storage/uncheckbox.png')}}" > --}}
                    <td colspan="3">เงินงบประมาณ</td>
                    <td colspan="3">เงินนอกงบประมาณ ง/ท.</td>
                    <td colspan="3">เงินบริจาค/เงินช่วยเหลือ</td>
                    <td colspan="3">อื่น ๆ</td>
                    {{-- <td >ประเภทเงิน</td>
                    <td >ประเภทเงิน</td>
                    <td >ประเภทเงิน</td>
                    <td >ประเภทเงิน</td>
                    <td >ประเภทเงิน</td>
                    <td >ประเภทเงิน</td> --}}
                </tr>
                <tr>
                    <td>วิธีการได้มา</td>
                    <td colspan="3">ตกลงราคา</td>
                    <td colspan="2">สอบราคา</td>
                    <td colspan="2">ประกวดราคา (e-bidding)</td>
                    <td colspan="2">วิธีพิเศษ</td>
                    <td colspan="2">รับบริจาค</td>
                </tr>
            </tbody>
        </table>
        <table border="1" width="100%" >
            <thead>
                <tr rowspan="2">
                    <th>ว/ด/ป</th>
                    <th>เลขที่เอกสาร/เลขที่เอกสารจาก GFMIS</th>
                    <th>รายการ</th>
                    <th>จำนวนหน่วย</th>
                    <th>ราคาต่อหน่วย/ชุด/กลุ่ม</th>
                    <th>มูลค่ารวม</th>
                    <th>อายุใช้งาน</th>
                    <th>อัตราค่าเสื่อมราคา</th>
                    <th>ค่าเสื่อมราคาประจำปี</th>
                    <th>ค่าเสื่อมราคา สะสม</th>
                    <th>มูลค่าสุทธิ</th>
                    <th>หมายเหตุ</th>
                </tr>
                <tr>

                </tr>
            </thead>
            <tbody>
                @php

                $asset = DB::table('tb_asset')->where('id_asset', $allproduct->category)->first();
                $assetper = (100/$asset->budget);
                $timeEnd = strtotime(date('1-m-Y', strtotime($allproduct->date_come) ));
                $timeStart = strtotime(date("Y")."-9-01 ");
                // $timech = date('m-d-Y', $timeEnd);
                // $timesch = date('m-d-Y', $timeStart);
                $diff = abs($timeStart - $timeEnd);

                $years = floor($diff / (365*60*60*24));

                $months = floor(($diff - $years * 365*60*60*24)
                / (30*60*60*24));
                // // $d1 = new DateTime(eval('return \'' . $timech . '\';'));
                // // $d2 = new DateTime(eval('return \'' . $timesch . '\';'));

                // // @link http://www.php.net/manual/en/class.dateinterval.php
                // $interval = $timech->diff($timesch);

                // $interval->format('%m months');
                // $timeEnd = new DateTime('date('Y-m-d', strtotime($allproduct->date_come))');
                // $timeStart = new DateTime('2012-06-06');




                // $numMonths = 1 + (date("Y",$timeEnd)-date("Y",$timeStart))*12;
                // $numMonths += date("m",$timeEnd)-date("m",$timeStart);

                @endphp
                <tr>
                    {{-- <td>{{$months}}</td> --}}
                    <td>{{date('d-m-Y', strtotime($allproduct->date_come) )}}</td>
                    {{-- <td> {{    $timeEnd  }} <br> {{$timeStart}}</td> --}}
                    <td>{{ $allproduct->unit }}</td>
                    <td>{{ $allproduct->name }}</td>
                    <td>{{ $allproduct->unit }}</td>
                    <td>{{ $allproduct->priceperunit }}</td>
                    <td>{{ round( (($allproduct->priceperunit)+(($allproduct->priceperunit)*7/100)) , 2 )}}</td>
                    <td>{{$asset->budget}}</td>
                    <td>{{($assetper)}}</td>
                    <td>{{ round( ((($allproduct->priceperunit)+(($allproduct->priceperunit)*7/100))/$assetper) , 2 )}}</td>
                    <td></td>
                    <td>{{ round( (($allproduct->priceperunit)+(($allproduct->priceperunit)*7/100)) , 2 )}}</td>
                    <td></td>

                </tr>
                {{-- <tr>
                            <td>{{ date('d-m-Y', strtotime($allproduct->date_come) ) }}</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>{{ ((($allproduct->priceperunit)+(($allproduct->priceperunit)*7/100))/3) }}</td>
                <td></td>
                <td>{{ $allproduct->priceperunit }}</td>
                <td></td>
                </tr> --}}
                @php

                $total = round( ((($allproduct->priceperunit)+(($allproduct->priceperunit)*7/100))) , 2 );
                $total2 = round( ((($allproduct->priceperunit)+(($allproduct->priceperunit)*7/100))/$asset->budget) , 2 );
                $sum = 0;
                $sum2 = 0;
                @endphp
                @for ($i = 1; $i <= $asset->budget; $i++)
                    @php
                    $full = $total2/12*12;
                    $unfull = $total2/12*$months;
                    $sum += ($i == 1 ? $unfull : ($i > 1 ? $full: ''));
                    $sum2 = ($i == 1 ? $total-$unfull : ($i > 1 ? $sum2-$full: ''));

                    @endphp
                    {{-- {{ $all = $allproduct->priceperunit }} --}}
                    <tr>
                        <td>{{ date('09-Y', strtotime($allproduct->date_come.' + '.$i.' year') ) }}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>{{ ($i == 1  ?  "รวมภาษีมูลค่าเพิ่ม" : ($i == 2 ? (($allproduct->priceperunit)*7/100): '')) }}
                        </td>
                        <td>{{ ($i == 1  ? $months  : '') }}</td>
                        <td></td>
                        <td>{{ ($i == 1  ?  $total2/12*$months : ($i > 1 ? $total2/12*12: ''))  }}</td>
                        {{-- <td>{{ ( $i == 1) ?  $total2/12*$months : '' }}</td> --}}
                        <td>{{   $sum }}</td>
                        <td>{{   $sum2 }}</td>
                        <td></td>
                    </tr>

                    @endfor
                    <tr>
                        {{-- <td>{{$months}}</td> --}}
                        <td>{{date('09-Y', strtotime($allproduct->date_come.' + '.($asset->budget+1).' year') )}}</td>
                        {{-- <td> {{    $timeEnd  }} <br> {{$timeStart}}</td> --}}
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>{{ (12-$months) }}</td>
                        <td></td>
                        <td>{{ $sum2-1 }}</td>
                        <td>{{ $sum+($sum2-1)  }}</td>
                        <td>{{ $sum2-($sum2-1)  }}</td>
                        <td></td>

                    </tr>
                    {{-- <tr>
                            <td>{{ date('d-m-Y', strtotime($allproduct->date_come) ) }}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    </tr> --}}
                    {{-- <tr>
                        <td>{{ date('Y-m-d', strtotime($allproduct->date_come. ' + 1 year') )}}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>รวมภาษีมูลค่าเพิ่ม</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    </tr>
                    <tr>
                        <td>{{ $allproduct->date_come }}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>({{   (($allproduct->priceperunit)*7/100) }})</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>{{ $allproduct->date_come }}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>{{ $allproduct->date_come }}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>--}}










            </tbody>
        </table>
</body>
</html>
