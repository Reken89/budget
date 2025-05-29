@php
    $fu_aurinko = 0;
    $fu_berezka = 0;
    $fu_gnomik = 0;
    $fu_zoloto = 0;
    $fu_korablik = 0;
    $fu_skazka = 0;
    $fu_solnce = 0;
    
    $cb_aurinko = 0;
    $cb_berezka = 0;
    $cb_gnomik = 0;
    $cb_zoloto = 0;
    $cb_korablik = 0;
    $cb_skazka = 0;
    $cb_solnce = 0;
    
    if($info[0]['status'] == "2"){
        $color = "red";
    }else{
        $color = "green";
    }
@endphp

<!doctype html>
<html lang="en">  
<table>
    <thead>
        <tr>
            <th style="min-width: 200px; width: 400px;">Наименование</th>
            <th style="min-width: 70px; width: 70px;">ЭКР</th>
            <th style="min-width: 150px; width: 150px;">Итог ФЭУ</th>
            <th style="min-width: 150px; width: 150px;">Ауринко</th>
            <th style="min-width: 150px; width: 150px;">Березка</th>
            <th style="min-width: 150px; width: 150px;">Гномик</th>
            <th style="min-width: 150px; width: 150px;">Золотой ключик</th>
            <th style="min-width: 150px; width: 150px;">Кораблик</th>
            <th style="min-width: 150px; width: 150px;">Сказка</th>
            <th style="min-width: 150px; width: 150px;">Солнышко</th>
            <th style="min-width: 150px; width: 150px;">Итог ЦБ</th>
            <th style="min-width: 150px; width: 150px;">(ЦБ) Ауринко</th>
            <th style="min-width: 150px; width: 150px;">(ЦБ) Березка</th>
            <th style="min-width: 150px; width: 150px;">(ЦБ) Гномик</th>
            <th style="min-width: 150px; width: 150px;">(ЦБ) Золотой ключик</th>
            <th style="min-width: 150px; width: 150px;">(ЦБ) Кораблик</th>
            <th style="min-width: 150px; width: 150px;">(ЦБ) Сказка</th>
            <th style="min-width: 150px; width: 150px;">(ЦБ) Солнышко</th>
        </tr>
    </thead>
    <tbody>
        @for ($i = 0; $i < count($info) - 1; $i++)
            @if(($i % 7) == 0 || $i == 0)
                @if($info[$i]['ekr']['shared'] == "Yes" || $info[$i]['ekr']['main'] == "Yes")
                    <tr>
                        <th>{{ $info[$i]['ekr']['title'] }}</th>
                        <td><b>{{ $info[$i]['ekr']['ekr'] }}<b></td>
                        <td><b>{{ number_format($info[$i]['sum_fu'] + $info[$i+1]['sum_fu'] + $info[$i+2]['sum_fu'] + $info[$i+3]['sum_fu'] + $info[$i+4]['sum_fu'] + $info[$i+5]['sum_fu'] + $info[$i+6]['sum_fu'], 2, ',', ' ') }}<b></td>
                        <td><b>{{ number_format($info[$i]['sum_fu'], 2, ',', ' ') }}<b></td>
                        <td><b>{{ number_format($info[$i+1]['sum_fu'], 2, ',', ' ') }}<b></td>
                        <td><b>{{ number_format($info[$i+2]['sum_fu'], 2, ',', ' ') }}<b></td>
                        <td><b>{{ number_format($info[$i+3]['sum_fu'], 2, ',', ' ') }}<b></td>
                        <td><b>{{ number_format($info[$i+4]['sum_fu'], 2, ',', ' ') }}<b></td>
                        <td><b>{{ number_format($info[$i+5]['sum_fu'], 2, ',', ' ') }}<b></td>
                        <td><b>{{ number_format($info[$i+6]['sum_fu'], 2, ',', ' ') }}<b></td>
                        <td><font color="{{ $color }}"><b>{{ number_format($info[$i]['sum_cb'] + $info[$i+1]['sum_cb'] + $info[$i+2]['sum_cb'] + $info[$i+3]['sum_cb'] + $info[$i+4]['sum_cb'] + $info[$i+5]['sum_cb'] + $info[$i+6]['sum_cb'], 2, ',', ' ') }}<b></td>
                        <td><font color="{{ $color }}"><b>{{ number_format($info[$i]['sum_cb'], 2, ',', ' ') }}<b></td>
                        <td><font color="{{ $color }}"><b>{{ number_format($info[$i+1]['sum_cb'], 2, ',', ' ') }}<b></td>
                        <td><font color="{{ $color }}"><b>{{ number_format($info[$i+2]['sum_cb'], 2, ',', ' ') }}<b></td>
                        <td><font color="{{ $color }}"><b>{{ number_format($info[$i+3]['sum_cb'], 2, ',', ' ') }}<b></td>
                        <td><font color="{{ $color }}"><b>{{ number_format($info[$i+4]['sum_cb'], 2, ',', ' ') }}<b></td>
                        <td><font color="{{ $color }}"><b>{{ number_format($info[$i+5]['sum_cb'], 2, ',', ' ') }}<b></td>
                        <td><font color="{{ $color }}"><b>{{ number_format($info[$i+6]['sum_cb'], 2, ',', ' ') }}<b></td>
                    </tr>
                @else
                    <tr>
                        <th>{{ $info[$i]['ekr']['title'] }}</th>
                        <td>{{ $info[$i]['ekr']['ekr'] }}</td>
                        <td>{{ number_format($info[$i]['sum_fu'] + $info[$i+1]['sum_fu'] + $info[$i+2]['sum_fu'] + $info[$i+3]['sum_fu'] + $info[$i+4]['sum_fu'] + $info[$i+5]['sum_fu'] + $info[$i+6]['sum_fu'], 2, ',', ' ') }}</td>
                        <td>{{ number_format($info[$i]['sum_fu'], 2, ',', ' ') }}</td>
                        <td>{{ number_format($info[$i+1]['sum_fu'], 2, ',', ' ') }}</td>
                        <td>{{ number_format($info[$i+2]['sum_fu'], 2, ',', ' ') }}</td>
                        <td>{{ number_format($info[$i+3]['sum_fu'], 2, ',', ' ') }}</td>
                        <td>{{ number_format($info[$i+4]['sum_fu'], 2, ',', ' ') }}</td>
                        <td>{{ number_format($info[$i+5]['sum_fu'], 2, ',', ' ') }}</td>
                        <td>{{ number_format($info[$i+6]['sum_fu'], 2, ',', ' ') }}</td>
                        <td><font color="{{ $color }}">{{ number_format($info[$i]['sum_cb'] + $info[$i+1]['sum_cb'] + $info[$i+2]['sum_cb'] + $info[$i+3]['sum_cb'] + $info[$i+4]['sum_cb'] + $info[$i+5]['sum_cb'] + $info[$i+6]['sum_cb'], 2, ',', ' ') }}</td>
                        <td><font color="{{ $color }}">{{ number_format($info[$i]['sum_cb'], 2, ',', ' ') }}</td>
                        <td><font color="{{ $color }}">{{ number_format($info[$i+1]['sum_cb'], 2, ',', ' ') }}</td>
                        <td><font color="{{ $color }}">{{ number_format($info[$i+2]['sum_cb'], 2, ',', ' ') }}</td>
                        <td><font color="{{ $color }}">{{ number_format($info[$i+3]['sum_cb'], 2, ',', ' ') }}</td>
                        <td><font color="{{ $color }}">{{ number_format($info[$i+4]['sum_cb'], 2, ',', ' ') }}</td>
                        <td><font color="{{ $color }}">{{ number_format($info[$i+5]['sum_cb'], 2, ',', ' ') }}</td>
                        <td><font color="{{ $color }}">{{ number_format($info[$i+6]['sum_cb'], 2, ',', ' ') }}</td>
                    </tr>
                @endif
                @if($info[$i]['ekr']['shared'] == "No" && $info[$i]['ekr']['main'] == "Yes")
                    @php
                        $fu_aurinko += $info[$i]['sum_fu'];
                        $fu_berezka += $info[$i+1]['sum_fu'];
                        $fu_gnomik += $info[$i+2]['sum_fu'];
                        $fu_zoloto += $info[$i+3]['sum_fu'];
                        $fu_korablik += $info[$i+4]['sum_fu'];
                        $fu_skazka += $info[$i+5]['sum_fu'];
                        $fu_solnce += $info[$i+6]['sum_fu'];
                        
                        $cb_aurinko += $info[$i]['sum_cb'];
                        $cb_berezka += $info[$i+1]['sum_cb'];
                        $cb_gnomik += $info[$i+2]['sum_cb'];
                        $cb_zoloto += $info[$i+3]['sum_cb'];
                        $cb_korablik += $info[$i+4]['sum_cb'];
                        $cb_skazka += $info[$i+5]['sum_cb'];
                        $cb_solnce += $info[$i+6]['sum_cb'];
                    @endphp
                @endif
            @endif        
        @endfor
        <tr>
            <th>Итог</th>
            <td></td>
            <td><b>{{ number_format($fu_aurinko + $fu_berezka + $fu_gnomik + $fu_zoloto + $fu_korablik + $fu_skazka + $fu_solnce, 2, ',', ' ') }}<b></td>
            <td><b>{{ number_format($fu_aurinko, 2, ',', ' ') }}</b></td> 
            <td><b>{{ number_format($fu_berezka, 2, ',', ' ') }}</b></td>  
            <td><b>{{ number_format($fu_gnomik, 2, ',', ' ') }}</b></td> 
            <td><b>{{ number_format($fu_zoloto, 2, ',', ' ') }}</b></td> 
            <td><b>{{ number_format($fu_korablik, 2, ',', ' ') }}</b></td> 
            <td><b>{{ number_format($fu_skazka, 2, ',', ' ') }}</b></td> 
            <td><b>{{ number_format($fu_solnce, 2, ',', ' ') }}</b></td> 
            <td><font color="{{ $color }}"><b>{{ number_format($cb_aurinko + $cb_berezka + $cb_gnomik + $cb_zoloto + $cb_korablik + $cb_skazka + $cb_solnce, 2, ',', ' ') }}<b></td>
            <td><font color="{{ $color }}"><b>{{ number_format($cb_aurinko, 2, ',', ' ') }}</b></td> 
            <td><font color="{{ $color }}"><b>{{ number_format($cb_berezka, 2, ',', ' ') }}</b></td> 
            <td><font color="{{ $color }}"><b>{{ number_format($cb_gnomik, 2, ',', ' ') }}</b></td> 
            <td><font color="{{ $color }}"><b>{{ number_format($cb_zoloto, 2, ',', ' ') }}</b></td> 
            <td><font color="{{ $color }}"><b>{{ number_format($cb_korablik, 2, ',', ' ') }}</b></td> 
            <td><font color="{{ $color }}"><b>{{ number_format($cb_skazka, 2, ',', ' ') }}</b></td> 
            <td><font color="{{ $color }}"><b>{{ number_format($cb_solnce, 2, ',', ' ') }}</b></td> 
        </tr>
    </tbody>
</table>
</html>
