@php
    //var_dump($info['forecast']);
@endphp

@include('layouts.tableprognoz')
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Прогноз коммунальных услуг</title>
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
   <link rel="stylesheet" href="{{ asset('assets/css/style3.css') }}">
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
                        <h2 class="main__logo--title"><a>Прогноз коммунальных услуг</a></h2>
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
                <div class="my__account--section__inner border-radius-10 d-flex">                                    
                    <div class="account__wrapper">
                        <div class="account__content">
                            <h2 class="account__content--title h3 mb-20">Таблица контроля ошибок модуля "Коммунальные услуги"</h2>
                            <div class="account__table--area">
                                <table class="table align-middle mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th style="min-width: 80px; width: 80px;">Год</th>
                                            <th style="min-width: 100px; width: 100px;">Январь</th>
                                            <th style="min-width: 100px; width: 100px;">Февраль</th>
                                            <th style="min-width: 100px; width: 100px;">Март</th>
                                            <th style="min-width: 100px; width: 100px;">Апрель</th>
                                            <th style="min-width: 100px; width: 100px;">Май</th>
                                            <th style="min-width: 100px; width: 100px;">Июнь</th>
                                            <th style="min-width: 100px; width: 100px;">Июль</th>
                                            <th style="min-width: 100px; width: 100px;">Август</th>
                                            <th style="min-width: 100px; width: 100px;">Сентябрь</th>
                                            <th style="min-width: 100px; width: 100px;">Октябрь</th>
                                            <th style="min-width: 100px; width: 100px;">Ноябрь</th>
                                            <th style="min-width: 100px; width: 100px;">Декабрь</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><b>2024</b></td>
                                            @php $mounth = 0; @endphp
                                            @foreach ($info['examin']['2024'] as $value)
                                                @php $mounth++; @endphp
                                                @if ($value == 'true')
                                                <td><span class="badge bg-gradient-bloody text-white shadow-sm w-100"><a class="header__info--link" href="{{ route('detailing', [2024, $mounth])}}" target="_blank">ошибка</a></span></td>
                                                @else
                                                <td><span class="badge bg-gradient-quepal text-white shadow-sm w-100"><a class="header__info--link" href="{{ route('detailing', [2024, $mounth])}}" target="_blank">отлично</a></span></td>
                                                @endif
                                            @endforeach
                                        </tr>  
                                        <tr>
                                            <td><b>2025</b></td>
                                            @php $mounth = 0; @endphp
                                            @foreach ($info['examin']['2025'] as $value)
                                                @php $mounth++; @endphp
                                                @if ($value == 'true')
                                                <td><span class="badge bg-gradient-bloody text-white shadow-sm w-100"><a class="header__info--link" href="{{ route('detailing', [2025, $mounth])}}" target="_blank">ошибка</a></span></td>
                                                @else
                                                <td><span class="badge bg-gradient-quepal text-white shadow-sm w-100"><a class="header__info--link" href="{{ route('detailing', [2025, $mounth])}}" target="_blank">отлично</a></span></td>
                                                @endif
                                            @endforeach
                                        </tr> 
                                    </tbody>
                                </table>	
                            </div>
                            <p><font color="red">Для просмотра детализации статуса, необходимо нажать на ячейку статуса</font></p>
                        </div>
                    </div>
                </div>
            </div>  
            </br>
            <div class="container2">
                <div class="row">
                <div class="col-lg-6">    
                <div class="my__account--section__inner border-radius-10 d-flex">                                    
                    <div class="account__wrapper">
                        <div class="account__content">                              
                            <h2 class="account__content--title h3 mb-20">Таблица тарифов</h2>
                            <div class="account__table--area">
                                <table style="min-width: 200px; width: 200px;" class="table align-middle mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th style="min-width: 50px; width: 50px;">Тарифы</th>
                                            <th style="min-width: 50px; width: 50px;">Первое полугодие</th>
                                            <th style="min-width: 50px; width: 50px;">Второе полугодие</th>
                                            <th style="min-width: 50px; width: 50px;">Дата обновления тарифа</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><b>Теплоснабжение</b></td>
                                            <input type="hidden" class="id" value="{{ $info['tarrif'][0]['id'] }}">
                                            <td><input type="text" class="tarrif_one" value="{{ number_format($info['tarrif'][0]['tarrif_one'], 3, ',', ' ') }}"></td>
                                            <td><input type="text" class="tarrif_two" value="{{ number_format($info['tarrif'][0]['tarrif_two'], 3, ',', ' ') }}"></td>
                                            <td>{{ $info['tarrif'][0]['date'] }}</td>
                                        </tr>   
                                        <tr>
                                            <td><b>Водоснабжение</b></td>
                                            <input type="hidden" class="id" value="{{ $info['tarrif'][1]['id'] }}">
                                            <td><input type="text" class="tarrif_one" value="{{ number_format($info['tarrif'][1]['tarrif_one'], 3, ',', ' ') }}"></td>
                                            <td><input type="text" class="tarrif_two" value="{{ number_format($info['tarrif'][1]['tarrif_two'], 3, ',', ' ') }}"></td>
                                            <td>{{ $info['tarrif'][1]['date'] }}</td>
                                        </tr>
                                        <tr>
                                            <td><b>Водоотведение</b></td>
                                            <input type="hidden" class="id" value="{{ $info['tarrif'][2]['id'] }}">
                                            <td><input type="text" class="tarrif_one" value="{{ number_format($info['tarrif'][2]['tarrif_one'], 3, ',', ' ') }}"></td>
                                            <td><input type="text" class="tarrif_two" value="{{ number_format($info['tarrif'][2]['tarrif_two'], 3, ',', ' ') }}"></td>
                                            <td>{{ $info['tarrif'][2]['date'] }}</td>
                                        </tr>
                                        <tr>
                                            <td><b>Электроснабжение</b></td>
                                            <input type="hidden" class="id" value="{{ $info['tarrif'][3]['id'] }}">
                                            <td><input type="text" class="tarrif_one" value="{{ number_format($info['tarrif'][3]['tarrif_one'], 3, ',', ' ') }}"></td>
                                            <td><input type="text" class="tarrif_two" value="{{ number_format($info['tarrif'][3]['tarrif_two'], 3, ',', ' ') }}"></td>
                                            <td>{{ $info['tarrif'][3]['date'] }}</td>
                                        </tr>
                                        <tr>
                                            <td><b>Вывоз мусора</b></td>
                                            <input type="hidden" class="id" value="{{ $info['tarrif'][4]['id'] }}">
                                            <td><input type="text" class="tarrif_one" value="{{ number_format($info['tarrif'][4]['tarrif_one'], 3, ',', ' ') }}"></td>
                                            <td><input type="text" class="tarrif_two" value="{{ number_format($info['tarrif'][4]['tarrif_two'], 3, ',', ' ') }}"></td>
                                            <td>{{ $info['tarrif'][4]['date'] }}</td>
                                        </tr>
                                        <tr>
                                            <td><b>Негативное воздействие</b></td>
                                            <input type="hidden" class="id" value="{{ $info['tarrif'][5]['id'] }}">
                                            <td><input type="text" class="tarrif_one" value="{{ number_format($info['tarrif'][5]['tarrif_one'], 3, ',', ' ') }}"></td>
                                            <td><input type="text" class="tarrif_two" value="{{ number_format($info['tarrif'][5]['tarrif_two'], 3, ',', ' ') }}"></td>
                                            <td>{{ $info['tarrif'][5]['date'] }}</td>
                                        </tr>
                                    </tbody>
                                </table>	
                            </div>   
                            <p><font color="red">Для обновления тарифа необходимо нажать клавишу «ENTER»</font></p>
                        </div>
                    </div>
                </div>    
                </div>
                    <div class="col-lg-6">
                        <div class="about__content">
                            <span class="about__content--subtitle text__secondary mb-20"><u>Инструкция к модулю</u></span>
                            <p class="about__content--desc mb-20">Таблица контроля модуля «Коммунальные услуги». Показывает наличие ошибок, в таблице коммунальных услуг. Красная подсветка ячейки, означает, что какое то учреждение не отправило информацию либо запросило редактирование данных. Зеленая подсветка означает, что ошибок нет.</p>
                            <p class="about__content--desc mb-25">Процесс синхронизации таблицы «Коммунальные услуги» и таблицы «Прогноз», выполняется следующим образом:
                                </br><u>Объем прогноза за первое полугодие</u> = Сумма объема таблицы коммунальные услуги за первое полугодие 2025 года.
                                </br><u>Сумма прогноза за первое полугодие</u> = Сумма объема таблицы коммунальные услуги за первое полугодие 2025 года умноженная на тариф первого полугодия
                                </br><u>Объем прогноза за второе полугодие</u> = Сумма объема таблицы коммунальные услуги за второе полугодие 2024 года.
                                </br><u>Сумма прогноза за второе полугодие</u> = Сумма объема таблицы коммунальные услуги за второе полугодие 2024 года умноженная на тариф второго полугодия                              
                            </p>
                            <p><font color="red">***Важно - при синхронизации таблиц, значения Д.С. "Гномик", "Золотой ключик", "Сказка" добавляются к Д.С. "Кораблик", "Ауринко", "Березка" соответственно</font></p>
                        </div>
                    </div>    
                </div>     
            </div> 
                   
            </br>        
            <section class="shipping__section">
                <div class="container2">
                    <form id="forecast" method="get"> 
                    <div class="shipping__inner style2 d-flex">
                        
                        <div class="shipping__items style2 d-flex align-items-center">
                            <div class="shipping__content">
                                <h2 class="shipping__content--title h3">Раздел</h2>
                                <div class="single__widget widget__bg">
                                <ul class="widget__form--check">
                                    <li class="widget__form--check__list">
                                        <label class="widget__form--check__label" for="check6">Теплоснабжение</label>
                                        <input class="widget__form--check__input" name="title" value="heat" type="checkbox">
                                        <span class="widget__form--checkmark"></span>
                                    </li>
                                    <li class="widget__form--check__list">
                                        <label class="widget__form--check__label" for="check6">Водоснабжение</label>
                                        <input class="widget__form--check__input" name="title" value="water" type="checkbox">
                                        <span class="widget__form--checkmark"></span>
                                    </li>
                                    <li class="widget__form--check__list">
                                        <label class="widget__form--check__label" for="check7">Водоотведение</label>
                                        <input class="widget__form--check__input" name="title" value="drainage" type="checkbox">
                                        <span class="widget__form--checkmark"></span>
                                    </li>
                                </ul>
                                </div>    
                            </div>
                        </div>
                        
                        <div class="shipping__items style2 d-flex align-items-center">
                            <div class="shipping__content">
                                <h2 class="shipping__content--title h3">Раздел</h2>
                                <div class="single__widget widget__bg">
                                <ul class="widget__form--check"> 
                                    <li class="widget__form--check__list">
                                        <label class="widget__form--check__label" for="check8">Электроснабжение</label>
                                        <input class="widget__form--check__input" name="title" value="energy" type="checkbox">
                                        <span class="widget__form--checkmark"></span>
                                    </li>
                                    <li class="widget__form--check__list">
                                        <label class="widget__form--check__label" for="check9">Вывоз мусора</label>
                                        <input class="widget__form--check__input" name="title" value="trash" type="checkbox">
                                        <span class="widget__form--checkmark"></span>
                                    </li>
                                    <li class="widget__form--check__list">
                                        <label class="widget__form--check__label" for="check10">Негативное воздействие</label>
                                        <input class="widget__form--check__input" name="title" value="negative" type="checkbox">
                                        <span class="widget__form--checkmark"></span>
                                    </li>
                                    <li class="widget__form--check__list">
                                        <label class="widget__form--check__label" for="check10">Свод</label>
                                        <input class="widget__form--check__input" name="title" value="all" type="checkbox">
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
                            <button style="width:200px;height:50px" name="formSubmit" id="btn_two" class="primary__btn price__filter--btn" type="button">Синхронизация</button>
                            </br>

                            <br>
                            <form action="/budget/public/forecast25/export" method="get">
                                <button style="width:200px;height:50px" class="primary__btn price__filter--btn" type="submit">Excel</button>
                            </form>
                            
                            </div>
                        </div>
                                                                     
                        <div class="shipping__items style2 d-flex align-items-center">
                            <div class="about__content">
                                <span class="about__content--subtitle text__secondary mb-20"><u>Описание кнопок</u></span>
                            <p class="about__content--desc mb-20"><b>Сформировать -</b> Формирует таблицу прогноза по выбранному разделу</br>
                                <b>Синхронизация -</b> Выполняет синхронизацию таблицы "Коммунальные услуги" с таблицей "Прогноз"</br>
                                <b>Excel -</b> Выгружает сформированную таблицу прогноза в excel формат
                            </p>
                           
                            
                            </div>
                        </div>
                                               
                    </div>
                </div>
            </section>
               
            <div class="container2">
                <div class="my__account--section__inner border-radius-10 d-flex">                                    
                    <div class="account__wrapper">
                        <div class="account__content">
                            @if (count($info['forecast']) < 20)
                                <h2 class="account__content--title h3 mb-20">Таблица прогноза {{ $info['calculator']['service'] }}</h2>
                            @else
                                <h2 class="account__content--title h3 mb-20">Сводная таблица</h2>
                            @endif
                            
                            <p><font color="red">Дата последней синхронизации с таблицей коммунальные услуги <b>{{ $info['forecast'][0]['date'] }}</b></font></p>
                            <div class="account__table--area">
                                @if (count($info['forecast']) < 20)
                                <table class="table align-middle mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th style="min-width: 100px; width: 100px;">Учреждение</th>
                                            <th style="min-width: 100px; width: 100px;">Объем 1-полугодие</th>
                                            <th style="min-width: 100px; width: 100px;">Сумма 1-полугодие</th>
                                            <th style="min-width: 100px; width: 100px;">Объем 2-полугодие</th>
                                            <th style="min-width: 100px; width: 100px;">Сумма 2-полугодие</th>
                                            <th style="min-width: 100px; width: 100px;">Объем за год</th>
                                            <th style="min-width: 100px; width: 100px;">Сумма за год</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($info['forecast'] as $value) 
                                            <tr>
                                                <td>{{ $value['user']['name'] }}</td>
                                                <td>{{ number_format($value['volume_one'], 3, ',', ' ') }}</td>
                                                <td>{{ number_format($value['sum_one'], 2, ',', ' ') }}</td>
                                                <td>{{ number_format($value['volume_two'], 3, ',', ' ') }}</td>
                                                <td>{{ number_format($value['sum_two'], 2, ',', ' ') }}</td>
                                                <td>{{ number_format($value['volume_year'], 3, ',', ' ') }}</td>
                                                <td>{{ number_format($value['sum_year'], 2, ',', ' ') }}</td>
                                            </tr>
                                        @endforeach
                                        <tr>
                                            <td><b>Итого</b></td>
                                            <td><b>{{ number_format($info['calculator']['total']['volume_one'], 3, ',', ' ') }}</b></td>
                                            <td><b>{{ number_format($info['calculator']['total']['sum_one'], 2, ',', ' ') }}</b></td>
                                            <td><b>{{ number_format($info['calculator']['total']['volume_two'], 3, ',', ' ') }}</b></td>
                                            <td><b>{{ number_format($info['calculator']['total']['sum_two'], 2, ',', ' ') }}</b></td>
                                            <td><b>{{ number_format($info['calculator']['total']['volume_year'], 3, ',', ' ') }}</b></td>
                                            <td><b>{{ number_format($info['calculator']['total']['sum_year'], 2, ',', ' ') }}</b></td>
                                        </tr>    
                                    </tbody>
                                </table>
                                @else
                                <div class="container_fix2">
                                    <table class="table2">
                                        <thead>
                                            <tr>
                                                <th style="min-width: 150px; width: 150px;">Учреждение</th>
                                                <th style="min-width: 200px; width: 200px;" colspan="2">Теплоснабжение</th>
                                                <th style="min-width: 200px; width: 200px;" colspan="2">Водоснабжение</th>
                                                <th style="min-width: 200px; width: 200px;" colspan="2">Водоотведение</th>
                                                <th style="min-width: 200px; width: 200px;" colspan="2">Электроснабжение</th>
                                                <th style="min-width: 200px; width: 200px;" colspan="2">Вывоз мусора</th>
                                                <th style="min-width: 200px; width: 200px;" colspan="2">Негативное воздействие</th>
                                                <th style="min-width: 150px; width: 150px;">Итоговая сумма</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td style="min-width: 140px; width: 140px;"><b>Объем</b></td><td style="min-width: 140px; width: 140px;"><b>Сумма</b></td>
                                                <td style="min-width: 140px; width: 140px;"><b>Объем</b></td><td style="min-width: 140px; width: 140px;"><b>Сумма</b></td>
                                                <td style="min-width: 140px; width: 140px;"><b>Объем</b></td><td style="min-width: 140px; width: 140px;"><b>Сумма</b></td>
                                                <td style="min-width: 140px; width: 140px;"><b>Объем</b></td><td style="min-width: 140px; width: 140px;"><b>Сумма</b></td>
                                                <td style="min-width: 140px; width: 140px;"><b>Объем</b></td><td style="min-width: 140px; width: 140px;"><b>Сумма</b></td>
                                                <td style="min-width: 140px; width: 140px;"><b>Объем</b></td><td style="min-width: 140px; width: 140px;"><b>Сумма</b></td>
                                                <td></td>
                                            </tr>
                                            @for ($i = 0; $i < count($info['forecast']) - 1; $i++)
                                                @if(($i % 6) == 0 || $i == 0)
                                                <tr>
                                                    <td>{{ $info['forecast'][$i]['user']['name'] }}</td>
                                                    <td>{{ number_format($info['forecast'][$i]['volume_year'], 3, ',', ' ') }}</td>
                                                    <td>{{ number_format($info['forecast'][$i]['sum_year'], 2, ',', ' ') }}</td>
                                                    <td>{{ number_format($info['forecast'][$i+1]['volume_year'], 3, ',', ' ') }}</td>
                                                    <td>{{ number_format($info['forecast'][$i+1]['sum_year'], 2, ',', ' ') }}</td>
                                                    <td>{{ number_format($info['forecast'][$i+2]['volume_year'], 3, ',', ' ') }}</td>
                                                    <td>{{ number_format($info['forecast'][$i+2]['sum_year'], 2, ',', ' ') }}</td>
                                                    <td>{{ number_format($info['forecast'][$i+3]['volume_year'], 3, ',', ' ') }}</td>
                                                    <td>{{ number_format($info['forecast'][$i+3]['sum_year'], 2, ',', ' ') }}</td>
                                                    <td>{{ number_format($info['forecast'][$i+4]['volume_year'], 3, ',', ' ') }}</td>
                                                    <td>{{ number_format($info['forecast'][$i+4]['sum_year'], 2, ',', ' ') }}</td>
                                                    <td>{{ number_format($info['forecast'][$i+5]['volume_year'], 3, ',', ' ') }}</td>
                                                    <td>{{ number_format($info['forecast'][$i+5]['sum_year'], 2, ',', ' ') }}</td>
                                                    <td>{{ number_format($info['forecast'][$i]['sum_year'] + $info['forecast'][$i+1]['sum_year'] + $info['forecast'][$i+2]['sum_year'] + $info['forecast'][$i+3]['sum_year'] + $info['forecast'][$i+4]['sum_year'] + $info['forecast'][$i+5]['sum_year'], 2, ',', ' ') }}</td>
                                                </tr>
                                                @endif
                                            @endfor
                                            <tr>
                                                <td><b>Итого</b></td>
                                                <td><b>{{ number_format($info['calculator']['vault']['volume_heat'], 3, ',', ' ') }}</b></td>
                                                <td><b>{{ number_format($info['calculator']['vault']['sum_heat'], 2, ',', ' ') }}</b></td>
                                                <td><b>{{ number_format($info['calculator']['vault']['volume_water'], 3, ',', ' ') }}</b></td>
                                                <td><b>{{ number_format($info['calculator']['vault']['sum_water'], 2, ',', ' ') }}</b></td>
                                                <td><b>{{ number_format($info['calculator']['vault']['volume_drainage'], 3, ',', ' ') }}</b></td>
                                                <td><b>{{ number_format($info['calculator']['vault']['sum_drainage'], 2, ',', ' ') }}</b></td>
                                                <td><b>{{ number_format($info['calculator']['vault']['volume_energy'], 3, ',', ' ') }}</b></td>
                                                <td><b>{{ number_format($info['calculator']['vault']['sum_energy'], 2, ',', ' ') }}</b></td>
                                                <td><b>{{ number_format($info['calculator']['vault']['volume_trash'], 3, ',', ' ') }}</b></td>
                                                <td><b>{{ number_format($info['calculator']['vault']['sum_trash'], 2, ',', ' ') }}</b></td>
                                                <td><b>{{ number_format($info['calculator']['vault']['volume_negative'], 3, ',', ' ') }}</b></td>
                                                <td><b>{{ number_format($info['calculator']['vault']['sum_negative'], 2, ',', ' ') }}</b></td>
                                                <td><b>{{ number_format($info['calculator']['total']['sum_year'], 2, ',', ' ') }}</b></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </section>
        <!-- my account section end -->    
    </main>

    <!-- Start footer section -->
    <div>
        @include('layouts.partsix_footer')
    </div>
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
