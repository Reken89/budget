@php
    $date = date('Y-m-d');
@endphp
<p>Таблица выгружена {{ $date }}</p>     
<table>
    <thead>
        <tr>
            <th style="min-width: 200px; width: 400px;">Наименование</th>
            <th style="min-width: 70px; width: 70px;">ЭКР</th>
            <th style="min-width: 150px; width: 150px;">Итог ФЭУ</th>
            <th style="min-width: 150px; width: 150px;">Закупки</th>
            <th style="min-width: 150px; width: 150px;">Централизованная бухгалтерия</th>
            <th style="min-width: 150px; width: 150px;">Итог ЦБ</th>
            <th style="min-width: 150px; width: 150px;">(ЦБ) Закупки</th>
            <th style="min-width: 150px; width: 150px;">(ЦБ) Централизованная бухгалтерия</th>
        </tr>
    </thead>
    <tbody>
        @for ($i = 0; $i < count($info['result']) - 1; $i++)
            @if(($i % 2) == 0 || $i == 0)
                @if($info['result'][$i]['ekr']['shared'] == "Yes" || $info['result'][$i]['ekr']['main'] == "Yes")
                    <tr>
                        <th><b>{{ $info['result'][$i]['ekr']['title'] }}</b></th>
                        <td><b>{{ $info['result'][$i]['ekr']['ekr'] }}</b></td>
                        <td><b>{{ $info['result'][$i]['sum_fu'] + $info['result'][$i+1]['sum_fu'] }}</b></td>
                        <td><b>{{ $info['result'][$i]['sum_fu'] }}</b></td>
                        <td><b>{{ $info['result'][$i+1]['sum_fu'] }}</b></td>
                        <td><b>{{ $info['result'][$i]['sum_cb'] + $info['result'][$i+1]['sum_cb'] }}</b></td>
                        <td><b>{{ $info['result'][$i]['sum_cb'] }}</b></td>
                        <td><b>{{ $info['result'][$i+1]['sum_cb'] }}</b></td>
                    </tr>
                @else
                    <tr>
                        <th>{{ $info['result'][$i]['ekr']['title'] }}</th>
                        <td>{{ $info['result'][$i]['ekr']['ekr'] }}</td>
                        <td>{{ $info['result'][$i]['sum_fu'] + $info['result'][$i+1]['sum_fu'] }}</td>
                        <td>{{ $info['result'][$i]['sum_fu'] }}</td>
                        <td>{{ $info['result'][$i+1]['sum_fu'] }}</td>
                        <td>{{ $info['result'][$i]['sum_cb'] + $info['result'][$i+1]['sum_cb'] }}</td>
                        <td>{{ $info['result'][$i]['sum_cb'] }}</td>
                        <td>{{ $info['result'][$i+1]['sum_cb'] }}</td>
                    </tr>
                @endif
            @endif        
        @endfor
        <tr>
            <th><b>Итог</b></th>
            <td></td>
            <td><b>{{ $info['total'][0]['fu'] + $info['total'][1]['fu'] }}</b></td>
            <td><b>{{ $info['total'][0]['fu'] }}</b></td> 
            <td><b>{{ $info['total'][1]['fu'] }}</b></td>  
            <td><b>{{ $info['total'][0]['cb'] + $info['total'][1]['cb'] }}</b></td>
            <td><b>{{ $info['total'][0]['cb'] }}</b></td> 
            <td><b>{{ $info['total'][1]['cb'] }}</b></td> 
        </tr>
    </tbody>
</table>
</html>

