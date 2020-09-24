
<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{asset('css/styleshow.css')}}">
    <title>Gallary Particiabtion</title>
    <header class="mainBody">
        <nav>
            <ul>
                <li><a href={{route('sharing.create')}}>مشاركة</a></li>
                <li><a href={{route('sharing.show')}}>معرض المشاركات</a></li>
                <li><a href={{route('sharing.home')}}>الرئيسة</a></li>

            </ul>
        </nav>
    </header>
</head>



<div class="container ">
    <section>
        <h1 id="participate" style="text-align: center" >معرض المشاركات</h1>
    </section>
    <br>
    <br>

    <div class="row">

        <div class="col-sm-3">
                    <a href="{{url('view-photo/2')}}" > <img class="img-thumbnail" src="{{asset('img/pho.jpg')}}"> </a>

        </div>
        <div class="col-sm-3">
                    <a href="{{url('view-video/6')}}" > <img class="img-thumbnail" src="{{asset('img/video.jpg')}}"> </a>

        </div>
        <div class="col-sm-3">
                    <a href="{{url('view-Design/5')}}" > <img  class="img-thumbnail" src="{{asset('img/design.jpg')}}"> </a>
            </div>
        <div class="col-sm-3">
                <a href="{{url('view-motion/8')}}" > <img class="img-thumbnail"  src="{{asset('img/motion.jpg')}}"> </a>
        </div>
    </div>
    <br>
    <div class="row">

    <div class="col-sm-3">
                <a href="{{url('view-blog/3')}}" > <img class="img-thumbnail"  src="{{asset('img/blog.jpg')}}"> </a>
        </div>
        <div class="col-sm-3">
                <a href="{{url('view-elqa/9')}}" > <img class="img-thumbnail"  src="{{asset('img/elqa.jpg')}}"> </a>
        </div>
        <div class="col-sm-3">
                <a href="{{url('view-line/10')}}" > <img class="img-thumbnail"  src="{{asset('img/line.jpg')}}"> </a>
        </div>
        <div class="col-sm-3">
                <a href="{{url('view-abyat/11')}}" > <img class="img-thumbnail"  src="{{asset('img/abyat.jpg')}}"> </a>
        </div>
    </div>
    <br>
    <div class="row">

    <div class="col-sm-3">
                <a href="{{url('view-info/7')}}" > <img class="img-thumbnail"  src="{{asset('img/enfo.jpg')}}"> </a>
        </div>
        <div class="col-sm-3">
                <a href="{{url('view-Volunt/12')}}" > <img class="img-thumbnail"  src="{{asset('img/volun.jpg')}}"> </a>
        </div>
        <div class="col-sm-3">
                <a href="{{url('view-drawing/1')}}" > <img class="img-thumbnail"  src="{{asset('img/draw.jpg')}}"> </a>
        </div>
        <div class="col-sm-3">
                <a href="{{url('view-story/4')}}" > <img class="img-thumbnail"  src="{{asset('img/story.jpg')}}"> </a>
        </div>

        </div>

</div>








</html>


