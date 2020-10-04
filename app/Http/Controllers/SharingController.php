<?php

namespace App\Http\Controllers;

use App\Http\Requests\SharingRequest;
use App\sharing;
use Illuminate\Support\Facades\Storage;

class SharingController extends Controller
{
    public function create()
    {
        return view('sharing.create');
    }

    public function show()
    {
        return view('sharing.show');
    }


    public function store(SharingRequest $request)
    {
//dd($request)->all();

        if ($request->hasFile('photo')) {
            //            dd($request->file('photo'));

            $file_name_img = $this->saveImage($request->photo, 'public/photo');


            sharing::create([

                'name' => $request->name,
                'Prof_name' => $request->Prof_name,
                'nationality' => $request->nationality,
                'email' => $request->email,
                'edu_area' => $request->management,
                'edu_level' => $request->edulevel,
                'school' => $request->school,
                'class' => $request->class,
                'mobile' => $request->mobile,
                'edu_share' => $request->areashare,
                'sharing_type' => $request->sharesort,
                'photo' => $file_name_img,


            ]);
        } elseif ($request->hasFile('video')) {
            $file_name_video = $this->saveVideo($request->video, 'public/video');
            sharing::create([
                'name' => $request->name,
                'Prof_name' => $request->Prof_name,
                'nationality' => $request->nationality,
                'email' => $request->email,
                'edu_area' => $request->management,
                'edu_level' => $request->edulevel,
                'school' => $request->school,
                'class' => $request->class,
                'mobile' => $request->mobile,
                'edu_share' => $request->areashare,
                'sharing_type' => $request->sharesort,

                'video' => $file_name_video,


            ]);
        } elseif ($request->hasFile('abyat')) {
            $file_name_abyat = $this->saveAbyat($request->abyat, 'public/abyat');


            //            dd($request->input('line'));
            sharing::create([
                'name' => $request->name,
                'Prof_name' => $request->Prof_name,
                'nationality' => $request->nationality,
                'email' => $request->email,
                'edu_area' => $request->management,
                'edu_level' => $request->edulevel,
                'school' => $request->school,
                'class' => $request->class,
                'mobile' => $request->mobile,
                'edu_share' => $request->areashare,
                'sharing_type' => $request->sharesort,
                'abyat' => $file_name_abyat


            ]);
        } elseif ($request->hasFile('blog')) {
            $file_name_blog = $this->saveBlog($request->blog, 'public/blog');


            sharing::create([
                'name' => $request->name,
                'Prof_name' => $request->Prof_name,
                'nationality' => $request->nationality,
                'email' => $request->email,
                'edu_area' => $request->management,
                'edu_level' => $request->edulevel,
                'school' => $request->school,
                'class' => $request->class,
                'mobile' => $request->mobile,
                'edu_share' => $request->areashare,
                'sharing_type' => $request->sharesort,
                'blog' => $file_name_blog


            ]);
        } elseif ($request->hasFile('stories')) {
            $file_name_story = $this->saveStory($request->stories, 'public/stories');


            //            dd($request->input('line'));
            sharing::create([
                'name' => $request->name,
                'Prof_name' => $request->Prof_name,
                'nationality' => $request->nationality,
                'email' => $request->email,
                'edu_area' => $request->management,
                'edu_level' => $request->edulevel,
                'school' => $request->school,
                'class' => $request->class,
                'mobile' => $request->mobile,
                'edu_share' => $request->areashare,
                'sharing_type' => $request->sharesort,
                'stories' => $file_name_story


            ]);
        } elseif ($request->hasFile('design')) {
            $file_name_design = $this->saveDesign($request->design, 'public/design');


            //            dd($request->input('line'));
            sharing::create([
                'name' => $request->name,
                'Prof_name' => $request->Prof_name,
                'nationality' => $request->nationality,
                'email' => $request->email,
                'edu_area' => $request->management,
                'edu_level' => $request->edulevel,
                'school' => $request->school,
                'class' => $request->class,
                'mobile' => $request->mobile,
                'edu_share' => $request->areashare,
                'sharing_type' => $request->sharesort,
                'design' => $file_name_design


            ]);


        }

    elseif ($request->hasFile('enfo')) {
            $file_name_enfo = $this->saveEnfo($request->enfo, 'public/enfo');

//        dd($request->input('enfo'));

            sharing::create([
                'name' => $request->name,
                'Prof_name' => $request->Prof_name,
                'nationality' => $request->nationality,
                'email' => $request->email,
                'edu_area' => $request->management,
                'edu_level' => $request->edulevel,
                'school' => $request->school,
                'class' => $request->class,
                'mobile' => $request->mobile,
                'edu_share' => $request->areashare,
                'sharing_type' => $request->sharesort,
                'enfo' => $file_name_enfo


            ]);
        } elseif ($request->hasFile('elqa')) {
            $file_name_graphic = $this->saveElqa($request->elqa, 'public/elqa');


            //            dd($request->input('line'));
            sharing::create([
                'name' => $request->name,
                'Prof_name' => $request->Prof_name,
                'nationality' => $request->nationality,
                'email' => $request->email,
                'edu_area' => $request->management,
                'edu_level' => $request->edulevel,
                'school' => $request->school,
                'class' => $request->class,
                'mobile' => $request->mobile,
                'edu_share' => $request->areashare,
                'sharing_type' => $request->sharesort,
                'elqa' => $file_name_graphic


            ]);
        } elseif ($request->hasFile('motion')) {
            $file_name_motion = $this->saveMotion($request->motion, 'public/motion');
            sharing::create([
                'name' => $request->name,
                'Prof_name' => $request->Prof_name,
                'nationality' => $request->nationality,
                'email' => $request->email,
                'edu_area' => $request->management,
                'edu_level' => $request->edulevel,
                'school' => $request->school,
                'class' => $request->class,
                'mobile' => $request->mobile,
                'edu_share' => $request->areashare,
                'sharing_type' => $request->sharesort,
                'motion' => $file_name_motion


            ]);


        } elseif ($request->hasFile('volunt')) {

            $file_name_volunt = $this->saveVolunt($request->volunt, 'public/volunt');


            //            dd($request->input('line'));
            sharing::create([
                'name' => $request->name,
                'Prof_name' => $request->Prof_name,
                'nationality' => $request->nationality,
                'email' => $request->email,
                'edu_area' => $request->management,
                'edu_level' => $request->edulevel,
                'school' => $request->school,
                'class' => $request->class,
                'mobile' => $request->mobile,
                'edu_share' => $request->areashare,
                'sharing_type' => $request->sharesort,
                'volunt' => $file_name_volunt


            ]);
        } elseif ($request->hasFile('drawing')) {
//            dd($request->input('drawing'));

            $file_name_drawn = $this->saveDrawn($request->drawing, 'public/drawing');


            sharing::create([
                'name' => $request->name,
                'Prof_name' => $request->Prof_name,
                'nationality' => $request->nationality,
                'email' => $request->email,
                'edu_area' => $request->management,
                'edu_level' => $request->edulevel,
                'school' => $request->school,
                'class' => $request->class,
                'mobile' => $request->mobile,
                'edu_share' => $request->areashare,
                'sharing_type' => $request->sharesort,
                'drawing' => $file_name_drawn


            ]);
        } elseif ($request->hasFile('line')) {
            $file_name_line = $this->saveLine($request->line, 'public/line');

//dd ($request);
            sharing::create([
                'name' => $request->name,
                'Prof_name' => $request->Prof_name,
                'nationality' => $request->nationality,
                'email' => $request->email,
                'edu_area' => $request->management,
                'edu_level' => $request->edulevel,
                'school' => $request->school,
                'class' => $request->class,
                'mobile' => $request->mobile,
                'edu_share' => $request->areashare,
                'sharing_type' => $request->sharesort,
                'line' => $file_name_line


            ]);
        }


        return redirect() -> route('sharing.create') -> with(['success'=> 'تم إضافة المشاركة بنجاح']);

    }



