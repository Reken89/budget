@php
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
<!doctype html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <title>Уведомление</title>
        <link rel="stylesheet" href="{{ asset('assets/css/style3.css') }}">
    </head>   
    
    <body>
        <main class="main__content_wrapper">
            <section class="my__account--section section--padding">  
                <div class="container2">
                    <div class="row">
                        <div class="col-lg-6">    
                            <div class="my__account--section__inner border-radius-10 d-flex">                                    
                                <div class="account__wrapper">
                                    <div class="account__content">                              
                                        <h2 class="account__content--title h3 mb-20">В финансово-экономическом управлении согласовали Ваш запрос на редактирование информации:</h2>                                                                               
                                        <p><b>Учреждение <u>{{ $info['user']['name'] }}</u>, месяц {{ $name_mounth[$info['mounth']] }}, год {{ $info['year'] }}</b></p>   
                                        <p>Это письмо отправлено автоматически, не отвечайте на него.</p>                                        
                                </div>
                            </div>    
                        </div>                        
                    </div>     
                </div> 
            </section>    
        </main>
    </body>    
</html>  

