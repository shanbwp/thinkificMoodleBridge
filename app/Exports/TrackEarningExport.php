<?php

namespace App\Exports;

use App\Models\EarningSummary;
use Maatwebsite\Excel\Concerns\FromCollection;

class TrackEarningExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return EarningSummary::all();
    }
}
