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

        <thead>
            <tr>
                <th>ลำดับ</th>
                <th>รหัสสินทรัพย์ในระบบ GFMIS </th>
                <th>รหัสสินทรัพย์ของส่วนราชการ</th>
                <th>รายการ</th>
                <th>วันที่ได้มา</th>
                <th>อายุการใช้งาน(ปี)</th>
                <th>มูลค่าทุน</th>
                @for ($i = 1; $i <= 6; $i++)
                {{-- @php
                $full = $total2/12*12;
                $unfull = $total2/12*$months;
                $sum += ($i == 1 ? $unfull : ($i > 1 ? $full: ''));
                // $sum44 += ($allproduct->totalvalue)/($asset->budget);
                $cal = ($allproduct->totalvalue)/($asset->budget);
                // $cal = ($allproduct->totalvalue)/($asset->budget);

                @endphp --}}
                {{-- {{ $all = $allproduct->priceperunit }} --}}

                <th>ค่าเสื่อมราคาต่อปี</th>
                <th>ค่าเสื่อมราคาต่อปีรวม2000</th>
                {{-- <td>{{($i == 1 ? $cal : ($i <= 2 ? : ''))}}</td> --}}
                {{-- <td>{{($i == 1  ?  "": ($i <= 2 ? $total2: ($i > 3 ? $total2/12*12: '')))  }}</td> --}}
                {{-- <td>{{$sum44}}</td> --}}

               @endfor
                {{-- <th>มูลค่าทุน</th>
                <th>มูลค่าทุน</th>
                <th>มูลค่าทุน</th>
                <th>มูลค่าทุน</th>
                <th>มูลค่าทุน</th>
                <th>มูลค่าทุน</th>
                <th>มูลค่าทุน</th>
                <th>มูลค่าทุน</th>
                <th>มูลค่าทุน</th>
                <th>มูลค่าทุน</th>
                <th>มูลค่าทุน</th>
                <th>มูลค่าทุน</th>
                <th>มูลค่าทุน</th>
                <th>มูลค่าทุน</th>
                <th>มูลค่าทุน</th>
                <th>มูลค่าทุน</th>
                <th>มูลค่าทุน</th>
            </tr> --}}
        </thead>
        <tbody>
            @foreach ($allproducts as $allproduct)
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

            // $total = round( ((($allproduct->priceperunit)+(($allproduct->priceperunit)*7/100))) , 2 );
            // $total2 = round( ((($allproduct->priceperunit)+(($allproduct->priceperunit)*7/100))/$asset->budget) , 2 ); //รวมภาษีมูลค่าเพิ่ม/อายุการใข่งาน
            $total = round( ((($allproduct->totalvalue)+(($allproduct->totalvalue)))) , 2 );
            $total2 = round( ((($allproduct->totalvalue)+(($allproduct->totalvalue)))/$asset->budget) , 2 ); //รวมภาษีมูลค่าเพิ่ม/อายุการใข่งาน
            $totalfirst = ($allproduct->totalvalue)/($asset->budget)  ;
            $total12 = ($allproduct->totalvalue)/12  ;
            $sumtotaltotalnotfirst = 0;
            $sum = 0;
            // $sum2 = 0;
            $sum = 0;
            @endphp

            <tr>
                {{-- <th>{{$allproduct->id_withdraw}}</th> --}}
                <th>{{$allproduct->id_allproduct}}</th>
                <th></th>
                <th>{{$allproduct->code}}</th>
                <th>{{$allproduct->name}}</th>
                <th>{{date('d-m-Y', strtotime($allproduct->date_come) )}}</th>
                <th>{{$asset->budget }}</th>
                <th>{{($allproduct->totalvalue)}}</th>
                {{-- <th>{{($allproduct->totalvalue)/($asset->budget) }}</th> --}}
                {{-- <td>{{($i == 1  ?  $total2/12*$months : )}}</td> --}}
                @for ($i = 1; $i <= $asset->budget; $i++)
                @php
                       $sumtotaltotalfirst = ((($totalfirst/12)*$months));
                       $sumtotaltotalnotfirst +=   ($i == 1  ?  "0" : ($i > 1 ? $sumtotaltotalfirst+$totalfirst: ''));
                @endphp
                    {{-- @php
                    $full = $total2/12*12;
                    $unfull = $total2/12*$months;
                    $sum += ($i == 1 ? $unfull : ($i > 1 ? $full: ''));
                    // $sum44 += ($allproduct->totalvalue)/($asset->budget);
                    $cal = ($allproduct->totalvalue)/($asset->budget);
                    // $cal = ($allproduct->totalvalue)/($asset->budget);

                    @endphp --}}
                    {{-- {{ $all = $allproduct->priceperunit }} --}}

                    {{-- <td>{{$i}}</td> --}}

                    {{-- <td>{{($i == 1  ?  $total2/12*$months : ($i > 1 ? $total2/12*12: ''))  }}</td> --}}
                    <td>{{($i == 1  ?  $totalfirst : ($i >= 1 ? $totalfirst: ''))  }}</td>
                    {{-- <td>{{($i == 1  ?  $sumtotaltotalfirsttt : ($i >= 1 ? $sumtotaltotalfirst: ($i >= $asset->budget ? "end": '')))  }}</td> --}}
                    <td>{{($i == 1  ?  $sumtotaltotalfirst : ($i == 2 ? $sumtotaltotalnotfirst: ($i >= 3 ? $sumtotaltotalnotfirst-$sumtotaltotalfirst: '')))  }}</td>
                    {{-- <td>{{($i == 1  ?  (($totalfirst/12)*$months)+$totalfirst : ($i > 1 ? ($totalfirst+$sumtotaltotalfirst): ''))  }}</td> --}}
                    {{-- <td>{{($i == 1  ?  "": ($i <= 2 ? $total2: ($i > 3 ? $total2/12*12: '')))  }}</td> --}}
                    {{-- <td>{{$sum44}}</td> --}}

               @endfor

            </tr>
            @endforeach
        </tbody>
    </table>

</html>
