@php
    $total = $info['total'][0];
    $year = $info['year'];
    $mounth = $info['mounth'];
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
                            <a class="header__info--link" href="shop.html">ГЛАВНАЯ</a>
                        </li>
                        <li class="header__info--list">
                            <a class="header__info--link" href="mailto:info@example.com">
                                finanse@kostamail.ru</a>
                        </li>
                    </ul>
                    <div class="header__top--right d-flex align-items-center">
                        <ul class="header__top--link d-flex align-items-center">
                            <li class="header__link--menu"><a class="header__link--menu__text" href="wishlist.html">
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
                        <h2 class="main__logo--title"><a>Таблица коммунальных услуг</a></h2>
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

                            <span class="categories__menu--title">Laravel</span>
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
                <p class="account__welcome--text">Выберите нужные параметры и сформируйте таблицу</p>                
                <div class="my__account--section__inner border-radius-10 d-flex">
                    <div class="account__left--sidebar">
                        <div class="single__widget widget__bg">
                            <h2 class="widget__title h3">Год</h2>
                            <ul class="widget__form--check">
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
                        
                        <div class="single__widget widget__bg">
                            <h2 class="widget__title h3">Месяц</h2>
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
                        <button style="width:200px;height:50px" class="primary__btn price__filter--btn" id="btn_one" type="button">Сформировать</button>
                        </br>
                        </form>
                        <br>
                        <button style="width:200px;height:50px" class="primary__btn price__filter--btn" type="submit">Синхронизация</button>
                        </br>
                        <br>
                        <button style="width:200px;height:50px" class="primary__btn price__filter--btn" type="submit">Email</button>
                        </br>
                        <br>
                        <button style="width:200px;height:50px" class="primary__btn price__filter--btn" type="submit">Excel</button>
                        </br>

                    </div>
                
                    <div class="account__wrapper">
                        <div class="account__content">
                            <h2 class="account__content--title h3 mb-20">Год: @foreach ($year as $y) {{$y}}, @endforeach Месяц: @foreach ($mounth as $m) {{$m}}, @endforeach</h2>
                            <div class="account__table--area">
                                <table class="account__table">
                                    <thead class="account__table--header">
                                        <tr class="account__table--header__child">
                                            <th style="min-width: 80px; width: 80px;" class="account__table--header__child--items">Учреждение</th>
                                            <th style="min-width: 80px; width: 80px;" class="account__table--header__child--items">Статус</th>
                                            <th style="min-width: 140px; width: 150px;" colspan="2" class="account__table--header__child--items">Теплоснабжение</th> 
                                            <th style="min-width: 140px; width: 150px;" colspan="2" class="account__table--header__child--items">Водоотведение</th> 
                                            <th style="min-width: 140px; width: 150px;" colspan="2" class="account__table--header__child--items">Негативное воздействие</th> 
                                            <th style="min-width: 140px; width: 150px;" colspan="2" class="account__table--header__child--items">Водоснабжение</th> 
                                            <th style="min-width: 140px; width: 150px;" colspan="2" class="account__table--header__child--items">Электроснабжение</th> 
                                            <th style="min-width: 140px; width: 150px;" colspan="2" class="account__table--header__child--items">Вывоз мусора</th>    
                                            <th style="min-width: 80px; width: 80px;" rowspan="2" class="account__table--header__child--items">ИТОГО</th> 
                                        </tr>
                                    </thead>
                                    <tbody class="account__table--body mobile__none">
                                        <tr class="account__table--body__child">
                                            <td></td>
                                            <td></td>
                                            <td><b>Объем</b></td><td><b>Сумма</b></td>
                                            <td><b>Объем</b></td><td><b>Сумма</b></td>
                                            <td><b>Объем</b></td><td><b>Сумма</b></td>
                                            <td><b>Объем</b></td><td><b>Сумма</b></td>
                                            <td><b>Объем</b></td><td><b>Сумма</b></td>
                                            <td><b>Объем</b></td><td><b>Сумма</b></td>
                                            <td></td>
                                        </tr>
                                        
                                        @if ($info['variant'] == "one")
                                        
                                        @php
                                            $tarrif = $info['tarrif'];
                                        @endphp
                                        <tr>
                                            <input type="hidden" class="id" value="{{ $tarrif['id'] }}">
                                            <td>Диапазон тарифов</td>
                                            <td></td>
                                            <td><input style="min-width: 80px; width: 80px;" type="text" class="heat_one" value="{{ number_format($tarrif['heat-one'], 3, ',', ' ') }}"></td>
                                            <td><input style="min-width: 80px; width: 80px;" type="text" class="heat_two" value="{{ number_format($tarrif['heat-two'], 3, ',', ' ') }}"></td>
                                            <td><input style="min-width: 80px; width: 80px;" type="text" class="drainage_one" value="{{ number_format($tarrif['drainage-one'], 3, ',', ' ') }}"></td>
                                            <td><input style="min-width: 80px; width: 80px;" type="text" class="drainage_two" value="{{ number_format($tarrif['drainage-two'], 3, ',', ' ') }}"></td>
                                            <td><input style="min-width: 80px; width: 80px;" type="text" class="negative_one" value="{{ number_format($tarrif['negative-one'], 3, ',', ' ') }}"></td>
                                            <td><input style="min-width: 80px; width: 80px;" type="text" class="negative_two" value="{{ number_format($tarrif['negative-two'], 3, ',', ' ') }}"></td>
                                            <td><input style="min-width: 80px; width: 80px;" type="text" class="water_one" value="{{ number_format($tarrif['water-one'], 3, ',', ' ') }}"></td>
                                            <td><input style="min-width: 80px; width: 80px;" type="text" class="water_two" value="{{ number_format($tarrif['water-two'], 3, ',', ' ') }}"></td>
                                            <td><input style="min-width: 80px; width: 80px;" type="text" class="power_one" value="{{ number_format($tarrif['power-one'], 3, ',', ' ') }}"></td>
                                            <td><input style="min-width: 80px; width: 80px;" type="text" class="power_two" value="{{ number_format($tarrif['power-two'], 3, ',', ' ') }}"></td>
                                            <td><input style="min-width: 80px; width: 80px;" type="text" class="trash_one" value="{{ number_format($tarrif['trash-one'], 3, ',', ' ') }}"></td>
                                            <td><input style="min-width: 80px; width: 80px;" type="text" class="trash_two" value="{{ number_format($tarrif['trash-two'], 3, ',', ' ') }}"></td>
                                            <td></td>               
                                        </tr>
                                        
                                            @foreach ($info['result'] as $value)                                         
                                                <tr>                                                
                                                    <th>{{ $value['user']['name'] }}</th>
                                                    @if ($value['status'] == 3)
                                                        <td><input type=button class="button" id='btn_two' value='Изменить'></td>
                                                    @elseif ($value['status'] == 1)
                                                        <td>отправлено</td>
                                                    @else
                                                        <td>В работе</td>
                                                    @endif
                                                    <td>{{ number_format($value['heat-volume'], 3, ',', ' ') }}</td>
                                                    <td>{{ number_format($value['heat-sum'], 2, ',', ' ') }}</td>
                                                    <td>{{ number_format($value['drainage-volume'], 3, ',', ' ') }}</td>
                                                    <td>{{ number_format($value['drainage-sum'], 2, ',', ' ') }}</td>
                                                    <td>{{ number_format($value['negative-volume'], 3, ',', ' ') }}</td>
                                                    <td>{{ number_format($value['negative-sum'], 2, ',', ' ') }}</td>
                                                    <td>{{ number_format($value['water-volume'], 3, ',', ' ') }}</td>
                                                    <td>{{ number_format($value['water-sum'], 2, ',', ' ') }}</td>
                                                    <td>{{ number_format($value['power-volume'], 3, ',', ' ') }}</td>
                                                    <td>{{ number_format($value['power-sum'], 2, ',', ' ') }}</td>
                                                    <td>{{ number_format($value['trash-volume'], 3, ',', ' ') }}</td>
                                                    <td>{{ number_format($value['trash-sum'], 2, ',', ' ') }}</td>                                                
                                                    <td>{{ number_format($value['total'], 2, ',', ' ') }}</td>
                                                </tr>

                                            @endforeach
                                        @elseif ($info['variant'] == "many")
                                            @foreach ($info['result'] as $value)
                                                <tr>
                                                    <td>{{ $value['user']['name'] }}</td>
                                                    <td></td>
                                                    <td>{{ number_format($value['heat_volume'], 3, ',', ' ') }}</td>
                                                    <td>{{ number_format($value['heat_sum'], 2, ',', ' ') }}</td>
                                                    <td>{{ number_format($value['drainage_volume'], 3, ',', ' ') }}</td>
                                                    <td>{{ number_format($value['drainage_sum'], 2, ',', ' ') }}</td>
                                                    <td>{{ number_format($value['negative_volume'], 3, ',', ' ') }}</td>
                                                    <td>{{ number_format($value['negative_sum'], 2, ',', ' ') }}</td>
                                                    <td>{{ number_format($value['water_volume'], 3, ',', ' ') }}</td>
                                                    <td>{{ number_format($value['water_sum'], 2, ',', ' ') }}</td>
                                                    <td>{{ number_format($value['power_volume'], 3, ',', ' ') }}</td>
                                                    <td>{{ number_format($value['power_sum'], 2, ',', ' ') }}</td>
                                                    <td>{{ number_format($value['trash_volume'], 3, ',', ' ') }}</td>
                                                    <td>{{ number_format($value['trash_sum'], 2, ',', ' ') }}</td>
                                                    <td>{{ number_format($value['total'], 2, ',', ' ') }}</td>
                                                </tr>
                                            @endforeach
                                        @endif 
                                        <tr>
                                            <td class="col-id-no" scope="row"><b>ИТОГО</b></td>
                                            <td></td>
                                            <td>{{ number_format($total['heat_volume'], 3, ',', ' ') }}</td>
                                            <td>{{ number_format($total['heat_sum'], 2, ',', ' ') }}</td>
                                            <td>{{ number_format($total['drainage_volume'], 3, ',', ' ') }}</td>
                                            <td>{{ number_format($total['drainage_sum'], 2, ',', ' ') }}</td>
                                            <td>{{ number_format($total['negative_volume'], 3, ',', ' ') }}</td>
                                            <td>{{ number_format($total['negative_sum'], 2, ',', ' ') }}</td>
                                            <td>{{ number_format($total['water_volume'], 3, ',', ' ') }}</td>
                                            <td>{{ number_format($total['water_sum'], 2, ',', ' ') }}</td>
                                            <td>{{ number_format($total['power_volume'], 3, ',', ' ') }}</td>
                                            <td>{{ number_format($total['power_sum'], 2, ',', ' ') }}</td>
                                            <td>{{ number_format($total['trash_volume'], 3, ',', ' ') }}</td>
                                            <td>{{ number_format($total['trash_sum'], 2, ',', ' ') }}</td>
                                            <td>{{ number_format($total['total'], 2, ',', ' ') }}</td>
                                        </tr>
                                    </tbody>
                                    
                                </table>
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
                                
                                <li class="footer__widget--menu__list"><a class="footer__widget--menu__text" href="https://kostomuksha-city.ru/">Сайт Костомукшского городского округа</a></li>
                                <li class="footer__widget--menu__list"><a class="footer__widget--menu__text" href="http://minfin.karelia.ru/">Министерство финансов Республики Карелия</a></li>
                                
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="footer__bottom">
            <div class="container">
                <div class="footer__bottom--inenr d-flex justify-content-between align-items-center">
                    <div class="footer__logo">
                        <a class="footer__logo--link" href="index.html"><img src="assets/img/logo/nav-log-light.webp" alt="logo-img"></a>
                    </div>
                    <p class="copyright__content"><span class="text__secondary">© 2023</span> Администрация Костомукшского городского округа</p>
                    <div class="footer__payment">
                        <img src="assets/img/icon/payment-img.webp" alt="payment-img">
                    </div>
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