    function saveImage($photo, $folder)
    {
        //save photo in folder
        $file_extension = $photo->getClientOriginalExtension();
        $file_name = time() . '.' . $file_extension;
        $destinationPath = public_path('/photo');
        $photo->move($destinationPath, $file_name);

        return $file_name;
    }
    function saveVideo($video, $folder)
    {
        //save video in folder
        $file_extension = $video->getClientOriginalExtension();
        $file_name = time() . '.' . $file_extension;
        $destinationPath = public_path('/video');
        $video->move($destinationPath, $file_name);

        return $file_name;
    }

    function saveAbyat($file, $folder)
    {
        //save photo in folder
        $file_extension = $file->getClientOriginalExtension();
        $file_name = time() . '.' . $file_extension;
        $destinationPath = public_path('/abyat');
        $file->move($destinationPath, $file_name);

        return $file_name;
    }
    function saveBlog($file, $folder)
    {
        //save photo in folder
        $file_extension = $file->getClientOriginalExtension();
        $file_name = time() . '.' . $file_extension;
        $destinationPath = public_path('/blog');
        $file->move($destinationPath, $file_name);

        return $file_name;
    }
    function saveDesign($file, $folder)
    {
        //save photo in folder
        $file_extension = $file->getClientOriginalExtension();
        $file_name = time() . '.' . $file_extension;
        $destinationPath = public_path('/design');
        $file->move($destinationPath, $file_name);

        return $file_name;
    }
    function saveDrawn($file, $folder)
    {
        //save photo in folder
        $file_extension = $file->getClientOriginalExtension();
        $file_name = time() . '.' . $file_extension;
        $destinationPath = public_path('/drawing');
        $file->move($destinationPath, $file_name);

        return $file_name;
    }
    function saveEnfo($file, $folder)
    {
        //save photo in folder
        $file_extension = $file->getClientOriginalExtension();
        $file_name = time() . '.' . $file_extension;
        $destinationPath = public_path('/enfo');
        $file->move($destinationPath, $file_name);

        return $file_name;
    }
    function saveElqa($file, $folder)
    {
        //save photo in folder
        $file_extension = $file->getClientOriginalExtension();
        $file_name = time() . '.' . $file_extension;
        $destinationPath = public_path('/elqa');
        $file->move($destinationPath, $file_name);

        return $file_name;
    }
    function saveLine($file, $folder)
    {
        //save photo in folder
        $file_extension = $file->getClientOriginalExtension();
        $file_name = time() . '.' . $file_extension;
        $destinationPath = public_path('/line');
        $file->move($destinationPath, $file_name);

        return $file_name;
    }
    function saveMotion($file, $folder)
    {
        //save photo in folder
        $file_extension = $file->getClientOriginalExtension();
        $file_name = time() . '.' . $file_extension;
        $destinationPath = public_path('/motion');
        $file->move($destinationPath, $file_name);

        return $file_name;
    }
    function saveStory($file, $folder)
    {
        //save photo in folder
        $file_extension = $file->getClientOriginalExtension();
        $file_name = time() . '.' . $file_extension;
        $destinationPath = public_path('/stories');
        $file->move($destinationPath, $file_name);

        return $file_name;
    }
    function saveVolunt($file, $folder)
    {
        //save photo in folder
        $file_extension = $file->getClientOriginalExtension();
        $file_name = time() . '.' . $file_extension;
        $destinationPath = public_path('/volunt');
        $file->move($destinationPath, $file_name);

        return $file_name;
    }

