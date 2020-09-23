
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallary Particiabtion</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('css/styleshow2.css')}}">
    <style>
        .checked {
            color: gold;
        }
    </style>



</head>

<body>
<div class="container-fluid">
    <div class="all">
        <div class="row">
            <div class="col-xl-1 d-xl-block d-none"></div>
            <div class="col-xl-7 col-lg-8 left-part-container">
                <div class="left-part">
                    <div class="row">
                        <div class="col-8 white ara-b">{{$data->name}}</div>
                        <div class="col-4 green-light ara-b">اسم الطالب/ة</div>
                    </div>
                    <div class="row">
                        <div class="col-8 green-light ara-b ratings">
                            @for($i=0; $i<5; ++$i)

                                <span class="fa fa-star <?php  if($data->vote_avg >= $i+.56)  echo 'checked';  ?>" ></span>


                            @endfor
                        </div>
                        <div class="col-4 green-dark ara-b">نسبة التقييم</div>
                    </div>
                    <div class="row mb-0 d-flex">
                        <div style="" class="col-lg-6 col-12 pl-0 order-lg-1  order-2">
                            <video style="display: none" width="100%" height="100%" controls>
                                <source src="" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                        <div class="col-lg-6 col-12 order-lg-2 order-1">
                            <div class="row m">
                                <div class="col-4 white ara-b">فرصة تطوعية</div>
                                <div class="col-8 green-light ara-b">النوع</div>
                            </div>
                            <div class="row mt-5 m mb-0">
                                <div class="col-12 green-light ara-b mb-4">
                                    <a href="{{route('download.volunt',$data->id)}}"> <button >تحميل المشاركة</button>
                                    </a>

                                </div>

                                <div class="col-12 gray ara-b mb-4">
                                    <a href="{{url('view-Volunt/12')}}"><button>العوده الى المعرض</button></a>
                                </div>
                                <div class="col-6 offset-3 green-dark ara-b mb-lg-0 mb-4">
                                    <a href="{{url('view-vote/ '.$data->id.'')}}" ><button>التصويت</button></a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-lg-block d-none img-container">
                <img src="{{asset('img/volun.jpg')}}" alt="pic">
            </div>
        </div>
    </div>
</div>

<!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5f342784b14bfef4"></script>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>
