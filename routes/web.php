<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Auth;


//Homepage...
Route::get('/',[FrontendController::class,'homepage'])->name('homepage');

//Subscription Form...
Route::post('create-newsletter',[FrontendController::class,'create_newsletter'])->name('create-newsletter');

//Breaking News...
Route::get('breaking-news-detail/{slug}',[FrontendController::class,'breaking_news_detail'])->name('breaking-news-detail');

//Post Detail Page...
Route::get('post-detail-page/{slug}',[FrontendController::class,'post_detail_page'])->name('post-detail-page');

//Category Page...
Route::get('category-detail-page/{category_slug}',[FrontendController::class,'category_detail_page'])->name('category-detail-page');

//Tab Detail Page...
Route::get('tab-detail-page/{slug}',[FrontendController::class,'tab_news_detail'])->name('tab-detail-page');

//Search
Route::get('/search',[FrontendController::class,'search'])->name('search');

//Comment
Route::post('/create-comment', [FrontendController::class, 'create_comment'])->name('create-comment');
//subbox comment
Route::post('/create-subbox-comment', [FrontendController::class, 'create_subbox_comment'])->name('create-subbox-comment');







Auth::routes();