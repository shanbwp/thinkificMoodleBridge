<?php

namespace App\Imports;

use App\Models\EarningSummary;
use App\Models\Track;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow; 
use Maatwebsite\Excel\Imports\HeadingRowFormatter;

HeadingRowFormatter::default('none');

class TrackEarning implements ToModel, WithHeadingRow
{
    public $date='';
    public function __construct($date)
    {
        $this->date=$date;
    }
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
 
    */
    // public function model(array $row)
    // { 
    //     if($row[0]!=null && $row[0]!='Asset Title'){
    //         return new EarningSummary([
    //             'asset'              =>$row[0], 
    //             'type'               =>$row[1],
    //             'track_code'         =>$row[2], 
    //             'artist'             =>$row[6], 
    //             'label'              =>$row[7],
    //             'country'            =>$row[9],
    //             'views'              =>$row[10],
    //             'gross_earning'         =>substr($row[11],1),
    //             'net_earning'           =>substr($row[12],1), 
    //             'gross_earning_manual'  =>substr($row[13],1), 
    //             'net_earning_manual'    =>substr($row[14],1), 
    //             'month'                 =>$this->date,  
    //         ]);
    //     }
    // }

    public function model(array $row)
    { 
       // print_r($row); exit;
        $row['user_percentage'] = $this->trackUser($row['Track Code']);
        // print_r($row); exit;
            return new EarningSummary([
                'asset'              =>$row['Asset Title'], 
                'type'               =>$row['Type'],
                'track_code'         =>$row['Track Code'], 
                'artist'             =>$row['Artist'], 
                'label'              =>$row['Label'],
                'country'            =>$row['Country'],
                'views'              =>$row['Total Views'],
                'gross_earning'         =>substr($row['Gross Earnings'],1),
                'net_earning'           =>substr($row['Amount Payable'],1), 
                'gross_earning_manual'  =>substr($row['Gross Earnings (Manual)'],1), 
                'net_earning_manual'    =>substr($row['Amount Payable (Manual)'],1), 
                'user_net_earning'      =>($row['user_percentage']/100)*substr($row['Amount Payable'],1),   
                'user_percentage'       =>$row['user_percentage'],   
                'month'                 =>$this->date,   
            ]);
         
    }
    
    public function trackUser($track_code){
        // echo $track_code; exit;
        $track      = Track::find($track_code); 
        return $track->user->payment;
         

    }
}
