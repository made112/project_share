<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
    <title>Gallary Particiabtion</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('asset/css/vvv2.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/stylemain.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
</head>

<body>


<h1 id="participate" style="text-align: center;">الفيديوهات الحاصلة على أعلى نسبة تصويت</h1>


<br><br><br>







<div id="results">
    @foreach($data as $item)
        <div class="col-md-4">

            <section class="container d-flex align-content-start flex-wrap">

                <a href="{{url('/show-video/'.$item->id.'')}}"> <div class="gallery_option">
                        <video width="320" height="320" controls>
                            <source src="{{asset('video/'.$item->video.'')}}" type="video/mp4">
                        </video>

                        <div class="student_info">

                            <span class="student_name">{{$item->name}} </span>
                            <span><label class="vote_average">{{$item->avg_percent}}</label></span>

                        </div>
                    </div>
                </a>
            </section>
        </div>


    @endforeach
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>



</body>

</html>

{{--<!DOCTYPE html>--}}
{{--<html dir="rtl" lang="ar">--}}

{{--<head>--}}
{{--    <style>--}}


{{--    </style>--}}
{{--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">--}}
{{--    <link rel="stylesheet" href="{{asset('css/stylemain.css')}}">--}}






{{--    <title>vote</title>--}}



{{--</head>--}}

{{--<body>--}}

{{--<h1 style="color: #6f42c1 ; text-align: center" >الفيديوهات الحاصلة على أعلى تقييم  </h1>--}}
{{--@foreach($data as $item)--}}
{{--    <div class="card-deck mb-3 text-center">--}}
{{--        <div class="card mb-6 box-shadow">--}}
{{--            <div class="card-header">--}}
{{--                <h4 class="my-0 font-weight-normal">الفيديوهات الحاصلة على أعلى نسبة تصويت </h4>--}}
{{--            </div>--}}
{{--            <div class="col-md-4">--}}
{{--            <video width="320" height="320" controls>--}}
{{--                <source src="{{asset('video/'.$item->video.'')}}" type="video/mp4">--}}
{{--            </video>--}}
{{--            </div>--}}


{{--        </div>--}}
{{--            </div>--}}


{{--            --}}{{--    <div class="col-md-4">--}}

{{--        <section class="container d-flex align-content-start flex-wrap">--}}
{{--  <div class="container">--}}

{{--              <div class="1">--}}

{{--                    <video width="320" height="320" controls>--}}
{{--                        <source src="{{asset('video/'.$item->video.'')}}" type="video/mp4">--}}
{{--                    </video>--}}
{{--            <p>{{$item->avg_percent}}</p>--}}
{{--            </div>--}}










{{--        </section>--}}
{{--    </div>--}}
{{--    </div>--}}


{{--@endforeach--}}


{{--@foreach($data as $item)--}}
{{--\--}}
{{--    <div class="bn_a">--}}
{{--        <div class="col-md-4">--}}

{{--        <video width="320" height="320" controls>--}}
{{--            <source src="{{asset('video/'.$item->video.'')}}" type="video/mp4">--}}
{{--        </video>--}}
{{--        </div>--}}
{{--        </div>--}}





{{--        <table class="table table-dark">--}}
{{--    <thead>--}}
{{--    <tr>--}}
{{--        <th scope="col">الإسم</th>--}}
{{--        <th scope="col">درجة التصويت</th>--}}


{{--    </tr>--}}
{{--    </thead>--}}
{{--    <tbody>--}}
{{--    <tr>--}}
{{--        --}}
{{--        --}}



{{--        <pre><td>{{$item->name}}</td></pre>--}}



{{--    </tr>--}}

{{--    </tbody>--}}
{{--</table>--}}

{{--@endforeach--}}















{{--<script src="{{asset('js/script.js')}}"></script>--}}

{{--</body>--}}



{{--</html>--}}










