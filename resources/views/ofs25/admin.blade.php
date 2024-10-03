@php
    $mounth = [
        '1' => 'Январь',
        '2' => 'Февраль',
        '3' => 'Март',
        '4' => 'Апрель',
        '5' => 'Май',
        '6' => 'Июнь',
        '7' => 'Июль',
        '8' => 'Август',
        '9' => 'Сентябрь',
        '10' => 'Октябрь',
        '11' => 'Ноябрь',
        '12' => 'Декабрь',
    ];
    
    $chapter = [
        '1' => 'МБ МЗ(МБ)',
        '2' => 'МБ ИЦ',
        '3' => 'РК МЗ(РК)',
        '4' => 'РК ИЦ',
        '5' => 'ПД',
    ];
    
    $companies = [
        '3'  => 'Средняя общеобразовательная школа №1',
        '4'  => 'Средняя общеобразовательная школа №2', 
        '5'  => 'Средняя общеобразовательная школа №3', 
        '7'  => 'МБОУ КГО Гимназия', 
        '8'  => 'Вокнаволокская средняя общеобразовательная школа',
        '9'  => 'МКДОУ Ауринко', 
        '10' => 'МКДОУ Березка', 
        '12' => 'МКДОУ Золотой Ключик', 
        '13' => 'МКДОУ Кораблик',
        '15' => 'МКДОУ Солнышко', 
        '16' => 'Спортивная школа', 
        '17' => 'Центр внешкольной работы', 
        '18' => 'Детская художественная школа',
        '19' => 'Детская музыкальная школа', 
        '20' => 'Муниципальный архив и центральная библиотека', 
        '21' => 'Центр культурного развития', 
        '22' => 'Центр развития образования',
        '23' => 'Комитет по управлению муниципальной собственностью', 
        '25' => 'Администрация КГО', 
        '26' => 'МКУ Закупки', 
        '27' => 'Совет КГО',
        '28' => 'КСО Костомукша', 
        '29' => 'Централизованная бухгалтерия',
    ];
