<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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

    <table border="1" width="100%">
        <tbody>
            <tr>
                <th class="tg-0pky" colspan="5" align="center">ใบเบิก</th>
                <td class="tg-0pky" colspan="4">แผนกที่..........ในจำนวน...........แผ่น</td>
            </tr>
            <tr>
                <td class="tg-phtq" rowspan="2">จาก</td>
                <td class="tg-phtq" colspan="2" rowspan="2">หน่วยจ่าย</td>
                <td class="tg-phtq" colspan="2">/year</td>
                <td class="tg-phtq" colspan="4">สายบริการเทคนิคที่ควบคุม</td>
            </tr>
            <tr>
                <td class="tg-0pky" colspan="2">เบิกในกรณี</td>
                <td class="tg-0pky" colspan="4">ประเภทสิ่งอุปกรณ์</td>
            </tr>
            <tr>
                <td class="tg-phtq" rowspan="2">ถึง</td>
                <td class="tg-phtq" colspan="2" rowspan="2">หน่วยเบิกเบิกให้</td>
                <td class="tg-phtq">ขั้นต้น</td>
                <td class="tg-phtq">ยืม</td>
                <td class="tg-phtq" colspan="4">ประเภทเงิน</td>
            </tr>
            <tr>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky" colspan="4">เลขงานที่</td>
            </tr>
            <tr align="center">
                <td class="tg-phtq">ลำดับ</td>
                <td class="tg-phtq">หมายเลขสิ่งอุปกรณ์</td>
                <td class="tg-phtq">รายการ</td>
                <td class="tg-phtq">จำนวณอนุมัติ</td>
                <td class="tg-phtq">หน่วยนับ</td>
                <td class="tg-phtq">จำนวณเบิก</td>
                <td class="tg-phtq">ราคาหน่วยละ</td>
                <td class="tg-phtq">ราคารวม</td>
                <td class="tg-phtq">จ่ายจริง</td>
            </tr>
            <tr align="center">
                <td class="tg-0pky">1</td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky">{{$allproduct->name}}</td>
                <td class="tg-0pky">{{$allproduct->unit}}</td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky">{{$allproduct->priceperunit}}</td>
                <td class="tg-0pky" align="right">{{($allproduct->priceperunit)*($allproduct->unit)}}</td>
                <td class="tg-0pky"></td>
            </tr>
            {{-- @for ($i = 1; $i <= 3; $i++) <tr>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"> </td>
                <td class="tg-0pky"> </td>
                <td class="tg-0pky"> </td>
                <td class="tg-0pky"> </td>
                <td class="tg-0pky"> </td>
                <td class="tg-0pky"> </td>
                <td class="tg-0pky"> </td>
                <td class="tg-0pky"> </td>
                </tr>
                @endfor --}}
                @php
                    $sum = "0" ;
                @endphp
                @for ($i = 1; $i <= 7; $i++)
                 <tr>
                    {{-- {{ ( $i == 1 && $i <= 2  ?  'align="right"' : ($i >= 3 ? 'align="left"': '')) }} --}}
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky" >
                        {{ ($i == 1  ?  "รวมเป็นเงิน" : ($i == 2 ? "ภาษีมูลค่าเพิ่ม 7 %": ($i == 3 ? "รวมเป็นเงินทั่งสิ้น": ($i == 4 ? num2wordsThai((($allproduct->priceperunit)*($allproduct->unit)+($allproduct->priceperunit)*(0.07))): ($i == 5 ? "หมายเหตุ": '')))))  }}
                    </td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky" align="right">{{ ($i == 1  ?  $sum +=($allproduct->priceperunit)*($allproduct->unit): ($i == 2 ? ($allproduct->priceperunit)*(0.07): ($i == 3 ? (($allproduct->priceperunit)*($allproduct->unit)+($allproduct->priceperunit)*(0.07)): ($i == 4 ? "": ""))))  }}</td>
                    <td class="tg-0pky"></td>
                    </tr>
                    @endfor

        </tbody>
    </table>
    <table width="100%">

        <tr>
            <td class="tg-baqh" colspan="5">หลักฐานที่ใช่ในการเบิก หนังสือ กนผ.รภท.ฯ(แผนกศูนย์สารสนเทศฯ)ที่ กห</td>
        </tr>
        <tr>
            <td class="tg-hmp3">ตรวจสอบแล้วเห็นว่า</td>
            <td class="tg-hmp3">......................................</td>
            <td class="tg-hmp3" colspan="3">ขอเบิกสิ่งอุปกรณ์ตามที่ระบุไว้ในช่อง " จำนวณเบิก " และขอมอบ</td>
        </tr>
        <tr>
            <td class="tg-0lax" colspan="2">.............................................................................................</td>
            <td class="tg-0lax">ให้</td>
            <td class="tg-lqy6">.................................................</td>
            <td class="tg-lqy6">เป็นผู้รับแทน</td>
        </tr>
        <tr>
            <td class="tg-hmp3"> ..................................</td>
            <td class="tg-hmp3">..................................</td>
            <td class="tg-hmp3" colspan="2">พ.อ ......................................</td>
            <td class="tg-mb3i">..................................</td>
        </tr>
        <tr>
            <td class="tg-0lax">(ลงนาม) ผู้ตรวจสอบ</td>
            <td class="tg-0lax">วัน เดือน ปี</td>
            <td class="tg-0lax" colspan="2">(ลงนาม)ผู้เบิก</td>
            <td class="tg-lqy6">วัน เดือน ปี</td>
        </tr>
        <tr>
            <th class="tg-baqh" colspan="5">
                <hr>
            </th>
        </tr>
        <tr>
            <td class="tg-hmp3" colspan="2">อนุมัติให้จ่ายได้เฉพาะในรายการและจำนวณที่ผู้ตรวจสอบ</td>
            <td class="tg-hmp3" colspan="3">ได้จ่ายสิ่งอุปกรณ์ตามรายการและจำนวณที่แจ้งไว้ในช่อง "จ่ายจริง" แล้ว</td>
        </tr>
        <tr>
            <td class="tg-0lax">..................................</td>
            <td class="tg-0lax">..................................</td>
            <td class="tg-0lax" colspan="2">..................................</td>
            <td class="tg-0lax">..................................</td>
        </tr>
        <tr>
            <td class="tg-hmp3">(ลงนาม) ผู้สั่งจ่าย รองผอรภท</td>
            <td class="tg-hmp3">วัน เดือน ปี</td>
            <td class="tg-hmp3" colspan="2">(ลงนาม) ผู้รับ</td>
            <td class="tg-hmp3">วัน เดือน ปี</td>
        </tr>
        <tr>
            <th class="tg-baqh" colspan="5">
                <hr>
            </th>
        </tr>

        <tr>
            <td class="tg-hmp3" colspan="2">ได้จ่ายตามรายการและจำนวณที่แจ้งไว้ในช่อง "จ่ายจริง" แล้ว</td>
            <td class="tg-hmp3"></td>
            <td class="tg-hmp3"></td>
            <td class="tg-hmp3"></td>
        </tr>

        <tr>
            <td class="tg-0lax">..................................</td>
            <td class="tg-0lax">..................................</td>
            <td class="tg-0lax" colspan="2">ทะเบียนหน่วยจ่าย</td>
            <td class="tg-0lax"></td>
        </tr>
        <tr>
            <td class="tg-hmp3">(ลงนาม)ผู้จ่าย</td>
            <td class="tg-hmp3">วัน เดือน ปี</td>
            <td class="tg-hmp3"></td>
            <td class="tg-hmp3"></td>
            <td class="tg-hmp3"></td>
        </tr>
    </table>
</body>

</html>
