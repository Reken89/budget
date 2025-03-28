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
    $users = ['Сектор ОМСУ', 'Сектор школы', 'Сектор культура', 'Сектор сады'];    
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
                      
                            <div class="my__account--section__inner border-radius-10 d-flex">                                    
                                <div class="account__wrapper">
                                    <div class="account__content">                              
                                        <h2 class="account__content--title h3 mb-20">Статистика заполнения портала ОФС за <u>{{ $name_mounth[$info['mounth']] }} {{ $info['year'] }} года</u></h2>                                       
                                        <div class="account__table--area">
                                            <table style="min-width: 65%; width: 65%;" class="table align-middle mb-0">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th style="min-width: 15%; width: 15%;">Сектор</th>
                                                        <th style="min-width: 10%; width: 10%;">МБ МЗ(МБ)</th>
                                                        <th style="min-width: 10%; width: 10%;">МБ ИЦ</th>
                                                        <th style="min-width: 10%; width: 10%;">РК МЗ(РК)</th>
                                                        <th style="min-width: 10%; width: 10%;">РК ИЦ</th>
                                                        <th style="min-width: 10%; width: 10%;">ПД</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @for($i = 0 ; $i < 4 ; $i++)
                                                        <tr>                                                                                                           
                                                            <td>{{ $users[$i] }}</td>
                                                            @if ($info['status'][$i][1] == 'true')
                                                                <td><span class="badge bg-gradient-bloody text-white shadow-sm w-100">не отправили</span></td>
                                                            @else
                                                                <td><span class="badge bg-gradient-quepal text-white shadow-sm w-100">отправили</span></td>
                                                            @endif
                                                            @if ($info['status'][$i][2] == 'true')
                                                                <td><span class="badge bg-gradient-bloody text-white shadow-sm w-100">не отправили</span></td>
                                                            @else
                                                                <td><span class="badge bg-gradient-quepal text-white shadow-sm w-100">отправили</span></td>
                                                            @endif
                                                            @if ($info['status'][$i][3] == 'true')
                                                                <td><span class="badge bg-gradient-bloody text-white shadow-sm w-100">не отправили</span></td>
                                                            @else
                                                                <td><span class="badge bg-gradient-quepal text-white shadow-sm w-100">отправили</span></td>
                                                            @endif
                                                            @if ($info['status'][$i][4] == 'true')
                                                                <td><span class="badge bg-gradient-bloody text-white shadow-sm w-100">не отправили</span></td>
                                                            @else
                                                                <td><span class="badge bg-gradient-quepal text-white shadow-sm w-100">отправили</span></td>
                                                            @endif
                                                            @if ($info['status'][$i][5] == 'true')
                                                                <td><span class="badge bg-gradient-bloody text-white shadow-sm w-100">не отправили</span></td>
                                                            @else
                                                                <td><span class="badge bg-gradient-quepal text-white shadow-sm w-100">отправили</span></td>
                                                            @endif                                                                                                              
                                                        </tr>
                                                    @endfor
                                                </tbody>
                                            </table>	
                                        </div>  
                                    </div>
                                </div>
                            </div>    
                          
                </div> 
            </section>    
        </main>
    </body>    
</html>   
