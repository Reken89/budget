@include('layouts.tableprognoz')
@php
    //var_dump($info['status'][0][23]);
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
    $sectors = ['ОМСУ', 'Школы', 'Культура', 'Сады'];    
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
                                        @for ($s = 0 ; $s < 4 ; $s++)
                                        <p><font color="green"><b><u>Сектор {{ $sectors[$s] }}</u></b></font></p>
                                        <div class="account__table--area">
                                            <table style="min-width: 100%; width: 100%;" class="table align-middle mb-0">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th style="min-width: 25%; width: 25%;">Учреждение</th>
                                                        <th style="min-width: 15%; width: 15%;">МБ МЗ(МБ)</th>
                                                        <th style="min-width: 15%; width: 15%;">МБ ИЦ</th>
                                                        <th style="min-width: 15%; width: 15%;">РК МЗ(РК)</th>
                                                        <th style="min-width: 15%; width: 15%;">РК ИЦ</th>
                                                        <th style="min-width: 15%; width: 15%;">ПД</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($info['status'][$s] as $value)
                                                    <tr>
                                                        <td>{{ $value[1]['user']['name'] }}</td>
                                                        @if ($value[1]['status'] == '2')
                                                            <td><span class="badge bg-gradient-bloody text-white shadow-sm w-100">не отправили</span></td>
                                                        @else
                                                            <td><span class="badge bg-gradient-quepal text-white shadow-sm w-100">отправили</span></td>
                                                        @endif
                                                        @if ($value[2]['status'] == '2')
                                                            <td><span class="badge bg-gradient-bloody text-white shadow-sm w-100">не отправили</span></td>
                                                        @else
                                                            <td><span class="badge bg-gradient-quepal text-white shadow-sm w-100">отправили</span></td>
                                                        @endif
                                                        @if ($value[3]['status'] == '2')
                                                            <td><span class="badge bg-gradient-bloody text-white shadow-sm w-100">не отправили</span></td>
                                                        @else
                                                            <td><span class="badge bg-gradient-quepal text-white shadow-sm w-100">отправили</span></td>
                                                        @endif
                                                        @if ($value[4]['status'] == '2')
                                                            <td><span class="badge bg-gradient-bloody text-white shadow-sm w-100">не отправили</span></td>
                                                        @else
                                                            <td><span class="badge bg-gradient-quepal text-white shadow-sm w-100">отправили</span></td>
                                                        @endif
                                                        @if ($value[5]['status'] == '2')
                                                            <td><span class="badge bg-gradient-bloody text-white shadow-sm w-100">не отправили</span></td>
                                                        @else
                                                            <td><span class="badge bg-gradient-quepal text-white shadow-sm w-100">отправили</span></td>
                                                        @endif
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>	
                                        </div> 
                                        </br>
                                        @endfor
                                    </div>
                                </div>
                            </div>    
                          
                </div> 
            </section>    
        </main>
    </body>    
</html>   
