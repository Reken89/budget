@php
    
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
            
                <form id="filters" method="get"> 
                
                <section class="shipping__section">
            <div class="container">
                <p>Список фильтров:</p>
                <p><b><u>НПА</u></b> - Выбор по НПА</br>
                    <b><u>Корреспондент</u></b> - Выбор по корреспонденту</br>
                    <b><u>Исполнитель</u></b> - Выбор по исполнителю</br>
                    <b><u>Дата "начало"</u></b> - Выбрать документы начиная с даты</br>
                    <b><u>Дата "конец"</u></b> - Выбрать документу по дату</br>
                    <b><u>Тип</u></b> - Выбрать тип документов
                </p>
                <div class="shipping__inner style2 d-flex">
                    <div class="shipping__items style2 d-flex align-items-center">                       
                        <div class="shipping__content">
                            <h2 class="shipping__content--title h3">НПА</h2>
                            <div class="single__widget widget__bg">
                            <ul class="widget__form--check">                               
                                <li class="widget__form--check__list">
                                    <select id="fruits" style="min-width: 100px; width: 100px;" name="npa" class="npa">
                                        <option selected value="no">Не выбран</option>
                                        @foreach ($info['npa'] as $value) 
                                            <option value="{{ $value['id'] }}">{{ $value['title'] }}</option>
                                        @endforeach
                                    </select>
                                </li>
                            </ul>
                            </div>    
                        </div>
                    </div>                  
                    <div class="shipping__items style2 d-flex align-items-center">                       
                        <div class="shipping__content">
                            <h2 class="shipping__content--title h3">Корреспондент</h2>
                            <div class="single__widget widget__bg">
                            <ul class="widget__form--check">                               
                                <li class="widget__form--check__list">
                                    <select id="fruits" style="min-width: 130px; width: 130px;" name="correspondent" class="correspondent">
                                        <option selected value="no">Не выбран</option>
                                        @foreach ($info['corr'] as $value) 
                                            <option value="{{ $value['id'] }}">{{ $value['title'] }}</option>
                                        @endforeach
                                    </select>
                                </li>
                            </ul>
                            </div>    
                        </div>
                    </div>
                    <div class="shipping__items style2 d-flex align-items-center">                       
                        <div class="shipping__content">
                            <h2 class="shipping__content--title h3">Исполнитель</h2>
                            <div class="single__widget widget__bg">
                            <ul class="widget__form--check">                               
                                <li class="widget__form--check__list">
                                    <select id="fruits" style="min-width: 130px; width: 130px;" name="user" class="user">
                                        <option selected value="no">Не выбран</option>
                                        @foreach ($info['users'] as $value) 
                                            <option value="{{ $value['id'] }}">{{ $value['name'] }}</option>
                                        @endforeach
                                    </select>
                                </li>
                            </ul>
                            </div>    
                        </div>
                    </div>
                    <div class="shipping__items style2 d-flex align-items-center">                       
                        <div class="shipping__content">
                            <h2 class="shipping__content--title h3">Дата "начало"</h2>
                            <div class="single__widget widget__bg">
                            <ul class="widget__form--check">                               
                                <li class="widget__form--check__list">
                                    <input type="date" value="2024-01-01" id="date" name="datestart" class="date"/>
                                </li>
                            </ul>
                            </div>    
                        </div>
                    </div>
                    <div class="shipping__items style2 d-flex align-items-center">                       
                        <div class="shipping__content">
                            <h2 class="shipping__content--title h3">Дата "конец"</h2>
                            <div class="single__widget widget__bg">
                            <ul class="widget__form--check">                               
                                <li class="widget__form--check__list">
                                    <input type="date" value="2024-12-31" id="date" name="datestop" class="date"/>
                                </li>
                            </ul>
                            </div>    
                        </div>
                    </div>
                    <div class="shipping__items style2 d-flex align-items-center">                       
                        <div class="shipping__content">
                            <h2 class="shipping__content--title h3">Тип</h2>
                            <div class="single__widget widget__bg">
                            <ul class="widget__form--check">                               
                                <li class="widget__form--check__list">
                                    <select id="fruits" style="min-width: 130px; width: 130px;" name="type" class="type">
                                        <option selected value="out">Исходящие</option>
                                            <option value="out">Исходящие</option>
                                            <option value="in">Входящие</option>
                                    </select>
                                </li>
                            </ul>
                            </div>    
                        </div>
                    </div>
                                                                                               
                    
                </div>
                <div class="shipping__items style2 d-flex align-items-center">                        
                    <div class="shipping__content">                           
                        <button style="width:200px;height:50px" class="primary__btn price__filter--btn" id="start" type="button">Сформировать</button>
                        </br>
                        </form>    
                        <br>
                        <form action="/budget/public/delo/filters/export" method="get">
                            <button style="width:200px;height:50px" class="primary__btn price__filter--btn" type="submit">Выгрузить в XLSX</button>
                        </form>
                    </div>
                </div>
                
                @if ($table == true)              
                <div class="my__account--section__inner border-radius-10 d-flex">
                    <div class="account__wrapper">
                        <div class="account__content">
                            <p><u>Таблица с учетом фильтров</u></p>
                           
                            <div class="account__table--area">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th style="min-width: 70px; width: 70px;" bgcolor="#66CDAA">Номер</th>
                                            <th style="min-width: 70px; width: 70px;" bgcolor="#66CDAA">Вид документа</th>
                                            <th style="min-width: 100px; width: 100px;" bgcolor="#66CDAA">Корреспондент</th>
                                            <th style="min-width: 100px; width: 100px;" bgcolor="#66CDAA">Дата</th>
                                            @if($table[0]['type'] == "out")
                                                <th style="min-width: 100px; width: 100px;" bgcolor="#66CDAA">Исполнитель</th>
                                            @else
                                                <th style="min-width: 100px; width: 100px;" bgcolor="#66CDAA">Резолюция</th>
                                            @endif
                                            <th style="min-width: 200px; width: 200px;" bgcolor="#66CDAA">Содержание</th>    
                                            <th style="min-width: 80px; width: 80px;" bgcolor="#66CDAA">Автор</th> 
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($table as $value)
                                            <tr>
                                                <td>{{ $value['number'] }}</td>
                                                <td>{{ $value['npa']['title'] }}</td>
                                                <td>{{ $value['correspondent']['title'] }}</td>
                                                <td>{{ $value['date'] }}</td>
                                                <td>{{ $value['user']['name'] }}</td>
                                                <td>{{ $value['content'] }}</td>
                                                <td>{{ $value['author'] }}</td>
                                            </tr>    
                                        @endforeach
                                    </tbody>
                                </table>
                                
                                </br>
                                <p><b>*Для информации:</b> Модуль разработан, для регистрации корреспонденции</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                
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
                        <h2 class="newsletter__title">WEB приложение <span class="text__secondary"></span></h2>
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
                               
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="footer__bottom">
            <div class="container">
                <div class="footer__bottom--inenr d-flex justify-content-between align-items-center">                    
                    <p class="copyright__content"><span class="text__secondary">© {{ date("Y") }}</span> Администрация Костомукшского городского округа</p>
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




