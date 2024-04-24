@php
    //var_dump($info[0]);
    //var_dump(count($info));
    for($a = 0 ; $a < 16 ; $a++){
        $fu[$a] = 0;
        $cb[$a] = 0;
    }

    $color = "blue";   
@endphp

<!doctype html>
<html lang="en">  
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
        </tr>
    </thead>
    <tbody>
        @for ($i = 0; $i < count($info) - 1; $i++)
            @if(($i % 16) == 0 || $i == 0)
                @if($info[$i]['ekr']['shared'] == "Yes" || $info[$i]['ekr']['main'] == "Yes")
                    <tr>
                        <th>{{ $info[$i]['ekr']['title'] }}</th>
                        <td><b>{{ $info[$i]['ekr']['ekr'] }}<b></td>
                        @for ($n = 0 ; $n < 16 ; $n++)
                            <td><b>{{ number_format($info[$i+$n]['sum_cb'], 2, ',', ' ') }}<b></td>
                        @endfor
                        @for ($n = 0 ; $n < 16 ; $n++)
                            <td><font color="{{ $color }}"><b>{{ number_format($info[$i+$n]['sum_fu'], 2, ',', ' ') }}<b></td>
                        @endfor  
                    </tr>
                @else
                    <tr>
                        <th>{{ $info[$i]['ekr']['title'] }}</th>
                        <td>{{ $info[$i]['ekr']['ekr'] }}</td>
                        @for ($n = 0 ; $n < 16 ; $n++)
                            @if($info[$i]['status'] == '2')
                                <td><input type="hidden" class="id" value="{{ $info[$i+$n]['id'] }}">
                                <input type="text" class="sum" value="{{ number_format($info[$i+$n]['sum_cb'], 2, ',', ' ') }}"></td>
                            @else
                                <td>{{ number_format($info[$i+$n]['sum_cb'], 2, ',', ' ') }}</td>
                            @endif
                        @endfor
                        @for ($n = 0 ; $n < 16 ; $n++)
                            <td><font color="{{ $color }}">{{ number_format($info[$i+$n]['sum_fu'], 2, ',', ' ') }}</td>
                        @endfor
                    </tr>
                @endif
                @if($info[$i]['ekr']['shared'] == "No" && $info[$i]['ekr']['main'] == "Yes")
                    @php
                        for($n = 0 ; $n < 16 ; $n++){
                            $fu[$n] += $info[$i+$n]['sum_fu'];
                            $cb[$n] += $info[$i+$n]['sum_cb'];
                        }
                    @endphp
                @endif
            @endif        
        @endfor
        <tr>
            <th>Итог</th>
            <td></td>
            @for ($n = 0 ; $n < 16 ; $n++)
               <td><b>{{ number_format($cb[$n], 2, ',', ' ') }}</b></td> 
            @endfor  
            @for ($n = 0 ; $n < 16 ; $n++)
               <td><font color="{{ $color }}"><b>{{ number_format($fu[$n], 2, ',', ' ') }}</b></td>
            @endfor
        </tr>
    </tbody>
</table>
</html>


