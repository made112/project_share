
<html dir="rtl" >

<head>
    <title>Gallary Particiabtion</title>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
          content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords"
          content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">

    <link rel="stylesheet" href="{{asset('css/stylecreate.css')}}">



    <style>

        body{
            background-image: url("{{asset('img/share.jpg')}}");
            background-repeat: no-repeat;
            background-position:center ;
            background-size: cover;
            overflow: auto;

        }
    </style>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">


    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
</head>




<header class="mainBody">
    <nav>
        <ul>
            <li><a href={{route('sharing.show')}}>معرض المشاركات</a></li>
            <li><a href={{route('sharing.home')}}>الرئيسة</a></li>

        </ul>
    </nav>
</header>
<section>

    <h1 id="participate" style="text-align: center;">مشاركة</h1>
    <br>




</section>


@if(Session::has('success'))
    <div class="col-12 alert alert-success justify-content-center d-flex">
        <p class="text-center" style="font-size: 20px" > {{Session::get('success')}}</p>
    </div>
@endif


<body>

{{--@foreach($errors->all() as $error )--}}
{{--    {{$error}}<br/>--}}
{{--@endforeach--}}




<section class="container d-flex align-content-center flex-wrap">
    <form method="post" action="{{route('sharing.store')}}" enctype="multipart/form-data">
        @csrf


        <div class="container">

            <div class="form-group col-md-3">

                <label for="occupational_report">الإسم</label>
                <input type="text" class="form-control" id="occupational_report" name="name">
                @error('name')
                <small class="form-text " style="color: #FFC107; font-size: 15px;font-family: 'El Messiri', sans-serif">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group col-md-3">

                <div class="form-group">

                    <label for="nationality">الجنسية</label>
                    <input type="text" class="form-control" id="nationality" name="nationality">
                    @error('nationality')
                    <small class="form-text " style="color: #FFC107; font-size: 15px;font-family: 'El Messiri', sans-serif">{{$message}}</small>
                    @enderror
                </div>
            </div>




            <div class="form-group col-md-3  ">
                <label for="occupational_report" style="font-size: 20px">رقم الهوية </label>
                <input type="text" class="form-control" id="occupational_report" name="Prof_name">
                @error('Prof_name')
                <small class="form-text " style="color: #FFC107; font-size: 15px;font-family: 'El Messiri', sans-serif">{{$message}}</small>
                @enderror
            </div>



            <div class="form-group col-md-3">

                <label for="occupational_report">البريد الإلكترني</label>
                <input type="text" class="form-control" id="occupational_report" name="email">
                @error('email')
                <small class="form-text " style="color: #FFC107; font-size: 15px;font-family: 'El Messiri', sans-serif">{{$message}}</small>
                @enderror
            </div>

        </div>
        <br>







        <div class="container">

            <div class="form-group col-md-4">
                <label for="school">المدرسة</label>
                <input type="text" id="school " class="form-control" name="school">
                @error('school')
                <small class="form-text " style="color: #FFC107; font-size: 15px;font-family: 'El Messiri', sans-serif">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group col-md-4">


                <label for="class">الصف</label>
                <input type="text" id="class"  class="form-control" name="class">
                @error('class')
                <small class="form-text " style="color: #FFC107; font-size: 15px;font-family: 'El Messiri', sans-serif">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group col-md-4">


                <label for="phone">رقم الجوال</label>
                <input type="text" id="phone" class="form-control" name="mobile">
                @error('mobile')
                <small class="form-text " style="color: #FFC107; font-size: 15px;font-family: 'El Messiri', sans-serif">{{$message}}</small>
                @enderror
            </div>


        </div>
        <br>



        <div class="container">

            <div class="form-group col-md-6">


                <label  for="exampleFormControlSelect1"> المنطقة التعليمية </label>
                <select name = "management" class="form-control" id="exampleFormControlSelect1 ">

                    <option value="">  </option>


                    <option  value="الإدارة العامة للتعليم بمنطقة"> الإدارة العامة للتعليم بمنطقة الرياض </option>
                    <option value="إدارة التعليم بمحافظة القويعية"> إدارة التعليم بمحافظة القويعية</option>
                    <option value="لتعليم بمحافظة حوطة بني تميم والحريق">  التعليم بمحافظة حوطة بني تميم والحريق</option>
                    <option value="إدارة التعليم بمحافظة الأفلاج " > إدارة التعليم بمحافظة الأفلاج</option>
                    <option value="إدارة التعليم بمحافظة وادي الدواسر">إدارة التعليم بمحافظة وادي الدواسر</option>
                    <option value ="إدارة التعليم بمحافظة المجمعة">إدارة التعليم بمحافظة المجمعة</option>
                    <option value = "إدارة التعليم بمحافظة الغاط">إدارة التعليم بمحافظة الغاط</option>
                    <option value="إدارة التعليم بمحافظة الزلفي" >إدارة التعليم بمحافظة الزلفي</option>
                    <option value="إدارة التعليم بمحافظة عفيف">إدارة التعليم بمحافظة عفيف</option>
                    <option value="إدارة التعليم بمحافظة الدوادمي">إدارة التعليم بمحافظة الدوادمي</option>
                    <option value="الإدارة العامة للتعليم بمنطقة القصيم">الإدارة العامة للتعليم بمنطقة القصيم</option>
                    <option value="12">إدارة التعليم بمحافظة عنيزة</option>
                    <option value="13">إدارة التعليم بمحافظة الرس</option>
                    <option value="14">إدارة التعليم بمحافظة البكيرية</option>
                    <option value="15">إدارة التعليم بمحافظة المذنب</option>
                    <option value="16">الإدارة العامة للتعليم بالمنطقة الشرقية</option>
                    <option value="17">الإدارة العامة للتعليم بمحافظة الأحساء</option>
                    <option value="18">إدارة التعليم بمحافظة حفر الباطن</option>
                    <option value="19">الإدارة العامة للتعليم بمنطقة الجوف</option>
                    <option value="20">الإدارة العامة للتعليم بمنطقة تبوك</option>
                    <option value="21">الإدارة العامة للتعليم بمنطقة الحدود الشمالية</option>
                    <option value="32">إدارة التعليم بمحافظة القريات</option>
                    <option value="33">الإدارة العامة للتعليم بمنطقة حائل</option>
                    <option value="34">الإدارة العامة للتعليم بمنطقة مكة المكرمة</option>
                    <option value="78978">الإدارة العامة للتعليم بمحافظة جدة</option>
                    <option value="789">الإدارة العامة للتعليم بمحافظة الطائف</option>
                    <option value="78978">إدارة التعليم بمحافظة القنفذة</option>
                    <option value="22121">إدارة التعليم بمحافظة الليث</option>
                    <option value="565">الإدارة العامة للتعليم بمنطقة المدينة المنورة</option>
                    <option value="4545">إدارة التعليم بمحافظة ينبع</option>
                    <option value="88">إدارة التعليم بمحافظة مهد الذهب</option>
                    <option value="868">إدارة التعليم بمحافظة العلا</option>
                    <option value="66">الإدارة العامة للتعليم بمنطقة عسير</option>
                    <option  value="5654">إدارة التعليم بمحافظة محايل عسير</option>
                    <option value="4565" >إدارة التعليم بمحافظة سراة عبيدة</option>
                    <option value="إدارة التعليم بمحافظة رجال ألمع">إدارة التعليم بمحافظة رجال ألمع</option>
                    <option value="إدارة التعليم بمحافظة بيشة">إدارة التعليم بمحافظة بيشة</option>
                    <option value="إدارة التعليم بمحافظة النماص" >إدارة التعليم بمحافظة النماص</option>
                    <option value="إدارة التعليم بمحافظة المخواة">إدارة التعليم بمحافظة المخواة</option>
                    <option value="إدارة التعليم بمحافظة المخواة">إدارة التعليم بمحافظة المخواة</option>
                    <option value="الإدارة العامة للتعليم بمنطقة جازان">الإدارة العامة للتعليم بمنطقة جازان</option>
                    <option value="إدارة التعليم بمحافظة صبيا">إدارة التعليم بمحافظة صبيا</option>
                    <option value="الإدارة العامة للتعليم بمنطقة نجران">الإدارة العامة للتعليم بمنطقة نجران</option>
                    <option value="إدارة التعليم بمحافظة ظهران الجنوب">إدارة التعليم بمحافظة ظهران الجنوب</option>












                </select>
                @if($errors->has('management'))
                    <span style="color:#FFC107; font-size: 15px; font-family: 'El Messiri', sans-serif" class="help-block">
              {{ $errors->first('management') }}
         </span>
                @endif

            </div>
            <div class="form-group col-md-6">

            <label for="exampleFormControlSelect1">المنطقة التي سيتم المشاركة في نشاطها</label>
                <div class="w3-dropdown-hover">
                <select name= "areashare" class="form-control" id="exampleFormControlSelect1" >
                    <option value="">  </option>

                    <option value="1">المدينة المنورة</option>
                    <option value="2">الحدود الشمالية</option>
                    <option value="3">نجران</option>
                    <option value="4">تبوك</option>
                    <option value="5">جازان</option>
                    <option value="6">حائل</option>
                    <option value="7">مكة</option>
                    <option value="8">عسير</option>
                    <option value="9">الرياض</option>
                    <option value="10">الجوف</option>
                    <option value="11">الشرقية</option>
                    <option value="12">القصيم</option>
                    <option value="13">الباحة</option>>
                </select>
                </div>
                @if($errors->has('areashare'))
                    <span style="color:#FFC107; font-size: 15px; font-family: 'El Messiri', sans-serif" class="help-block">
{{ $errors->first('areashare') }}
         </span>
                @endif

            </div>
        </div>
        <br>
        <div class="container">
            <div class="form-group col-md-6">
                <label  for="exampleFormControlSelect1"> المرحلة الدراسية </label>
                <select name = "edulevel" class="form-control" id="exampleFormControlSelect1 ">
            <
                    <option value=""></option>

                    <option value="ابتدائي">ابتدائي</option>
                    <option value="متوسط">متوسط</option>
                    <option value="ثانوي">ثانوي</option>
                </select>
{{--                @if($errors->has('edulevel'))--}}
{{--                    <span style="color:#FFC107;" class="help-block">--}}
{{--              {{ $errors->first('edulevel') }}--}}
{{--         </span>--}}
{{--                @endif--}}
            </div>

            <div class="form-group col-md-6">

            <label for="sharesort">نوع المشاركة</label>
                <select  name="sharesort" class="form-control" id="sharesort">
                    <option value="">  </option>

                    <option  value="1">رسومات</option>
                    <option value="2">صور</option>
                    <option value="3">مقالات</option>
                    <option value="4">قصص</option>
                    <option value="5">تصاميم</option>
                    <option value="6">فيديو</option>
                    <option value="7">انفوجرافيك</option>
                    <option value="8">موشن جرافيك</option>
                    <option value="9">الإلقاء</option>
                    <option value="10">خط</option>
                    <option value="11"> أبيات شعرية</option>
                    <option value="12"> فرصة تطوعية</option>





                </select>
{{--                @if($errors->has('sharesort'))--}}
{{--                    <span style="color:#FFC107;" class="help-block">--}}
{{--              {{ $errors->first('sharesort') }}--}}
{{--         </span>--}}
{{--                @endif--}}

            </div>

            <div class="row ">
                <div class="col-md-8">
                    <button type="submit"  class="btn  ">شارك الاّن</button>

                </div>


            </div>


        </div>



        <div class="post_type" id="posts_draw">
            <input style=" display:flex;

    background-color: transparent;
    position: relative;
    bottom: 93px;
     color:  #FFC107;
    right: 95px;"  name="drawing" type="file">

        </div>

        <div class="post_type" id="posts_img" >
            <input   style=" display:flex;

    background-color: transparent;
    position: relative;
    bottom: 93px;
     color:  #FFC107;
    right: 95px;   "name="photo" type="file">
        </div>

        <div class="post_type" id="posts_line">
            <input style=" display:flex;

    background-color: transparent;
    position: relative;
    bottom: 93px;
     color:  #FFC107;
    right: 95px;"  name="line" type="file">
        </div>

        <div class="post_type" id="posts_video">
            <input style=" display:flex;

    background-color: transparent;
    position: relative;
     color:  #FFC107;
    bottom: 93px;
    right: 95px;" name="video" type="file">


        </div>

        <div class="post_type" id="posts_speak">
            <input style=" display:flex;
             color:  #FFC107;

    background-color: transparent;
    position: relative;
    bottom: 93px;
       right: 119px;
