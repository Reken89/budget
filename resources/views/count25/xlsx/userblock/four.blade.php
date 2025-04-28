@php
    $date = date('Y-m-d');
@endphp
<p>Таблица выгружена {{ $date }}</p> 
<table>
    <thead>
        <tr>
            <th style="min-width: 200px; width: 400px;">Наименование</th>
            <th style="min-width: 70px; width: 70px;">ЭКР</th>
            <th style="min-width: 150px; width: 150px;">Итог ЦБ</th>
            <th style="min-width: 150px; width: 150px;">Ауринко</th>
            <th style="min-width: 150px; width: 150px;">Березка</th>
            <th style="min-width: 150px; width: 150px;">Кораблик</th>
            <th style="min-width: 150px; width: 150px;">Солнышко</th>
            <th style="min-width: 150px; width: 150px;">Итог ФЭУ</th>
            <th style="min-width: 150px; width: 150px;">(ФЭУ) Ауринко</th>
            <th style="min-width: 150px; width: 150px;">(ФЭУ) Березка</th>           
            <th style="min-width: 150px; width: 150px;">(ФЭУ) Кораблик</th>           
            <th style="min-width: 150px; width: 150px;">(ФЭУ) Солнышко</th>
        </tr>
    </thead>
    <tbody>
        @for ($i = 0; $i < count($info['result']) - 1; $i++)
            @if(($i % 4) == 0 || $i == 0)
                @if($info['result'][$i]['ekr']['shared'] == "Yes" || $info['result'][$i]['ekr']['main'] == "Yes")
                    <tr>
                        <td><b>{{ $info['result'][$i]['ekr']['title'] }}</b></td>
                        <td><b>{{ $info['result'][$i]['ekr']['ekr'] }}</b></td>
                        <td><b>{{ $info['result'][$i]['sum_cb'] + $info['result'][$i+1]['sum_cb'] + $info['result'][$i+2]['sum_cb'] + $info['result'][$i+3]['sum_cb'] }}</b></td>
                        <td><b>{{ $info['result'][$i]['sum_cb'] }}</b></td>
                        <td><b>{{ $info['result'][$i+1]['sum_cb'] }}</b></td>
                        <td><b>{{ $info['result'][$i+2]['sum_cb'] }}</b></td>
                        <td><b>{{ $info['result'][$i+3]['sum_cb'] }}</b></td>
                        <td><b>{{ $info['result'][$i]['sum_fu'] + $info['result'][$i+1]['sum_fu'] + $info['result'][$i+2]['sum_fu'] + $info['result'][$i+3]['sum_fu'] }}</b></td>
                        <td><b>{{ $info['result'][$i]['sum_fu'] }}</b></td>
                        <td><b>{{ $info['result'][$i+1]['sum_fu'] }}</b></td>
                        <td><b>{{ $info['result'][$i+2]['sum_fu'] }}</b></td>
                        <td><b>{{ $info['result'][$i+3]['sum_fu'] }}</b></td>
                    </tr>
                @else
                    <tr>
                        <th>{{ $info['result'][$i]['ekr']['title'] }}</th>
                        <td>{{ $info['result'][$i]['ekr']['ekr'] }}</td>
                        <td>{{ $info['result'][$i]['sum_cb'] + $info['result'][$i+1]['sum_cb'] + $info['result'][$i+2]['sum_cb'] + $info['result'][$i+3]['sum_cb'] }}</td>
                            <td>{{ $info['result'][$i]['sum_cb'] }}</td>
                            <td>{{ $info['result'][$i+1]['sum_cb'] }}</td>
                            <td>{{ $info['result'][$i+2]['sum_cb'] }}</td>
                            <td>{{ $info['result'][$i+3]['sum_cb'] }}</td>
                        <td>{{ $info['result'][$i]['sum_fu'] + $info['result'][$i+1]['sum_fu'] + $info['result'][$i+2]['sum_fu'] + $info['result'][$i+3]['sum_fu'] }}</td>
                        <td>{{ $info['result'][$i]['sum_fu'] }}</td>
                        <td>{{ $info['result'][$i+1]['sum_fu'] }}</td>
                        <td>{{ $info['result'][$i+2]['sum_fu'] }}</td>
                        <td>{{ $info['result'][$i+3]['sum_fu'] }}</td>
                    </tr>
                @endif
            @endif        
        @endfor
        <tr>
            <td><b>Итог</b></td>
            <td></td>
            <td><b>{{ $info['total'][0]['cb'] + $info['total'][1]['cb'] + $info['total'][2]['cb'] + $info['total'][3]['cb'] }}</b></td>
            <td><b>{{ $info['total'][0]['cb'] }}</b></td> 
            <td><b>{{ $info['total'][1]['cb'] }}</b></td>  
            <td><b>{{ $info['total'][2]['cb'] }}</b></td> 
            <td><b>{{ $info['total'][3]['cb'] }}</b></td> 
            <td><b>{{ $info['total'][0]['fu'] + $info['total'][1]['fu'] + $info['total'][2]['fu'] + $info['total'][3]['fu'] }}</b></td>
            <td><b>{{ $info['total'][0]['fu'] }}</b></td> 
            <td><b>{{ $info['total'][1]['fu'] }}</b></td> 
            <td><b>{{ $info['total'][2]['fu'] }}</b></td> 
            <td><b>{{ $info['total'][3]['fu'] }}</b></td> 
        </tr>
    </tbody>
</table>



