
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Отчет 1С</title>
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
                        <h2 class="main__logo--title"><a>Отчет 1С</a></h2>
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
                <form id="1c" action="/budget/public/admin/1c" method="get"> 
                
                <section class="shipping__section">
            <div class="container">
                <p>Описание функций кнопок:</p>
                <p>
                    <b><u>Таблица1</u></b> - Краткое описание таблицы</br>
                    <b><u>Таблица2</u></b> - Краткое описание таблицы</br>
                    <b><u>Таблица3</u></b> - Краткое описание таблицы</br>
                    <b><u>Таблица4</u></b> - Краткое описание таблицы</br>
                    <b><u>Таблица5</u></b> - Краткое описание таблицы</br>
                    <b><u>Таблица6</u></b> - Краткое описание таблицы</br>
                    <b><u>Таблица7</u></b> - Краткое описание таблицы</br>
                    <b><u>Сформировать</u></b> - Формирует таблицу, за выбранный год и раздел</br>
                    <b><u>Открыть/закрыть</u></b> - Открывает или закрывает возможность редактировать для ЦБ</br>
                    <b><u>Excel</u></b> - Выгрузка таблицы за выбранный год в excel файл</br>
                    *** Если таблица выходит за пределы рамки, используйте масштабирование страницы, зажмите левый Ctrl и покрутите колесо мышки</br>
                    *** Обратите внимание, если у централизованной бухгалтерии, цифры красного цвета, значит они ещё редактируют информацию...
                </p>
                <div class="shipping__inner style2 d-flex">
                    <div class="shipping__items style2 d-flex align-items-center">
                        
                        <div class="shipping__content">
                            <h2 class="shipping__content--title h3">Год</h2>
                            <div class="single__widget widget__bg">
                            <ul class="widget__form--check">
                                <li class="widget__form--check__list">
                                    <label class="widget__form--check__label" for="check6">2024</label>
                                    <input class="widget__form--check__input" name="year" value="2024" type="checkbox">
                                    <span class="widget__form--checkmark"></span>
                                </li>
                                <li class="widget__form--check__list">
                                    <label class="widget__form--check__label" for="check7">2025</label>
                                    <input class="widget__form--check__input" name="year" value="2025" type="checkbox">
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
                                    <label class="widget__form--check__label" for="check6">январь</label>
                                    <input class="widget__form--check__input" name="mounth" value="1" type="checkbox">
                                    <span class="widget__form--checkmark"></span>
                                </li>
                                <li class="widget__form--check__list">
                                    <label class="widget__form--check__label" for="check7">февраль</label>
                                    <input class="widget__form--check__input" name="mounth" value="2" type="checkbox">
                                    <span class="widget__form--checkmark"></span>
                                </li>
                                <li class="widget__form--check__list">
                                    <label class="widget__form--check__label" for="check8">март</label>
                                    <input class="widget__form--check__input" name="mounth" value="3" type="checkbox">
                                    <span class="widget__form--checkmark"></span>
                                </li>
                                <li class="widget__form--check__list">
                                    <label class="widget__form--check__label" for="check8">апрель</label>
                                    <input class="widget__form--check__input" name="mounth" value="4" type="checkbox">
                                    <span class="widget__form--checkmark"></span>
                                </li>
                                <li class="widget__form--check__list">
                                    <label class="widget__form--check__label" for="check8">май</label>
                                    <input class="widget__form--check__input" name="mounth" value="5" type="checkbox">
                                    <span class="widget__form--checkmark"></span>
                                </li>
                                <li class="widget__form--check__list">
                                    <label class="widget__form--check__label" for="check8">июнь</label>
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
                                    <label class="widget__form--check__label" for="check8">июль</label>
                                    <input class="widget__form--check__input" name="mounth" value="7" type="checkbox">
                                    <span class="widget__form--checkmark"></span>
                                </li>
                                <li class="widget__form--check__list">
                                    <label class="widget__form--check__label" for="check8">август</label>
                                    <input class="widget__form--check__input" name="mounth" value="8" type="checkbox">
                                    <span class="widget__form--checkmark"></span>
                                </li>
                                <li class="widget__form--check__list">
                                    <label class="widget__form--check__label" for="check8">сентябрь</label>
                                    <input class="widget__form--check__input" name="mounth" value="9" type="checkbox">
                                    <span class="widget__form--checkmark"></span>
                                </li>
                                <li class="widget__form--check__list">
                                    <label class="widget__form--check__label" for="check8">октябрь</label>
                                    <input class="widget__form--check__input" name="mounth" value="10" type="checkbox">
                                    <span class="widget__form--checkmark"></span>
                                </li>
                                <li class="widget__form--check__list">
                                    <label class="widget__form--check__label" for="check8">ноябрь</label>
                                    <input class="widget__form--check__input" name="mounth" value="11" type="checkbox">
                                    <span class="widget__form--checkmark"></span>
                                </li>
                                <li class="widget__form--check__list">
                                    <label class="widget__form--check__label" for="check8">декабрь</label>
                                    <input class="widget__form--check__input" name="mounth" value="12" type="checkbox">
                                    <span class="widget__form--checkmark"></span>
                                </li>
                            </ul>
                            </div>    
                        </div>
                    </div>
                    <div class="shipping__items style2 d-flex align-items-center">
                        
                        <div class="shipping__content">
                            <h2 class="shipping__content--title h3">Учреждения</h2>
                            <div class="single__widget widget__bg">
                            <ul class="widget__form--check">
                                <li class="widget__form--check__list">
                                    <label class="widget__form--check__label" for="check6">Школа 1</label>
                                    <input class="widget__form--check__input" name="user[]" value="3" type="checkbox">
                                    <span class="widget__form--checkmark"></span>
                                </li>
                                <li class="widget__form--check__list">
                                    <label class="widget__form--check__label" for="check7">Школа 2</label>
                                    <input class="widget__form--check__input" name="user[]" value="4" type="checkbox">
                                    <span class="widget__form--checkmark"></span>
                                </li>
                                <li class="widget__form--check__list">
                                    <label class="widget__form--check__label" for="check8">Школа 3</label>
                                    <input class="widget__form--check__input" name="user[]" value="5" type="checkbox">
                                    <span class="widget__form--checkmark"></span>
                                </li>
                                <li class="widget__form--check__list">
                                    <label class="widget__form--check__label" for="check9">Гимназия</label>
                                    <input class="widget__form--check__input" name="user[]" value="7" type="checkbox">
                                    <span class="widget__form--checkmark"></span>
                                </li>    
                                <li class="widget__form--check__list">
                                    <label class="widget__form--check__label" for="check9">ВСОШ</label>
                                    <input class="widget__form--check__input" name="user[]" value="8" type="checkbox">
                                    <span class="widget__form--checkmark"></span>
                                </li>   
                            </ul>
                            </div>    
                        </div>
                    </div>
                    <div class="shipping__items style2 d-flex align-items-center">
                        
                        <div class="shipping__content">
                            <h2 class="shipping__content--title h3">Учреждения</h2>
                            <div class="single__widget widget__bg">
                            <ul class="widget__form--check">                                
                                <li class="widget__form--check__list">
                                    <label class="widget__form--check__label" for="check10">Ауринко</label>
                                    <input class="widget__form--check__input" name="user[]" value="9" type="checkbox">
                                    <span class="widget__form--checkmark"></span>
                                </li>
                                <li class="widget__form--check__list">
                                    <label class="widget__form--check__label" for="check10">Березка</label>
                                    <input class="widget__form--check__input" name="user[]" value="10" type="checkbox">
                                    <span class="widget__form--checkmark"></span>
                                </li>
                                <li class="widget__form--check__list">
                                    <label class="widget__form--check__label" for="check10">Ключик</label>
                                    <input class="widget__form--check__input" name="user[]" value="12" type="checkbox">
                                    <span class="widget__form--checkmark"></span>
                                </li>
                                <li class="widget__form--check__list">
                                    <label class="widget__form--check__label" for="check10">Кораблик</label>
                                    <input class="widget__form--check__input" name="user[]" value="13" type="checkbox">
                                    <span class="widget__form--checkmark"></span>
                                </li>
                                <li class="widget__form--check__list">
                                    <label class="widget__form--check__label" for="check10">Солнышко</label>
                                    <input class="widget__form--check__input" name="user[]" value="15" type="checkbox">
                                    <span class="widget__form--checkmark"></span>
                                </li>
                                <li class="widget__form--check__list">
                                    <label class="widget__form--check__label" for="check10">ЦБ КГО</label>
                                    <input class="widget__form--check__input" name="user[]" value="29" type="checkbox">
                                    <span class="widget__form--checkmark"></span>
                                </li>
                            </ul>
                            </div>    
                        </div>
                    </div>
                    <div class="shipping__items style2 d-flex align-items-center">
                        
                        <div class="shipping__content">
                            <h2 class="shipping__content--title h3">Таблица</h2>
                            <div class="single__widget widget__bg">
                            <ul class="widget__form--check">
                                <li class="widget__form--check__list">
                                    <label class="widget__form--check__label" for="check6">Таблица1</label>
                                    <input class="widget__form--check__input" name="variant" value="1" type="checkbox">
                                    <span class="widget__form--checkmark"></span>
                                </li>
                                <li class="widget__form--check__list">
                                    <label class="widget__form--check__label" for="check7">Таблица2</label>
                                    <input class="widget__form--check__input" name="variant" value="2" type="checkbox">
                                    <span class="widget__form--checkmark"></span>
                                </li>
                                <li class="widget__form--check__list">
                                    <label class="widget__form--check__label" for="check8">Таблица3</label>
                                    <input class="widget__form--check__input" name="variant" value="3" type="checkbox">
                                    <span class="widget__form--checkmark"></span>
                                </li>
                                <li class="widget__form--check__list">
                                    <label class="widget__form--check__label" for="check8">Таблица4</label>
                                    <input class="widget__form--check__input" name="variant" value="4" type="checkbox">
                                    <span class="widget__form--checkmark"></span>
                                </li>
                                <li class="widget__form--check__list">
                                    <label class="widget__form--check__label" for="check8">Таблица5</label>
                                    <input class="widget__form--check__input" name="variant" value="5" type="checkbox">
                                    <span class="widget__form--checkmark"></span>
                                </li>
                                <li class="widget__form--check__list">
                                    <label class="widget__form--check__label" for="check8">Таблица6</label>
                                    <input class="widget__form--check__input" name="variant" value="6" type="checkbox">
                                    <span class="widget__form--checkmark"></span>
                                </li>
                                <li class="widget__form--check__list">
                                    <label class="widget__form--check__label" for="check8">Таблица7</label>
                                    <input class="widget__form--check__input" name="variant" value="7" type="checkbox">
                                    <span class="widget__form--checkmark"></span>
                                </li>
                            </ul>
                            </div>    
                        </div>
                    </div>
                    <div class="shipping__items style2 d-flex align-items-center">
                        
                        <div class="shipping__content">
                            
                        <button style="width:200px;height:50px" class="primary__btn price__filter--btn" type="submit">Сформировать</button>
                        </br>
                        </form>
                                                
                        <br>
                        <form action="#" method="get">
                            <button type="submit" style="width:200px;height:50px" class="primary__btn price__filter--btn">EXCEL</button>
                        </form>
                        
                        @if (count($info['user']) < 2)
                            <br>
                            <form id="status">
                                <input type="hidden" name="year" value="{{ $info['year'] }}">
                                <input type="hidden" name="mounth" value="{{ $info['mounth'] }}">
                                <input type="hidden" name="variant" value="{{ $info['variant'] }}">
                                <input type="hidden" name="user" value="{{ $info['user'][0] }}">
                                <button type="button" style="width:200px;height:50px" id="status" class="primary__btn price__filter--btn">Открыть/Закрыть</button>
                            </form>
                            </br>
                        @endif

                        </div>
                    </div>
                </div>
                
                </div>                   
        </section>
                
                <div class="my__account--section__inner border-radius-10 d-flex">
                    <div class="account__wrapper">
                        <div class="account__content">
                            
                            <div class="account__table--area">   
                                    <div class="container_fix">
                                        <div class="table2">
                                            <div id="table"></div>
                                        </div>    
                                    </div>	                               
                                </br>
                                <p><b>*Для информации:</b> </p>
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

