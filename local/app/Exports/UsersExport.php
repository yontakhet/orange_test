<?php

namespace App\Exports;

// use App\User;
use Maatwebsite\Excel\Concerns\FromCollection;
// use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithDrawings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use App\Model\AllProductModel;
use Yajra\Datatables\Datatables;
use Validator;
use DB;
use Storage;

class UsersExport implements  FromView, ShouldAutoSize
{

    public function __construct($view, $data = "")
        {
            $this->view = $view;
            $this->data = $data;
        }

    public function view(): View
        {
            // $this->drawings();
            return view(
                $this->view,
                $this->data
            );
        }
    // public function drawings(){

    //     //dd('test');

    //         $gdImage = imagecreatefrompng(asset('storage/uncheckbox.png'));

    //         $objDrawing = new \PHPExcel_Worksheet_MemoryDrawing();
    //         $objDrawing->setName('Sample image');$objDrawing->setDescription('Sample image');
    //         $objDrawing->setImageResource($gdImage);
    //         $objDrawing->setRenderingFunction(\PHPExcel_Worksheet_MemoryDrawing::RENDERING_JPEG);
    //         $objDrawing->setMimeType(\PHPExcel_Worksheet_MemoryDrawing::MIMETYPE_DEFAULT);
    //         $objDrawing->setHeight(26);
    //         $objDrawing->setWidth(26);
    //         $objDrawing->setWorksheet($testsheet);
    //         $objDrawing->setCoordinates('B6');
    //       }
    // public function registerEvents(): array
    // {
    //     return [
    //         AfterSheet::class => function(AfterSheet $event) {
    //             $drawing = new \PhpOffice\PhpSpreadsheet\Worksheet\Drawing();
    //             $drawing->setName('Logo');
    //             $drawing->setDescription('Logo');
    //             $drawing->setPath(asset('storage/uncheckbox.png'));
    //             $drawing->setCoordinates('B6');

    //             $drawing->setWorksheet($event->sheet->getDelegate());

    //         },
    //     ];
    // }

}
