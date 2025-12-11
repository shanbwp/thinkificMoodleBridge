<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Portfolio;
use App\Models\Blog;
use App\Models\Subscriber;
use App\Models\Resume;
use App\Models\News;
use App\Models\Career;
use App\Models\BlogCategory;
use App\Models\Testimonial;
class FrontController extends Controller

{
    public function Front()
    { 
       
      $contact = Contact::get();  
      return view('front.home', compact('contact'));
    } 
    public function Home()
    {  
      $userBlog     = Blog::get(); 
      return view('front.home', compact('userBlog'));
    }
    
    public function testg()
    { 
      $portfolio = Portfolio::get();
      return view('front.testg', compact('portfolio'));
    }
    public function About()
    {
      
     $testimonial = Testimonial::get();
      return view('front.about',compact('testimonial'));
    }
    public function Resume()
    {
      $resume= Resume::get();
      return view('front.resume',compact('resume'));
    }
    public function Service()
    {
      return view('front.service');
    }
    public function Portfolio() 
    {
      $category_blog = BlogCategory::with('portfolios')->get();
      $group_data = BlogCategory::get();
      $group = [];
      foreach($group_data as $gd){
        array_push($group ,$gd->name);
      }

      $gp = json_encode($group);  
      $portfolio= Portfolio::get(); 
      return view('front.portfolio',compact('portfolio','category_blog','gp'));
    }

    public function getvideourl($url){
      preg_match_all("#(?<=v=|v\/|vi=|vi\/|youtu.be\/)[a-zA-Z0-9_-]{11}#",$url,$matches);
      return $matches[0][0];
  }
  
    public function Blog()
    {
      $userBlog = Blog::get();
      $subscriber = Subscriber::get();
      $blog = Blog::get();
      return view('front.blog',compact('userBlog','subscriber','blog'));
    }
    
    public function blogDetail($id)
    {
      $blog = Blog::where('slug',$id)->first();
      $subscriber = Subscriber::get();
      $blogs = Blog::get();
      return view('front.blogdetail',compact('blog','subscriber','blogs'));
    }

    public function Contact()
    {
      $contact = Contact::get();
     // print_r($contact); exit;
      return view('front.contact',compact('contact'));
    }

    public function Career()
    {
      $career = Career::get();
     // print_r($contact); exit;
      return view('front.career',compact('career'));
    }

    public function Trial()
    {
      return view('front.trial');
    }
}
