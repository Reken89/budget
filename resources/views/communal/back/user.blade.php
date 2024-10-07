@php
    if($info['info'] == "yes"){   
        //var_dump($info);
        $key = $info['mounth'] - 1;
        
        $mounth = [
            '1'  => 'январь',
            '2'  => 'февраль',
            '3'  => 'март',
            '4'  => 'апрель',
            '5'  => 'май',
            '6'  => 'июнь',
            '7'  => 'июль',
            '8'  => 'август',
            '9'  => 'сентябрь',
            '10' => 'октябрь',
            '11' => 'ноябрь',
            '12' => 'декабрь',
        ];
    }
@endphp

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Коммунальные услуги</title>
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
                        <li class="header__info--list">
                            <a class="header__info--link" href="mailto:info@example.com">
                                @if ($info['info'] == "yes")
                                    {{ $info['result']['email'] }}</a>
                                @else
                                    email</a>
                                @endif
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
                        <h2 class="main__logo--title"><a>Коммунальные услуги</a></h2>
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
                                <li class="language__currency--list">
                                    <a class="account__currency--link" href="javascript:void(0)">
                                        
                                        <span>Сумма</span> 
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9.797" height="6.05" viewBox="0 0 9.797 6.05">
                                            <path  d="M14.646,8.59,10.9,12.329,7.151,8.59,6,9.741l4.9,4.9,4.9-4.9Z" transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7"/>
                                        </svg>
                                    </a>
                                    <div class="dropdown__currency">
                                        <ul>
                                            <li class="currency__items"><a class="currency__text" href="#">RUB</a></li>
                                            
                                        </ul>
                                    </div>
                                </li>
                                <li class="language__currency--list">
                                    <a class="language__switcher" href="javascript:void(0)">
                                        <span>Язык</span> 
                                        <svg xmlns="http://www.w3.org/2000/svg" width="9.797" height="6.05" viewBox="0 0 9.797 6.05">
                                            <path  d="M14.646,8.59,10.9,12.329,7.151,8.59,6,9.741l4.9,4.9,4.9-4.9Z" transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7"/>
                                        </svg>
                                    </a>
                                    <div class="dropdown__language">
                                        <ul>                                           
                                            <li class="language__items"><a class="language__text" href="#">Russia</a></li>
                                        </ul>
                                    </div>
                                </li>
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
                <p>Описание функций кнопок:</p>
                <p><b><u>Сформировать</u></b> - Формирует таблицу, за выбранный год и месяц</br>
                    <b><u>Excel</u></b> - Выгрузка таблицы за выбранный год в excel файл</br>
                    <b><u>WEB форма</u></b> - Открывает таблицу (все месяца) за выбранный год в новой вкладке</br>
                    <b><u>Отправить</u></b> - Отправляет введенные значения в ФЭУ</br>
                    <b><u>Редактировать</u></b> - Отправляет в ФЭУ запрос на редактирование данных, за выбранный период
                </p>
                <div class="shipping__inner style2 d-flex">
                    <div class="shipping__items style2 d-flex align-items-center">
                        
                        <div class="shipping__content">
                            <h2 class="shipping__content--title h3">Год</h2>
                            <div class="single__widget widget__bg">
                            <ul class="widget__form--check">    
                                <li class="widget__form--check__list">
                                    <label class="widget__form--check__label" for="check7">2025</label>
                                    <input class="widget__form--check__input" name="year" value="2025" type="checkbox">
                                    <span class="widget__form--checkmark"></span>
                                </li>
                                <li class="widget__form--check__list">
                                    <label class="widget__form--check__label" for="check7">2024</label>
                                    <input class="widget__form--check__input" name="year" value="2024" type="checkbox">
                                    <span class="widget__form--checkmark"></span>
                                </li>
                                <li class="widget__form--check__list">
                                    <label class="widget__form--check__label" for="check8">2023</label>
                                    <input class="widget__form--check__input" name="year" value="2023" type="checkbox">
                                    <span class="widget__form--checkmark"></span>
                                </li>
                                <li class="widget__form--check__list">
                                    <label class="widget__form--check__label" for="check9">2022</label>
                                    <input class="widget__form--check__input" name="year" value="2022" type="checkbox">
                                    <span class="widget__form--checkmark"></span>
                                </li>
                                <li class="widget__form--check__list">
                                    <label class="widget__form--check__label" for="check10">2021</label>
                                    <input class="widget__form--check__input" name="year" value="2021" type="checkbox">
                                    <span class="widget__form--checkmark"></span>
                                </li>
                                <li class="widget__form--check__list">
                                    <label class="widget__form--check__label" for="check10">2020</label>
                                    <input class="widget__form--check__input" name="year" value="2020" type="checkbox">
                                    <span class="widget__form--checkmark"></span>
                                </li>
                            </ul>
                            </div>    
                        </div>
                    </div>
                    <div class="shipping__items style2 d-flex align-items-center">
                        
                        <div class="shipping__content">
                            <h2 class="shipping__content--title h3">Месяц</h2>
                            <div class="single__widget widget__bg">
                            <ul class="widget__form--check">
                                <li class="widget__form--check__list">
                                    <label class="widget__form--check__label" for="check6">Январь</label>
                                    <input class="widget__form--check__input" name="mounth" value="1" type="checkbox">
                                    <span class="widget__form--checkmark"></span>
                                </li>
                                <li class="widget__form--check__list">
                                    <label class="widget__form--check__label" for="check7">Февраль</label>
                                    <input class="widget__form--check__input" name="mounth" value="2" type="checkbox">
                                    <span class="widget__form--checkmark"></span>
                                </li>
                                <li class="widget__form--check__list">
                                    <label class="widget__form--check__label" for="check8">Март</label>
                                    <input class="widget__form--check__input" name="mounth" value="3" type="checkbox">
                                    <span class="widget__form--checkmark"></span>
                                </li>
                                <li class="widget__form--check__list">
                                    <label class="widget__form--check__label" for="check9">Апрель</label>
                                    <input class="widget__form--check__input" name="mounth" value="4" type="checkbox">
                                    <span class="widget__form--checkmark"></span>
                                </li>
                                <li class="widget__form--check__list">
                                    <label class="widget__form--check__label" for="check10">Май</label>
                                    <input class="widget__form--check__input" name="mounth" value="5" type="checkbox">
                                    <span class="widget__form--checkmark"></span>
                                </li>
                                <li class="widget__form--check__list">
                                    <label class="widget__form--check__label" for="check10">Июнь</label>
                                    <input class="widget__form--check__input" name="mounth" value="6" type="checkbox">
                                    <span class="widget__form--checkmark"></span>
                                </li>                            
                            </ul>
                            </div>    
                        </div>
                    </div>
                    <div class="shipping__items style2 d-flex align-items-center">
                        
                        <div class="shipping__content">
                            <h2 class="shipping__content--title h3">Месяц</h2>
                            <div class="single__widget widget__bg">
                            <ul class="widget__form--check">                                
                                <li class="widget__form--check__list">
                                    <label class="widget__form--check__label" for="check10">Июль</label>
                                    <input class="widget__form--check__input" name="mounth" value="7" type="checkbox">
                                    <span class="widget__form--checkmark"></span>
                                </li>
                                <li class="widget__form--check__list">
                                    <label class="widget__form--check__label" for="check10">Август</label>
                                    <input class="widget__form--check__input" name="mounth" value="8" type="checkbox">
                                    <span class="widget__form--checkmark"></span>
                                </li>
                                <li class="widget__form--check__list">
                                    <label class="widget__form--check__label" for="check10">Сентябрь</label>
                                    <input class="widget__form--check__input" name="mounth" value="9" type="checkbox">
                                    <span class="widget__form--checkmark"></span>
                                </li>
                                <li class="widget__form--check__list">
                                    <label class="widget__form--check__label" for="check10">Октябрь</label>
                                    <input class="widget__form--check__input" name="mounth" value="10" type="checkbox">
                                    <span class="widget__form--checkmark"></span>
                                </li>
                                <li class="widget__form--check__list">
                                    <label class="widget__form--check__label" for="check10">Ноябрь</label>
                                    <input class="widget__form--check__input" name="mounth" value="11" type="checkbox">
                                    <span class="widget__form--checkmark"></span>
                                </li>
                                <li class="widget__form--check__list">
                                    <label class="widget__form--check__label" for="check10">Декабрь</label>
                                    <input class="widget__form--check__input" name="mounth" value="12" type="checkbox">
                                    <span class="widget__form--checkmark"></span>
                                </li>
                            </ul>
                            </div>    
                        </div>
                    </div>                   
                    
                    <div class="shipping__items style2 d-flex align-items-center">
                        
                        <div class="shipping__content">
                            
                        <button style="width:200px;height:50px" class="primary__btn price__filter--btn" id="btn_one" type="button">Сформировать</button>
                        </br>
                        </form>
                        
                        @if ($info['info'] == "yes")
                            <br>
                            <form action="/budget/public/user/communal/export" method="get">
                                <button style="width:200px;height:50px" class="primary__btn price__filter--btn" type="submit">Excel</button>
                            </form>
                            </br>
                            
                            <form action="/budget/public/user/communal/web" method="get" target="_blank">
                                <button style="width:200px;height:50px" class="primary__btn price__filter--btn" type="submit">WEB форма</button>
                            </form>
                            @if ($info['result']['communal'][$key]['status'] == 2)
                                <br>
                                <form id="sending" method="get"> 
                                    <input type='hidden' name='id' value='{{ $info['result']['communal'][$key]['id'] }}'> 
                                    <input type='hidden' name='year' value='{{ $info['result']['communal'][$key]['year'] }}'> 
                                    <input type='hidden' name='mounth' value='{{ $info['result']['communal'][$key]['mounth'] }}'> 
                                    <button style="width:200px;height:50px" class="primary__btn price__filter--btn" id='btn_three' type="button">Отправить</button>
                                </form>
                                </br> 
                            @elseif ($info['result']['communal'][$key]['status'] == 1)
                                <br>
                                <form id="update" method="get"> 
                                    <input type='hidden' name='id' value='{{ $info['result']['communal'][$key]['id'] }}'>    
                                    <button style="width:200px;height:50px" class="primary__btn price__filter--btn" id='btn_two' type="button">Редактировать</button>
                                </form>
                                </br> 
                            @endif
                        @endif
                          
                        </div>
                    </div>
                </div>
                
                @if ($info['info'] == "yes")
                <div class="my__account--section__inner border-radius-10 d-flex">
                    <div class="account__wrapper">
                        <div class="account__content">
                            <p><u>После ввода каждой цифры, необходимо нажать клавишу «enter»</u></p>
                            <h2 class="account__content--title h3 mb-20">Год: {{ $info['result']['communal'][$key]['year'] }}, месяц: {{ $mounth[$info['result']['communal'][$key]['mounth']] }}</h2>
                            <div class="account__table--area">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th style="min-width: 150px; width: 150px;" bgcolor="#66CDAA">Услуга</th>
                                            <th style="min-width: 100px; width: 100px;" bgcolor="#66CDAA">Объем</th>
                                            <th style="min-width: 100px; width: 100px;" bgcolor="#66CDAA">Сумма</th>
                                            <th style="min-width: 100px; width: 100px;" bgcolor="#66CDAA">Ваш тариф*</th>
                                            <th style="min-width: 100px; width: 100px;" bgcolor="#66CDAA">Тариф min</th>
                                            <th style="min-width: 100px; width: 100px;" bgcolor="#66CDAA">Тариф max</th>                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <input type="hidden" class="id" value="{{ $info['result']['communal'][$key]['id'] }}">
                                            <input type="hidden" class="service" value="heat">
                                            <td>Теплоснабжение</td>
                                            @if ($info['result']['communal'][$key]['status'] == 2)
                                                <td><input style="min-width: 100px; width: 100px;" type="text" class="volume" value="{{ number_format($info['result']['communal'][$key]['heat-volume'], 4, ',', ' ') }}"></td>
                                                <td><input style="min-width: 100px; width: 100px;" type="text" class="sum" value="{{ number_format($info['result']['communal'][$key]['heat-sum'], 2, ',', ' ') }}"></td>
                                            @else
                                                <td>{{ number_format($info['result']['communal'][$key]['heat-volume'], 4, ',', ' ') }}</td>
                                                <td>{{ number_format($info['result']['communal'][$key]['heat-sum'], 2, ',', ' ') }}</td>
                                            @endif
                                            
                                            @if ($info['result']['communal'][$key]['heat-volume'] == 0)
                                                <td><font color="green">0</td>
                                            @else
                                                @php
                                                    if($info['result']['communal'][$key]['heat-sum'] / $info['result']['communal'][$key]['heat-volume'] >= $info['tarrifs'][$key]['heat-one'] && 
                                                    $info['result']['communal'][$key]['heat-sum'] / $info['result']['communal'][$key]['heat-volume'] <= $info['tarrifs'][$key]['heat-two']){
                                                        $color = "green";
                                                    }else{
                                                        $color = "red";
                                                    }
                                                @endphp
                                                <td><font color="{{ $color }}">{{ number_format($info['result']['communal'][$key]['heat-sum'] / $info['result']['communal'][$key]['heat-volume'], 4, ',', ' ') }}</td>
                                            @endif
                                            <td>{{ number_format($info['tarrifs'][$key]['heat-one'], 4, ',', ' ') }}</td>
                                            <td>{{ number_format($info['tarrifs'][$key]['heat-two'], 4, ',', ' ') }}</td>
                                        </tr> 
                                        <tr>
                                            <input type="hidden" class="id" value="{{ $info['result']['communal'][$key]['id'] }}">
                                            <input type="hidden" class="service" value="drainage">
                                            <td>Водоотведение</td>
                                            @if ($info['result']['communal'][$key]['status'] == 2)
                                                <td><input style="min-width: 100px; width: 100px;" type="text" class="volume" value="{{ number_format($info['result']['communal'][$key]['drainage-volume'], 4, ',', ' ') }}"></td>
                                                <td><input style="min-width: 100px; width: 100px;" type="text" class="sum" value="{{ number_format($info['result']['communal'][$key]['drainage-sum'], 2, ',', ' ') }}"></td>
                                            @else
                                                <td>{{ number_format($info['result']['communal'][$key]['drainage-volume'], 4, ',', ' ') }}</td>
                                                <td>{{ number_format($info['result']['communal'][$key]['drainage-sum'], 2, ',', ' ') }}</td>
                                            @endif
                                            @if ($info['result']['communal'][$key]['drainage-volume'] == 0)
                                                <td><font color="green">0</td>
                                            @else
                                                @php
                                                    if($info['result']['communal'][$key]['drainage-sum'] / $info['result']['communal'][$key]['drainage-volume'] >= $info['tarrifs'][$key]['drainage-one'] && 
                                                    $info['result']['communal'][$key]['drainage-sum'] / $info['result']['communal'][$key]['drainage-volume'] <= $info['tarrifs'][$key]['drainage-two']){
                                                        $color = "green";
                                                    }else{
                                                        $color = "red";
                                                    }
                                                @endphp
                                                <td><font color="{{ $color }}">{{ number_format($info['result']['communal'][$key]['drainage-sum'] / $info['result']['communal'][$key]['drainage-volume'], 4, ',', ' ') }}</td>
                                            @endif
                                            <td>{{ number_format($info['tarrifs'][$key]['drainage-one'], 4, ',', ' ') }}</td>
                                            <td>{{ number_format($info['tarrifs'][$key]['drainage-two'], 4, ',', ' ') }}</td>
                                        </tr>  
                                        <tr>
                                            <input type="hidden" class="id" value="{{ $info['result']['communal'][$key]['id'] }}">
                                            <input type="hidden" class="service" value="negative">
                                            <td>Негативное воздействие</td>
                                            @if ($info['result']['communal'][$key]['status'] == 2)
                                                <td><input style="min-width: 100px; width: 100px;" type="text" class="volume" value="{{ number_format($info['result']['communal'][$key]['negative-volume'], 4, ',', ' ') }}"></td>
                                                <td><input style="min-width: 100px; width: 100px;" type="text" class="sum" value="{{ number_format($info['result']['communal'][$key]['negative-sum'], 2, ',', ' ') }}"></td>
                                            @else
                                                <td>{{ number_format($info['result']['communal'][$key]['negative-volume'], 4, ',', ' ') }}</td>
                                                <td>{{ number_format($info['result']['communal'][$key]['negative-sum'], 2, ',', ' ') }}</td>
                                            @endif
                                            @if ($info['result']['communal'][$key]['negative-volume'] == 0)
                                                <td><font color="green">0</td>
                                            @else
                                                @php
                                                    if($info['result']['communal'][$key]['negative-sum'] / $info['result']['communal'][$key]['negative-volume'] >= $info['tarrifs'][$key]['negative-one'] && 
                                                    $info['result']['communal'][$key]['negative-sum'] / $info['result']['communal'][$key]['negative-volume'] <= $info['tarrifs'][$key]['negative-two']){
                                                        $color = "green";
                                                    }else{
                                                        $color = "red";
                                                    }
                                                @endphp
                                                <td><font color="{{ $color }}">{{ number_format($info['result']['communal'][$key]['negative-sum'] / $info['result']['communal'][$key]['negative-volume'], 4, ',', ' ') }}</td>
                                            @endif
                                            <td>{{ number_format($info['tarrifs'][$key]['negative-one'], 4, ',', ' ') }}</td>
                                            <td>{{ number_format($info['tarrifs'][$key]['negative-two'], 4, ',', ' ') }}</td>
                                        </tr> 
                                        <tr>
                                            <input type="hidden" class="id" value="{{ $info['result']['communal'][$key]['id'] }}">
                                            <input type="hidden" class="service" value="water">
                                            <td>Водоснабжение</td>
                                            @if ($info['result']['communal'][$key]['status'] == 2)
                                                <td><input style="min-width: 100px; width: 100px;" type="text" class="volume" value="{{ number_format($info['result']['communal'][$key]['water-volume'], 4, ',', ' ') }}"></td>
                                                <td><input style="min-width: 100px; width: 100px;" type="text" class="sum" value="{{ number_format($info['result']['communal'][$key]['water-sum'], 2, ',', ' ') }}"></td>
                                            @else
                                                <td>{{ number_format($info['result']['communal'][$key]['water-volume'], 4, ',', ' ') }}</td>
                                                <td>{{ number_format($info['result']['communal'][$key]['water-sum'], 2, ',', ' ') }}</td>
                                            @endif
                                            @if ($info['result']['communal'][$key]['water-volume'] == 0)
                                                <td><font color="green">0</td>
                                            @else
                                                @php
                                                    if($info['result']['communal'][$key]['water-sum'] / $info['result']['communal'][$key]['water-volume'] >= $info['tarrifs'][$key]['water-one'] && 
                                                    $info['result']['communal'][$key]['water-sum'] / $info['result']['communal'][$key]['water-volume'] <= $info['tarrifs'][$key]['water-two']){
                                                        $color = "green";
                                                    }else{
                                                        $color = "red";
                                                    }
                                                @endphp
                                                <td><font color="{{ $color }}">{{ number_format($info['result']['communal'][$key]['water-sum'] / $info['result']['communal'][$key]['water-volume'], 4, ',', ' ') }}</td>
                                            @endif
                                            <td>{{ number_format($info['tarrifs'][$key]['water-one'], 4, ',', ' ') }}</td>
                                            <td>{{ number_format($info['tarrifs'][$key]['water-two'], 4, ',', ' ') }}</td>
                                        </tr> 
                                        <tr>
                                            <input type="hidden" class="id" value="{{ $info['result']['communal'][$key]['id'] }}">
                                            <input type="hidden" class="service" value="power">
                                            <td>Электроснабжение</td>
                                            @if ($info['result']['communal'][$key]['status'] == 2)
                                                <td><input style="min-width: 100px; width: 100px;" type="text" class="volume" value="{{ number_format($info['result']['communal'][$key]['power-volume'], 4, ',', ' ') }}"></td>
                                                <td><input style="min-width: 100px; width: 100px;" type="text" class="sum" value="{{ number_format($info['result']['communal'][$key]['power-sum'], 2, ',', ' ') }}"></td>
                                            @else
                                                <td>{{ number_format($info['result']['communal'][$key]['power-volume'], 4, ',', ' ') }}</td>
                                                <td>{{ number_format($info['result']['communal'][$key]['power-sum'], 2, ',', ' ') }}</td>
                                            @endif
                                            @if ($info['result']['communal'][$key]['power-volume'] == 0)
                                                <td><font color="green">0</td>
                                            @else
                                                @php
                                                    if($info['result']['communal'][$key]['power-sum'] / $info['result']['communal'][$key]['power-volume'] >= $info['tarrifs'][$key]['power-one'] && 
                                                    $info['result']['communal'][$key]['power-sum'] / $info['result']['communal'][$key]['power-volume'] <= $info['tarrifs'][$key]['power-two']){
                                                        $color = "green";
                                                    }else{
                                                        $color = "red";
                                                    }
                                                @endphp
                                                <td><font color="{{ $color }}">{{ number_format($info['result']['communal'][$key]['power-sum'] / $info['result']['communal'][$key]['power-volume'], 4, ',', ' ') }}</td>
                                            @endif
                                            <td>{{ number_format($info['tarrifs'][$key]['power-one'], 4, ',', ' ') }}</td>
                                            <td>{{ number_format($info['tarrifs'][$key]['power-two'], 4, ',', ' ') }}</td>
                                        </tr> 
                                        <tr>
                                            <input type="hidden" class="id" value="{{ $info['result']['communal'][$key]['id'] }}">
                                            <input type="hidden" class="service" value="trash">
                                            <td>Вывоз мусора</td>
                                            @if ($info['result']['communal'][$key]['status'] == 2)
                                                <td><input style="min-width: 100px; width: 100px;" type="text" class="volume" value="{{ number_format($info['result']['communal'][$key]['trash-volume'], 4, ',', ' ') }}"></td>
                                                <td><input style="min-width: 100px; width: 100px;" type="text" class="sum" value="{{ number_format($info['result']['communal'][$key]['trash-sum'], 2, ',', ' ') }}"></td>
                                            @else
                                                <td>{{ number_format($info['result']['communal'][$key]['trash-volume'], 4, ',', ' ') }}</td>
                                                <td>{{ number_format($info['result']['communal'][$key]['trash-sum'], 2, ',', ' ') }}</td>
                                            @endif
                                            @if ($info['result']['communal'][$key]['trash-volume'] == 0)
                                                <td><font color="green">0</td>
                                            @else
                                                @php
                                                    if($info['result']['communal'][$key]['trash-sum'] / $info['result']['communal'][$key]['trash-volume'] >= $info['tarrifs'][$key]['trash-one'] && 
                                                    $info['result']['communal'][$key]['trash-sum'] / $info['result']['communal'][$key]['trash-volume'] <= $info['tarrifs'][$key]['trash-two']){
                                                        $color = "green";
                                                    }else{
                                                        $color = "red";
                                                    }
                                                @endphp
                                                <td><font color="{{ $color }}">{{ number_format($info['result']['communal'][$key]['trash-sum'] / $info['result']['communal'][$key]['trash-volume'], 4, ',', ' ') }}</td>
                                            @endif
                                            <td>{{ number_format($info['tarrifs'][$key]['trash-one'], 4, ',', ' ') }}</td>
                                            <td>{{ number_format($info['tarrifs'][$key]['trash-two'], 4, ',', ' ') }}</td>
                                        </tr>                                            
                                    </tbody>                                
                                </table>
                                </br>
                                <p><b>*Ваш тариф</b> = Тариф получается в результате деления суммы на объем.</br>
                                Если цифра зеленого цвета, Вы укладываетесь в допустимый диапозон</p>
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
