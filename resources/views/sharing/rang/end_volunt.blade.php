<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/styleHome.css')}}">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <style>
        .checked{
            color: gold ;margin-right: .2em;
        }
        body{
            background-color: #044d45;

        }

    </style>
    <title>Gallary Particiabtion</title>

</head>

<body>

<br>

<br>

<h1 id="participate" style="text-align: center;"> تقييم المشاركات من نوع فرصة تطوعية</h1>


<br><br><br>





<section class="container d-flex align-content-start flex-wrap">

    @foreach($data as $item)
        <div class="col-lg-4  col-md-6 col-sm-12">
            <div class="card" style="width: 18rem;">
                <div class="overlaycon">

                    <a href="{{url('/show-volunt/'.$item->id.'')}}"> <img   class="img-fluid" src="{{asset('img/volun.jpg')}}"></a>

                </div>

                <div class="card-body">
                    <p>{{$item->name}}</p>
                    <p>{{$item->vote_avg}}</p>


                    <span><label class="vote_average" data-avg="{{ $item->vote_avg }}">
                            @for($i=0; $i<5; ++$i)

                                <span class="fa fa-star <?php  if($item->vote_avg >= $i+.56)  echo 'checked';  ?>" ></span>


                    @endfor

                </div>
            </div>
        </div>
    @endforeach
    </section>

        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>



</body>

</html>












