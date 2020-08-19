@extends('web.main')
@section('main')
    <div class="studio_main">

            <div class="studio_inner">
                @foreach($studios as $studio)
                <div class="studio_header">
                    <div class="studio_contacts">

                        <img src="{{ asset('web/images/logo'.'/'.$studio->logo) }}" alt="">
                        <h1 class="name">{{ $studio->name }}</h1>
                        <p><i class="fa fa-phone"></i>+994{{ $studio->number }}</p>
                        <p><i class="fa fa-envelope"></i>{{ $studio->email }}</p>
                        <p><i class="fa fa-map"></i>{{ $studio->address }}</p>
                    </div>
                    <div class="studio_info">
                        <h1 class="about">Haqqında</h1>
                        <p class="info">{{ $studio->about }}</p>
                    </div>
                </div>
                @endforeach
                <div class="studio_footer">
                    <h1 class="works">Gördüyü işlər</h1>

                    <div class="images">
                        @foreach($images as $image)
                            <img src="{{ asset('web/images/works'.'/'.$image->image) }}" alt="">
                        @endforeach
                    </div>

                </div>
            </div>
    </div>
@endsection
