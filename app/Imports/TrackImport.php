<?php

namespace App\Imports;

use App\Models\TrackPrep; 

use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class TrackImport implements ToModel
{
    
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $key)
    {
        // $tc = (basename($key[1], '.mp3'));
        // print_r($tc); exit;
    //    print_r($key); exit;
        if($key[0]){
            return new TrackPrep([
                'track_id'      =>$key[0],
                'original_file' =>$key[1],
                'track_title'   =>$key[2],
                'artist'        =>$key[3],
                'genre'         =>$key[4],
                'label'         =>$key[5],
                'album_title'   =>$key[6],
                'album_upc'     =>$key[7],
                'isrc'          =>$key[8],
                'track_code'    =>$key[9],
                'publishing'    =>$key[10],
                'compos_title'  =>$key[11],
                'compos_writter'=>$key[12],
                'compos_publisher'=>$key[13],
                'compos_owner_percentage'=>$key[14],
                'related_isrc'  =>$key[15],
                'iswc'          =>$key[16],
                'custom_id'     =>$key[17],
                'ipi_cae'       =>$key[18],
                'hfa_code'      =>$key[19],
                'available_genre'=>$key[20]
            ]);
        }

        }
         

     
}
