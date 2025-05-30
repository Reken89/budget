@php
    $fu = 0;
    $cb = 0;
    
    for ($n = 3 ; $n < 21 ; $n++){
        $fu += $info['total'][$n]['fu'];
        $cb += $info['total'][$n]['cb'];
    }  
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
        <tr>
            <th><font color="blue">ДАТА РЕДАКТИРОВАНИЯ</th>
            <td></td>
            <td></td>
            <td><font color="blue"><b>{{ $info['date'][27]['date_cb'] }}</b></td>
            <td><font color="blue"><b>{{ $info['date'][28]['date_cb'] }}</b></td>
            <td><font color="blue"><b>{{ $info['date'][35]['date_cb'] }}</b></td>
            <td><font color="blue"><b>XX-XX-XXXX</b></td>
            <td></td>
            <td><font color="blue"><b>{{ $info['date'][27]['date_fu'] }}</b></td>
            <td><font color="blue"><b>{{ $info['date'][28]['date_fu'] }}</b></td>
            <td><font color="blue"><b>{{ $info['date'][35]['date_fu'] }}</b></td>
            <td><font color="blue"><b>XX-XX-XXXX</b></td>
        </tr>
        @for ($i = 0; $i < count($info['result']) - 1; $i++)
            @if(($i % 21) == 0 || $i == 0)
                @if($info['result'][$i]['ekr']['shared'] == "Yes" || $info['result'][$i]['ekr']['main'] == "Yes")
                    <tr>
                        <th>{{ $info['result'][$i]['ekr']['title'] }}</th>
                        <td><b>{{ $info['result'][$i]['ekr']['ekr'] }}<b></td>
                        @php 
                            $fu_adm = 0;
                            $cb_adm = 0;
                            
                            for ($n = 3 ; $n < 19 ; $n++){
                                $fu_adm += $info['result'][$i+$n]['sum_fu'];
                                $cb_adm += $info['result'][$i+$n]['sum_cb'];
                            }
                        @endphp     
                        <td><b>{{ number_format($info['result'][$i]['sum_cb'] + $info['result'][$i+1]['sum_cb'] + $info['result'][$i+2]['sum_cb'] + $cb_adm, 2, ',', ' ') }}<b></td>
                        <td><b>{{ number_format($info['result'][$i]['sum_cb'], 2, ',', ' ') }}<b></td>
                        <td><b>{{ number_format($info['result'][$i+1]['sum_cb'], 2, ',', ' ') }}<b></td>
                        <td><b>{{ number_format($info['result'][$i+2]['sum_cb'], 2, ',', ' ') }}<b></td>
                        <td><b>{{ number_format($cb_adm, 2, ',', ' ') }}<b></td>
                        <td><font color="blue"><b>{{ number_format($info['result'][$i]['sum_fu'] + $info['result'][$i+1]['sum_fu'] + $info['result'][$i+2]['sum_fu'] + $fu_adm, 2, ',', ' ') }}<b></td>
                        <td><font color="blue"><b>{{ number_format($info['result'][$i]['sum_fu'], 2, ',', ' ') }}<b></td>
                        <td><font color="blue"><b>{{ number_format($info['result'][$i+1]['sum_fu'], 2, ',', ' ') }}<b></td>
                        <td><font color="blue"><b>{{ number_format($info['result'][$i+2]['sum_fu'], 2, ',', ' ') }}<b></td>
                        <td><font color="blue"><b>{{ number_format($fu_adm, 2, ',', ' ') }}<b></td>
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
                        <td>{{ number_format($info['result'][$i]['sum_cb'] + $info['result'][$i+1]['sum_cb'] + $info['result'][$i+2]['sum_cb'] + $cb_adm, 2, ',', ' ') }}</td>
                        @if ($info['status'] == "yes" && $info['today'] < $info['day_x'])
                            <td><input type="hidden" class="id" value="{{ $info['result'][$i]['id'] }}">
                                <input type="text" class="sum" value="{{ number_format($info['result'][$i]['sum_cb'], 2, ',', ' ') }}"></td>
                            <td><input type="hidden" class="id" value="{{ $info['result'][$i+1]['id'] }}">
                                <input type="text" class="sum" value="{{ number_format($info['result'][$i+1]['sum_cb'], 2, ',', ' ') }}"></td>
                            <td><input type="hidden" class="id" value="{{ $info['result'][$i+2]['id'] }}">
                                <input type="text" class="sum" value="{{ number_format($info['result'][$i+2]['sum_cb'], 2, ',', ' ') }}"></td>
                        @else
                            <td>{{ number_format($info['result'][$i]['sum_cb'], 2, ',', ' ') }}</td>
                            <td>{{ number_format($info['result'][$i+1]['sum_cb'], 2, ',', ' ') }}</td>
                            <td>{{ number_format($info['result'][$i+2]['sum_cb'], 2, ',', ' ') }}</td>
                        @endif
                        <td>{{ number_format($cb_adm, 2, ',', ' ') }}</td>
                        <td><font color="blue">{{ number_format($info['result'][$i]['sum_fu'] + $info['result'][$i+1]['sum_fu'] + $info['result'][$i+2]['sum_fu'] + $fu_adm, 2, ',', ' ') }}</td>
                        <td><font color="blue">{{ number_format($info['result'][$i]['sum_fu'], 2, ',', ' ') }}</td>
                        <td><font color="blue">{{ number_format($info['result'][$i+1]['sum_fu'], 2, ',', ' ') }}</td>
                        <td><font color="blue">{{ number_format($info['result'][$i+2]['sum_fu'], 2, ',', ' ') }}</td>
                        <td><font color="blue">{{ number_format($fu_adm, 2, ',', ' ') }}</td>
                    </tr>
                @endif
            @endif        
        @endfor
        <tr>
            <th>Итог</th>
            <td></td>
            <td><b>{{ number_format($info['total'][0]['cb'] + $info['total'][1]['cb'] + $info['total'][2]['cb'] + $cb, 2, ',', ' ') }}<b></td>
            <td><b>{{ number_format($info['total'][0]['cb'], 2, ',', ' ') }}</b></td> 
            <td><b>{{ number_format($info['total'][1]['cb'], 2, ',', ' ') }}</b></td>  
            <td><b>{{ number_format($info['total'][2]['cb'], 2, ',', ' ') }}</b></td> 
            <td><b>{{ number_format($cb, 2, ',', ' ') }}</b></td> 
            <td><font color="blue"><b>{{ number_format($info['total'][0]['fu'] + $info['total'][1]['fu'] + $info['total'][2]['fu'] + $fu, 2, ',', ' ') }}<b></td>
            <td><font color="blue"><b>{{ number_format($info['total'][0]['fu'], 2, ',', ' ') }}</b></td> 
            <td><font color="blue"><b>{{ number_format($info['total'][1]['fu'], 2, ',', ' ') }}</b></td> 
            <td><font color="blue"><b>{{ number_format($info['total'][2]['fu'], 2, ',', ' ') }}</b></td> 
            <td><font color="blue"><b>{{ number_format($fu, 2, ',', ' ') }}</b></td> 
        </tr>
    </tbody>
</table>
</html>





