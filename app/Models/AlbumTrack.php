<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlbumTrack extends Model
{
    protected $fillable=['album_id','segment_id','start','duration','status','result'];

    use HasFactory;

    public function album(){
        return $this->belongsTo('App\Models\Album','album_id');
    } 
}
