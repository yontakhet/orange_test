
<table border="1" width="100%">

        <thead>
        <tr rowspan="1" >
            <th colspan="12">บัญชีครุภัณฑ์</th>
        </tr>
        <tr rowspan="2" >
            <th >ลำดับ ปี </th>
            <th>รายการ </th>
            <th>หน่วยนับ</th>
            <th>จำนวน</th>
            <th>วันที่ได้มา</th>
            <th>ใช่ที่แผนก</th>
            <th>เลขที่หรือรหัส</th>
            <th>ยี่ห้อ ชนิด แบบ ขนาดและลักษณะ</th>
            <th>ราคาต่อหน่วย</th>


            <th>หมายเหตุ</th>
        </tr>
        <tr >

        </tr>
        </thead>
        <tbody>
            @foreach ($allproducts as $key => $allproduct)


            <tr>
                {{-- <td>{{$months}}</td> --}}
                <td>{{$key+1}}</td>
                {{-- <td> {{    $timeEnd  }}  <br>       {{$timeStart}}</td> --}}
                <td >{{ $allproduct->name }}</td>
                <td >ชุด</td>
                <td >{{ $allproduct->unit }}</td>
                <td>{{ $allproduct->date_come }}</td>
                <td>{{ $allproduct->property }}</td>
                <td>{{ $allproduct->code }}</td>
                <td>{{ $allproduct->brand }}</td>
                <td>{{ $allproduct->totalvalue }}</td>
                <td></td>
            </tr>
            @endforeach
        </tbody>
    </table>
