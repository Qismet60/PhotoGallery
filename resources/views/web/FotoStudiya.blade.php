@extends('web.main')
@section('main')
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img style="height: 90.5vh;" class="d-block w-100" src="{{asset('web/images/background3.jpg')}}"
                     alt="First slide">
            </div>
            <div class="carousel-item">
                <img style="height: 90.5vh" class="d-block w-100" src="{{asset('web/images/background3.jpg')}}"
                     alt="Second slide">
            </div>
            <div class="carousel-item">
                <img style="height: 90.5vh" class="d-block w-100" src="{{asset('web/images/background3.jpg')}}"
                     alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<br>
<br>
<div class="container say ">
    <div class="col-5">
        <img width="30%" src="{{asset('web/images/studio.png ')}}" alt="">
    </div>
    <div class="col-5">
        <i class="far fa-images"></i>
    </div>
</div>
<br>
<br>
<pre align="center" class="hak"><h1><i>Studiyalar</i></h1></pre>

<div class="studiyolar">
    <div>
        <input width="260px" height="129.5px" type="image" src="{{asset('web/images/first.jpeg')}}">
    </div>
    <div>
        <input width="260px" height="129.5px" type="image" src="{{asset('web/images/kengerli.png')}}">
    </div>
    <div>
        <input width="260px" height="129.5px" type="image" src="{{asset('web/images/weddring.png')}}">
    </div>
    <div>
        <input width="260px" height="129.5px" type="image" src="{{asset('web/images/logo10.jpg')}}">
    </div>
</div>

@endsection

