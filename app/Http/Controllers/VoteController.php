<?php

namespace App\Http\Controllers;

use App\sharing;
use App\vote;
use Illuminate\Http\Request;
use App\Http\Requests\VoteRequest;
use phpDocumentor\Reflection\Types\Void_;


class VoteController extends Controller
{
    public function store(VoteRequest $request)
    {
        $vote = Vote::where('email', $request->email)->where('sharing_id', $request->sharing_id)->first();
        if($vote){

            return redirect()->back()->with(['error' => 'لا يمكنك التصويت لقد قمت بالتصويت مسبقا']);

            }
        vote::create([
            'name' => $request->name,
            'email' => $request->email,
            'avg_percent' => $request->avg_percent,
            'sharing_id' => $request->sharing_id,

        ]);

        $sharing_id = $request->sharing_id;
        $vote_avg = vote::where('sharing_id', $request->sharing_id)->avg('avg_percent');
        $sharing = sharing::find($sharing_id);
        $sharing->vote_avg = $vote_avg;
        $sharing->save();



        return redirect()->back()->with(['success' => 'تم التصويت بنجاح']);

    }

    public function index_video($edu_share, $sharing_type)
    {
        if ($edu_share == 0) {

            $data = sharing::where('sharing.sharing_type', $sharing_type)->orderBy('vote_avg', 'desc')->get();

        } else {
//            dd($edu_share,$sharing_type);

            $data = sharing::where('sharing.sharing_type', $sharing_type)
                ->where('sharing.edu_share', $edu_share)
                ->orderBy('vote_avg', 'desc')->get();

        }

        return view('sharing.rang.end_video', compact('data'));


    }

    public function index_photo($edu_share, $sharing_type)
    {
        if ($edu_share == 0) {

            $data = sharing::where('sharing.sharing_type', $sharing_type)->orderBy('vote_avg', 'desc')->get();

        } else {

            $data = sharing::where('sharing.sharing_type', $sharing_type)
                ->where('sharing.edu_share', $edu_share)
                ->orderBy('vote_avg', 'desc')->get();

        }


        return view('sharing.rang.end_photo', compact('data'));
    }

    public function index_motion($edu_share, $sharing_type)
    {
        if ($edu_share == 0) {

            $data = sharing::where('sharing.sharing_type', $sharing_type)->orderBy('vote_avg', 'desc')->get();

        } else {
//            dd($edu_share,$sharing_type);

            $data = sharing::where('sharing.sharing_type', $sharing_type)
                ->where('sharing.edu_share', $edu_share)
                ->orderBy('vote_avg', 'desc')->get();

        }

//        dd($data);

        return view('sharing.rang.end_motion', compact('data'));
    }

    public function index_design($edu_share, $sharing_type)
    {
        if ($edu_share == 0) {

            $data = sharing::where('sharing.sharing_type', $sharing_type)->orderBy('vote_avg', 'desc')->get();

        } else {
//            dd($edu_share,$sharing_type);

            $data = sharing::where('sharing.sharing_type', $sharing_type)
                ->where('sharing.edu_share', $edu_share)
                ->orderBy('vote_avg', 'desc')->get();

        }

//        dd($data);

        return view('sharing.rang.end_design', compact('data'));
    }

    public function index_line($edu_share, $sharing_type)
    {
        if ($edu_share == 0) {

            $data = sharing::where('sharing.sharing_type', $sharing_type)->orderBy('vote_avg', 'desc')->get();

        } else {
//            dd($edu_share,$sharing_type);

            $data = sharing::where('sharing.sharing_type', $sharing_type)
                ->where('sharing.edu_share', $edu_share)
                ->orderBy('vote_avg', 'desc')->get();

        }

//        dd($data);

        return view('sharing.rang.end_line', compact('data'));
    }

    public function index_Enfo($edu_share, $sharing_type)
    {
        if ($edu_share == 0) {

            $data = sharing::where('sharing.sharing_type', $sharing_type)->orderBy('vote_avg', 'desc')->get();

        } else {
//            dd($edu_share,$sharing_type);

            $data = sharing::where('sharing.sharing_type', $sharing_type)
                ->where('sharing.edu_share', $edu_share)
                ->orderBy('vote_avg', 'desc')->get();

        }

//        dd($data);

        return view('sharing.rang.end_enfo', compact('data'));
    }

    public function index_Elqa($edu_share, $sharing_type)
    {
        if ($edu_share == 0) {

            $data = sharing::where('sharing.sharing_type', $sharing_type)->orderBy('vote_avg', 'desc')->get();

        } else {
//            dd($edu_share,$sharing_type);

            $data = sharing::where('sharing.sharing_type', $sharing_type)
                ->where('sharing.edu_share', $edu_share)
                ->orderBy('vote_avg', 'desc')->get();

        }


//        dd($data);

        return view('sharing.rang.end_elqa', compact('data'));
    }

    public function index_Story($edu_share, $sharing_type)
    {
        if ($edu_share == 0) {

            $data = sharing::where('sharing.sharing_type', $sharing_type)->orderBy('vote_avg', 'desc')->get();

        } else {
//            dd($edu_share,$sharing_type);

            $data = sharing::where('sharing.sharing_type', $sharing_type)
                ->where('sharing.edu_share', $edu_share)
                ->orderBy('vote_avg', 'desc')->get();

        }


        return view('sharing.rang.end_story', compact('data'));
    }

    public function index_Abyat($edu_share, $sharing_type)
    {
        if ($edu_share == 0) {

            $data = sharing::where('sharing.sharing_type', $sharing_type)->orderBy('vote_avg', 'desc')->get();

        } else {
//            dd($edu_share,$sharing_type);

            $data = sharing::where('sharing.sharing_type', $sharing_type)
                ->where('sharing.edu_share', $edu_share)
                ->orderBy('vote_avg', 'desc')->get();

        }


        return view('sharing.rang.end_abyat', compact('data'));
    }

    public function index_Blog($edu_share, $sharing_type)
    {
        if ($edu_share == 0) {

            $data = sharing::where('sharing.sharing_type', $sharing_type)->orderBy('vote_avg', 'desc')->get();

        } else {
//            dd($edu_share,$sharing_type);

            $data = sharing::where('sharing.sharing_type', $sharing_type)
                ->where('sharing.edu_share', $edu_share)
                ->orderBy('vote_avg', 'desc')->get();

        }


        return view('sharing.rang.end_blog', compact('data'));
    }

    public function index_Volunt($edu_share, $sharing_type)
    {
        if ($edu_share == 0) {

            $data = sharing::where('sharing.sharing_type', $sharing_type)->orderBy('vote_avg', 'desc')->get();

        } else {
//            dd($edu_share,$sharing_type);

            $data = sharing::where('sharing.sharing_type', $sharing_type)
                ->where('sharing.edu_share', $edu_share)
                ->orderBy('vote_avg', 'desc')->get();

        }


        return view('sharing.rang.end_volunt', compact('data'));
    }

    public function index_drawing($edu_share, $sharing_type)
    {
        if ($edu_share == 0) {

            $data = sharing::where('sharing.sharing_type', $sharing_type)->orderBy('vote_avg', 'desc')->get();

        } else {
//            dd($edu_share,$sharing_type);

            $data = sharing::where('sharing.sharing_type', $sharing_type)
                ->where('sharing.edu_share', $edu_share)
                ->orderBy('vote_avg', 'desc')->get();

        }

        return view('sharing.rang.end_drawing', compact('data'));

    }
    public function suq($sharing_id){
        $data =sharing::where('id','$sharing_id') ->get();
        return view('sharing.drawing',compact('$data'));

    }
}