    /**
     * filtering data throught ajax
     * @param int $id
     */
    public function filterDataVideo() {
        $data = sharing::where('edu_share', request()->id)->where('sharing_type',6)->get();
//        $edu_share= request()->id
;        $html_data = '';
        foreach ( $data as $item ) {
            $html_data .= '<div class="col-lg-4 col-md-6 col-sm-12">';
            $html_data .= '<div class="card" style="width: 18rem;">';
            $html_data .= '<div class="overlaycon">';
            $html_data .='<a href="'.url('/show-video/'.$item->id.'').'"><img style="width="320 height="320" class="img-fluid" src= "'.asset('img/video.jpg').'"></a> ';
            $html_data .= '</div>';
            $html_data .= '<div class="card-body">';
            $html_data .= '<h5 class="card-title">' . $item->name . '</h5>';
            $html_data .= '<a href="' . url('view-vote/ '.$item->id.'') . '" class="btn btn-primary"> التصويت</a>';
            $html_data .= '</div>';
            $html_data .= '</div>';
            $html_data .= '</div>';
        }
        return $html_data;
    }
    public function filterDataPhoto() {
        $data = sharing::where('edu_share', request()->id)->where('sharing_type',2)->get();
//        dd($data);
        $html_data = '';
        foreach ( $data as $item ) {
            $html_data .= '<div class="col-lg-4 col-md-6 col-sm-12">';
            $html_data .= '<div class="card" style="width: 18rem;">';
            $html_data .= '<div class="overlaycon">';
            $html_data .='<a href="'.url('/show-photo/'.$item->id.'').'"><img style="width="320 height="320" class="img-fluid" src= "'.asset('photo/'.$item->photo.'').'"></a> ';
            $html_data .= '</div>';
            $html_data .= '<div class="card-body">';
            $html_data .= '<h5 class="card-title">' . $item->name . '</h5>';
            $html_data .= '<a href="' . url('view-vote/ '.$item->id.'') . '" class="btn btn-primary"> التصويت</a>';
            $html_data .= '</div>';
            $html_data .= '</div>';
            $html_data .= '</div>';

        }
        return $html_data;
    }
    public function filterDataMotion() {
        $data = sharing::where('edu_share', request()->id)->where('sharing_type',8)->get();
        $html_data = '';
        foreach ( $data as $item ) {
            $html_data .= '<div class="col-lg-4 col-md-6 col-sm-12">';
            $html_data .= '<div class="card" style="width: 18rem;">';
            $html_data .= '<div class="overlaycon">';
            $html_data .='<a href="'.url('/show-motion/'.$item->id.'').'"><img style="width="320 height="320" class="img-fluid" src= "'.asset('img/motion.jpg').'"></a> ';
            $html_data .= '</div>';
            $html_data .= '<div class="card-body">';
            $html_data .= '<h5 class="card-title">' . $item->name . '</h5>';
            $html_data .= '<a href="' . url('view-vote/ '.$item->id.'') . '" class="btn btn-primary"> التصويت</a>';
            $html_data .= '</div>';
            $html_data .= '</div>';
            $html_data .= '</div>';



        }

        return $html_data;
    }
    public function filterDataLine() {
        $data = sharing::where('edu_share', request()->id)->where('sharing_type',10)->get();
//        dd($data);
        $html_data = '';
        foreach ( $data as $item ) {
            $html_data .= '<div class="col-lg-4 col-md-6 col-sm-12">';
            $html_data .= '<div class="card" style="width: 18rem;">';
            $html_data .= '<div class="overlaycon">';
            $html_data .='<a href="'.url('/show-line/'.$item->id.'').'"><img style="width="320 height="320" class="img-fluid" src= "'.asset('line/'.$item->line.'').'"></a> ';
            $html_data .= '</div>';
            $html_data .= '<div class="card-body">';
            $html_data .= '<h5 class="card-title">' . $item->name . '</h5>';
            $html_data .= '<a href="' . url('view-vote/ '.$item->id.'') . '" class="btn btn-primary"> التصويت</a>';
            $html_data .= '</div>';
            $html_data .= '</div>';
            $html_data .= '</div>';



        }
        return $html_data;
    }
    public function filterDataDesign() {
        $data = sharing::where('edu_share', request()->id)->where('sharing_type',5)->get();
//        dd($data);
        $html_data = '';
        foreach ( $data as $item ) {
            $html_data .= '<div class="col-lg-4 col-md-6 col-sm-12">';
            $html_data .= '<div class="card" style="width: 18rem;">';
            $html_data .= '<div class="overlaycon">';
            $html_data .='<a href="'.url('/show-design/'.$item->id.'').'"><img style="width="320 height=" 320 class=img-fluid" src= "'.asset('design/'.$item->design.'').'"></a> ';
            $html_data .= '</div>';
            $html_data .= '<div class="card-body">';
            $html_data .= '<h5 class="card-title">' . $item->name . '</h5>';
            $html_data .= '<a href="' . url('view-vote/ '.$item->id.'') . '" class="btn btn-primary"> التصويت</a>';
            $html_data .= '</div>';
            $html_data .= '</div>';
            $html_data .= '</div>';



        }
        return $html_data;
    }
    public function filterdataelqa() {
        $data = sharing::where('edu_share', request()->id)->where('sharing_type',9)->get();
//        dd($data);
        $html_data = '';
        foreach ( $data as $item ) {
            $html_data .= '<div class="col-lg-4 col-md-6 col-sm-12">';
            $html_data .= '<div class="card" style="width: 18rem;">';
            $html_data .= '<div class="overlaycon">';
            $html_data .='<a href="'.url('/show-elqa/'.$item->id.'').'"><img style="width="320" height="320" "class="img-fluid" src= "'.asset('img/elqa.jpg').'"></a> ';
            $html_data .= '</div>';
            $html_data .= '<div class="card-body">';
            $html_data .= '<h5 class="card-title">' . $item->name . '</h5>';
            $html_data .= '<a href="' . url('view-vote/ '.$item->id.'') . '" class="btn btn-primary"> التصويت</a>';
            $html_data .= '</div>';
            $html_data .= '</div>';
            $html_data .= '</div>';
            $html_data .= '<source src="' .asset('elqa/'.$item->elqa.'') . '" type="audio/mpeg">';



        }
        return $html_data;
    }
    public function filterDataEnfo() {
        $data = sharing::where('edu_share', request()->id)->where('sharing_type',7)->get();
//        dd($data);
        $html_data = '';
        foreach ( $data as $item ) {
            $html_data .= '<div class="col-lg-4 col-md-6 col-sm-12">';
            $html_data .= '<div class="card" style="width: 18rem;">';
            $html_data .= '<div class="overlaycon">';
            $html_data .='<a href="'.url('/show-enfo/'.$item->id.'').'"><img style="width="320 height="320" class="img-fluid" src= "'.asset('enfo/'.$item->enfo.'').'"></a> ';
            $html_data .= '</div>';
            $html_data .= '<div class="card-body">';
            $html_data .= '<h5 class="card-title">' . $item->name . '</h5>';
            $html_data .= '<a href="' . url('view-vote/ '.$item->id.'') . '" class="btn btn-primary"> التصويت</a>';
            $html_data .= '</div>';
            $html_data .= '</div>';
            $html_data .= '</div>';



        }
        return $html_data;
    }
    public function filterDataStory() {
        $data = sharing::where('edu_share', request()->id)->where('sharing_type',4)->get();
//        dd($data);
        $html_data = '';
        foreach ( $data as $item ) {
            $html_data .= '<div class="col-lg-4 col-md-6 col-sm-12">';
            $html_data .= '<div class="card" style="width: 18rem;">';
            $html_data .= '<div class="overlaycon">';
            $html_data .='<a href="'.url('/show-story/'.$item->id.'').'"><img style="width="320 height="320 "class="img-fluid" src= "'.asset('img/story.jpg').'"></a> ';
            $html_data .= '</div>';
            $html_data .= '<div class="card-body">';
            $html_data .= '<h5 class="card-title">' . $item->name . '</h5>';
            $html_data .= '<a href="' . url('view-vote/ '.$item->id.'') . '" class="btn btn-primary"> التصويت</a>';
            $html_data .= '</div>';
            $html_data .= '</div>';
            $html_data .= '</div>';


        }
        return $html_data;
    }
    public function filterDataAbyat() {
        $data = sharing::where('edu_share', request()->id)->where('sharing_type',11)->get();
//        dd($data);
        $html_data = '';
        foreach ( $data as $item ) {
            $html_data .= '<div class="col-lg-4 col-md-6 col-sm-12">';
            $html_data .= '<div class="card" style="width: 18rem;">';
            $html_data .= '<div class="overlaycon">';
            $html_data .='<a href="'.url('/show-abyat/'.$item->id.'').'"><img style="width="320" height="320" "class="img-fluid" src= "'.asset('img/abyat.jpg').'"></a> ';
            $html_data .= '</div>';
            $html_data .= '<div class="card-body">';
            $html_data .= '<h5 class="card-title">' . $item->name . '</h5>';
            $html_data .= '<a href="' . url('view-vote/ '.$item->id.'') . '" class="btn btn-primary"> التصويت</a>';
            $html_data .= '</div>';
            $html_data .= '</div>';
            $html_data .= '</div>';



        }
        return $html_data;
    }
    public function filterDatablog() {
        $data = sharing::where('edu_share', request()->id)->where('sharing_type',3)->get();
//        dd($data);
        $html_data = '';
        foreach ( $data as $item ) {
            $html_data .= '<div class="col-lg-4 col-md-6 col-sm-12">';
            $html_data .= '<div class="card" style="width: 18rem;">';
            $html_data .= '<div class="overlaycon">';
            $html_data .='<a href="'.url('/show-blog/'.$item->id.'').'"><img style="width="320" height="320" "class="img-fluid" src= "'.asset('img/blog.jpg').'"></a> ';
            $html_data .= '</div>';
            $html_data .= '<div class="card-body">';
            $html_data .= '<h5 class="card-title">' . $item->name . '</h5>';
            $html_data .= '<a href="' . url('view-vote/ '.$item->id.'') . '" class="btn btn-primary"> التصويت</a>';
            $html_data .= '</div>';
            $html_data .= '</div>';
            $html_data .= '</div>';



        }
        return $html_data;
    }
    public function filterDatavolunt() {
        $data = sharing::where('edu_share', request()->id)->where('sharing_type',12)->get();
//        dd($data);
        $html_data = '';
        foreach ( $data as $item ) {
            $html_data .= '<div class="col-lg-4 col-md-6 col-sm-12">';
            $html_data .= '<div class="card" style="width: 18rem;">';
            $html_data .= '<div class="overlaycon">';
            $html_data .='<a href="'.url('/show-volunt/'.$item->id.'').'"><img style="width="320 height="320 "class="img-fluid" src= "'.asset('img/volun.jpg').'"></a> ';
            $html_data .= '</div>';
            $html_data .= '<div class="card-body">';
            $html_data .= '<h5 class="card-title">' . $item->name . '</h5>';
            $html_data .= '<a href="' . url('view-vote/ '.$item->id.'') . '" class="btn btn-primary"> التصويت</a>';
            $html_data .= '</div>';
            $html_data .= '</div>';
            $html_data .= '</div>';



        }
        return $html_data;
    }
    public function filterDataDrawing() {
        $data = sharing::where('edu_share', request()->id)->where('sharing_type',1)->get();
//        dd($data);
        $html_data = '';
        foreach ( $data as $item ) {
            $html_data .= '<div class="col-lg-4 col-md-6 col-sm-12">';
            $html_data .= '<div class="card" style="width: 18rem;">';
            $html_data .= '<div class="overlaycon">';
            $html_data .='<a href="'.url('/show-drawing/'.$item->id.'').'"><img style="width="320 height="320" class="img-fluid" src= "'.asset('drawing/'.$item->drawing.'').'"></a> ';
            $html_data .= '</div>';
            $html_data .= '<div class="card-body">';
            $html_data .= '<h5 class="card-title">' . $item->name . '</h5>';
            $html_data .= '<a href="' . url('view-vote/ '.$item->id.'') . '" class="btn btn-primary"> التصويت</a>';
            $html_data .= '</div>';
            $html_data .= '</div>';
            $html_data .= '</div>';


        }
        return $html_data;
    }

