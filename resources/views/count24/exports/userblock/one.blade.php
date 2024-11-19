@php
    $date = date('Y-m-d');
    for($a = 0 ; $a < 16 ; $a++){
        $fu[$a] = 0;
        $cb[$a] = 0;
    }
@endphp

<p>Таблица выгружена {{ $date }}</p>    
<p></p>
<table>
    <thead>
        <tr>
            <th style="min-width: 200px; width: 400px;">Наименование</th>
            <th style="min-width: 70px; width: 70px;">ЭКР</th>
            <th style="min-width: 150px; width: 150px;">0104 (Расходы администрации)</th>
            <th style="min-width: 150px; width: 150px;">0105 (Судебная система)</th>
            <th style="min-width: 150px; width: 150px;">0111 (Резервный фонд)</th>
            <th style="min-width: 150px; width: 150px;">0113 (Другие общегосударственные расходы)</th>
            <th style="min-width: 150px; width: 150px;">0309 (ГО и ЧС)</th>
            <th style="min-width: 150px; width: 150px;">0405 (Животные)</th>
            <th style="min-width: 150px; width: 150px;">0408 (Транспорт)</th>
            <th style="min-width: 150px; width: 150px;">0409 (Дорожный фонд)</th>
            <th style="min-width: 150px; width: 150px;">0412 (Другие вопросы нац. экономики)</th>
            <th style="min-width: 150px; width: 150px;">0502 (Коммунальное хоз.)</th>
            <th style="min-width: 150px; width: 150px;">0503 (Благоустройство)</th>
            <th style="min-width: 150px; width: 150px;">0909 (Костомукша-город здоровья)</th>
            <th style="min-width: 150px; width: 150px;">1001 (Пенсии)</th>
            <th style="min-width: 150px; width: 150px;">1003 (Социальная поддержка граждан)</th>
            <th style="min-width: 150px; width: 150px;">1101 (Физкультура и спорт)</th>
            <th style="min-width: 150px; width: 150px;">1301 (обслуживание МД)</th>
            
            <th style="min-width: 150px; width: 150px;">(ФЭУ) 0104 (Расходы администрации)</th>
            <th style="min-width: 150px; width: 150px;">(ФЭУ) 0105 (Судебная система)</th>
            <th style="min-width: 150px; width: 150px;">(ФЭУ) 0111 (Резервный фонд)</th>
            <th style="min-width: 150px; width: 150px;">(ФЭУ) 0113 (Другие общегосударственные расходы)</th>
            <th style="min-width: 150px; width: 150px;">(ФЭУ) 0309 (ГО и ЧС)</th>
            <th style="min-width: 150px; width: 150px;">(ФЭУ) 0405 (Животные)</th>
            <th style="min-width: 150px; width: 150px;">(ФЭУ) 0408 (Транспорт)</th>
            <th style="min-width: 150px; width: 150px;">(ФЭУ) 0409 (Дорожный фонд)</th>
            <th style="min-width: 150px; width: 150px;">(ФЭУ) 0412 (Другие вопросы нац. экономики)</th>
            <th style="min-width: 150px; width: 150px;">(ФЭУ) 0502 (Коммунальное хоз.)</th>
            <th style="min-width: 150px; width: 150px;">(ФЭУ) 0503 (Благоустройство)</th>
            <th style="min-width: 150px; width: 150px;">(ФЭУ) 0909 (Костомукша-город здоровья)</th>
            <th style="min-width: 150px; width: 150px;">(ФЭУ) 1001 (Пенсии)</th>
            <th style="min-width: 150px; width: 150px;">(ФЭУ) 1003 (Социальная поддержка граждан)</th>
            <th style="min-width: 150px; width: 150px;">(ФЭУ) 1101 (Физкультура и спорт)</th>
            <th style="min-width: 150px; width: 150px;">(ФЭУ) 1301 (обслуживание МД)</th>
        </tr>
    </thead>
    <tbody>
        @for ($i = 0; $i < count($info) - 1; $i++)
            @if(($i % 16) == 0 || $i == 0)
                @if($info[$i]['ekr']['shared'] == "Yes" || $info[$i]['ekr']['main'] == "Yes")
                    <tr>
                        <th><b>{{ $info[$i]['ekr']['title'] }}</b></th>
                        <td><b>{{ $info[$i]['ekr']['ekr'] }}</b></td>
                        @for ($n = 0 ; $n < 16 ; $n++)
                        <td><b>{{ $info[$i+$n]['sum_cb'] }}</b></td>
                        @endfor
                        @for ($n = 0 ; $n < 16 ; $n++)
                        <td><b>{{ $info[$i+$n]['sum_fu'] }}</b></td>
                        @endfor  
                    </tr>
                @else
                    <tr>
                        <th>{{ $info[$i]['ekr']['title'] }}</th>
                        <td>{{ $info[$i]['ekr']['ekr'] }}</td>
                        @for ($n = 0 ; $n < 16 ; $n++)
                            <td>{{ $info[$i+$n]['sum_cb'] }}</td>
                        @endfor
                        @for ($n = 0 ; $n < 16 ; $n++)
                            <td>{{ $info[$i+$n]['sum_fu'] }}</td>
                        @endfor
                    </tr>
                @endif
                @if($info[$i]['ekr']['shared'] == "No" && $info[$i]['ekr']['main'] == "Yes")
                    @php
                        for($n = 0 ; $n < 16 ; $n++){
                            $cb[$n] += $info[$i+$n]['sum_cb'];
                            $fu[$n] += $info[$i+$n]['sum_fu'];
                        }
                    @endphp
                @endif
            @endif        
        @endfor
        <tr>
            <th><b>Итог</b></th>
            <td></td>
            @for ($n = 0 ; $n < 16 ; $n++)
                <td><b>{{ $cb[$n] }}</b></td> 
            @endfor  
            @for ($n = 0 ; $n < 16 ; $n++)
                <td><b>{{ $fu[$n] }}</b></td>
            @endfor
        </tr>
    </tbody>
</table>

