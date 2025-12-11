<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable=['user_id','name','website','detail','secret_id','duration','duration_limt','status'];
    use HasFactory; 

    public function user(){
        return $this->belongsTo('App\Models\User','user_id');
    } 
    
    public function albums(){
        return $this->hasMany('App\Models\Album','project_id');
    }
}
