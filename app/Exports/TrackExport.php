<?php

namespace App\Exports;

use App\Models\TrackPrep;
use Maatwebsite\Excel\Concerns\FromCollection;

class TrackExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return TrackPrep::all();
    }
}
