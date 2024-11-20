<!doctype html>
<html class="no-js" lang="zxx">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>Главная страница</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Place favicon.ico in the root directory -->
      <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
      <!-- CSS here -->
      <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/backToTop.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/fontAwesome5Pro.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/default.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
   </head>
   
   <body>
      <!-- back to top start -->
      <div class="progress-wrap">
         <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
         </svg>
      </div>
      <!-- back to top end -->
      
      <!-- header area start -->
      <header>
         <div class="header__area">
            <div class="header__top-4 header__padding-4 d-none d-lg-block">
               <div class="container">
                  <div class="row">
                     <div class="col-xxl-8 col-xl-9 col-lg-10">
                        <div class="header__info-4">
                           <ul>
                              <li>
                                 <div class="header__info-item d-flex align-items-start">
                                    <div class="header__info-icon mr-10">
                                       <i class="flaticon-telephone"></i>
                                    </div>
                                    <div class="header__info-content">
                                       <h4 class="text-rubik">Телефон</h4>
                                       <a href="tel:89116625478">8 911 662 54 78</a>
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <div class="header__info-item d-flex align-items-start">
                                    <div class="header__info-icon mr-10">
                                       <i class="flaticon-mail-inbox-app"></i>
                                    </div>
                                    <div class="header__info-content">
                                       <h4 class="text-rubik">Электронная почта</h4>
                                       <a href="mailto:finanse@kostamail.ru">finanse@kostamail.ru</a>
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <div class="header__info-item d-flex align-items-start">
                                    <div class="header__info-icon mr-10">
                                       <i class="flaticon-maps-and-flags"></i>
                                    </div>
                                    <div class="header__info-content">
                                       <h4 class="text-rubik">Адрес</h4>
                                       <a target="_blank" href="https://yandex.ru/maps/10935/kostomucsha/?ll=30.607753%2C64.582614&mode=poi&poi%5Bpoint%5D=30.606540%2C64.582454&poi%5Buri%5D=ymapsbm1%3A%2F%2Forg%3Foid%3D136058229664&z=16.4">Администрация ФЭУ</a>
                                    </div>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>

                  </div>
               </div>
            </div>
            <div class="header__bottom-4">
               <div class="container">
                  <div class="header__bottom-wrapper-4 black-bg-2 p-relative z-index-1">
                     <div class="row align-items-center">
                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-4 col-6">
                           <div class="logo">
                              <a href="/budget/public/home">
                                 <img src="{{ asset('assets/img/logo/logo-4.png') }}" alt="">
                              </a>
                           </div>
                        </div>
                        <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-8 col-sm-8 col-6">
                           <div class="header__bottom-right-4 d-flex justify-content-end align-items-center">
                              <div class="main-menu main-menu-4 mr-40">
                                 <nav id="mobile-menu">
                                    <ul>
                                       <li>
                                          <a href="#">Модули<i class="fal fa-plus"></i></a>
                                          <ul class="submenu">
                                             @if ($role == "admin")
                                             <li>
                                                 <form action="{{ route('admincommunal')}}" method="get">
                                                    <input type='hidden' name='year[]' value='2023'>
                                                    <input type='hidden' name='mounth[]' value='5'>
                                                    <button type="submit">Коммунальные услуги</button>
                                                </form>
                                             </li>                                           
                                             <li>
                                                <form action="{{ route('adminofs')}}" method="get">
                                                    <button type="submit">ОФС 2023</button>
                                                </form>
                                             </li>
                                             <li>
                                                <form action="{{ route('adminofs2024')}}" method="get">
                                                    <button type="submit" class="custom-btn btn-16">ОФС 2024</button>
                                                </form>
                                             </li>  
                                             <li>
                                                 <form action="{{ route('ofs25')}}" method="get">
                                                    <button type="submit" class="custom-btn btn-16">ОФС 2025</button>
                                                </form>
                                             </li>
                                             <li>
                                                <form action="{{ route('forecast')}}" method="get">
                                                    <input type='hidden' name='chapter' value='heat'>
                                                    <button type="submit" class="custom-btn btn-16">Прогноз коммуналки</button>
                                                </form>
                                             </li>
                                             <li>
                                                <form action="{{ route('admincount')}}" method="get">
                                                    <input type='hidden' name='variant' value='1'>
                                                    <input type='hidden' name='year' value='2024'>
                                                    <button type="submit" class="custom-btn btn-16">Смета 2023 год</button>
                                                </form>
                                             </li>  
                                             <li>
                                                <form action="{{ route('admincount24')}}" method="get">
                                                    <input type='hidden' name='variant' value='5'>
                                                    <input type='hidden' name='year' value='2025'>
                                                    <button type="submit" class="custom-btn btn-16">Смета 2024 год</button>
                                                </form>
                                             </li>
                                             <li>                                               
                                                <button type="button" id='admin' class="custom-btn btn-16">Администратор</button>
                                                @include('layouts.version')
                                                <script>
                                                    $(document).ready(function(){
                                                        $(document).on('click', '#admin', function(){
                                                            let code = prompt('Введите код доступа!', );
                                                            window.location.href = '/budget/public/adm?code='+code;
                                                        })
                                                    });
                                                </script>
                                             </li>
                                             @elseif ($role == "user")
                                             <li>
                                                 <form action="{{ route('usercommunal')}}" method="get">
                                                    <input type='hidden' name='year' value='2024'>
                                                    <input type='hidden' name='mounth' value='1'>                                                    
                                                    <input type='hidden' name='info' value='no'>
                                                    <button type="submit">Коммунальные услуги</button>
                                                </form>
                                             </li>
                                             @elseif ($role == "cb_buh" || $role == "cb_school" || $role == "cb_kultura" || $role == "cb_kinder")
                                             <li>
                                                 <form action="{{ route('userofs')}}" method="get">
                                                    <button type="submit" class="custom-btn btn-16"><b>ОФС 2023 год<b></button>
                                                </form>
                                             </li>
                                             <li>
                                                 <form action="{{ route('userofs24new')}}" method="get">
                                                    <button type="submit" class="custom-btn btn-16"><b>ОФС 2024 год<b></button>
                                                 </form>
                                             </li>
                                             <li>
                                                 <form action="{{ route('userofs25')}}" method="get">
                                                    <button type="submit" class="custom-btn btn-16"><b>ОФС 2025 год<b></button>
                                                </form>
                                             </li>
                                             <li>
                                                 <form action="{{ route('usercount')}}" method="get">
                                                    <input type='hidden' name='variant' value='1'>
                                                    <input type='hidden' name='year' value='2024'>
                                                    <button type="submit" class="custom-btn btn-16"><b>Смета 2023 год<b></button>
                                                </form>
                                             </li>  
                                             <li>
                                                <form action="{{ route('usercount24')}}" method="get">
                                                    <input type='hidden' name='variant' value='5'>
                                                    <input type='hidden' name='year' value='2025'>
                                                    <button type="submit" class="custom-btn btn-16"><b>Смета 2024 год</b></button>
                                                </form>
                                             </li>                                            
                                             @elseif ($role == "build")
                                             <li>
                                                 <form action="#" method="get">
                                                    <button type="submit" class="custom-btn btn-16"><b>Строительство<b></button>
                                                </form>
                                             </li>
                                             @elseif ($role == "ugkh")
                                             <li>
                                                 <form action="{{ route('ugkh')}}" method="get">
                                                    <input type='hidden' name='year[]' value='2022'>
                                                    <input type='hidden' name='mounth[]' value='1'>
                                                    <button type="submit" class="custom-btn btn-16"><b>Коммунальные услуги<b></button>
                                                 </form>
                                             </li>
                                             @elseif ($role == "delo" || $role == "deloadm")
                                             <li>
                                                 <form action="{{ route('delo', 'out')}}" method="get">
                                                    <button type="submit" class="custom-btn btn-16"><b>Делопроизводство<b></button>
                                                 </form>
                                             </li>
                                             @elseif ($role == "master")
                                             <li>
                                                 <form action="{{ route('stop')}}" method="get">
                                                    <button type="submit" class="custom-btn btn-16"><b>Мастерская<b></button>
                                                 </form>
                                             </li>
                                             @endif
                                          </ul>
                                       </li>

                                       <li>
                                          <a href="/budget/public/contact">Контакты</a>
                                       </li>
                                    </ul>
                                 </nav>
                              </div>

                              <div class="header__btn-4 ml-40 d-none d-sm-block d-lg-none d-xxl-block">
                                 <a href="/budget/public/logout" >Выход</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- header area end -->

      <main>        
         <!-- slider area start -->
         <section class="slider__area slider__height slider__height-4 d-flex align-items-center slider__mt--40 p-relative" data-background="{{ asset('assets/img/slider/4/slider-1.jpg') }}">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-7 col-xl-8">
                     <div class="slider__content-4">
                        <span class="text-popins">Сбор отчетности</span>
                        <h3 class="slider__title-4 text-popins">WEB приложение <span class="slider-title-line"></span></h3>
                        <p>WEB приложение разработано для администрации Костомукшского городского округа</p>

                        <a href="#" class="d-btn-bus">Информация</a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="slider__down">
               <a href="#about-section" class="arrow-down scroll-down"><i class="fal fa-long-arrow-down"></i></a>
            </div>
         </section>
         <!-- slider area end -->

         <!-- about area start -->
         <section id="about-section" class="about__area pt-145 pb-145">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-6 col-xl-6 col-lg-6">
                     <div class="about__thumb-wrapper-4 mr-30 p-relative pb-50">
                        <div class="row">
                           <div class="col-xxl-5 col-xl-5 col-lg-6 col-md-6 col-sm-6">
                              <img class="about__thumb-4-1" src="{{ asset('assets/img/about/4/about-3.jpg') }}" alt="">
                           </div>
                           <div class="col-xxl-7 col-xl-7 col-lg-6 col-md-6 col-sm-6">

                              <img class="about__thumb-4-3" src="{{ asset('assets/img/about/4/about-1.jpg') }}" alt="">
                           </div>
                        </div>
                           <img class="about__thumb-4-2" src="{{ asset('assets/img/about/4/about-2.jpg') }}" alt="">
                        
                     </div>
                  </div>
                  <div class="col-xxl-6 col-xl-6 col-lg-6">
                     <div class="about__wrapper-4 pt-25">
                        <div class="section__title-wrapper-4 mb-45">
                           <span class="section__title-pre-4 text-popins">Про портал</span>
                           <h3 class="section__title-4 text-popins">Отчетность и свод информации <span class="section__title-line">WEB</span> </h3>
                        </div>
                        <p>Портал позволяет собирать отчетность с учреждений, выполняя автоматическую проверку и выгрузку в таблицы</p>

                        <div class="about__features">
                           <div class="row">
                              <div class="col-xxl-6 col-xl-6">
                                 <div class="about__features-item d-flex align-items-start mb-30">
                                    <div class="about__features-icon mr-20">
                                       <i class="flaticon-idea-1"></i>
                                    </div>
                                    <div class="about__features-content">
                                       <h3 class="text-rubik">Разработка</h3>
                                       <p>Администрация Костомукшского городского округа</p>
                                    </div>
                                 </div>
                              </div>

                           </div>
                        </div>
                        <div class="about__btn d-sm-flex align-items-center">
                           <a href="#" class="d-btn-bus mr-30">Подробнее</a>
                           <a href="#" class="play-btn"><i class="flaticon-play-button"></i> Работа  </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- about area end -->      
      </main>

      <!-- footer area start -->
      <footer>
         <div class="footer__area black-bg-2">
            <div class="footer__top mb-35">
               <div class="container">
                  <div class="row">
                     <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-7">
                        <div class="footer__widget footer__info-padding-2">                         
                           <div class="footer__widget-content">
                              <div class="footer__info footer__info-4">
                                 <p>Комплексные решения для всех элементов ИТ</p>

                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-5">
                        <div class="footer__widget footer__widget-padding footer__ml-95">
                           <div class="footer__widget-top">
                              <h3 class="footer__widget-title footer__widget-title-3">Ссылки</h3>
                           </div>
                           <div class="footer__widget-content">
                              <div class="footer__link footer__link-4">
                                 <ul>
                                    <li>
                                       <a href="https://kostomuksha-city.ru/" target="_blank">Официальный сайт Костомукшского городского округа</a>
                                    </li>  
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="footer__bottom-4">
               <div class="container">
                  <div class="row align-items-center">
                     <div class="col-xxl-6 col-xl-6 col-md-6">
                        <div class="footer__copyright footer__copyright-4">
                           <p>© 2019-{{ date("Y") }} Сайт администрации Костомукшского городского округа <a href="index.html"></a></p>
                        </div>
                     </div>

                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- footer area end -->

      <!-- JS here -->
      <script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
      <script src="{{ asset('assets/js/vendor/waypoints.min.js') }}"></script>
      <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('assets/js/meanmenu.js') }}"></script>
      <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
      <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
      <script src="{{ asset('assets/js/magnific-popup.min.js') }}"></script>
      <script src="{{ asset('assets/js/parallax.min.js') }}"></script>
      <script src="{{ asset('assets/js/backToTop.js') }}"></script>
      <script src="{{ asset('assets/js/nice-select.min.js') }}"></script>
      <script src="{{ asset('assets/js/counterup.min.js') }}"></script>
      <script src="{{ asset('assets/js/ajax-form.js') }}"></script>
      <script src="{{ asset('assets/js/wow.min.js') }}"></script>
      <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
      <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
      <script src="{{ asset('assets/js/main.js') }}"></script>
   </body>
</html>
