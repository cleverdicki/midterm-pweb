<?php

namespace App\Exports;

use App\Book_List;
use Maatwebsite\Excel\Concerns\FromCollection;

class Book_ListExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Book_List::all();
    }
}
