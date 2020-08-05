@extends('web.main')
@section('main')
    <div class="studios_main">
        <pre align="center" class="hak"><h1><i>Studiyalar</i></h1></pre>
        <div class="studiyolar">
            <div class="studios_div">
                <a href="/studio/{id}"><img class="studio_img" src="{{asset('web/images/first.jpeg')}}"></a>
                <h5 class="studio_name">Tariel Hacizade</h5>
                <p class="category"><img width="8%" class="cinema" src="{{asset('web/images/cinema.png')}}">   (film,wedding,klip,reklam,...)</p>
                <p><img class="location" src="https://img.icons8.com/pastel-glyph/64/000000/place-marker.png"/>Bakı,Biləcəri</p>
            </div>
            <div class="studios_div">
                <a href="/studio/{id}"><img class="studio_img" src="{{asset('web/images/kengerli.png')}}"></a>
                <h5 class="studio_name">Kengerli</h5>
                <p class="category"><img width="8%" class="cinema" src="{{asset('web/images/cinema.png')}}">   (film,wedding,klip,reklam,...)</p>
                <p><img class="location" src="https://img.icons8.com/pastel-glyph/64/000000/place-marker.png"/>Bakı</p>
            </div>
            <div class="studios_div">
                <a href="/studio/{id}"><img class="studio_img" src="{{asset('web/images/weddring.png')}}"></a>
                <h5 class="studio_name">Tariel Hacizade</h5>
                <p class="category"><img width="8%" class="cinema" src="{{asset('web/images/cinema.png')}}">   (wedding)</p>
                <p><img class="location" src="https://img.icons8.com/pastel-glyph/64/000000/place-marker.png"/>Bakı,Biləcəri</p>
            </div>
            <div class="studios_div">
                <a href="/studio/{id}"><img class="studio_img" src="{{asset('web/images/logo10.jpg')}}"></a>
                <h5 class="studio_name">Tariel Hacizade</h5>
                <p class="category"><img width="8%" class="cinema" src="{{asset('web/images/cinema.png')}}">   (usag,fotosesiyalar)</p>
                <p><img class="location" src="https://img.icons8.com/pastel-glyph/64/000000/place-marker.png"/>Sumqayit</p>
            </div>
            <div class="studios_div">
                <a href="/studio/{id}"><img class="studio_img" src="{{asset('web/images/logo10.jpg')}}"></a>
            </div>
            <div class="studios_div">
                <a href="/studio/{id}"><img class="studio_img" src="{{asset('web/images/logo10.jpg')}}"></a>
            </div>
            <div class="studios_div">
                <a href="/studio/{id}"><img class="studio_img" src="{{asset('web/images/logo10.jpg')}}"></a>
            </div>
            <div class="studios_div">
                <a href="/studio/{id}"><img class="studio_img" src="{{asset('web/images/logo10.jpg')}}"></a>
            </div>
        </div>
    </div>

@endsection
