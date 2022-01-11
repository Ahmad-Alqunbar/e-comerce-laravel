<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-commerce Project</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.rawgit.com/igorlino/elevatezoom-plus/1.1.6/src/jquery.ez-plus.js"></script>




</head>
<body>
{{View::make('header')}}
@yield('contant')
{{View::make('footer')}}
</body>
<style>
.custom-login{
    height: 500px;
    padding-top: 100px;
}
img.slider-img{
    height: 400px !important;
}
.custom-product{
    height: 600px !important;

}
.slider-text{
    opacity:0.7 !important;
}
.slider-next{
    border: none;
    background-color: #ffffff00;
}
.trending-image{
    height: 100px;

}
.trending-item{
    float: left;
    width:20%;
}
.trending-wrapper{
    margin:40px;
}
.detail-img{
    height: 200px;
}
.search-box{
    width:500px !important;
}
.searched-item{
    margin:30px;
}
.cart-list-devider{
    border-bottom:1px solid #ccc;
    margin-bottom:20px;
    padding-bottom:20px;
}

</style>
<script>
    $(document).ready(function(){
        $('#zoom_01').ezPlus();
    })

</script>
</html>
