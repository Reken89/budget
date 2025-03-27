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
<!doctype html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <title>Отчет</title>
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
                                        <h2 class="account__content--title h3 mb-20">Отчет о предоставление информации по коммунальным услугам за {{ $info[0]['year'] }} год</h2>                                       
                                        @foreach ($info as $value)
                                        <p><font color="red"><b><u>{{ $value['user']['name'] }}</u> не отправили информацию за {{ $name_mounth[$value['mounth']] }} месяц</b></font></p>
                                        @endforeach
                                    </div>
                                </div>
                            </div>    
                        </div>                        
                    </div>     
                </div> 
            </section>    
        </main>
    </body>    
</html>   