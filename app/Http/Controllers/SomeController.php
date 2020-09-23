<?php

namespace App\Http\Controllers;

use App\sharing;
use Illuminate\Http\Request;

class SomeController extends Controller
{
    public function view($sharing_id){
        $data = sharing::where('sharing_type',$sharing_id)->get();
        return view('sharing.video')->with('data',$data);


    }
    public function viewmotion($sharing_id){
    $data = sharing::where('sharing_type',$sharing_id)->get();
    return view('sharing.motion')->with('data',$data);


}
    public function viewline($sharing_id){
        $data = sharing::where('sharing_type',$sharing_id)->get();
        return view('sharing.line')->with('data',$data);


    }
    public function viewphoto($sharing_id){


        $data = sharing::where('sharing_type',$sharing_id)->get();
//        dd($data);
        return view('sharing.photo')->with('data',$data);

    }
    public function viewvideo($sharing_id){
//        $data = sharing::where('sharing_type', '=','6')
        $data = sharing::where('sharing_type',$sharing_id)->get();

        return view('sharing.video')->with('data',$data);


    }
    public function viewenfo($sharing_id){
        $data = sharing::where('sharing_type',$sharing_id)->get();
        return view('sharing.enfograph')->with('data',$data);


    }
    public function viewStory($sharing_id){
        $data = sharing::where('sharing_type',$sharing_id)->get();
        return view('sharing.storyes')->with('data',$data);


    }
    public function viewDesign($sharing_id){
        $data = sharing::where('sharing_type',$sharing_id)->get();
        return view('sharing.designe')->with('data',$data);


    }
    public function viewVolunt($sharing_id){
        $data = sharing::where('sharing_type',$sharing_id)->get();
        return view('sharing.volunteer')->with('data',$data);


    }
    public function viewabyat($sharing_id){
        $data = sharing::where('sharing_type',$sharing_id)->get();
        return view('sharing.abyat')->with('data',$data);


    }
    public function viewblog($sharing_id){
        $data = sharing::where('sharing_type',$sharing_id)->get();
        return view('sharing.blogs')->with('data',$data);


    }
    public function viewdrawing($sharing_id){
        $data = sharing::where('sharing_type',$sharing_id)->get();
        return view('sharing.drawing',compact('data'));


    }
    public function viewElqa($sharing_id){
        $data = sharing::where('sharing_type',$sharing_id)->get();
        return view('sharing.elqa')->with('data',$data);


    }

}