<!-- Content -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
<script>
    $(document).ready(function(){ 
        //Выполняем запись в БД при нажатии на клавишу ENTER
        function setKeydownmyForm() {
            $('input').keydown(function(e) {
                if (e.keyCode === 13) {
                    var tr = this.closest('tr');
                    var year = $('.year', tr).val();
                    var mounth = $('.mounth', tr).val();
                    var indicator = $('.indicator', tr).val();
                    var number = $('.number', tr).val();
                    var variant = $('.variant', tr).val();
                    var user = $('.user', tr).val();
                    
                    //Получаем значения, меняем запятую на точку и убираем пробелы в числе                   
                    function structure(title){
                        var volume = $(title, tr).val();
                        var volume = volume.replace(",",".");
                        var volume = volume.replace(/ /g,'');
                        return volume;
                    }
                    
                    var meaning1 = structure('.meaning1');
                    var meaning2 = structure('.meaning2');
                    var meaning3 = structure('.meaning3');
                    var meaning4 = structure('.meaning4');
                    var meaning5 = structure('.meaning5');
                    var meaning6 = structure('.meaning6');
                    var meaning7 = structure('.meaning7');
                                        
                    $.ajax({
                        url:"/budget/public/admin/1c/update",  
                        method:"patch",  
                        data:{
                            "_token": "{{ csrf_token() }}", year,
                            mounth, indicator, number, variant, user,
                            meaning1, meaning2, meaning3, meaning4,
                            meaning5, meaning6, meaning7
                        },
                        dataType:"text",  
                        success:function(data){
                            fetch_data(); 
                            //alert(data);
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
            var user = form['user'];
            var variant = form['variant'];
            
            $.ajax({  
                url:"/budget/public/admin/1c/table",  
                method:"GET",
                data:{
                    year, mounth, user, variant
                },
                dataType:"text", 
                success:function(data){  
                    $('#table').html(data);  
                    setKeydownmyForm()
                }   
            });  
        } 
        fetch_data();
        
        //Действие при нажатии кнопки (обновляем статус)
        $(document).on('click', '#status', function(){
            let infomany = $('#status').serializeArray();
            let year_many = [];
            let mounth_many = [];
            let user_many = [];
            let variant_many = [];
            
            for (const item of infomany) {
                const value = item.value;
                if (item.name === 'year') {
                    year_many.push(value);
                } else if (item.name === 'mounth') {
                    mounth_many.push(value);
                } else if (item.name === 'user') {
                    user_many.push(value);
                } else if (item.name === 'variant') {
                    variant_many.push(value);
                }
            }
            
            let year = year_many[0];
            let mounth = mounth_many[0];
            let user = user_many[0];
            let variant = variant_many[0];
            
            $.ajax({
                url:"/budget/public/admin/1c/status",  
                method:"patch",  
                data:{
                    "_token": "{{ csrf_token() }}",
                    year, mounth, user, variant
                },
                dataType:"text", 
                success:function(data){
                    fetch_data(); 
                    //alert(user);                    	
                    //location.reload();
                } 
            })                                                     
        }) 
        
    });
</script>

</body>
</html>

