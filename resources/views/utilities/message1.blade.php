<!doctype html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <title>Запрос</title>
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
                                        <h2 class="account__content--title h3 mb-20">Запрос на редактирование информации</h2>                                                                               
                                        <p><font color="red"><b><u>{{ $info['name'] }}</u> просит открыть на редактирование информацию за {{ $info['mounth_name'][$info['mounth']] }} месяц {{ $info['year'] }} года!</b></font></p>                                           
                                </div>
                            </div>    
                        </div>                        
                    </div>     
                </div> 
            </section>    
        </main>
    </body>    
</html>  
