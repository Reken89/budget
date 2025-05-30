
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Смета 2024</title>
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
                        <h2 class="main__logo--title"><a>Таблица смета 2024</a></h2>
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
                <form id="smeta" action="/budget/public/admin/count24" method="get"> 
                
                <section class="shipping__section">
            <div class="container">
                <p>Описание функций кнопок:</p>
                <p><b><u>Сформировать</u></b> - Формирует таблицу, за выбранный год и раздел</br>
                    <b><u>Прогноз</u></b> - Заполняет значения коммунальных услуг, данными из таблицы прогноза</br>
                    <b><u>Синхронизация</u></b> - Заполняет таблицы за 2026г. и 2027г. значениями из таблицы 2025г.</br>
                    <b><u>Excel</u></b> - Выгрузка таблицы за выбранный год в excel файл</br>
                    *** Обратите внимание, если у централизованной бухгалтерии, цифры красного цвета, значит они ещё редактируют информацию...
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
                                    <label class="widget__form--check__label" for="check7">2026</label>
                                    <input class="widget__form--check__input" name="year" value="2026" type="checkbox">
                                    <span class="widget__form--checkmark"></span>
                                </li>
                                <li class="widget__form--check__list">
                                    <label class="widget__form--check__label" for="check8">2027</label>
                                    <input class="widget__form--check__input" name="year" value="2027" type="checkbox">
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
                                    <label class="widget__form--check__label" for="check6">Администрация</label>
                                    <input class="widget__form--check__input" name="variant" value="1" type="checkbox">
                                    <span class="widget__form--checkmark"></span>
                                </li>
                                <li class="widget__form--check__list">
                                    <label class="widget__form--check__label" for="check7">ОМСУ</label>
                                    <input class="widget__form--check__input" name="variant" value="2" type="checkbox">
                                    <span class="widget__form--checkmark"></span>
                                </li>
                                <li class="widget__form--check__list">
                                    <label class="widget__form--check__label" for="check8">ЦБ и Закупки</label>
                                    <input class="widget__form--check__input" name="variant" value="3" type="checkbox">
                                    <span class="widget__form--checkmark"></span>
                                </li>
                                <li class="widget__form--check__list">
                                    <label class="widget__form--check__label" for="check9">Детские сады</label>
                                    <input class="widget__form--check__input" name="variant" value="4" type="checkbox">
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
                                    <label class="widget__form--check__label" for="check10">ДХШ и ДМШ</label>
                                    <input class="widget__form--check__input" name="variant" value="5" type="checkbox">
                                    <span class="widget__form--checkmark"></span>
                                </li>
                                <li class="widget__form--check__list">
                                    <label class="widget__form--check__label" for="check10">ВСОШ</label>
                                    <input class="widget__form--check__input" name="variant" value="6" type="checkbox">
                                    <span class="widget__form--checkmark"></span>
                                </li>
                                <li class="widget__form--check__list">
                                    <label class="widget__form--check__label" for="check10">КУМС</label>
                                    <input class="widget__form--check__input" name="variant" value="7" type="checkbox">
                                    <span class="widget__form--checkmark"></span>
                                </li>
                                <li class="widget__form--check__list">
                                    <label class="widget__form--check__label" for="check10">Итого</label>
                                    <input class="widget__form--check__input" name="variant" value="8" type="checkbox">
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
                        <button style="width:200px;height:50px" name="formSubmit" id="nothing" class="primary__btn price__filter--btn" type="button">Прогноз</button>
                        </br>
                        <br>
                        <button style="width:200px;height:50px" name="formSubmit" id="nothing" class="primary__btn price__filter--btn" type="button">Синхронизация</button>
                        </br>
                        
                        <br>
                        <form action="/budget/public/admin/count24/export" method="get">
                            <button type="submit" style="width:200px;height:50px" class="primary__btn price__filter--btn">EXCEL</button>
                        </form>
                        </br>

                        </div>
                    </div>
                </div>
                
                </div>                   
        </section>
                
                <div class="my__account--section__inner border-radius-10 d-flex">
                    <div class="account__wrapper">
                        <div class="account__content">
                            
                            <div class="account__table--area"> 
                                <p>Расшифровка подсветки цифр:</p>
                                <b><font color="green">|||||||</font></b> - <u>Централизованная бухгалтерия завершила работу</u></br>
                                <b><font color="red">|||||||</font></b> - <u>Централизованная бухгалтерия ещё заполняет информацию</u></br>
                                </br>
                                <p><b>Выбранный год: {{ $info['year'] }}</b> </p>  
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

<!-- Content -->
@include('layouts.version')
<script>
    $(document).ready(function(){ 
        //Выполняем запись в БД при нажатии на клавишу ENTER
        function setKeydownmyForm() {
            $('input').keydown(function(e) {
                if (e.keyCode === 13) {
                    var td = this.closest('td');
                    var id = $('.id', td).val(); 
                   
                    //Получаем значения, меняем запятую на точку и убираем пробелы в числе                   
                    function structure(title){
                        var volume = $(title, td).val();
                        //Меняем запятую на точку
                        //Убираем лишние пробелы
                        //Выполняем арифметические действия в строке
                        var volume = volume.replace(/\,/g,'.');
                        var volume = volume.replace(/ /g,'');
                        var volume = eval(volume);
                        return volume;
                    }
                    
                    var sum = structure('.sum');
                                        
                    $.ajax({
                        url:"/budget/public/admin/count24/update",  
                        method:"patch",  
                        data:{
                            "_token": "{{ csrf_token() }}",
                            id, sum
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
            var variant = form['variant'];
            
            $.ajax({  
                url:"/budget/public/admin/count24/table",  
                method:"GET",
                data:{
                    year, variant
                },
                dataType:"text", 
                success:function(data){  
                    $('#table').html(data);  
                    setKeydownmyForm()
                }   
            });  
        } 
        fetch_data();
        
        //Действие при нажатии кнопки (синхронизация communal)
        $(document).on('click', '#communal', function(){
            $.ajax({
                url:"/budget/public/admin/count24/communal",  
                method:"get",   
                success:function(data){
                    fetch_data(); 
                    alert(data);                    	
                    location.reload();
                } 
            })                                                     
        }) 
        
        //Действие при нажатии кнопки 
        //Заполнение 2026 и 2027 года
        $(document).on('click', '#synch', function(){
            $.ajax({
                url:"/budget/public/admin/count24/synch",  
                method:"get",   
                success:function(data){
                    fetch_data(); 
                    alert(data);                    	
                    location.reload();
                } 
            })                                                     
        }) 
        
        //Заглушка
        $(document).on('click', '#nothing', function(){
            let message = "Функция отключена!";
            alert(message);                                                      
        }) 
    });
</script>

</body>
</html>