@endphp
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>ОФС 2025</title>
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
                        <h2 class="main__logo--title"><a>Таблица ОФС 2025</a></h2>
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
            <div class="container2">
                
                <section class="shipping__section">
            <div class="container">
                <p>Описание функций кнопок:</p>
                <p><b><u>Сформировать</u></b> - Формирует таблицу, по выбранным параметрам</br>
                    <b><u>Редактирование</u></b> - Открывает возможность редактирования для централизованной бухгалтерии</br>
                    <b><u>Excel</u></b> - Выгрузка таблицы в excel файл</br>
                </p>
                
                <form id="ofs25" action="/budget/public/admin/ofs25" method="get">
                    
                <div class="tab_content">
                    <div id="product_grid" class="tab_pane active show">
                        <div class="product__section--inner">
                            <div class="row mb--n30">
                                
                                <div class="col-lg-4 col-md-4 col-sm-6 col-6 custom-col mb-30">
                                    <article class="product__card">
                                        <div class="product__card--content">
                                            <h3 class="product__card--title">Месяц</h3>
                                            <div class="single__widget widget__bg">
                                                <ul class="widget__form--check">
                                                    <li class="widget__form--check__list">
                                                        <label class="widget__form--check__label" for="check6">январь</label>
                                                        <input class="widget__form--check__input" name="mounth[]" value="1" type="checkbox">
                                                        <span class="widget__form--checkmark"></span>
                                                    </li>
                                                    <li class="widget__form--check__list">
                                                        <label class="widget__form--check__label" for="check7">февраль</label>
                                                        <input class="widget__form--check__input" name="mounth[]" value="2" type="checkbox">
                                                        <span class="widget__form--checkmark"></span>
                                                    </li>
                                                    <li class="widget__form--check__list">
                                                        <label class="widget__form--check__label" for="check8">март</label>
                                                        <input class="widget__form--check__input" name="mounth[]" value="3" type="checkbox">
                                                        <span class="widget__form--checkmark"></span>
                                                    </li>
                                                    <li class="widget__form--check__list">
                                                        <label class="widget__form--check__label" for="check8">апрель</label>
                                                        <input class="widget__form--check__input" name="mounth[]" value="4" type="checkbox">
                                                        <span class="widget__form--checkmark"></span>
                                                    </li>
                                                    <li class="widget__form--check__list">
                                                        <label class="widget__form--check__label" for="check8">май</label>
                                                        <input class="widget__form--check__input" name="mounth[]" value="5" type="checkbox">
                                                        <span class="widget__form--checkmark"></span>
                                                    </li>
                                                    <li class="widget__form--check__list">
                                                        <label class="widget__form--check__label" for="check8">июнь</label>
                                                        <input class="widget__form--check__input" name="mounth[]" value="6" type="checkbox">
                                                        <span class="widget__form--checkmark"></span>
                                                    </li>
                                                </ul>
                                            </div> 
                                        </div>
                                    </article>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-6 custom-col mb-30">
                                    <article class="product__card">
                                        <div class="product__card--content">
                                            <h3 class="product__card--title">Месяц</h3>
                                            <div class="single__widget widget__bg">
                                                <ul class="widget__form--check">
                                                    <li class="widget__form--check__list">
                                                        <label class="widget__form--check__label" for="check6">июль</label>
                                                        <input class="widget__form--check__input" name="mounth[]" value="7" type="checkbox">
                                                        <span class="widget__form--checkmark"></span>
                                                    </li>
                                                    <li class="widget__form--check__list">
                                                        <label class="widget__form--check__label" for="check7">август</label>
                                                        <input class="widget__form--check__input" name="mounth[]" value="8" type="checkbox">
                                                        <span class="widget__form--checkmark"></span>
                                                    </li>
                                                    <li class="widget__form--check__list">
                                                        <label class="widget__form--check__label" for="check8">сентябрь</label>
                                                        <input class="widget__form--check__input" name="mounth[]" value="9" type="checkbox">
                                                        <span class="widget__form--checkmark"></span>
                                                    </li>
                                                    <li class="widget__form--check__list">
                                                        <label class="widget__form--check__label" for="check8">октябрь</label>
                                                        <input class="widget__form--check__input" name="mounth[]" value="10" type="checkbox">
                                                        <span class="widget__form--checkmark"></span>
                                                    </li>
                                                    <li class="widget__form--check__list">
                                                        <label class="widget__form--check__label" for="check8">ноябрь</label>
                                                        <input class="widget__form--check__input" name="mounth[]" value="11" type="checkbox">
                                                        <span class="widget__form--checkmark"></span>
                                                    </li>
                                                    <li class="widget__form--check__list">
                                                        <label class="widget__form--check__label" for="check8">декабрь</label>
                                                        <input class="widget__form--check__input" name="mounth[]" value="12" type="checkbox">
                                                        <span class="widget__form--checkmark"></span>
                                                    </li>
                                                </ul>
                                            </div> 
                                        </div>
                                    </article>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-6 custom-col mb-30">
                                    <article class="product__card">
                                        <div class="product__card--content">
                                            <h3 class="product__card--title">Раздел</h3>
                                            <div class="single__widget widget__bg">
                                                <ul class="widget__form--check">
                                                    <li class="widget__form--check__list">
                                                        <label class="widget__form--check__label" for="check6">МБ МЗ(МБ)</label>
                                                        <input class="widget__form--check__input" name="chapter[]" value="1" type="checkbox">
                                                        <span class="widget__form--checkmark"></span>
                                                    </li>
                                                    <li class="widget__form--check__list">
                                                        <label class="widget__form--check__label" for="check7">МБ ИЦ</label>
                                                        <input class="widget__form--check__input" name="chapter[]" value="2" type="checkbox">
                                                        <span class="widget__form--checkmark"></span>
                                                    </li>
                                                    <li class="widget__form--check__list">
                                                        <label class="widget__form--check__label" for="check8">РК МЗ(РК)</label>
                                                        <input class="widget__form--check__input" name="chapter[]" value="3" type="checkbox">
                                                        <span class="widget__form--checkmark"></span>
                                                    </li>
                                                    <li class="widget__form--check__list">
                                                        <label class="widget__form--check__label" for="check9">РК ИЦ</label>
                                                        <input class="widget__form--check__input" name="chapter[]" value="4" type="checkbox">
                                                        <span class="widget__form--checkmark"></span>
                                                    </li>  
                                                    <li class="widget__form--check__list">
                                                        <label class="widget__form--check__label" for="check9">ПД</label>
                                                        <input class="widget__form--check__input" name="chapter[]" value="5" type="checkbox">
                                                        <span class="widget__form--checkmark"></span>
                                                    </li> 
                                                </ul>
                                            </div> 
                                        </div>
                                    </article>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-6 custom-col mb-30">
                                    <article class="product__card">
                                        <div class="product__card--content">
                                            <h3 class="product__card--title">Учреждение</h3>
                                            <div class="single__widget widget__bg">
                                                <ul class="widget__form--check">                                
                                                    <li class="widget__form--check__list">
                                                        <label class="widget__form--check__label" for="check10">Администрация</label>
                                                        <input id="checkbox" class="widget__form--check__input" name="user[]" value="25" type="checkbox">
                                                        <span class="widget__form--checkmark"></span>
                                                    </li>
                                                    <li class="widget__form--check__list">
                                                        <label class="widget__form--check__label" for="check10">Закупки</label>
                                                        <input id="checkbox" class="widget__form--check__input" name="user[]" value="26" type="checkbox">
                                                        <span class="widget__form--checkmark"></span>
                                                    </li>
                                                    <li class="widget__form--check__list">
                                                        <label class="widget__form--check__label" for="check10">КУМС</label>
                                                        <input id="checkbox" class="widget__form--check__input" name="user[]" value="23" type="checkbox">
                                                        <span class="widget__form--checkmark"></span>
                                                    </li>
                                                    <li class="widget__form--check__list">
                                                        <label class="widget__form--check__label" for="check10">Совет</label>
                                                        <input id="checkbox" class="widget__form--check__input" name="user[]" value="27" type="checkbox">
                                                        <span class="widget__form--checkmark"></span>
                                                    </li>
                                                    <li class="widget__form--check__list">
                                                        <label class="widget__form--check__label" for="check10">КСО</label>
                                                        <input id="checkbox" class="widget__form--check__input" name="user[]" value="28" type="checkbox">
                                                        <span class="widget__form--checkmark"></span>
                                                    </li>
                                                    <li class="widget__form--check__list">
                                                        <label class="widget__form--check__label" for="check10">ЦБ</label>
                                                        <input id="checkbox" class="widget__form--check__input" name="user[]" value="29" type="checkbox">
                                                        <span class="widget__form--checkmark"></span>
                                                    </li>
                                                    <li class="widget__form--check__list">
                                                        <label class="widget__form--check__label" for="check10">Школа №1</label>
                                                        <input id="checkbox" class="widget__form--check__input" name="user[]" value="3" type="checkbox">
                                                        <span class="widget__form--checkmark"></span>
                                                    </li>
                                                    <li class="widget__form--check__list">
                                                        <label class="widget__form--check__label" for="check10">Школа №2</label>
                                                        <input id="checkbox" class="widget__form--check__input" name="user[]" value="6" type="checkbox">
                                                        <span class="widget__form--checkmark"></span>
                                                    </li>
                                                    <li class="widget__form--check__list">
                                                        <label class="widget__form--check__label" for="check10">Школа №3</label>
                                                        <input id="checkbox" class="widget__form--check__input" name="user[]" value="5" type="checkbox">
                                                        <span class="widget__form--checkmark"></span>
                                                    </li>
                                                    <li class="widget__form--check__list">
                                                        <label class="widget__form--check__label" for="check10">Гимназия</label>
                                                        <input id="checkbox" class="widget__form--check__input" name="user[]" value="7" type="checkbox">
                                                        <span class="widget__form--checkmark"></span>
                                                    </li>
                                                    <li class="widget__form--check__list">
                                                        <label class="widget__form--check__label" for="check10">ВСОШ</label>
                                                        <input id="checkbox" class="widget__form--check__input" name="user[]" value="8" type="checkbox">
                                                        <span class="widget__form--checkmark"></span>
                                                    </li>
                                                    <li class="widget__form--check__list">
                                                        <label class="widget__form--check__label" for="check10">ЦВР</label>
                                                        <input id="checkbox" class="widget__form--check__input" name="user[]" value="17" type="checkbox">
                                                        <span class="widget__form--checkmark"></span>
                                                    </li>
                                                </ul>
                                            </div> 
                                        </div>
                                    </article>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-6 custom-col mb-30">
                                    <article class="product__card">
                                        <div class="product__card--content">
                                            <h3 class="product__card--title">Учреждение</h3>
                                            <div class="single__widget widget__bg">
                                                <ul class="widget__form--check">                                
                                                    <li class="widget__form--check__list">
                                                        <label class="widget__form--check__label" for="check10">ДХШ</label>
                                                        <input id="checkbox" class="widget__form--check__input" name="user[]" value="18" type="checkbox">
                                                        <span class="widget__form--checkmark"></span>
                                                    </li>
                                                    <li class="widget__form--check__list">
                                                        <label class="widget__form--check__label" for="check10">ДМШ</label>
                                                        <input id="checkbox" class="widget__form--check__input" name="user[]" value="19" type="checkbox">
                                                        <span class="widget__form--checkmark"></span>
                                                    </li>
                                                    <li class="widget__form--check__list">
                                                        <label class="widget__form--check__label" for="check10">СпортШкола</label>
                                                        <input id="checkbox" class="widget__form--check__input" name="user[]" value="16" type="checkbox">
                                                        <span class="widget__form--checkmark"></span>
                                                    </li>
                                                    <li class="widget__form--check__list">
                                                        <label class="widget__form--check__label" for="check10">МАиЦБ</label>
                                                        <input id="checkbox" class="widget__form--check__input" name="user[]" value="20" type="checkbox">
                                                        <span class="widget__form--checkmark"></span>
                                                    </li>
                                                    <li class="widget__form--check__list">
                                                        <label class="widget__form--check__label" for="check10">ЦКР</label>
                                                        <input id="checkbox" class="widget__form--check__input" name="user[]" value="21" type="checkbox">
                                                        <span class="widget__form--checkmark"></span>
                                                    </li>
                                                    <li class="widget__form--check__list">
                                                        <label class="widget__form--check__label" for="check10">ЦРО</label>
                                                        <input id="checkbox" class="widget__form--check__input" name="user[]" value="22" type="checkbox">
                                                        <span class="widget__form--checkmark"></span>
                                                    </li>
                                                    <li class="widget__form--check__list">
                                                        <label class="widget__form--check__label" for="check10">Ауринко</label>
                                                        <input id="checkbox" class="widget__form--check__input" name="user[]" value="9" type="checkbox">
                                                        <span class="widget__form--checkmark"></span>
                                                    </li>
                                                    <li class="widget__form--check__list">
                                                        <label class="widget__form--check__label" for="check10">Солнышко</label>
                                                        <input id="checkbox" class="widget__form--check__input" name="user[]" value="15" type="checkbox">
                                                        <span class="widget__form--checkmark"></span>
                                                    </li>
                                                    <li class="widget__form--check__list">
                                                        <label class="widget__form--check__label" for="check10">Кораблик</label>
                                                        <input id="checkbox" class="widget__form--check__input" name="user[]" value="13" type="checkbox">
                                                        <span class="widget__form--checkmark"></span>
                                                    </li>
                                                    <li class="widget__form--check__list">
                                                        <label class="widget__form--check__label" for="check10">Ключик</label>
                                                        <input id="checkbox" class="widget__form--check__input" name="user[]" value="12" type="checkbox">
                                                        <span class="widget__form--checkmark"></span>
                                                    </li>
                                                    <li class="widget__form--check__list">
                                                        <label class="widget__form--check__label" for="check10">Березка</label>
                                                        <input id="checkbox" class="widget__form--check__input" name="user[]" value="10" type="checkbox">
                                                        <span class="widget__form--checkmark"></span>
                                                    </li>
                                                    <li class="widget__form--check__list">
                                                        <label class="widget__form--check__label" for="check10">Выбрать все учреждения</label>
                                                        <input type="checkbox" class="widget__form--check__input" id="checkbox" onclick="checkAll(this)">
                                                        <span class="widget__form--checkmark"></span>
                                                    </li>
                                                </ul>
                                            </div> 
                                        </div>
                                    </article>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-6 custom-col mb-30">
                                    <article class="product__card">
                                        <div class="product__card--content">
                                            <h3 class="product__card--title">Кнопка</h3>
                                            <div class="single__widget widget__bg">
                                                <button style="width:200px;height:50px" class="primary__btn price__filter--btn" type="submit">Сформировать</button>
                                                </form>
                                            </div>                                                  
                                            @if(isset($info['mounth']) && isset($info['chapter']) && isset($info['user']))
                                                <div class="single__widget widget__bg">  
                                                    <form action="/budget/public/user/ofs25/export" method="get">
                                                        <button type="submit" style="width:200px;height:50px" class="primary__btn price__filter--btn">EXCEL</button>
                                                    </form>
                                                </div>    
                                                @if(count($info['chapter']) < 2 && count($info['user']) < 2 && count($info['mounth']) < 2)
                                                <div class="single__widget widget__bg">  
                                                    <form id="info"> 
                                                        <input type='hidden' name='mounth' value="{{ $info['mounth'][0] }}">
                                                        <input type='hidden' name='chapter' value="{{ $info['chapter'][0] }}">
                                                        <input type='hidden' name='user' value="{{ $info['user'][0] }}">
                                                        <button style="width:200px;height:50px" id="status" class="primary__btn price__filter--btn" type="button">Редактирование</button>
                                                    </form>
                                                </div>
                                                @endif
                                            @endif 
                                        </div>
                                    </article>
                                </div>
                                
                                

                            </div>
                        </div>
                     </div>
                </div>

                
                </div>                   
        </section>
                
                <div class="my__account--section__inner border-radius-10 d-flex">
                    <div class="account__wrapper">
                        <div class="account__content">
                            
                            <div class="account__table--area">  
                                @if(isset($info['mounth']) && isset($info['chapter']) && isset($info['user']))
                                    @if(count($info['chapter']) < 2 && count($info['user']) < 2 && count($info['mounth']) < 2)
                                        <p><b>Параметры: месяц <font color='blue'>{{ $mounth[$info['mounth'][0]] }},</font> раздел <font color='blue'>{{ $chapter[$info['chapter'][0]] }},</font> учреждение <font color='blue'>{{ $companies[$info['user'][0]] }},</font></b> </p>
                                    @else
                                        <p><b>Параметры: Выбрано несколько значений</b></p>
                                    @endif
                                @else
                                <p><b>Параметры: Параметры не выбраны</b> </p>
                                @endif
                                    <div class="container_fix">
                                        <div class="table2">
                                            <div id="table"></div>
                                        </div>    
                                    </div>	                               
                                </br>
                                <p><b>*Для информации:</b> </p>
                                <p><b>МБ МЗ(МБ)</b> = бюджетные и автономные учреждения - средства субсидии на муниципальное задание за счет местного бюджета 
                                    казенные учреждения - все расходы за счет средств местного бюджета</p>                               
                                <p><b>МБ ИЦ</b> = бюджетные и автономные учреждения - средства субсидии на иные цели (капитальные вложения) за счет местного бюджета</p>                               
                                <p><b>РК МЗ (РК)</b> = бюджетные и автономные учреждения - средства субсидии на муниципальное задание за счет средств Республики Карелия (в т.ч. федеральных средств)
                                    казенные учреждения - все расходы за счет средств Республики Карелия (в т.ч. федеральных средств)</p>                               
                                <p><b>РК ИЦ</b> = бюджетные и автономные учреждения - средства субсидии на иные цели (капитальные вложения) за счет средств Республики Карелия (в т.ч. федеральных средств)</p>                               
                                <p><b>ПД</b> = бюджетные и автономные учреждения - все расходы за счет собственных средств 
                                    казенные учреждения за счет доходов от оказания платных услуг, безвозмездных целевых и нецелевых поступлений</p>
                            </div>
                        </div>
                    </div>
                </div>
        
                      
                
            </div>    
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