" name="abyat" type="file">
        <span style=" color: #FFC107;
    font-size: 20px;
    position: relative;
    bottom: 90px;
    right: 32px;"> pdf.</span></div>
        <div class="post_type" id="posts_motion" >
            <input style=" display:flex;
             color:  #FFC107;

    background-color: transparent;
    position: relative;
    bottom: 93px;
    right: 95px;" name="motion" type="file">



        </div>
        <div class="post_type" id="posts_design" >
            <input style=" display:flex;
            color:  #FFC107;

    background-color: transparent;
    position: relative;
    bottom: 93px;

    right: 95px;" name="design" type="file">



        </div>
        <div class="post_type" id="posts_enfo" >
            <input style=" display:flex;
             color:  #FFC107;

    background-color: transparent;
    position: relative;
    bottom: 93px;
    right: 100px;" name="enfo" type="file">



        </div>
        <div class="post_type" id="posts_volunt" >
            <input style=" display:flex;
             color:  #FFC107;

    background-color: transparent;
    position: relative;
    bottom: 93px;
        right: 119px;
" name="volunt" type="file">
        <span style=" color: #FFC107;
    font-size: 20px;
    position: relative;
    bottom: 93px;
    right: 32px;"> pdf.</span></div>

        <div class="post_type" id="posts_blog" >
            <input style=" display:flex;
             color:  #FFC107;

    background-color: transparent;
    position: relative;
    bottom: 93px;
    right: 95px;" name="blog" type="file">
        <span style=" color: #FFC107;
    font-size: 20px;
    position: relative;
    bottom: 93px;
    right: 32px;"> pdf.</span></div>
        <div class="post_type" id="posts_elaqa" >
            <input style=" display:flex;
             color:  #FFC107;

    background-color: transparent;
    position: relative;
    bottom: 93px;
    right: 95px;" name="elqa" type="file">



        </div>
        <div class="post_type" id="posts_story" >
            <input style=" display:flex;
             color:  #FFC107;

    background-color: transparent;
    position: relative;
    bottom: 93px;
    right: 95px;" name="stories" type="file">
            <span style=" color: #FFC107;
    font-size: 20px;
    position: relative;
    bottom: 84px;
    right: 32px;"> pdf.</span>




        </div>





    </form>

</section>


</body>











<script

    src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
    crossorigin="anonymous"></script>
<script>
    $( document ).ready(function() {
        $('#sharesort').on('change', function() {
            $('.post_type').css('display','none');
            if(this.value == 2){
                $('#posts_img').css('display','block');
            }
            if(this.value == 6){
                $('#posts_video').css('display','block');
            }
            if(this.value == 10){
                $('#posts_line').css('display','block');
            }
            if(this.value == 8){
                $('#posts_motion').css('display','block');
            }
            if(this.value == 11){
                $('#posts_speak').css('display','block');
            }

            if(this.value == 1){
                $('#posts_draw').css('display','block');
            }

            if(this.value == 5){
                $('#posts_design').css('display','block');
            }

            if(this.value == 7){
                $('#posts_enfo').css('display','block');
            }

            if(this.value == 12){
                $('#posts_volunt').css('display','block');
            }

            if(this.value == 3){
                $('#posts_blog').css('display','block');
            }

            if(this.value == 9){
                $('#posts_elaqa').css('display','block');
            }

            if(this.value == 4){
                $('#posts_story').css('display','block');
            }
        });
    });
</script>




</html>

