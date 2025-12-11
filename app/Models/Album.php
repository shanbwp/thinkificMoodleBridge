<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{

    protected $fillable=['project_id','source_id','file','result','status'];
    use HasFactory;
    
    public function project(){
        return $this->belongsTo('App\Models\Project','project_id');
    } 

    public function segmants(){
        return $this->hasMany('App\Models\AlbumTrack','album_id');
    }
}