    public function showAbyat($abyatId){


        $data = Sharing::where('sharing_type',11)->where('id',$abyatId)->first();
        return view('sharing.show.show-abyat',compact('data'));
    }
    public function showStory($storyId){


        $data = Sharing::where('sharing_type',4)->where('id',$storyId)->first();
        return view('sharing.show.show-story',compact('data'));
    }
    public function showBlog($blogId){


        $data = Sharing::where('sharing_type',3)->where('id',$blogId)->first();
        return view('sharing.show.show-blog',compact('data'));
    }
    public function showVolunt($voluntId){


        $data = Sharing::where('sharing_type',12)->where('id',$voluntId)->first();
        return view('sharing.show.show-volunt',compact('data'));
    }
    public function showenfo($enfoId){


        $data = Sharing::where('sharing_type',7)->where('id',$enfoId)->first();
        return view('sharing.show.show-enfo',compact('data'));
    }
    public function showvideo($videoId){


        $data = Sharing::where('sharing_type',6)->where('id',$videoId)->first();
        return view('sharing.show.show-video',compact('data'));
    }
    public function showmotion($motionId){


        $data = Sharing::where('sharing_type',8)->where('id',$motionId)->first();
        return view('sharing.show.show-motion',compact('data'));
    }
    public function showphoto($photoId){


        $data = Sharing::where('sharing_type',2)->where('id',$photoId)->first();
        return view('sharing.show.show-photo',compact('data'));
    }
    public function showelqa($elqaId){


        $data = Sharing::where('sharing_type',9)->where('id',$elqaId)->first();
        return view('sharing.show.show-elqa',compact('data'));
    }
    public function showdrawing($drawingId){


        $data = Sharing::where('sharing_type',1)->where('id',$drawingId)->first();
        return view('sharing.show.show-drawing',compact('data'));
    }
    public function showdesign($designtId){


        $data = Sharing::where('sharing_type',5)->where('id',$designtId)->first();
        return view('sharing.show.show-design',compact('data'));
    }
    public function showline($lineId){


        $data = Sharing::where('sharing_type',10)->where('id',$lineId)->first();
        return view('sharing.show.show-line',compact('data'));
    }
    public function downloadPhoto($id ){
         $sharing = Sharing::find($id) ;
        return response()->download(public_path('photo/'.$sharing ->photo.''));

    }
    public function downloadvolunt($id ){
        $sharing = Sharing::find($id) ;
        return response()->download(public_path('volunt/'.$sharing ->volunt.''));

    }
    public function downloadblog($id ){
        $sharing = Sharing::find($id) ;
        return response()->download(public_path('blog/'.$sharing ->blog.''));

    }
    public function downloadDrawing($id ){
        $sharing = Sharing::find($id) ;
        return response()->download(public_path('drawing/'.$sharing ->drawing.''));

    }
    public function downloadElqa($id ){
        $sharing = Sharing::find($id) ;
        return response()->download(public_path('elqa/'.$sharing ->elqa.''));

    }
    public function downloadVideo($id ){
        $sharing = Sharing::find($id) ;
        return response()->download(public_path('video/'.$sharing ->video.''));

    }
    public function downloadmotion($id ){
        $sharing = Sharing::find($id) ;
        return response()->download(public_path('motion/'.$sharing ->motion.''));

    }
    public function downloadDesign($id ){
        $sharing = Sharing::find($id) ;
        return response()->download(public_path('design/'.$sharing ->design.''));

    }
    public function downloadLine($id ){
        $sharing = Sharing::find($id) ;
        return response()->download(public_path('line/'.$sharing ->line.''));

    }
    public function downloadEnfo($id ){
        $sharing = Sharing::find($id) ;
        return response()->download(public_path('enfo/'.$sharing ->enfo.''));

    }
    public function downloadStory($id ){
        $sharing = Sharing::find($id) ;
        return response()->download(public_path('stories/'.$sharing ->stories.''));

    }
    public function downloadAbyat($id ){
        $sharing = Sharing::find($id) ;
        return response()->download(public_path('abyat/'.$sharing ->abyat.''));

    }
    public function downloadpdfHome( ){
        return response()->download(public_path('file/13inone.pdf'));

    }
    public function showdpdfHome(){
        return view('sharing.show_pdf');
    }
}


