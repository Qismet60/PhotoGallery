@extends('web.main')
@section('main')
    <div class="studios_main">
        <pre align="center" class="hak"><h1><i>Studiyalar</i></h1></pre>
        <div class="studiyolar">



            @foreach($studios as $studio)
            <div class="studios_div">
                <a href="/studio/{{ $studio->id }}"><img class="studio_img" src="{{ asset('web/images/logo'.'/'.$studio->logo) }}"></a>
                <h5 class="studio_name">{{ $studio->name }}</h5>
                <p><img class="location" src="https://img.icons8.com/pastel-glyph/64/000000/place-marker.png"/>{{ $studio->address }}</p>
            </div>
            @endforeach
        </div>
    </div>

@endsection
