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
      <link rel="stylesheet" href="{{ asset('assets/css/preloader.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/backToTop.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/fontAwesome5Pro.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/default.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
   </head>
   <body>
      <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->

      <!-- Add your site or application content here -->

      <!-- pre loader area start -->
      <div id="loading">
         <div id="loading-center">
            <div id="loading-center-absolute">
               <div class="object" id="object_one"></div>
               <div class="object" id="object_two" ></div>
               <div class="object" id="object_three"></div>
               <div class="object" id="object_four"></div>
               <div class="object" id="object_five"></div>
            </div>
         </div>
      </div>
      <!-- pre loader area end -->

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
                                       <a href="tel:+1-(555)-4517-0890">8 911 662 54 78</a>
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
                                       <a href="mailto:info@exmaple.com">finanse@kostamail.ru</a>
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
                                       <a target="_blank" href="https://www.google.ru/maps/place/%D1%83%D0%BB.+%D0%9A%D0%B0%D0%BB%D0%B5%D0%B2%D0%B0%D0%BB%D0%B0,+13,+%D0%9A%D0%BE%D1%81%D1%82%D0%BE%D0%BC%D1%83%D0%BA%D1%88%D0%B0,+%D0%A0%D0%B5%D1%81%D0%BF.+%D0%9A%D0%B0%D1%80%D0%B5%D0%BB%D0%B8%D1%8F,+186931/@64.582453,30.6064917,17z/data=!3m1!4b1!4m6!3m5!1s0x4427e084ac24ec9f:0x505e070dfa73708f!8m2!3d64.582453!4d30.6064917!16s%2Fg%2F11c5f781gv?entry=ttu">Администрация ФЭУ</a>
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
                                                    <input type='hidden' name='year[]' value='2022'>
                                                    <input type='hidden' name='mounth[]' value='1'>
                                                    <button type="submit">Коммунальные услуги</button>
                                                </form>
                                             </li>
                                             <li>
                                                <form action="{{ route('adminofs')}}" method="get">
                                                    <input type='hidden' name='year[]' value='2023'>
                                                    <input type='hidden' name='mounth[]' value='1'>
                                                    <input type='hidden' name='user[]' value='3'>
                                                    <input type='hidden' name='chapter[]' value='1'>
                                                    <input type='hidden' name='info' value='no'>
                                                    <button type="submit">ОФС 2023</button>
                                                </form>
                                             </li>
                                             <li>
                                                <form action="{{ route('adminofs24')}}" method="get">
                                                    <input type='hidden' name='year[]' value='2024'>
                                                    <input type='hidden' name='mounth[]' value='1'>
                                                    <input type='hidden' name='user[]' value='3'>
                                                    <input type='hidden' name='chapter[]' value='1'>
                                                    <input type='hidden' name='info' value='no'>
                                                    <button type="submit">ОФС 2024</button>
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
                                                    <button type="submit" class="custom-btn btn-16">Смета</button>
                                                </form>
                                             </li>                                            
                                             <li>
                                                 <form action="{{ route('dev')}}" method="get">
                                                    <input type='hidden' name='year' value='2024'>
                                                    <input type='hidden' name='mounth' value='1'>                                                    
                                                    <input type='hidden' name='info' value='no'>
                                                    <button type="submit">Для Разработчика</button>
                                                </form>
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
                                                    <input type='hidden' name='year' value='2023'>
                                                    <input type='hidden' name='mounth' value='1'>
                                                    <input type='hidden' name='user' value='3'>
                                                    <input type='hidden' name='chapter[]' value='1'>
                                                    <input type='hidden' name='info' value='no'>
                                                    <button type="submit" class="custom-btn btn-16"><b>ОФС 2023 год<b></button>
                                                </form>
                                             </li>
                                             <li>
                                                 <form action="{{ route('userofs24')}}" method="get">
                                                    <input type='hidden' name='year' value='2024'>
                                                    <input type='hidden' name='mounth' value='1'>
                                                    <input type='hidden' name='user' value='3'>
                                                    <input type='hidden' name='chapter[]' value='1'>
                                                    <input type='hidden' name='info' value='no'>
                                                    <button type="submit" class="custom-btn btn-16"><b>ОФС 2024 год<b></button>
                                                </form>
                                             </li>
                                             <li>
                                                 <form action="{{ route('usercount')}}" method="get">
                                                    <input type='hidden' name='variant' value='1'>
                                                    <input type='hidden' name='year' value='2024'>
                                                    <button type="submit" class="custom-btn btn-16"><b>Смета<b></button>
                                                </form>
                                             </li>                                            
                                             @elseif ($role == "build")
                                             <li>
                                                 <form action="{{ route('build')}}" method="get">
                                                    <input type='hidden' name='year' value='2023'>
                                                    <input type='hidden' name='mounth[]' value='1'>
                                                    <input type='hidden' name='variant' value='1'>
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
                                             @endif
                                          </ul>
                                       </li>
                                       
                                       <li>
                                          <a href="">Сайт <i class="fal fa-plus"></i></a>
                                          <ul class="submenu">
                                             @if ($role == "admin") 
                                             <li>
                                                <a href="/finance/">Модуль выключен</a>
                                             </li>                                             
                                             @else
                                             <li>
                                                <a href="https://kostamail.ru/finance/">Бюджет для граждан</a>
                                             </li>
                                             @endif
                                          </ul>
                                       </li>

                                       <li>
                                          <a href="">Новости <i class="fal fa-plus"></i></a>
                                          <ul class="submenu">
                                             <li>
                                                <a href="">Лента новостей</a>
                                             </li>
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

      <!-- search overlay start -->
      <section class="search__area d-flex align-items-center">
         <div class="container">
            <div class="row">
               <div class="col-xxl-12">
                  <div class="search__wrapper">
                     <div class="search__close">
                        <button class="search-close-btn"><i class="fal fa-times"></i></button>
                     </div>
                     <form action="#">
                        <div class="search__input">
                           <input type="text" placeholder="Search here...">
                           <button type="submit"><i class="far fa-search"></i></button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- search overlay end -->


      <main>
         
         <!-- slider area start -->
         <section class="slider__area slider__height slider__height-4 d-flex align-items-center slider__mt--40 p-relative" data-background="{{ asset('assets/img/slider/4/slider-1.jpg') }}">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-7 col-xl-8">
                     <div class="slider__content-4">
                        <span class="text-popins">Сбор отчетности</span>
                        <h3 class="slider__title-4 text-popins">WEB приложение <span class="slider-title-line">Laravel</span></h3>
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
                        <div class="about__experience d-flex align-items-center">
                           <h3 class="about__experience-counter text-rubik mr-20"><span class="counter">4</span>+</h3>
                           <p>Года разработки</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-6 col-xl-6 col-lg-6">
                     <div class="about__wrapper-4 pt-25">
                        <div class="section__title-wrapper-4 mb-45">
                           <span class="section__title-pre-4 text-popins">Про портал</span>
                           <h3 class="section__title-4 text-popins">Отчетность и свод информации <span class="section__title-line">WEB</span> </h3>
                        </div>
                        <p>Портал позволяет собирать отчетность с учреждений, выполняя автоматическую проверку и выгрузку в готовые таблицы</p>

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
                           <div class="footer__logo mb-25">
                              <a>
                                 <img src="{{ asset('assets/img/logo/logo-4.png') }}" alt="">
                              </a>
                           </div>
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
                                       <a href="https://kostomuksha-city.ru/">Официальный сайт Костомукшского городского округа</a>
                                    </li>  
                                    <li>
                                       <a href="http://minfin.karelia.ru/">Министерство финансов Республики Карелия</a>
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
                           <p>© 2019-2023 Сайт администрации Костомукшского городского округа <a href="index.html"></a></p>
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
