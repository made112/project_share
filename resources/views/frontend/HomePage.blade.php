
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
{{--    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>--}}
    <link rel="stylesheet" href="{{asset('css/stylemain.css')}}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallary partisibation</title>
</head>

<ul>
    <li><a href={{route('sharing.create')}}>مشاركة</a></li>
            <li><a href={{route('sharing.show')}}>معرض المشاركات</a></li>
            <li style="direction: rtl"> <a href={{route('download.home')}}>13 في قلب واحد</a></li>
            <li style="direction: rtl"> <a href="https://www.youtube.com/watch?v=AQk3nfw6jNY&feature=youtu.be&fbclid=IwAR3Zmcsu7Rs39Q3KeiFMCZ4BUFViV5Of0-4oW4XLcu_hdF9IVRXgL_M7uNA">رحلة ولاء تجوب الأرجاء</a></li>
        </ul>


<body>
<footer>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-9277BN1QCJ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-9277BN1QCJ');
    </script>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>




<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">

    <div class="carousel-inner">
        <div class="carousel-item active">
            <img style="width: 100%;height:100%"  src="{{asset('img/homepage.jpg')}}" class="d-block w-100" alt="there is no image!!">
            <div class="carousel-caption d-none d-md-block">

            </div>
        </div>

    </div>
</div>




</html>