<!-- Content -->
@include('layouts.version')
<script>
    function checkAll(obj) {
            'use strict';
            var items = obj.form.getElementsByTagName("input"), 
                len, i;
            for (i = 0, len = items.length; i < len; i += 1) {
                if (items.item(i).type && items.item(i).id === "checkbox") {       
                    if (obj.checked) {
                      items.item(i).checked = true;
                    } else {
                        items.item(i).checked = false;
                    }       
                }
            }
        }
    
    $(document).ready(function(){ 
        //Подгружаем BACK шаблон отрисовки
        function fetch_data(){ 
            var form = <?=json_encode($info)?>;
            var mounth = form['mounth'];
            var chapter = form['chapter'];
            var user = form['user'];
            
            $.ajax({  
                url:"/budget/public/admin/ofs25/table",  
                method:"GET",
                data:{
                    mounth, chapter, user
                },
                dataType:"text", 
                success:function(data){  
                    $('#table').html(data);  
                    setKeydownmyForm()
                }   
            });  
        } 
        fetch_data();
        
        //Меняем статус в таблице ofs
        $(document).on('click', '#status', function(){
            let info = $('#info').serializeArray();
           
            //Создаем пустые массивы
            let many_chapter = [];
            let many_mounth = [];
            let many_user = [];
                  
            for (const item of info) {
                const value = item.value;
                if (item.name === 'chapter') {
                    many_chapter.push(value);
                } else if (item.name === 'mounth') {
                    many_mounth.push(value);
                } else if (item.name === 'user') {
                    many_user.push(value);
                }
            }            
             
            let chapter = many_chapter[0]; 
            let mounth = many_mounth[0];
            let user = many_user[0];
                
            $.ajax({
                url:"/budget/public/admin/ofs25/status",  
                method:"patch",
                data:{
                    "_token": "{{ csrf_token() }}",
                    chapter, mounth, user
                },
                dataType:"text",  
                success:function(data){ 
                    fetch_data();
                    alert(data);
                } 
            })               
        })
        
    });
</script>

</body>
</html>




