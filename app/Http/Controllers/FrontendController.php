<?php

namespace App\Http\Controllers;

use App\Models\NewsScrolling;
use App\Models\Post;
use App\Models\Box;
use App\Models\SubBox;
use App\Models\FirstAdvertise;
use App\Models\SecondAdvertise;
use App\Models\FeaturedVideo;
use App\Models\Category;
use App\Models\ThirdAdvertise;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function homepage(){
        $scrolling_news = NewsScrolling::first();
        $first_advertise = FirstAdvertise::first(); 
        $second_advertise = SecondAdvertise::first();
        $featured_video = FeaturedVideo::all();
        $category = Category::all();
        $box = Box::with('sub_boxes')->get();
        $breaking_news = Post::whereHas('category', function($q){$q->where('categories.category_title','Breaking News');})->latest()->limit(6)->get();
        $recent_news = Post::whereHas('category', function($q){$q->where('categories.category_title','Recent');})->latest()->limit(6)->get();
        $fashion_media_news = Post::whereHas('category', function($q){$q->where('categories.category_title','Fashion & Media');})->latest()->limit(6)->get();
        $sports_news = Post::whereHas('category', function($q){$q->where('categories.category_title','Sports');})->latest()->limit(6)->get();
        $jobs_news = Post::whereHas('category', function($q){$q->where('categories.category_title','Jobs');})->latest()->limit(6)->get();
        $tech_news = Post::whereHas('category', function($q){$q->where('categories.category_title','Tech');})->latest()->limit(6)->get();
        $business_news = Post::whereHas('category', function($q){$q->where('categories.category_title','Business');})->latest()->limit(6)->get();
        $art_news = $national_news = Post::whereHas('category', function($q){$q->where('categories.category_title','Art');})->latest()->limit(6)->get();
        $featured_news = Post::whereHas('category', function($q){$q->where('categories.category_title','Featured');})->latest()->limit(6)->get();
        $national_news = Post::whereHas('category', function($q){$q->where('categories.category_title','National');})->latest()->limit(6)->get();
        $international_news = Post::whereHas('category', function($q){$q->where('categories.category_title','International');})->latest()->limit(6)->get();

        return view('frontend.index',compact('recent_news','fashion_media_news','sports_news','jobs_news','tech_news',
        'business_news','art_news','featured_news','national_news','international_news','breaking_news','scrolling_news',
        'first_advertise','second_advertise','featured_video','category','box'));
    }
    
    //Subcription Part...
    public function create_newsletter(Request $request){
        $data = $request->validate(['email' => 'required|email',]);
        $data['email']=$request->email;
       
        DB::table('news_letters')->insert($data);
        return back()->with('success', 'You have subscribed to our newsletter!');
    }

    //Post Detail Page...
    public function post_detail_page($slug){
        $featured_news = Post::whereHas('category', function($q){$q->where('categories.category_title','Featured');})->latest()->limit(6)->get();
        $recent_news = Post::whereHas('category', function($q){$q->where('categories.category_title','Recent');})->latest()->limit(6)->get();
        $post_detail_page = Post::with('comments')->where('slug',$slug)->latest()->first();
        $third_advertisement = ThirdAdvertise::first();

        return view('frontend.post-detail-page' , compact('third_advertisement','featured_news','recent_news','post_detail_page'));
    }

    // Category Deatil Page...
    public function category_detail_page($category_slug){
        $breaking_news = Post::whereHas('category', function($q){$q->where('categories.category_title','Breaking News');})->latest()->limit(6)->get();
        $featured_news = Post::whereHas('category', function($q){$q->where('categories.category_title','Featured');})->latest()->limit(6)->get();
        $recent_news = Post::whereHas('category', function($q){$q->where('categories.category_title','Recent');})->latest()->limit(6)->get();
        $category_detail_page = DB::table('categories')->join('posts','categories.id','posts.category_id')->select('categories.category_title','categories.category_slug','posts.*')->where('category_slug',$category_slug)->latest()->paginate(2);
        $third_advertisement = ThirdAdvertise::first();

        return view('frontend.category-detail-page' , compact('third_advertisement','breaking_news','featured_news','recent_news','category_detail_page'));  
    } 
   


    //Tab News Detail Part...
    public function tab_news_detail($slug){
        $featured_news = Post::whereHas('category', function($q){$q->where('categories.category_title','Featured');})->latest()->limit(6)->get();
        $recent_news = Post::whereHas('category', function($q){$q->where('categories.category_title','Recent');})->latest()->limit(6)->get();
        $tab_news_detail = SubBox::where('slug',$slug)->first();
        return view('frontend.tab-news-detail', compact('featured_news','recent_news','tab_news_detail'));
    }

    //Search...
    public function search(Request $request){
       $data_one = Post::where('title','like','%'.$request->input('query').'%')->get();
       $data_two = SubBox::where('title','like','%'.$request->input('query').'%')->get();
       return view('frontend.search',compact('data_one','data_two'));
    }

    //Comment...
    public function create_comment(Request $request) {
        
        $data =  $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'comment' => 'required',
        ]);
       
        $data['post_title']=$request->post_title;
        $data['post_id']=$request->post_id;
        $data['name']=$request->name;
    	$data['email']=$request->email;
    	$data['comment']=$request->comment;
    	
    	DB::table('comments')->insert($data);
    
        return back()->with('success', 'Thanks for your comment!');
    }
    


     //Subbox Comment...
     public function create_subbox_comment(Request $request) {
        
        $data =  $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'comment' => 'required',
        ]);
       
        $data['subbox_title']=$request->subbox_title;
        $data['subbox_id']=$request->subbox_id;
        $data['name']=$request->name;
    	$data['email']=$request->email;
    	$data['comment']=$request->comment;
    	
    	DB::table('sub_box_comments')->insert($data);
    
        return back()->with('success', 'Thanks for your comment!');
    }


}

 















 /*DB::table('categories')->join('posts','categories.id','posts.category_id')
        ->select('categories.category_title','posts.*')->where('categories.category_title','National')->latest()->limit(6)->get();*/

/*$international_view_more = DB::table('categories')->join('posts','categories.id','posts.category_id')
        ->select('categories.category_slug')->where('categories.category_title','International')->first();*/