<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable =['logo','white_logo','fav_icon','meta_title','meta_description','meta_tag','fb_url','insta_url','twitter_url','linkedin_url','youtube_url','footer_text','track','created_at','updated_at'];
}
