    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        {{--  title  --}}
        <title>@yield('title')</title>

        {{--  css  --}}
        <link rel="stylesheet" href=" {{ asset('resources/css/bootstrap.min.css') }}">
        @yield('css')

        {{--  font  --}}
        @yield('font')

    </head>
    <body>
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="{!! route('home_home') !!}" >tien.monker</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                        @yield('navbar_content_top')
                        <li class="nav-item active">
                            <a id="nav_a" class="nav-link" href="">Kiểm duyệt<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a id="nav_a" class="nav-link" href="">Đăng bài</a>
                        </li>
                        <li class="nav-item active">
                            <a id="nav_a" class="nav-link" href="{!! route('home_news') !!}">Thời sự<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a id="nav_a" class="nav-link" href="{!!route('home_sport')!!}">Thể thao</a>
                        </li>
                        <li class="nav-item active">
                            <a id="nav_a" class="nav-link" href="{!!route('home_music')!!}">Âm nhạc</a>
                        </li>
                        <li class="nav-item active">
                            <a id="nav_a" class="nav-link" href="{!!route('home_heathy')!!}">Sức khỏe</a>
                        </li>
                        @yield('navbar_content_botton')
                        </ul>
                        <form class="form-inline my-2 my-lg-0">
                            @yield('navbar_button')
                            <a href="{!! route('getdangxuat')!!}"><button class="btn btn-outline-info my-2 my-sm-0" type="button">Đăng xuất</button></a>
                        </form>
                    </div>
                </nav>
                @yield('content')


        {{--  script  --}}
        <script src="{{ asset('resources/js/app.js') }}"></script>
        <script src="{{ asset('resources/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('resources/js/jquert.min.js') }}"></script>
        @yield('js')
    </body>
    </html>
