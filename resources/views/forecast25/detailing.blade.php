@include('layouts.tableprognoz')
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
        <title>Детализация статуса</title>
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
                                        <h2 class="account__content--title h3 mb-20">Таблица детализации статуса</h2>
                                        <p><font color="red"><b>Год: {{ $info[0]['year'] }} Месяц: {{ $name_mounth[$info[0]['mounth']] }}</b></font></p>
                                        <div class="account__table--area">
                                            <table class="table align-middle mb-0">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th style="min-width: 200px; width: 200px;">Учреждение</th>
                                                        <th style="min-width: 50px; width: 50px;">Статус</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($info as $value)
                                                    <tr>
                                                        <td>{{ $value['user']['name'] }}</td>
                                                        @if ($value['status'] == '1')
                                                            <td><span class="badge bg-gradient-quepal text-white shadow-sm w-100">отлично</span></td>
                                                        @endif
                                                        @if ($value['status'] == '2')
                                                            <td><span class="badge bg-gradient-bloody text-white shadow-sm w-100">не отправили</span></td>
                                                        @endif
                                                        @if ($value['status'] == '3')
                                                            <td><span class="badge bg-gradient-blooker text-white shadow-sm w-100">редактирование</span></td>
                                                        @endif                                                       
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>	
                                        </div>   
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