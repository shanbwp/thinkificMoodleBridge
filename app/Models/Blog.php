<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    
    protected $fillable=['blog_category_id','name','date','upload_by','description','image'];
    use HasFactory;
    public function category(){
        return $this->belongsTo('App\Models\BlogCategory','blog_category_id');
    } 
}
