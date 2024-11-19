@php
    $date = date('Y-m-d');
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
@endphp

<p>Таблица выгружена {{ $date }}</p>    
<p></p>
<table>
    <thead>
        <tr>
            <th style="min-width: 200px; width: 400px;">Наименование</th>
            <th style="min-width: 70px; width: 70px;">ЭКР</th>
            <th style="min-width: 150px; width: 150px;">Итог ЦБ</th>
            <th style="min-width: 150px; width: 150px;">Ауринко</th>
            <th style="min-width: 150px; width: 150px;">Березка</th>
            <th style="min-width: 150px; width: 150px;">Гномик</th>
            <th style="min-width: 150px; width: 150px;">Золотой ключик</th>
            <th style="min-width: 150px; width: 150px;">Кораблик</th>
            <th style="min-width: 150px; width: 150px;">Сказка</th>
            <th style="min-width: 150px; width: 150px;">Солнышко</th>
            <th style="min-width: 150px; width: 150px;">Итог ФЭУ</th>
            <th style="min-width: 150px; width: 150px;">(ФЭУ) Ауринко</th>
            <th style="min-width: 150px; width: 150px;">(ФЭУ) Березка</th>
            <th style="min-width: 150px; width: 150px;">(ФЭУ) Гномик</th>
            <th style="min-width: 150px; width: 150px;">(ФЭУ) Золотой ключик</th>
            <th style="min-width: 150px; width: 150px;">(ФЭУ) Кораблик</th>
            <th style="min-width: 150px; width: 150px;">(ФЭУ) Сказка</th>
            <th style="min-width: 150px; width: 150px;">(ФЭУ) Солнышко</th>
        </tr>
    </thead>
    <tbody>
        @for ($i = 0; $i < count($info) - 1; $i++)
            @if(($i % 7) == 0 || $i == 0)
                @if($info[$i]['ekr']['shared'] == "Yes" || $info[$i]['ekr']['main'] == "Yes")
                    <tr>
                        <th><b>{{ $info[$i]['ekr']['title'] }}</b></th>
                        <td><b>{{ $info[$i]['ekr']['ekr'] }}</b></td>
                        <td><b>{{ $info[$i]['sum_cb'] + $info[$i+1]['sum_cb'] + $info[$i+2]['sum_cb'] + $info[$i+3]['sum_cb'] + $info[$i+4]['sum_cb'] + $info[$i+5]['sum_cb'] + $info[$i+6]['sum_cb'] }}</b></td>
                        <td><b>{{ $info[$i]['sum_cb'] }}</b></td>
                        <td><b>{{ $info[$i+1]['sum_cb'] }}</b></td>
                        <td><b>{{ $info[$i+2]['sum_cb'] }}</b></td>
                        <td><b>{{ $info[$i+3]['sum_cb'] }}</b></td>
                        <td><b>{{ $info[$i+4]['sum_cb'] }}</b></td>
                        <td><b>{{ $info[$i+5]['sum_cb'] }}</b></td>
                        <td><b>{{ $info[$i+6]['sum_cb'] }}</b></td>
                        <td><b>{{ $info[$i]['sum_fu'] + $info[$i+1]['sum_fu'] + $info[$i+2]['sum_fu'] + $info[$i+3]['sum_fu'] + $info[$i+4]['sum_fu'] + $info[$i+5]['sum_fu'] + $info[$i+6]['sum_fu'] }}</b></td>
                        <td><b>{{ $info[$i]['sum_fu'] }}</b></td>
                        <td><b>{{ $info[$i+1]['sum_fu'] }}</b></td>
                        <td><b>{{ $info[$i+2]['sum_fu'] }}</b></td>
                        <td><b>{{ $info[$i+3]['sum_fu'] }}</b></td>
                        <td><b>{{ $info[$i+4]['sum_fu'] }}</b></td>
                        <td><b>{{ $info[$i+5]['sum_fu'] }}</b></td>
                        <td><b>{{ $info[$i+6]['sum_fu'] }}</b></td>
                    </tr>
                @else
                    <tr>
                        <th>{{ $info[$i]['ekr']['title'] }}</th>
                        <td>{{ $info[$i]['ekr']['ekr'] }}</td>
                        <td>{{ $info[$i]['sum_cb'] + $info[$i+1]['sum_cb'] + $info[$i+2]['sum_cb'] + $info[$i+3]['sum_cb'] + $info[$i+4]['sum_cb'] + $info[$i+5]['sum_cb'] + $info[$i+6]['sum_cb'] }}</td>
                        <td>{{ $info[$i]['sum_cb'] }}</td>
                        <td>{{ $info[$i+1]['sum_cb'] }}</td>
                        <td>{{ $info[$i+2]['sum_cb'] }}</td>
                        <td>{{ $info[$i+3]['sum_cb'] }}</td>
                        <td>{{ $info[$i+4]['sum_cb'] }}</td>
                        <td>{{ $info[$i+5]['sum_cb'] }}</td>
                        <td>{{ $info[$i+6]['sum_cb'] }}</td>
                        <td>{{ $info[$i]['sum_fu'] + $info[$i+1]['sum_fu'] + $info[$i+2]['sum_fu'] + $info[$i+3]['sum_fu'] + $info[$i+4]['sum_fu'] + $info[$i+5]['sum_fu'] + $info[$i+6]['sum_fu'] }}</td>
                        <td>{{ $info[$i]['sum_fu'] }}</td>
                        <td>{{ $info[$i+1]['sum_fu'] }}</td>
                        <td>{{ $info[$i+2]['sum_fu'] }}</td>
                        <td>{{ $info[$i+3]['sum_fu'] }}</td>
                        <td>{{ $info[$i+4]['sum_fu'] }}</td>
                        <td>{{ $info[$i+5]['sum_fu'] }}</td>
                        <td>{{ $info[$i+6]['sum_fu'] }}</td>
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
            <th><b>Итог</b></th>
            <td></td>
            <td><b>{{ $cb_aurinko + $cb_berezka + $cb_gnomik + $cb_zoloto + $cb_korablik + $cb_skazka + $cb_solnce }}</b></td>
            <td><b>{{ $cb_aurinko }}</b></td> 
            <td><b>{{ $cb_berezka }}</b></td> 
            <td><b>{{ $cb_gnomik }}</b></td> 
            <td><b>{{ $cb_zoloto }}</b></td> 
            <td><b>{{ $cb_korablik }}</b></td> 
            <td><b>{{ $cb_skazka }}</b></td> 
            <td><b>{{ $cb_solnce }}</b></td> 
            <td><b>{{ $fu_aurinko + $fu_berezka + $fu_gnomik + $fu_zoloto + $fu_korablik + $fu_skazka + $fu_solnce }}</b></td>
            <td><b>{{ $fu_aurinko }}</b></td> 
            <td><b>{{ $fu_berezka }}</b></td>  
            <td><b>{{ $fu_gnomik }}</b></td> 
            <td><b>{{ $fu_zoloto }}</b></td> 
            <td><b>{{ $fu_korablik }}</b></td> 
            <td><b>{{ $fu_skazka }}</b></td> 
            <td><b>{{ $fu_solnce }}</b></td> 
        </tr>
    </tbody>
</table>




