<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<style>
    /*====================
Footer
====================== */

    /* Main Footer */
    footer .main-footer{  padding: 20px 0;  background: #252525;}
    footer ul{  padding-left: 0;  list-style: none;}

    /* Copy Right Footer */
    .footer-copyright { background: #222; padding: 5px 0;}
    .footer-copyright .logo {    display: inherit;}
    .footer-copyright nav {    float: right;    margin-top: 5px;}
    .footer-copyright nav ul {  list-style: none; margin: 0;  padding: 0;}
    .footer-copyright nav ul li { border-left: 1px solid #505050; display: inline-block;  line-height: 12px;  margin: 0;  padding: 0 8px;}
    .footer-copyright nav ul li a{  color: #969696;}
    .footer-copyright nav ul li:first-child { border: medium none;  padding-left: 0;}
    .footer-copyright p { color: #969696; margin: 2px 0 0;}

    /* Footer Top */
    .footer-top{  background: #252525;  padding-bottom: 30px; margin-bottom: 30px;  border-bottom: 3px solid #222;}

    /* Footer transparent */
    footer.transparent .footer-top, footer.transparent .main-footer{  background: transparent;}
    footer.transparent .footer-copyright{ background: none repeat scroll 0 0 rgba(0, 0, 0, 0.3) ;}

    /* Footer light */
    footer.light .footer-top{ background: #f9f9f9;}
    footer.light .main-footer{  background: #f9f9f9;}
    footer.light .footer-copyright{ background: none repeat scroll 0 0 rgba(255, 255, 255, 0.3) ;}

    /* Footer 4 */
    .footer- .logo {    display: inline-block;}

    /*====================
      Widgets
    ====================== */
    .widget{  padding: 20px;  margin-bottom: 40px;}
    .widget.widget-last{  margin-bottom: 0px;}
    .widget.no-box{ padding: 0; background-color: transparent;  margin-bottom: 40px;
        box-shadow: none; -webkit-box-shadow: none; -moz-box-shadow: none; -ms-box-shadow: none; -o-box-shadow: none;}
    .widget.subscribe p{  margin-bottom: 18px;}
    .widget li a{ color: #ff8d1e;}
    .widget li a:hover{ color: #4b92dc;}
    .widget-title {margin-bottom: 20px;}
    .widget-title span {background: #839FAD none repeat scroll 0 0;display: block; height: 1px;margin-top: 25px;position: relative;width: 20%;}
    .widget-title span::after {background: inherit;content: "";height: inherit;    position: absolute;top: -4px;width: 50%;}
    .widget-title.text-center span,.widget-title.text-center span::after {margin-left: auto;margin-right:auto;left: 0;right: 0;}
    .widget .badge{ float: right; background: #7f7f7f;}

    .typo-light h1,
    .typo-light h2,
    .typo-light h3,
    .typo-light h4,
    .typo-light h5,
    .typo-light h6,
    .typo-light p,
    .typo-light div,
    .typo-light span,
    .typo-light small{  color: #fff;}

    ul.social-footer2 { margin: 0;padding: 0; width: auto;}
    ul.social-footer2 li {display: inline-block;padding: 0;}
    ul.social-footer2 li a:hover {background-color:#ff8d1e;}
    ul.social-footer2 li a {display: block; height:30px;width: 30px;text-align: center;}
    .btn{background-color: #ff8d1e; color:#fff;}
    .btn:hover, .btn:focus, .btn.active {background: #4b92dc;color: #fff;
        -webkit-box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        -moz-box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        -ms-box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        -o-box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        -webkit-transition: all 250ms ease-in-out 0s;
        -moz-transition: all 250ms ease-in-out 0s;
        -ms-transition: all 250ms ease-in-out 0s;
        -o-transition: all 250ms ease-in-out 0s;
        transition: all 250ms ease-in-out 0s;

    }
</style>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <script src="{{ asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ asset('js/popper.min.js')}}"></script>
    <script src="{{ asset('js/rome.js')}}"></script>

    <script src="{{ asset('js/main.js')}}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/rome.css')}}">
        
    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
</head>
<body>
    <div id="app" >
        <nav class="navbar-expand-lg navbar navbar-dark bg-dark " >
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link"   href="{{ route('menu.index')}}">Меню</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"   href="{{ route('menu.create')}}">Добавить меню</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Справочники</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                    <li><a class="dropdown-item" href="{{ route('menutypes.index') }}">Вид меню</a></li>
                                    <li><a class="dropdown-item"  href="{{ route('producttypes.index')}}">Вид продуктов</a></li>
                                    <li><a class="dropdown-item"  href="{{ route('products.index')}}">Продукты</a></li>
                                    <li><a class="dropdown-item"  href="{{ route('typeofdish.index')}}">Вид блюда</a></li>
                                    <li><a class="dropdown-item"  href="{{ route('months.index')}}">Месяцы</a></li>
                                    {{-- <li><hr class="dropdown-divider"></li> --}}
                                </ul>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Войти') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Регистрация') }}</a>
                                </li>
                            @endif
                        @else
                        
                        
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Выйти') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <footer id="footer" class="footer-1" style="margin-top: 350px">
        <div class="main-footer widgets-dark typo-light fixed-bottom " >
            <div class="container">
                <div class="row">

                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="widget subscribe no-box">
                            <h5 class="widget-title">ГБОУ "Школа-интернат 4"<span></span></h5>
                            <p>Государственное бюджетное общеобразовательное учреждение Самарской области «Школа-интернат № 4 для обучающихся с ограниченными возможностями здоровья городского округа Тольятти»</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="widget no-box">
                            <h5 class="widget-title">Полезные ссылки<span></span></h5>
                            <ul class="thumbnail-widget">
                                <li>
                                    <div class="thumb-content"><a href="https://internat-4.ru/">Сайт школы</a></div>
                                </li>
                                <li>
                                    <div class="thumb-content"><a href="https://vk.com/internat_4_tlt">Группа Вконтакте</a></div>
                                </li>
                                <li>
                                    <div class="thumb-content"><a href="https://asurso.ru/">АСУ-РСО</a></div>
                                </li>
                                <li>
                                    <div class="thumb-content"><a href="https://vk.com/der3ct">Тех-помощь с сайтом</a></div>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="widget no-box">
                            <h5 class="widget-title">Начнем работу<span></span></h5>
                            <p>Войдите в свой акканут для работы с меню школы</p>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <div class="footer-copyright fixed-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p>Copyright ©2024 ГБОУ школа-интернат № 4 г.о. Тольятти.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
