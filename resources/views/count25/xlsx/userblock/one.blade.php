@php
    $date = date('Y-m-d');
@endphp
<p>Таблица выгружена {{ $date }}</p> 
<table>
    <thead>
        <tr>
            <th style="min-width: 200px; width: 400px;">Наименование</th>
            <th style="min-width: 70px; width: 70px;">ЭКР</th>
            <th style="min-width: 150px; width: 150px;">0104 Расходы администрации</th>
            <th style="min-width: 150px; width: 150px;">0105 Судебная система</th>
            <th style="min-width: 150px; width: 150px;">0111 Резервный фонд</th>
            <th style="min-width: 150px; width: 150px;">0113 Другие общегосударственные расходы</th>
            <th style="min-width: 150px; width: 150px;">0309 ГО и ЧС</th>
            <th style="min-width: 150px; width: 150px;">0405 Животные</th>
            <th style="min-width: 150px; width: 150px;">0408 Транспорт</th>
            <th style="min-width: 150px; width: 150px;">0409 Дорожный фонд</th>
            <th style="min-width: 150px; width: 150px;">0412 Другие вопросы нац. экономики</th>
            <th style="min-width: 150px; width: 150px;">0502 Коммунальное хозяйство</th>
            <th style="min-width: 150px; width: 150px;">0503 Благоустройство</th>
            <th style="min-width: 150px; width: 150px;">0909 Костомукша город здоровья</th>
            <th style="min-width: 150px; width: 150px;">1001 Пенсии</th>
            <th style="min-width: 150px; width: 150px;">1003 Социальная поддержка граждан</th>
            <th style="min-width: 150px; width: 150px;">1101 Физкультура и спорт</th>
            <th style="min-width: 150px; width: 150px;">1301 Обслуживание МД</th>
            <th style="min-width: 150px; width: 150px;">0314 Другие вопросы</th>
            <th style="min-width: 150px; width: 150px;">0501 Жилищное хозяйство</th>
            
            <th style="min-width: 150px; width: 150px;">0104 Расходы администрации</th>
            <th style="min-width: 150px; width: 150px;">0105 Судебная система</th>
            <th style="min-width: 150px; width: 150px;">0111 Резервный фонд</th>
            <th style="min-width: 150px; width: 150px;">0113 Другие общегосударственные расходы</th>
            <th style="min-width: 150px; width: 150px;">0309 ГО и ЧС</th>
            <th style="min-width: 150px; width: 150px;">0405 Животные</th>
            <th style="min-width: 150px; width: 150px;">0408 Транспорт</th>
            <th style="min-width: 150px; width: 150px;">0409 Дорожный фонд</th>
            <th style="min-width: 150px; width: 150px;">0412 Другие вопросы нац. экономики</th>
            <th style="min-width: 150px; width: 150px;">0502 Коммунальное хозяйство</th>
            <th style="min-width: 150px; width: 150px;">0503 Благоустройство</th>
            <th style="min-width: 150px; width: 150px;">0909 Костомукша город здоровья</th>
            <th style="min-width: 150px; width: 150px;">1001 Пенсии</th>
            <th style="min-width: 150px; width: 150px;">1003 Социальная поддержка граждан</th>
            <th style="min-width: 150px; width: 150px;">1101 Физкультура и спорт</th>
            <th style="min-width: 150px; width: 150px;">1301 Обслуживание МД</th>
            <th style="min-width: 150px; width: 150px;">0314 Другие вопросы</th>
            <th style="min-width: 150px; width: 150px;">0501 Жилищное хозяйство</th>
        </tr>
    </thead>
    <tbody>
        @for ($i = 0; $i < count($info['result']) - 1; $i++)
            @if(($i % 18) == 0 || $i == 0)
                @if($info['result'][$i]['ekr']['shared'] == "Yes" || $info['result'][$i]['ekr']['main'] == "Yes")
                    <tr>
                        <td><b>{{ $info['result'][$i]['ekr']['title'] }}</b></td>
                        <td><b>{{ $info['result'][$i]['ekr']['ekr'] }}</b></td>
                        @for ($n = 0 ; $n < 18 ; $n++)
                            <td><b>{{ $info['result'][$i+$n]['sum_cb'] }}</b></td>
                        @endfor
                        @for ($n = 0 ; $n < 18 ; $n++)
                            <td><b>{{ $info['result'][$i+$n]['sum_fu'] }}</b></td>
                        @endfor  
                    </tr>
                @else
                    <tr>
                        <th>{{ $info['result'][$i]['ekr']['title'] }}</th>
                        <td>{{ $info['result'][$i]['ekr']['ekr'] }}</td>
                        @for ($n = 0 ; $n < 18 ; $n++)
                            <td>{{ $info['result'][$i+$n]['sum_cb'] }}</td>
                        @endfor
                        @for ($n = 0 ; $n < 18 ; $n++)
                            <td>{{ $info['result'][$i+$n]['sum_fu'] }}</td>
                        @endfor
                    </tr>
                @endif
            @endif        
        @endfor
        <tr>
            <td><b>Итог</b></td>
            <td></td>
            @for ($n = 0 ; $n < 18 ; $n++)
               <td><b>{{ $info['total'][$n]['cb'] }}</b></td> 
            @endfor  
            @for ($n = 0 ; $n < 18 ; $n++)
               <td><b>{{ $info['total'][$n]['fu'] }}</b></td>
            @endfor
        </tr>
    </tbody>
</table>


