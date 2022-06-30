<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;

Use App\Models\Allotment;
Use App\Models\Course;


class AllotmentExport implements FromQuery,WithMapping,WithHeadings
{
    use Exportable;

    protected $selected;

    public function __construct($selected)
    {
        $this->selected = $selected;
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings(): array
    {
        return[
            'Student ID',
            'Student Full Name',
            'Contact',
            'Contact Whatsaap',
            'School',
            'Address',
            'Enroll Courses',
            'Registered Date',
        ];
    }

    public function map($allotment): array
    {
         return[
             $allotment->student_id,
             $allotment->FullName,
             $allotment->email,
             $allotment->contact,
             $allotment->contact_whatsapp,
             $allotment->school,
             $allotment->address,
             $allotment->courses->Name,
            //  $payment->created_at->toDatestring(),
         ];
    }

    public function query()
    {
        return Allotment::with('Course:id,Name')->whereIn('id',$this->selected);
    }
}
