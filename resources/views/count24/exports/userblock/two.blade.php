@php
    $date = date('Y-m-d');
    $fu = 0;
    $cb = 0;
    
    $fu_sovet = 0;
    $fu_kso = 0;
    $fu_glava = 0;
    $cb_sovet = 0;
    $cb_kso = 0;
    $cb_glava = 0;   
@endphp

<p>Таблица выгружена {{ $date }}</p>    
<p></p>
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
                        <th><b>{{ $info[$i]['ekr']['title'] }}</b></th>
                        <td><b>{{ $info[$i]['ekr']['ekr'] }}</b></td>
                        @php 
                            $fu_adm = 0;
                            $cb_adm = 0;
                            
                            for ($n = 3 ; $n < 19 ; $n++){
                                $fu_adm += $info[$i+$n]['sum_fu'];
                                $cb_adm += $info[$i+$n]['sum_cb'];
                            }
                        @endphp  
                        <td><b>{{ $info[$i]['sum_cb'] + $info[$i+1]['sum_cb'] + $info[$i+2]['sum_cb'] + $cb_adm }}</b></td>
                        <td><b>{{ $info[$i]['sum_cb'] }}</b></td>
                        <td><b>{{ $info[$i+1]['sum_cb'] }}</b></td>
                        <td><b>{{ $info[$i+2]['sum_cb'] }}</b></td>
                        <td><b>{{ $cb_adm }}</b></td>
                        <td><b>{{ $info[$i]['sum_fu'] + $info[$i+1]['sum_fu'] + $info[$i+2]['sum_fu'] + $fu_adm }}</b></td>
                        <td><b>{{ $info[$i]['sum_fu'] }}</b></td>
                        <td><b>{{ $info[$i+1]['sum_fu'] }}</b></td>
                        <td><b>{{ $info[$i+2]['sum_fu'] }}</b></td>
                        <td><b>{{ $fu_adm }}</b></td>
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
                        <td>{{ $info[$i]['sum_cb'] + $info[$i+1]['sum_cb'] + $info[$i+2]['sum_cb'] + $cb_adm }}</td>
                        <td>{{ $info[$i]['sum_cb'] }}</td>
                        <td>{{ $info[$i+1]['sum_cb'] }}</td>
                        <td>{{ $info[$i+2]['sum_cb'] }}</td>
                        <td>{{ $cb_adm }}</td>
                        <td>{{ $info[$i]['sum_fu'] + $info[$i+1]['sum_fu'] + $info[$i+2]['sum_fu'] + $fu_adm }}</td>
                        <td>{{ $info[$i]['sum_fu'] }}</td>
                        <td>{{ $info[$i+1]['sum_fu'] }}</td>
                        <td>{{ $info[$i+2]['sum_fu'] }}</td>
                        <td>{{ $fu_adm }}</td>
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
            <th><b>Итог</b></th>
            <td></td>
            <td><b>{{ $cb_sovet + $cb_kso + $cb_glava + $cb }}</b></td>
            <td><b>{{ $cb_sovet }}</b></td> 
            <td><b>{{ $cb_kso }}</b></td> 
            <td><b>{{ $cb_glava }}</b></td> 
            <td><b>{{ $cb }}</b></td> 
            <td><b>{{ $fu_sovet + $fu_kso + $fu_glava + $fu }}</b></td>
            <td><b>{{ $fu_sovet }}</b></td> 
            <td><b>{{ $fu_kso }}</b></td>  
            <td><b>{{ $fu_glava }}</b></td> 
            <td><b>{{ $fu }}</b></td> 
        </tr>
    </tbody>
</table>



