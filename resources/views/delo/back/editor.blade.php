@php
    //var_dump($info['npa']);
@endphp

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Делопроизводство</title>
  <meta name="description" content="Morden Bootstrap HTML5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.ico') }}">
    
   <!-- ======= All CSS Plugins here ======== -->
   <link rel="stylesheet" href="{{ asset('assets/css/plugins/swiper-bundle.min.css') }}">
   <link rel="stylesheet" href="{{ asset('assets/css/plugins/glightbox.min.css') }}">
   <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500&display=swap" rel="stylesheet">
 
   <!-- Plugin css -->
   <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">
 
   <!-- Custom Style CSS -->
   <link rel="stylesheet" href="{{ asset('assets/css/style2.css') }}">
</head>

<body>
    
    <!-- Start header area -->
    <header class="header__section">
        <div class="header__topbar border-bottom">
            <div class="container">
                <div class="header__topbar--inner d-flex align-items-center justify-content-between">
                    <ul class="header__topbar--info d-none d-lg-flex">
                        <li class="header__info--list">
                            <a class="header__info--link" href="{{ route('home')}}">ГЛАВНАЯ</a>
                        </li>
                    </ul>
                    <div class="header__top--right d-flex align-items-center">
                        <ul class="header__top--link d-flex align-items-center">
                            <li class="header__link--menu"><a class="header__link--menu__text">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class=" -heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg> Таблица</a>
                            </li>
                       
                        </ul>
          
                    </div>
                </div>
            </div>
        </div>
        <div class="main__header header__sticky">
            <div class="container">
                <div class="main__header--inner position__relative d-flex justify-content-between align-items-center">
                    <div class="offcanvas__header--menu__open ">
                        
                    </div>
                    <div class="main__logo">
                        <h2 class="main__logo--title"><a>Делопроизводство</a></h2>
                    </div>                                                          
                </div>
            </div>
        </div>
        
        <div class="header__bottom bg__primary">
            <div class="container">
                <div class="header__bottom--inner position__relative d-flex align-items-center">
                    <div class="categories__menu ">
                        <div class="categories__menu--header bg__secondary text-white d-flex align-items-center" data-bs-toggle="collapse" data-bs-target="#categoriesAccordion">
                            <svg class="categories__list--icon" width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="13" height="1.5" fill="currentColor"/>
                                <rect y="4.44434" width="18" height="1.5" fill="currentColor"/>
                                <rect y="8.88892" width="15" height="1.5" fill="currentColor"/>
                                <rect y="13.3333" width="17" height="1.5" fill="currentColor"/>
                                </svg>

                            <span class="categories__menu--title">Меню</span>
                            <svg class="categories__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12.355" height="8.394" viewBox="0 0 10.355 6.394">
                                <path  d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z" transform="translate(-6 -8.59)" fill="currentColor"/>
                            </svg>
                        </div>
                        <div class="dropdown__categories--menu border-radius-5 active collapse" id="categoriesAccordion">
                            <ul class="d-none d-lg-block">
                                <li class="categories__menu--items">
                                    <a class="categories__menu--link" href="{{ route('delo', 'out')}}">
                                        Исходящая почта
                                    </a>
                                </li>
                                <li class="categories__menu--items">
                                    <a class="categories__menu--link" href="{{ route('delo', 'in')}}">
                                        Входящая почта
                                    </a>
                                </li>
                                <li class="categories__menu--items">
                                    <a class="categories__menu--link" href="{{ route('filters')}}">
                                        Фильтры
                                    </a>
                                </li>
                                @if ($info['role'] == "deloadm")
                                    <li class="categories__menu--items">
                                        <a class="categories__menu--link" href="{{ route('correspondents')}}">
                                            Корреспонденты
                                        </a>
                                    </li>
                                @endif
                            </ul>   
                        </div>
                    </div>
                    <div class="header__right--area d-flex justify-content-between align-items-center">
                        <div class="header__menu">
                            <nav class="header__menu--navigation">
                                <ul class="header__menu--wrapper d-flex">
                                    
                                    
                                    
                                </ul>
                            </nav>
                        </div>
                        <div class="language__currency d-none d-lg-block">
                            <ul class="d-flex align-items-center">
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>             
    </header>
    <!-- End header area -->

    <main class="main__content_wrapper">

        
        <!-- my account section start -->
        <section class="my__account--section section--padding">
            
                <form id="communal" method="get"> 
                
                <section class="shipping__section">
            <div class="container">
                <p>Описание таблицы:</p>
                <p><b><u>Номер</u></b> - Номер регистрации</br>
                    <b><u>Вид документа</u></b> - Вид регистрируемого документа</br>
                    <b><u>Корреспондент</u></b> - Выбирается из списка</br>
                    <b><u>Дата</u></b> - Дата регистрации</br>
                    <b><u>Исполнитель/Резолюция</u></b> - Ответственное лицо</br>
                    <b><u>Содержание</u></b> - Краткое содержание документа</br>
                    <b><u>Изменить</u></b> - Кнопка фиксации изменений
                </p>
                
                <div class="my__account--section__inner border-radius-10 d-flex">
                    <div class="account__wrapper">
                        <div class="account__content">
                            <p><u>Редактор документа</u></p>

                            
                            <div class="account__table--area">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th style="min-width: 70px; width: 70px;" bgcolor="#66CDAA">Номер</th>
                                            <th style="min-width: 70px; width: 70px;" bgcolor="#66CDAA">Вид документа</th>
                                            <th style="min-width: 100px; width: 100px;" bgcolor="#66CDAA">Корреспондент</th>
                                            <th style="min-width: 100px; width: 100px;" bgcolor="#66CDAA">Дата</th>
                                            @if ($info['doc']['type'] == "out")
                                                <th style="min-width: 100px; width: 100px;" bgcolor="#66CDAA">Исполнитель</th>
                                            @else
                                                <th style="min-width: 100px; width: 100px;" bgcolor="#66CDAA">Резолюция</th>
                                            @endif
                                            <th style="min-width: 200px; width: 200px;" bgcolor="#66CDAA">Содержание</th>    
                                            <th style="min-width: 80px; width: 80px;" bgcolor="#66CDAA">Кнопка</th> 
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <input type="hidden" class="id" value="{{ $info['doc']['id'] }}">
                                            <input type="hidden" class="variant" value="{{ $info['doc']['type'] }}">
                                            <input type="hidden" class="exception" value="{{ $info['doc']['number'] }}">
                                            <td><input style="min-width: 70px; width: 70px;" type="text" name="number" class="number" value="{{ $info['doc']['number'] }}"></td>
                                            <td>
                                                <select id="fruits" style="min-width: 100px; width: 100px;" name="npa" class="npa">
                                                    <option selected value="{{ $info['doc']['npa_id'] }}">{{ $info['doc']['npa']['title'] }}</option>
                                                    @foreach ($info['npa'] as $value) 
                                                        <option value="{{ $value['id'] }}">{{ $value['title'] }}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td>   
                                                <select id="fruits" style="min-width: 130px; width: 130px;" name="correspondent" class="correspondent">
                                                    <option selected value="{{ $info['doc']['correspondent_id'] }}">{{ $info['doc']['correspondent']['title'] }}</option>
                                                    @foreach ($info['corr'] as $value) 
                                                        <option value="{{ $value['id'] }}">{{ $value['title'] }}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td>
                                                <input type="date" value="{{ $info['doc']['date'] }}" id="date" name="date" class="date"/>
                                            </td>
                                            <td>   
                                                <select id="fruits" style="min-width: 130px; width: 130px;" name="user" class="user">
                                                    <option selected value="{{ $info['doc']['user_id'] }}">{{ $info['doc']['user']['name'] }}</option>
                                                    @foreach ($info['users'] as $value) 
                                                        <option value="{{ $value['id'] }}">{{ $value['name'] }}</option>
                                                    @endforeach
                                                </select>
                                            </td> 
                                            <td class="col-id-no" scope="row"><textarea rows='3' cols='20' type=text name="content" class="content">{{ $info['doc']['content'] }}</textarea></td> 
                                            <td>
                                                <button style="width:200px;height:50px" class="primary__btn" id='btn_change' type="button">Изменить</button>
                                            </td>
                                        </tr>                                       
                                    </tbody>
                                </table>
                                </br>
                                <p><b>*Для информации:</b> Модуль разработан, для замены рабочего места «Делопроизводство», системы «АС Бюджет»</p>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>                   
        </section>
        
                      
                
            
        </section>
        <!-- my account section end -->

     

    </main>

    <!-- Start footer section -->
    <footer class="footer__section footer__bg">
        <div class="container">
            <div class="newsletter__area">
                <div class="newsletter__inner d-flex justify-content-between align-items-center">
                    <div class="newsletter__content">
                        <h2 class="newsletter__title">WEB приложение <span class="text__secondary">Laravel</span></h2>
                        <p class="newsletter__desc">Разработано для автоматизации вычислительных процессов</p>
                    </div>
                    
                </div>
            </div>
            <div class="main__footer">
                <div class="row ">
                    <div class="col-lg-4 col-md-10">
                        <div class="footer__widget">
                            <h2 class="footer__widget--title">Ссылки <button class="footer__widget--button" aria-label="footer widget button"></button>
                                <svg class="footer__widget--title__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12.355" height="8.394" viewBox="0 0 10.355 6.394">
                                    <path  d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z" transform="translate(-6 -8.59)" fill="currentColor"></path>
                                </svg>
                            </h2>
                            <ul class="footer__widget--menu footer__widget--inner">
                                
                                <li class="footer__widget--menu__list"><a class="footer__widget--menu__text" href="https://kostomuksha-city.ru/" target="_blank">Сайт Костомукшского городского округа</a></li>
                                <li class="footer__widget--menu__list"><a class="footer__widget--menu__text" href="http://minfin.karelia.ru/" target="_blank">Министерство финансов Республики Карелия</a></li>
                                
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="footer__bottom">
            <div class="container">
                <div class="footer__bottom--inenr d-flex justify-content-between align-items-center">                    
                    <p class="copyright__content"><span class="text__secondary">© 2024</span> Администрация Костомукшского городского округа</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- End footer section -->

    <!-- Scroll top bar -->
    <button id="scroll__top"><svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M112 244l144-144 144 144M256 120v292"/></svg></button>

<!-- All Script JS Plugins here  -->
<script src="{{ asset('assets/js/vendor/popper.js') }}" defer="defer"></script>
<script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}" defer="defer"></script>
<script src="{{ asset('assets/js/plugins/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/glightbox.min.js') }}"></script>

<!-- Customscript js -->
<script src="{{ asset('assets/js/script.js') }}"></script>
  
</body>
</html>



