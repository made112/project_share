<!doctype html>
<html  dir="rtl" lang="ar">

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/styleHome.css')}}">
    <title>Gallary Particiabtion</title>
    <style>
        body{
            background-color: #044d45;

        }

    </style>
</head>

<body>
<header class="mainBody">
    <nav>
        <ul>
            <li><a href={{route('sharing.create')}}>مشاركة</a></li>
            <li><a href={{route('sharing.show')}}>معرض المشاركات</a></li>
            <li><a href={{route('sharing.home')}}>الرئيسة</a></li>

        </ul>
    </nav>
</header>
<section class="section-Gallery">
    <div class="container">
        <div class="header-Gallery">
            <div class="row text-center">
                <div class="col-12">
                    <h2>معرض المشاركات </h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center text-center">
            <div class="col-lg-4 col-sm-6">
                <select name="areashare" class="form-control"style="" id="exampleFormControlSelect1" data-route="{{ url('filter-data-enfo') }}" data-csrf="{{ csrf_token() }} ">
                    <option value=""> </option>

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
            <div class="col-lg-3 col-sm-6">

                <a href="{{url('show-rang-enfo/0/7')}}"  id="show-range" ><button type="submit" class="btn btn-primary">ترتيب حسب الاعلي تصويت</button></a>

            </div>
        </div>

        <br>
        <br>




        <div id="results" class="row">


            @foreach($data as $item )
                <div class="col-lg-4  col-md-6 col-sm-12">
                    <div class="card" style="width: 18rem;">

                        <div class="overlaycon">
                            <a href="{{url('/show-enfo/'.$item->id.'')}}"> <img   class="img-fluid" src="{{asset('enfo/'.$item->enfo.'')}}">

                            </a>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">{{$item->name}} </h5>
                            <a href="{{url('view-vote/ '.$item->id.'')}}" class="btn btn-primary">تصويت</a>
                        </div>
                    </div>
                </div>

            @endforeach
        </div>
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<script>

    var countrySelectBox    = document.getElementById('exampleFormControlSelect1');
    var dataContainer       = document.getElementById('results');
    countrySelectBox.onchange = function() {
        var eduShare = $(this).val();
        $.ajax({
            url: this.dataset.route,
            data: {
                '_token': this.dataset.csrf,
                'id': this.value
            },
            type: 'post',
            success: function(data) {
                var url = "{{url('show-rang-enfo')}}" + "/" + eduShare + "/" + "7";
                // console.log(url)
                $('#show-range').attr('href',url)
                console.log(data);
                dataContainer.innerHTML = data;
            }
        });

    }
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>


</html>
