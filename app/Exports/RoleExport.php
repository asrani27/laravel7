<?php

namespace App\Exports;

use App\Role;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
//use Maatwebsite\Excel\Concerns\WithEvents;
//use Maatwebsite\Excel\Events\BeforeExport;
//use Maatwebsite\Excel\Events\AfterSheet;

class RoleExport implements FromCollection, WithMapping
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Role::all();
    }

    public function map($role): array
    {
        return [
            $role->id,
            $role->name,
        ];
    }

    // public function registerEvents(): array
    // {
    //     return [
    //         BeforeExport::class  => function(BeforeExport $event) {
    //             $event->writer->setCreator('Patrick');
    //         },
    //         AfterSheet::class    => function(AfterSheet $event) {
    //             $event->sheet->setOrientation(\PhpOffice\PhpSpreadsheet\Worksheet\PageSetup::ORIENTATION_LANDSCAPE);

    //             $event->sheet->styleCells(
    //                 'B2:G8',
    //                 [
    //                     'borders' => [
    //                         'outline' => [
    //                             'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK,
    //                             'color' => ['argb' => 'FFFF0000'],
    //                         ],
    //                     ]
    //                 ]
    //             );
    //         },
    //     ];
    // }
}
