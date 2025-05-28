@php
    //var_dump($info['communals']);
@endphp

@include('layouts.raiting')
@include('layouts.tableprognoz')
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
                                            <td><b>2025</b></td>
                                            @foreach ($info['examin'] as $value)                                                
                                                @if ($value == 'true')
                                                <td><span class="badge bg-gradient-bloody text-white shadow-sm w-100">---</span></td>
                                                @else
                                                <td><span class="badge bg-gradient-quepal text-white shadow-sm w-100">отлично</span></td>
                                                @endif
                                            @endforeach
                                        </tr>  
                                    </tbody>
                                </table>	
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            </br>
            <div class="container2">
                <div
                class='hidden'
                data-points='{{ $info['points']['points']['points'] }}'
                data-max='{{ $info['points']['max'] }}'
                ></div>

                <div class="row">
                    <div class="col-12 col-lg-4">
                        <div class="card radius-10"> 
                            <div class="card-body">
                                <div id="chart15"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="about__content">
                            <span class="about__content--subtitle text__secondary mb-20"><u>Инструкция к модулю</u></span>                           
                            <p class="about__content--desc mb-25">
                                </br><u>Таблица контроля</u> - показывает состояние информации по коммунальным услугам. Статус отлично означает, что Вы отправили информацию
                                </br><u>Диаграмма рейтинга учреждений</u> - формируется на основании отправленной информации на отчетную дату (17 число месяца). Если информация отправлена в ФЭУ до 17 числа включительно, начисляется +10 к рейтингу.                           
                            </p>
                            <p><font color="red">*** Важно - после каждого 17 числа месяца, портал автоматически ежедневно будет отправлять письма-напоминания о необходимости заполнить информацию, учреждениям которые не отправили информацию.</font></p>
                            <p><font color='red'>*** Обращаем Ваше внимание, что при нажатии кнопки «Редактировать» до 17 числа месяца (включительно), 
                            Вам автоматически будет разрешено, редактировать данные. <u>После 17 числа, только после согласования в ФЭУ</u></font></p>
                        </div>
                    </div>  
                </div>
            </div>
        </section>  
        
        </br>        
        <section class="shipping__section">
            <div class="container2">
                <form id="communal" method="get"> 
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
                                    <label class="widget__form--check__label" for="check7">2022</label>
                                    <input class="widget__form--check__input" name="year" value="2022" type="checkbox">
                                    <span class="widget__form--checkmark"></span>
                                </li>
                                <li class="widget__form--check__list">
                                    <label class="widget__form--check__label" for="check7">2021</label>
                                    <input class="widget__form--check__input" name="year" value="2021" type="checkbox">
                                    <span class="widget__form--checkmark"></span>
                                </li>
                                <li class="widget__form--check__list">
                                    <label class="widget__form--check__label" for="check7">2020</label>
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
                        <form action="/budget/public/user/utilities/web" method="get" target="_blank">
                            <input type='hidden' name='year[]' value='{{ $info['year'][0] }}'>
                            <input type='hidden' name='mounth[]' value='{{ $info['mounth'][0] }}'>
                            <button style="width:200px;height:50px" name="formSubmit" id="" class="primary__btn price__filter--btn" type="submit">WEB форма</button>
                        </form>
                        
                        <br>
                        
                        <form id="status" method="patch"> 
                            <input type='hidden' name='id' value='{{ $info['communals']['id'] }}'> 
                            <input type='hidden' name='status' value='{{ $info['communals']['status'] }}'> 
                            <input type='hidden' name='mounth' value='{{ $info['mounth'][0] }}'> 
                            @if ($info['communals']['status'] == 2)
                                <button style="width:200px;height:50px" class="primary__btn price__filter--btn" id='update_status' type="button">Отправить</button>
                            @else
                                <button style="width:200px;height:50px" class="primary__btn price__filter--btn" id='update_status' type="button">Изменить</button>
                            @endif
                        </form>
                        
                        <br>
                        <form action="/budget/public/user/utilities/export" method="get">
                            <input type='hidden' name='year[]' value='{{ $info['year'][0] }}'>
                            <input type='hidden' name='mounth[]' value='{{ $info['mounth'][0] }}'>
                            <button style="width:200px;height:50px" class="primary__btn price__filter--btn" type="submit">Excel</button>
                        </form>

                        </div>
                    </div>

                    <div class="shipping__items style2 d-flex align-items-center">
                        <div class="about__content">
                            <span class="about__content--subtitle text__secondary mb-20"><u>Описание кнопок</u></span>
                        <p class="about__content--desc mb-20"><b>Сформировать -</b> Формирует таблицу по выбранным параметрам</br>
                            <b>WEB форма -</b> Открывает таблицу (все месяца) за выбранный год в новой вкладке</br>
                            <b>Отправить -</b> Отправить информацию в ФЭУ</br>
                            <b>Изменить -</b> Редактировать информацию</br>
                            <b>Excel -</b> Выгрузка таблицы в excel файл
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
                        <h2 class="account__content--title h3 mb-20">Выбранные параметры: <u>год</u> {{ $info['year'][0] }} <u>месяц</u> {{ $info['mounth_name'][$info['mounth'][0]] }} </h2>
                        <p><u>После ввода каждой цифры, необходимо нажать клавишу «enter»</u></p>
                        <div class="account__table--area">
                            <div id="table"></div>
                        </div>
                        </br>
                        <p><b>*Ваш тариф</b> = Тариф получается в результате деления суммы на объем.</br>
                            Если цифра зеленого цвета, Вы укладываетесь в допустимый диапозон</p>
                    </div>
                </div>
            </div>
        </div> 
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

<script>
    $(document).ready(function(){ 
        //Выполняем запись в БД при нажатии на клавишу ENTER
        function setKeydownmyForm() {
            $('input').keydown(function(e) {
                if (e.keyCode === 13) {
                    var tr = this.closest('tr');
                    var id = $('.id', tr).val();
                    var service = $('.service', tr).val();
                    
                    //Получаем значения, меняем запятую на точку и убираем пробелы в числе                   
                    function structure(title){
                        var volume = $(title, tr).val();
                        var volume = volume.replace(",",".");
                        var volume = volume.replace(/ /g,'');
                        return volume;
                    }
                    
                    var volume = structure('.volume');
                    var sum = structure('.sum');
                                        
                    $.ajax({
                        url:"/budget/public/user/utilities/table/update",  
                        method:"patch",  
                        data:{
                            "_token": "{{ csrf_token() }}",
                            id, service, volume, sum
                        },
                        dataType:"text",  
                        success:function(data){ 
                            //alert(data);
                            fetch_data(); 
                        } 
                    })                   
                }               
            })
        }
       
        //Подгружаем BACK шаблон отрисовки
        function fetch_data(){ 
            var form = <?=json_encode($info)?>;
            var year = form['year'];
            var mounth = form['mounth'];
            
            $.ajax({  
                url:"/budget/public/user/utilities/table/communals",  
                method:"GET",
                data:{
                    year, mounth
                },
                dataType:"text", 
                success:function(data){  
                    $('#table').html(data);  
                    setKeydownmyForm()
                }   
            });  
        } 
        fetch_data();

        
    });
</script>

</body>
</html>


