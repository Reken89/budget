@php
    $total = $info['total'][0];
    $year = $info['year'];
    $mounth = $info['mounth'];
    $name_mounth = [
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
@endphp
@include('layouts.chart')

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
                                finanse@kostamail.ru</a>
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
                        <h2 class="main__logo--title"><a>Модуль коммунальные услуги</a></h2>
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
            <div class="container2">
                <form id="communal" method="get"> 
                
                <section class="shipping__section">
            <div class="container">
                
                <p>Описание функций кнопок:</p>
                <p><b><u>Сформировать</u></b> - Формирует таблицу, по выбранным параметрам</br>
                    <b><u>Excel</u></b> - Выгрузка таблицы в excel файл</br>
                    </br>
                </p>
                
                <div class="shipping__inner style2 d-flex">
                    <div class="shipping__items style2 d-flex align-items-center">
                        
                        <div class="shipping__content">
                            <h2 class="shipping__content--title h3">Год</h2>
                            <div class="single__widget widget__bg">
                            <ul class="widget__form--check">
                                <li class="widget__form--check__list">
                                    <label class="widget__form--check__label" for="check6">2025</label>
                                    <input class="widget__form--check__input" name="year" value="2025" type="checkbox">
                                    <span class="widget__form--checkmark"></span>
                                </li>
                                <li class="widget__form--check__list">
                                    <label class="widget__form--check__label" for="check6">2024</label>
                                    <input class="widget__form--check__input" name="year" value="2024" type="checkbox">
                                    <span class="widget__form--checkmark"></span>
                                </li>
                                <li class="widget__form--check__list">
                                    <label class="widget__form--check__label" for="check7">2023</label>
                                    <input class="widget__form--check__input" name="year" value="2023" type="checkbox">
                                    <span class="widget__form--checkmark"></span>
                                </li>
                                <li class="widget__form--check__list">
                                    <label class="widget__form--check__label" for="check8">2022</label>
                                    <input class="widget__form--check__input" name="year" value="2022" type="checkbox">
                                    <span class="widget__form--checkmark"></span>
                                </li>
                                <li class="widget__form--check__list">
                                    <label class="widget__form--check__label" for="check9">2021</label>
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
                        
                        <br>
                        <form action="/budget/public/admin/communal/export" method="get">
                            <button style="width:200px;height:50px" class="primary__btn price__filter--btn" type="submit">Excel</button>
                        </form>
                        </br>

                        </div>
                    </div>
                </div>
            </div>
        </section>
                    
        <div
            class='hidden'   
            data-point01="{{ $info['points'][0]['points'] }}"
            data-point02="{{ $info['points'][1]['points'] }}"
            data-point03="{{ $info['points'][2]['points'] }}"
            data-point04="{{ $info['points'][3]['points'] }}"
            data-point05="{{ $info['points'][4]['points'] }}"
            data-point06="{{ $info['points'][5]['points'] }}"
            data-point07="{{ $info['points'][6]['points'] }}"
            data-point08="{{ $info['points'][7]['points'] }}"
            data-point09="{{ $info['points'][8]['points'] }}"
            data-point10="{{ $info['points'][9]['points'] }}"
            data-point11="{{ $info['points'][10]['points'] }}"
            data-point12="{{ $info['points'][11]['points'] }}"
            data-point13="{{ $info['points'][12]['points'] }}"
            data-point14="{{ $info['points'][13]['points'] }}"
            data-point15="{{ $info['points'][14]['points'] }}"
            data-point16="{{ $info['points'][15]['points'] }}"
            data-point17="{{ $info['points'][16]['points'] }}"
            data-point18="{{ $info['points'][17]['points'] }}"
        ></div>        
                    
            <div class="page-content">
                <div class="row">
                    <div class="col-12 col-lg-12">
                        <div class="col d-flex">
                            <div class="card radius-10 w-100">
                                <div class="card-body">
                                    <p class="font-weight-bold mb-1 text-secondary">Линейная диаграмма рейтинга по заполнению портала на отчетную дату (рейтинг начисляется с 01-07-2024г.)</p>

                                    <div class="chart-container-0">
                                        <canvas id="chart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>                       
                    </div>  
                </div>                           
            </div>            
                    
                <div class="my__account--section__inner border-radius-10 d-flex">                                    
                    <div class="account__wrapper">
                        <div class="account__content">
                            <h2 class="account__content--title h3 mb-20">Таблица тарифов</h2>
                                <div class="container_fix">
                                    <table class="table2" width="200">
                                        <thead>
                                            <tr>
                                                <th style="min-width: 80px; width: 80px;">Тариф</th>
                                                <th style="min-width: 100px; width: 100px;">Теплоснабжение</th> 
                                                <th style="min-width: 100px; width: 100px;">Водоотведение</th> 
                                                <th style="min-width: 100px; width: 100px;">Негативное воздействие</th> 
                                                <th style="min-width: 100px; width: 100px;">Водоснабжение</th> 
                                                <th style="min-width: 100px; width: 100px;">Электроснабжение</th> 
                                                <th style="min-width: 100px; width: 100px;">Вывоз мусора</th>    
                                            </tr>
                                        </thead>
                                        @if ($info['variant'] == "one")
                                        @php
                                            $tarrif = $info['tarrif'];
                                        @endphp
                                        <tbody>
                                            <tr>
                                                <td>Минимальный тариф</td>
                                                <td>{{ number_format($tarrif['heat-one'], 4, ',', ' ') }}</td>
                                                <td>{{ number_format($tarrif['drainage-one'], 4, ',', ' ') }}</td>
                                                <td>{{ number_format($tarrif['negative-one'], 4, ',', ' ') }}</td>
                                                <td>{{ number_format($tarrif['water-one'], 4, ',', ' ') }}</td>
                                                <td>{{ number_format($tarrif['power-one'], 4, ',', ' ') }}</td>
                                                <td>{{ number_format($tarrif['trash-one'], 4, ',', ' ') }}</td>
                                            </tr>
                                            <tr>
                                                <td>Максимальный тариф</td>
                                                <td>{{ number_format($tarrif['heat-two'], 4, ',', ' ') }}</td>
                                                <td>{{ number_format($tarrif['drainage-two'], 4, ',', ' ') }}</td>
                                                <td>{{ number_format($tarrif['negative-two'], 4, ',', ' ') }}</td>
                                                <td>{{ number_format($tarrif['water-two'], 4, ',', ' ') }}</td>
                                                <td>{{ number_format($tarrif['power-two'], 4, ',', ' ') }}</td>
                                                <td>{{ number_format($tarrif['trash-two'], 4, ',', ' ') }}</td>
                                            </tr>
                                        </tbody>
                                        @elseif ($info['variant'] == "many")
                                            <tbody>
                                                <tr>
                                                    <td>Минимальный тариф</td>
                                                    <td>---</td>
                                                    <td>---</td>
                                                    <td>---</td>
                                                    <td>---</td>
                                                    <td>---</td>
                                                    <td>---</td>
                                                </tr>
                                                <tr>
                                                    <td>Максимальный тариф</td>
                                                    <td>---</td>
                                                    <td>---</td>
                                                    <td>---</td>
                                                    <td>---</td>
                                                    <td>---</td>
                                                    <td>---</td>
                                                </tr>
                                            </tbody>
                                        @endif
                                    </table>
                                </div> 
                            </br>
                            <h2 class="account__content--title h3 mb-20">Год: @foreach ($year as $y) {{$y}}, @endforeach Месяц: @foreach ($mounth as $m) {{$name_mounth[$m]}}, @endforeach</h2>
                            <p>Расшифровка подсветки цифр:</p>
                            <p><b><font color="blue">|||||||</font></b> - Информация отправлена</br>
                                <b><font color="green">|||||||</font></b> - Значения в процессе редактирования</br>
                                <b><font color="red">|||||||</font></b> - Значения не укладываются в диапазон тарифа</br>
                                </br>
                            </p>
                            <div class="account__table--area">
                                <div class="container_fix">
                                <table class="table2">
                                    <thead>
                                        <tr>
                                            <th style="min-width: 80px; width: 80px;">Учреждение</th>
                                            <th style="min-width: 80px; width: 80px;">Статус</th>
                                            <th style="min-width: 200px; width: 200px;" colspan="2">Теплоснабжение</th> 
                                            <th style="min-width: 200px; width: 200px;" colspan="2">Водоотведение</th> 
                                            <th style="min-width: 200px; width: 200px;" colspan="2">Негативное воздействие</th> 
                                            <th style="min-width: 200px; width: 200px;" colspan="2">Водоснабжение</th> 
                                            <th style="min-width: 200px; width: 200px;" colspan="2">Электроснабжение</th> 
                                            <th style="min-width: 200px; width: 200px;" colspan="2">Вывоз мусора</th>    
                                            <th style="min-width: 150px; width: 150px;" rowspan="2">ИТОГО</th> 
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th></th>
                                            <td style="min-width: 100px; width: 100px;"></td>
                                            <td style="min-width: 150px; width: 150px;"><b>Объем</b></td><td style="min-width: 150px; width: 150px;"><b>Сумма</b></td>
                                            <td style="min-width: 150px; width: 150px;"><b>Объем</b></td><td style="min-width: 150px; width: 150px;"><b>Сумма</b></td>
                                            <td style="min-width: 150px; width: 150px;"><b>Объем</b></td><td style="min-width: 150px; width: 150px;"><b>Сумма</b></td>
                                            <td style="min-width: 150px; width: 150px;"><b>Объем</b></td><td style="min-width: 150px; width: 150px;"><b>Сумма</b></td>
                                            <td style="min-width: 150px; width: 150px;"><b>Объем</b></td><td style="min-width: 150px; width: 150px;"><b>Сумма</b></td>
                                            <td style="min-width: 150px; width: 150px;"><b>Объем</b></td><td style="min-width: 150px; width: 150px;"><b>Сумма</b></td>
                                            <td></td>
                                        </tr>
                                        
                                        @if ($info['variant'] == "one")
                                        
                                            @foreach ($info['result'] as $value)                                         
                                                <tr> 
                                                    <input type="hidden" class="id" value="{{ $value['id'] }}">
                                                    <th>{{ $value['user']['name'] }}</th>
                                                    @if ($value['status'] !== 2)                                                       
                                                        <td><font color="blue">Отправлено</td>
                                                        <td><font color="blue">{{ number_format($value['heat-volume'], 4, ',', ' ') }}</td>
                                                        <td><font color="blue">{{ number_format($value['heat-sum'], 2, ',', ' ') }}</td>
                                                        <td><font color="blue">{{ number_format($value['drainage-volume'], 4, ',', ' ') }}</td>
                                                        <td><font color="blue">{{ number_format($value['drainage-sum'], 2, ',', ' ') }}</td>
                                                        <td><font color="blue">{{ number_format($value['negative-volume'], 4, ',', ' ') }}</td>
                                                        <td><font color="blue">{{ number_format($value['negative-sum'], 2, ',', ' ') }}</td>
                                                        <td><font color="blue">{{ number_format($value['water-volume'], 4, ',', ' ') }}</td>
                                                        <td><font color="blue">{{ number_format($value['water-sum'], 2, ',', ' ') }}</td>
                                                        <td><font color="blue">{{ number_format($value['power-volume'], 4, ',', ' ') }}</td>
                                                        <td><font color="blue">{{ number_format($value['power-sum'], 2, ',', ' ') }}</td>
                                                        <td><font color="blue">{{ number_format($value['trash-volume'], 4, ',', ' ') }}</td>
                                                        <td><font color="blue">{{ number_format($value['trash-sum'], 2, ',', ' ') }}</td>                                                
                                                        <td><font color="blue">{{ number_format($value['total'], 2, ',', ' ') }}</td>
                                                    @else
                                                        <td><font color="green">В работе</td>
                                                        @if ($value['heat-volume'] == 0)
                                                            <td><font color="green">{{ number_format($value['heat-volume'], 4, ',', ' ') }}</td>
                                                            <td><font color="green">{{ number_format($value['heat-sum'], 2, ',', ' ') }}</td>
                                                        @else   
                                                            @php
                                                                if($value['heat-sum'] / $value['heat-volume'] >= $tarrif['heat-one'] && 
                                                                $value['heat-sum'] / $value['heat-volume'] <= $tarrif['heat-two']){
                                                                    $color = "green";
                                                                }else{
                                                                    $color = "red";
                                                                }
                                                            @endphp
                                                                <td><font color="{{ $color }}">{{ number_format($value['heat-volume'], 4, ',', ' ') }}</td>
                                                                <td><font color="{{ $color }}">{{ number_format($value['heat-sum'], 2, ',', ' ') }}</td>
                                                        @endif
                                                        
                                                        @if ($value['drainage-volume'] == 0)
                                                            <td><font color="green">{{ number_format($value['drainage-volume'], 4, ',', ' ') }}</td>
                                                            <td><font color="green">{{ number_format($value['drainage-sum'], 2, ',', ' ') }}</td>
                                                        @else   
                                                            @php
                                                                if($value['drainage-sum'] / $value['drainage-volume'] >= $tarrif['drainage-one'] && 
                                                                $value['drainage-sum'] / $value['drainage-volume'] <= $tarrif['drainage-two']){
                                                                    $color = "green";
                                                                }else{
                                                                    $color = "red";
                                                                }
                                                            @endphp
                                                                <td><font color="{{ $color }}">{{ number_format($value['drainage-volume'], 4, ',', ' ') }}</td>
                                                                <td><font color="{{ $color }}">{{ number_format($value['drainage-sum'], 2, ',', ' ') }}</td>
                                                        @endif
                                                        
                                                        @if ($value['negative-volume'] == 0)
                                                            <td><font color="green">{{ number_format($value['negative-volume'], 4, ',', ' ') }}</td>
                                                            <td><font color="green">{{ number_format($value['negative-sum'], 2, ',', ' ') }}</td>
                                                        @else   
                                                            @php
                                                                if($value['negative-sum'] / $value['negative-volume'] >= $tarrif['negative-one'] && 
                                                                $value['negative-sum'] / $value['negative-volume'] <= $tarrif['negative-two']){
                                                                    $color = "green";
                                                                }else{
                                                                    $color = "red";
                                                                }
                                                            @endphp
                                                                <td><font color="{{ $color }}">{{ number_format($value['negative-volume'], 4, ',', ' ') }}</td>
                                                                <td><font color="{{ $color }}">{{ number_format($value['negative-sum'], 2, ',', ' ') }}</td>
                                                        @endif
                                                        
                                                        @if ($value['water-volume'] == 0)
                                                            <td><font color="green">{{ number_format($value['water-volume'], 4, ',', ' ') }}</td>
                                                            <td><font color="green">{{ number_format($value['water-sum'], 2, ',', ' ') }}</td>
                                                        @else   
                                                            @php
                                                                if($value['water-sum'] / $value['water-volume'] >= $tarrif['water-one'] && 
                                                                $value['water-sum'] / $value['water-volume'] <= $tarrif['water-two']){
                                                                    $color = "green";
                                                                }else{
                                                                    $color = "red";
                                                                }
                                                            @endphp
                                                                <td><font color="{{ $color }}">{{ number_format($value['water-volume'], 4, ',', ' ') }}</td>
                                                                <td><font color="{{ $color }}">{{ number_format($value['water-sum'], 2, ',', ' ') }}</td>
                                                        @endif
                                                        
                                                        @if ($value['power-volume'] == 0)
                                                            <td><font color="green">{{ number_format($value['power-volume'], 4, ',', ' ') }}</td>
                                                            <td><font color="green">{{ number_format($value['power-sum'], 2, ',', ' ') }}</td>
                                                        @else   
                                                            @php
                                                                if($value['power-sum'] / $value['power-volume'] >= $tarrif['power-one'] && 
                                                                $value['power-sum'] / $value['power-volume'] <= $tarrif['power-two']){
                                                                    $color = "green";
                                                                }else{
                                                                    $color = "red";
                                                                }
                                                            @endphp
                                                                <td><font color="{{ $color }}">{{ number_format($value['power-volume'], 4, ',', ' ') }}</td>
                                                                <td><font color="{{ $color }}">{{ number_format($value['power-sum'], 2, ',', ' ') }}</td>
                                                        @endif
                                                        
                                                        @if ($value['trash-volume'] == 0)
                                                            <td><font color="green">{{ number_format($value['trash-volume'], 4, ',', ' ') }}</td>
                                                            <td><font color="green">{{ number_format($value['trash-sum'], 2, ',', ' ') }}</td>
                                                        @else   
                                                            @php
                                                                if($value['trash-sum'] / $value['trash-volume'] >= $tarrif['trash-one'] && 
                                                                $value['trash-sum'] / $value['trash-volume'] <= $tarrif['trash-two']){
                                                                    $color = "green";
                                                                }else{
                                                                    $color = "red";
                                                                }
                                                            @endphp
                                                                <td><font color="{{ $color }}">{{ number_format($value['trash-volume'], 4, ',', ' ') }}</td>
                                                                <td><font color="{{ $color }}">{{ number_format($value['trash-sum'], 2, ',', ' ') }}</td>
                                                        @endif                                               
                                                        <td><font color="green">{{ number_format($value['total'], 2, ',', ' ') }}</td>
                                                    @endif
                                                </tr>
                                            @endforeach
                                            
                                        @elseif ($info['variant'] == "many")
                                            @foreach ($info['result'] as $value)
                                                <tr>
                                                    <th>{{ $value['user']['name'] }}</th>
                                                    <td></td>
                                                    <td><font color="blue">{{ number_format($value['heat_volume'], 4, ',', ' ') }}</td>
                                                    <td><font color="blue">{{ number_format($value['heat_sum'], 2, ',', ' ') }}</td>
                                                    <td><font color="blue">{{ number_format($value['drainage_volume'], 4, ',', ' ') }}</td>
                                                    <td><font color="blue">{{ number_format($value['drainage_sum'], 2, ',', ' ') }}</td>
                                                    <td><font color="blue">{{ number_format($value['negative_volume'], 4, ',', ' ') }}</td>
                                                    <td><font color="blue">{{ number_format($value['negative_sum'], 2, ',', ' ') }}</td>
                                                    <td><font color="blue">{{ number_format($value['water_volume'], 4, ',', ' ') }}</td>
                                                    <td><font color="blue">{{ number_format($value['water_sum'], 2, ',', ' ') }}</td>
                                                    <td><font color="blue">{{ number_format($value['power_volume'], 4, ',', ' ') }}</td>
                                                    <td><font color="blue">{{ number_format($value['power_sum'], 2, ',', ' ') }}</td>
                                                    <td><font color="blue">{{ number_format($value['trash_volume'], 4, ',', ' ') }}</td>
                                                    <td><font color="blue">{{ number_format($value['trash_sum'], 2, ',', ' ') }}</td>
                                                    <td><font color="blue">{{ number_format($value['total'], 2, ',', ' ') }}</td>
                                                </tr>
                                            @endforeach
                                        @endif 
                                        <tr>
                                            <th class="col-id-no" scope="row"><b>ИТОГО</b></th>
                                            <td></td>
                                            <td><font color="blue">{{ number_format($total['heat_volume'], 4, ',', ' ') }}</td>
                                            <td><font color="blue">{{ number_format($total['heat_sum'], 2, ',', ' ') }}</td>
                                            <td><font color="blue">{{ number_format($total['drainage_volume'], 4, ',', ' ') }}</td>
                                            <td><font color="blue">{{ number_format($total['drainage_sum'], 2, ',', ' ') }}</td>
                                            <td><font color="blue">{{ number_format($total['negative_volume'], 4, ',', ' ') }}</td>
                                            <td><font color="blue">{{ number_format($total['negative_sum'], 2, ',', ' ') }}</td>
                                            <td><font color="blue">{{ number_format($total['water_volume'], 4, ',', ' ') }}</td>
                                            <td><font color="blue">{{ number_format($total['water_sum'], 2, ',', ' ') }}</td>
                                            <td><font color="blue">{{ number_format($total['power_volume'], 4, ',', ' ') }}</td>
                                            <td><font color="blue">{{ number_format($total['power_sum'], 2, ',', ' ') }}</td>
                                            <td><font color="blue">{{ number_format($total['trash_volume'], 4, ',', ' ') }}</td>
                                            <td><font color="blue">{{ number_format($total['trash_sum'], 2, ',', ' ') }}</td>
                                            <td><font color="blue">{{ number_format($total['total'], 2, ',', ' ') }}</td>
                                        </tr>
                                    </tbody>
                                    
                                </table>
                                </div>    
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
