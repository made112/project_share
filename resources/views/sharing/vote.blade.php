
<!DOCTYPE html>
<html lang="en">
<head>

    <title>Gallary Particiabtion</title>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@700&display=swap" rel="stylesheet">


    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href='{{asset('css/stylevote1.css')}}'>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href='{{asset('css/style.css')}}'>

</head>

<body>



<form class="form-signin" method="POST" action="{{route('vote.store')}}" enctype="multipart/form-data">
 @csrf
    <div class="container">
     @if(Session::has('success'))
        <div class="row mr-2 md-4">
            <button style="text-align: center"  type="text" class="btn btn-lg btn-block btn-outline-success mb-4"
                    id="type-error">{{Session::get('success')}}
            </button>
        </div>
@endif

        <label>الإسم</label>
        <input type="text" name="name">
    @error('name')
        <small class="form-text " style="color: #FFC107; font-size: 10px;font-family: 'El Messiri', sans-serif">{{$message}}</small>

        @enderror
         <br>
        <label>البريد الإلكتروني </label>
        <input type="text" name="email">
    @error('email')
        <small class="form-text " style="color: #FFC107; font-size: 10px;font-family: 'El Messiri', sans-serif">{{$message}}</small>
        @enderror

    </div>
    <br>
    <div class="rating-box">
        <div class="ratings">
            <span class="fa fa-star-o"></span>
            <span class="fa fa-star-o"></span>
            <span class="fa fa-star-o"></span>
            <span class="fa fa-star-o"></span>
            <span class="fa fa-star-o"></span>
            <input type="hidden" name="avg_percent" id="rating-value">

        </div>
    </div>
    <br>
    <br>

    <input type="hidden" value="{{$sharing_id}}" name="sharing_id">
    <input type="submit" value="التصويت الان">
</form>
<script src="{{asset('js/script.js')}}"></script>
</body></html>
