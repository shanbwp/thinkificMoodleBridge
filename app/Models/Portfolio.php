<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $fillable=['name','portfolio_category_id','title','image','vedio'];
    use HasFactory;
    public function category(){
        return $this->belongsTo('App\Models\BlogCategory','portfolio_category_id');
    }

    public function getvideourl($url){
        preg_match_all("#(?<=v=|v\/|vi=|vi\/|youtu.be\/)[a-zA-Z0-9_-]{11}#",$url,$matches);
        return $matches[0][0];
    }
}
