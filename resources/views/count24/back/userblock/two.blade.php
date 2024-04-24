@php
    $fu = 0;
    $cb = 0;
    
    $fu_sovet = 0;
    $fu_kso = 0;
    $fu_glava = 0;
    $cb_sovet = 0;
    $cb_kso = 0;
    $cb_glava = 0;
    
    $color = "blue";
@endphp

<!doctype html>
<html lang="en"> 
<table>
    <thead>
        <tr>
            <th style="min-width: 200px; width: 400px;">Наименование</th>
            <th style="min-width: 70px; width: 70px;">ЭКР</th>
            <th style="min-width: 150px; width: 150px;">Итог ЦБ</th>
            <th style="min-width: 150px; width: 150px;">Совет КГО</th>
            <th style="min-width: 150px; width: 150px;">КСО</th>
            <th style="min-width: 150px; width: 150px;">Глава</th>
            <th style="min-width: 150px; width: 150px;">Администрация</th>
            <th style="min-width: 150px; width: 150px;">Итог ФЭУ</th>
            <th style="min-width: 150px; width: 150px;">(ФЭУ) Совет КГО</th>
            <th style="min-width: 150px; width: 150px;">(ФЭУ) КСО</th>
            <th style="min-width: 150px; width: 150px;">(ФЭУ) Глава</th>
            <th style="min-width: 150px; width: 150px;">(ФЭУ) Администрация</th>
        </tr>
    </thead>
    <tbody>
        @for ($i = 0; $i < count($info) - 1; $i++)
            @if(($i % 19) == 0 || $i == 0)
                @if($info[$i]['ekr']['shared'] == "Yes" || $info[$i]['ekr']['main'] == "Yes")
                    <tr>
                        <th>{{ $info[$i]['ekr']['title'] }}</th>
                        <td><b>{{ $info[$i]['ekr']['ekr'] }}<b></td>
                        @php 
                            $fu_adm = 0;
                            $cb_adm = 0;
                            
                            for ($n = 3 ; $n < 19 ; $n++){
                                $fu_adm += $info[$i+$n]['sum_fu'];
                                $cb_adm += $info[$i+$n]['sum_cb'];
                            }
                        @endphp     
                        <td><b>{{ number_format($info[$i]['sum_cb'] + $info[$i+1]['sum_cb'] + $info[$i+2]['sum_cb'] + $cb_adm, 2, ',', ' ') }}<b></td>
                        <td><b>{{ number_format($info[$i]['sum_cb'], 2, ',', ' ') }}<b></td>
                        <td><b>{{ number_format($info[$i+1]['sum_cb'], 2, ',', ' ') }}<b></td>
                        <td><b>{{ number_format($info[$i+2]['sum_cb'], 2, ',', ' ') }}<b></td>
                        <td><b>{{ number_format($cb_adm, 2, ',', ' ') }}<b></td>
                        <td><font color="{{ $color }}"><b>{{ number_format($info[$i]['sum_fu'] + $info[$i+1]['sum_fu'] + $info[$i+2]['sum_fu'] + $fu_adm, 2, ',', ' ') }}<b></td>
                        <td><font color="{{ $color }}"><b>{{ number_format($info[$i]['sum_fu'], 2, ',', ' ') }}<b></td>
                        <td><font color="{{ $color }}"><b>{{ number_format($info[$i+1]['sum_fu'], 2, ',', ' ') }}<b></td>
                        <td><font color="{{ $color }}"><b>{{ number_format($info[$i+2]['sum_fu'], 2, ',', ' ') }}<b></td>
                        <td><font color="{{ $color }}"><b>{{ number_format($fu_adm, 2, ',', ' ') }}<b></td>
                    </tr>
                @else
                    <tr>
                        @php 
                            $fu_adm = 0;
                            $cb_adm = 0;
                            
                            for ($n = 3 ; $n < 19 ; $n++){
                                $fu_adm += $info[$i+$n]['sum_fu'];
                                $cb_adm += $info[$i+$n]['sum_cb'];
                            }
                        @endphp 
                        <th>{{ $info[$i]['ekr']['title'] }}</th>
                        <td>{{ $info[$i]['ekr']['ekr'] }}</td>
                        <td>{{ number_format($info[$i]['sum_cb'] + $info[$i+1]['sum_cb'] + $info[$i+2]['sum_cb'] + $cb_adm, 2, ',', ' ') }}</td>
                            @if($info[$i]['status'] == '2')
                            <td><input type="hidden" class="id" value="{{ $info[$i]['id'] }}">
                                <input type="text" class="sum" value="{{ number_format($info[$i]['sum_cb'], 2, ',', ' ') }}"></td>
                            <td><input type="hidden" class="id" value="{{ $info[$i+1]['id'] }}">
                                <input type="text" class="sum" value="{{ number_format($info[$i+1]['sum_cb'], 2, ',', ' ') }}"></td>
                            <td><input type="hidden" class="id" value="{{ $info[$i+2]['id'] }}">
                                <input type="text" class="sum" value="{{ number_format($info[$i+2]['sum_cb'], 2, ',', ' ') }}"></td>
                            <td>{{ number_format($cb_adm, 2, ',', ' ') }}</td>
                            @else
                                <td>{{ number_format($info[$i]['sum_cb'], 2, ',', ' ') }}</td>
                                <td>{{ number_format($info[$i+1]['sum_cb'], 2, ',', ' ') }}</td>
                                <td>{{ number_format($info[$i+2]['sum_cb'], 2, ',', ' ') }}</td>
                                <td>{{ number_format($cb_adm, 2, ',', ' ') }}</td>
                            @endif
                        <td><font color="{{ $color }}">{{ number_format($info[$i]['sum_fu'] + $info[$i+1]['sum_fu'] + $info[$i+2]['sum_fu'] + $fu_adm, 2, ',', ' ') }}</td>
                        <td><font color="{{ $color }}">{{ number_format($info[$i]['sum_fu'], 2, ',', ' ') }}</td>
                        <td><font color="{{ $color }}">{{ number_format($info[$i+1]['sum_fu'], 2, ',', ' ') }}</td>
                        <td><font color="{{ $color }}">{{ number_format($info[$i+2]['sum_fu'], 2, ',', ' ') }}</td>
                        <td><font color="{{ $color }}">{{ number_format($fu_adm, 2, ',', ' ') }}</td>
                    </tr>
                @endif
                @if($info[$i]['ekr']['shared'] == "No" && $info[$i]['ekr']['main'] == "Yes")
                    @php
                        $fu_sovet += $info[$i]['sum_fu'];
                        $fu_kso += $info[$i+1]['sum_fu'];
                        $fu_glava += $info[$i+2]['sum_fu'];
                        $cb_sovet += $info[$i]['sum_cb'];
                        $cb_kso += $info[$i+1]['sum_cb'];
                        $cb_glava += $info[$i+2]['sum_cb'];
                        
                        for ($n = 3 ; $n < 19 ; $n++){
                            $fu += $info[$i+$n]['sum_fu'];
                            $cb += $info[$i+$n]['sum_cb'];
                        }    
                    @endphp
                @endif
            @endif        
        @endfor
        <tr>
            <th>Итог</th>
            <td></td>
            <td><b>{{ number_format($cb_sovet + $cb_kso + $cb_glava + $cb, 2, ',', ' ') }}<b></td>
            <td><b>{{ number_format($cb_sovet, 2, ',', ' ') }}</b></td> 
            <td><b>{{ number_format($cb_kso, 2, ',', ' ') }}</b></td>  
            <td><b>{{ number_format($cb_glava, 2, ',', ' ') }}</b></td> 
            <td><b>{{ number_format($cb, 2, ',', ' ') }}</b></td> 
            <td><font color="{{ $color }}"><b>{{ number_format($fu_sovet + $fu_kso + $fu_glava + $fu, 2, ',', ' ') }}<b></td>
            <td><font color="{{ $color }}"><b>{{ number_format($fu_sovet, 2, ',', ' ') }}</b></td> 
            <td><font color="{{ $color }}"><b>{{ number_format($fu_kso, 2, ',', ' ') }}</b></td> 
            <td><font color="{{ $color }}"><b>{{ number_format($fu_glava, 2, ',', ' ') }}</b></td> 
            <td><font color="{{ $color }}"><b>{{ number_format($fu, 2, ',', ' ') }}</b></td> 
        </tr>
    </tbody>
</table>
</html>



