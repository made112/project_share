<?php

use App\sharing;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','BasicController@index')->name('sharing.home');
Route::group(['prefix' => 'sharing'], function () {
    Route::get('create','SharingController@create')->name('sharing.create');
    Route::get('show','SharingController@show')->name('sharing.show');
Route::post('store', 'SharingController@store')->name('sharing.store');
//    Route::post('/post-data','SharingController@nn')->name('postData');

});
Route::get('/view/{sharing_id}','SomeController@view')-> name('view-show');
Route::get('/view-motion/{sharing_id}','SomeController@viewmotion');
Route::get('/view-line/{sharing_id}','SomeController@viewline');
Route::get('/view-photo/{sharing_id}','SomeController@viewphoto');
Route::get('/view-video/{sharing_id}','SomeController@viewvideo');
Route::get('/view-info/{sharing_id}','SomeController@viewenfo');
Route::get('/view-story/{sharing_id}','SomeController@viewStory');
Route::get('/view-Design/{sharing_id}','SomeController@viewDesign');
Route::get('/view-Volunt/{sharing_id}','SomeController@viewVolunt');
Route::get('/view-abyat/{sharing_id}','SomeController@viewabyat');
Route::get('/view-blog/{sharing_id}','SomeController@viewblog');
Route::get('/view-drawing/{sharing_id}','SomeController@viewdrawing');
Route::get('/view-elqa/{sharing_id}','SomeController@viewElqa');




Route::get('/view-vote/{sharing_id}',function ($sharing_id){
    return view('sharing.vote',compact('sharing_id'));
});
//Route::get('/view-vote/{sharing_id}',function ($sharing_id){
//    return view('sharing.photo',compact('sharing_id'));
//
//});
Route::post('store', 'VoteController@store')->name('vote.store');
Route::get('/show-rang-video/{edu_share}/{sharing_type}','VoteController@index_video');
Route::get('/show-rang-photo/{edu_share}/{sharing_type}','VoteController@index_photo');
Route::get('/show-rang-motion/{edu_share}/{sharing_type}','VoteController@index_motion');
Route::get('/show-rang-design/{edu_share}/{sharing_type}','VoteController@index_design');
Route::get('/show-rang-line/{edu_share}/{sharing_type}','VoteController@index_line');
Route::get('/show-rang-enfo/{edu_share}/{sharing_type}','VoteController@index_Enfo');

Route::get('/show-rang-elqa/{edu_share}/{sharing_type}','VoteController@index_Elqa');
Route::get('/show-rang-story/{edu_share}/{sharing_type}','VoteController@index_Story');
Route::get('/show-rang-abyat/{edu_share}/{sharing_type}','VoteController@index_Abyat');
Route::get('/show-rang-blog/{edu_share}/{sharing_type}','VoteController@index_Blog');
Route::get('/show-rang-volunt/{edu_share}/{sharing_type}','VoteController@index_Volunt');
Route::get('/show-rang-drawing/{edu_share}/{sharing_type}','VoteController@index_drawing');

//Route::get('/show-rang/{sharing_type}','VoteController@index');


Route::post('filter-data-video', 'SharingController@filterDataVideo');
Route::post('filter-data-photo', 'SharingController@filterDataPhoto');
Route::post('filter-data-motion', 'SharingController@filterDataMotion');
Route::post('filter-data-line', 'SharingController@filterDataLine');
Route::post('filter-data-design', 'SharingController@filterDataDesign');
Route::post('filter-data-elqa', 'SharingController@filterdataelqa');
Route::post('filter-data-enfo', 'SharingController@filterDataEnfo');
Route::post('filter-data-story', 'SharingController@filterDataStory');
Route::post('filter-data-abyat', 'SharingController@filterDataAbyat');
Route::post('filter-data-blog', 'SharingController@filterDatablog');
Route::post('filter-data-volunt', 'SharingController@filterDatavolunt');

Route::post('filter-data-drawing', 'SharingController@filterDataDrawing');

Route::get("/show-abyat/{abyatId}","SharingController@showAbyat");
Route::get("/show-story/{storyId}","SharingController@showStory");
Route::get("/show-blog/{blogId}","SharingController@showBlog");
Route::get("/show-volunt/{voluntId}","SharingController@showVolunt");
Route::get("/show-design/{designId}","SharingController@showdesign");
Route::get("/show-drawing/{drawingId}","SharingController@showdrawing");
Route::get("/show-elqa/{elqaId}","SharingController@showelqa");
Route::get("/show-motion/{motionId}","SharingController@showmotion");
Route::get("/show-enfo/{enfoId}","SharingController@showenfo");
Route::get("/show-line/{lineId}","SharingController@showline");
Route::get("/show-video/{videoId}","SharingController@showvideo");
Route::get("/show-photo/{photoId}","SharingController@showphoto");


//Route::get('/vma/{sharing_id}','SharingController@avg');
Route::get('try',function (){
   return view('sharing.create_try') ;
});



Route::get('download-photo/{id}','SharingController@downloadPhoto')->name('download.photo');
Route::get('download-volunt/{id}','SharingController@downloadvolunt')->name('download.volunt');

Route::get('download-blog/{id}','SharingController@downloadblog')->name('download.blog');
Route::get('download-drawing/{id}','SharingController@downloadDrawing')->name('download.drawing');
Route::get('download-elqa/{id}','SharingController@downloadElqa')->name('download.elqa');
Route::get('download-video/{id}','SharingController@downloadVideo')->name('download.video');
Route::get('download-motion/{id}','SharingController@downloadMotion')->name('download.motion');
Route::get('download-design/{id}','SharingController@downloadDesign')->name('download.design');
Route::get('download-line/{id}','SharingController@downloadLine')->name('download.line');
Route::get('download-enfo/{id}','SharingController@downloadEnfo')->name('download.enfo');
Route::get('download-story/{id}','SharingController@downloadStory')->name('download.story');
Route::get('download-abyat/{id}','SharingController@downloadAbyat')->name('download.abyat');
Route::get('download-home-pdf)','SharingController@downloadpdfHome')->name('download.home');

Route::get('show-pdf','SharingController@showdpdfHome')->name('show-pdf');



