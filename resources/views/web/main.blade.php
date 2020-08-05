<!DOCTYPE html>
<html>
<head>
    <style>
        ::-webkit-scrollbar {
            width: 11px;
        }

        ::-webkit-scrollbar-track {
            background: black;
        }

        ::-webkit-scrollbar-thumb {
            background: lightgrey;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #f2c64d;
            transition: 0.5s;
        }

    </style>
    <title>Foto-Studiyalar.az | Her nov sjdnfajs</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css ">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{asset('web/css/index.css')}}">
</head>
<body>

<div class="container1">
    <div class="header1">
        <input class="logo" type="image" src="{{asset('web/images/Marvel.jpg')}}">
        <ul class="ul1">
            <li><a href=" {{ route('site') }}">Əsas</a></li>
            <li><a href=" {{ route('studios') }}">Studiyalar</a></li>
            <li><a href="{{ route('gallery') }}">Qaleriya</a></li>
        </ul>

        <ul class="ul2">
            <li><a href="https://www.instagram.com/karimli_19/"><i class="fab fa-instagram"></i></a></li>
            <li><a href="https://www.facebook.com/vusal.huseynli.3958"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="https://twitter.com/huseynvsal1"><i class="fab fa-twitter"></i></a></li>
            <li><a href="https://www.youtube.com/channel/UCnEAKOKpDET4VK_acWhsDvw?view_as=subscriber"><i
                        class="fab fa-youtube"></i></a></li>
            <li><a href="{{ route('contact') }}">
                    <button>Əlaqə</button>
                </a></li>
        </ul>
    </div>

    @yield('main')

    <div class="foooter">
        <div class="footer_up">
            <div class="footer_logo"><img src="{{ asset('web/images/logo.png') }}"></div>
            <div class="footer_about">
                <h2>Haqqımızda</h2>
                <p>Vaxtınıza qənaət edərək sizə ən uyğun olan Foto Studiyani tapmağınıza kömək edirik :)</p>
            </div>
            <div class="footer_contact">
                <h2>Əlaqə</h2>
                <div class="contacts">
                    <i class="fa fa-map-marker"></i>
                    <p>Azərbaycan gerisini bos ver</p>
                </div>
                <div class="contacts">
                    <i class="fa fa-phone"></i>
                    <p>+994 50 382 69 22</p>
                </div>
                <div class="contacts">
                    <i class="fa fa-envelope"></i>
                    <p>huseynlivusal25@gmail</p>
                </div>
            </div>
            <div class="footer_feedback">
                <h2>Yardım və geri əlaqə</h2>
                <p>Zəhmət olmasa sual, təklif və iradlarınızı bizə bildirin</p>
                <div class="footer_button">
                    <a class="write_to_us" href="{{route('contact')}}">Bizə yazın</a>
                </div>
            </div>
        </div>
        <p>
            ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━</p>
        <div class="footer_down">
            <div class="footer_links">
                <a href="https://www.instagram.com/karimli_19/"><i class="fab fa-instagram"></i></a>
                <a href="https://www.facebook.com/vusal.huseynli.3958"><i class="fab fa-facebook-f"></i></a>
                <a href="https://twitter.com/huseynvsal1"><i class="fab fa-twitter"></i></a>
                <a href="https://www.youtube.com/channel/UCnEAKOKpDET4VK_acWhsDvw?view_as=subscriber"><i
                        class="fab fa-youtube"></i></a>

            </div>
            <p>Bütün hüquqlar FotoStudio.az tərəfindən qorunur 2020 &copy; | Hazırladı Karimli Ali</p>
        </div>
    </div>

</body>
</html>
