@php
    $date = date('Y-m-d');
    $fu = 0;
    $cb = 0;
    
    for ($n = 3 ; $n < 21 ; $n++){
        $fu += $info['total'][$n]['fu'];
        $cb += $info['total'][$n]['cb'];
    }  
@endphp
<p>Таблица выгружена {{ $date }}</p>   
<table>
    <thead>
        <tr>
            <th style="min-width: 200px; width: 400px;">Наименование</th>
            <th style="min-width: 70px; width: 70px;">ЭКР</th>
            <th style="min-width: 150px; width: 150px;">Итог ФЭУ</th>
            <th style="min-width: 150px; width: 150px;">Совет КГО</th>
            <th style="min-width: 150px; width: 150px;">КСО</th>
            <th style="min-width: 150px; width: 150px;">Глава</th>
            <th style="min-width: 150px; width: 150px;">Администрация</th>
            <th style="min-width: 150px; width: 150px;">Итог ЦБ</th>
            <th style="min-width: 150px; width: 150px;">(ЦБ) Совет КГО</th>
            <th style="min-width: 150px; width: 150px;">(ЦБ) КСО</th>
            <th style="min-width: 150px; width: 150px;">(ЦБ) Глава</th>
            <th style="min-width: 150px; width: 150px;">(ЦБ) Администрация</th>
        </tr>
    </thead>
    <tbody>
        @for ($i = 0; $i < count($info['result']) - 1; $i++)
            @if(($i % 21) == 0 || $i == 0)
                @if($info['result'][$i]['ekr']['shared'] == "Yes" || $info['result'][$i]['ekr']['main'] == "Yes")
                    <tr>
                        <th><b>{{ $info['result'][$i]['ekr']['title'] }}</b></th>
                        <td><b>{{ $info['result'][$i]['ekr']['ekr'] }}</b></td>
                        @php 
                            $fu_adm = 0;
                            $cb_adm = 0;
                            
                            for ($n = 3 ; $n < 19 ; $n++){
                                $fu_adm += $info['result'][$i+$n]['sum_fu'];
                                $cb_adm += $info['result'][$i+$n]['sum_cb'];
                            }
                        @endphp     
                        <td><b>{{ $info['result'][$i]['sum_fu'] + $info['result'][$i+1]['sum_fu'] + $info['result'][$i+2]['sum_fu'] + $fu_adm }}</b></td>
                        <td><b>{{ $info['result'][$i]['sum_fu'] }}</b></td>
                        <td><b>{{ $info['result'][$i+1]['sum_fu'] }}</b></td>
                        <td><b>{{ $info['result'][$i+2]['sum_fu'] }}</b></td>
                        <td><b>{{ $fu_adm }}</b></td>
                        <td><b>{{ $info['result'][$i]['sum_cb'] + $info['result'][$i+1]['sum_cb'] + $info['result'][$i+2]['sum_cb'] + $cb_adm }}</b></td>
                        <td><b>{{ $info['result'][$i]['sum_cb'] }}</b></td>
                        <td><b>{{ $info['result'][$i+1]['sum_cb'] }}</b></td>
                        <td><b>{{ $info['result'][$i+2]['sum_cb'] }}</b></td>
                        <td><b>{{ $cb_adm }}</b></td>
                    </tr>
                @else
                    <tr>
                        @php 
                            $fu_adm = 0;
                            $cb_adm = 0;
                            
                            for ($n = 3 ; $n < 19 ; $n++){
                                $fu_adm += $info['result'][$i+$n]['sum_fu'];
                                $cb_adm += $info['result'][$i+$n]['sum_cb'];
                            }
                        @endphp 
                        <th>{{ $info['result'][$i]['ekr']['title'] }}</th>
                        <td>{{ $info['result'][$i]['ekr']['ekr'] }}</td>
                        <td>{{ $info['result'][$i]['sum_fu'] + $info['result'][$i+1]['sum_fu'] + $info['result'][$i+2]['sum_fu'] + $fu_adm }}</td>
                        <td>{{ $info['result'][$i]['sum_fu'] }}</td>
                        <td>{{ $info['result'][$i+1]['sum_fu'] }}</td>
                        <td>{{ $info['result'][$i+2]['sum_fu'] }}</td>
                        <td>{{ $fu_adm }}</td>
                        <td>{{ $info['result'][$i]['sum_cb'] + $info['result'][$i+1]['sum_cb'] + $info['result'][$i+2]['sum_cb'] + $cb_adm }}</td>
                        <td>{{ $info['result'][$i]['sum_cb'] }}</td>
                        <td>{{ $info['result'][$i+1]['sum_cb'] }}</td>
                        <td>{{ $info['result'][$i+2]['sum_cb'] }}</td>
                        <td>{{ $cb_adm }}</td>
                    </tr>
                @endif
            @endif        
        @endfor
        <tr>
            <th><b>Итог</b></th>
            <td></td>
            <td><b>{{ $info['total'][0]['fu'] + $info['total'][1]['fu'] + $info['total'][2]['fu'] + $fu }}</b></td>
            <td><b>{{ $info['total'][0]['fu'] }}</b></td> 
            <td><b>{{ $info['total'][1]['fu'] }}</b></td>  
            <td><b>{{ $info['total'][2]['fu'] }}</b></td> 
            <td><b>{{ $fu }}</b></td> 
            <td><b>{{ $info['total'][0]['cb'] + $info['total'][1]['cb'] + $info['total'][2]['cb'] + $cb }}</b></td>
            <td><b>{{ $info['total'][0]['cb'] }}</b></td> 
            <td><b>{{ $info['total'][1]['cb'] }}</b></td> 
            <td><b>{{ $info['total'][2]['cb'] }}</b></td> 
            <td><b>{{ $cb }}</b></td> 
        </tr>
    </tbody>
</table>




