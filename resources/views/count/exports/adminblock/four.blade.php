@php
    $number = (count($info['result']['dhsh']));
@endphp

<table>   
    <thead>
        <tr>
            <th style="min-width: 200px; width: 200px;">Наименование расходов</th>
            <th style="min-width: 70px; width: 70px;">ЭКР</th>
            <th style="min-width: 200px; width: 200px;">ИТОГ ФУ</th>
            <th style="min-width: 200px; width: 200px;">ДХШ</th>
            <th style="min-width: 200px; width: 200px;">ДМШ</th>
            <th style="min-width: 200px; width: 200px;">ИТОГ ЦБ</th>
            <th style="min-width: 200px; width: 200px;">(ЦБ) ДХШ</th>
            <th style="min-width: 200px; width: 200px;">(ЦБ) ДМШ</th>
        </tr>
    </thead>
    
    <tbody>
    
    @for ($n = 1; $n <= $info['max_number']; $n++)
        @for ($numb = 0; $numb < $number; $numb++)               
            @if ($info['result']['dhsh'][$numb]['ekr']['main'] == 'Yes' && $info['result']['dhsh'][$numb]['ekr']['number'] == $n)            
                <tr>
                    <td><b>{{ $info['result']['dhsh'][$numb]['ekr']['title'] }}</b></td>
                    <td><b>{{ $info['result']['dhsh'][$numb]['ekr']['ekr'] }}</b></td>
                    <td><b>{{ $info['result']['dhsh'][$numb]['sum_fu'] + $info['result']['dmsh'][$numb]['sum_fu'] }}</b></td>                   
                    <td><b>{{ $info['result']['dhsh'][$numb]['sum_fu'] }}</b></td>
                    <td><b>{{ $info['result']['dmsh'][$numb]['sum_fu'] }}</b></td>
                    
                    <td><b>{{ $info['result']['dhsh'][$numb]['sum_cb'] + $info['result']['dmsh'][$numb]['sum_cb'] }}</b></td>
                    <td><b>{{ $info['result']['dhsh'][$numb]['sum_cb'] }}</b></td>
                    <td><b>{{ $info['result']['dmsh'][$numb]['sum_cb'] }}</b></td>
                </tr>
            @endif
            
            @if ($info['result']['dhsh'][$numb]['ekr']['main'] == 'No' && $info['result']['dhsh'][$numb]['ekr']['number'] == $n)
                <tr>
                    <td>{{ $info['result']['dhsh'][$numb]['ekr']['title'] }}</td>
                    <td>{{ $info['result']['dhsh'][$numb]['ekr']['ekr'] }}</td>
                    <td>{{ $info['result']['dhsh'][$numb]['sum_fu'] + $info['result']['dmsh'][$numb]['sum_fu'] }}</td>
                    <td>{{ $info['result']['dhsh'][$numb]['sum_fu'] }}</td>                   
                    <td>{{ $info['result']['dmsh'][$numb]['sum_fu'] }}</td>                    
                    
                    <td>{{ $info['result']['dhsh'][$numb]['sum_cb'] + $info['result']['dmsh'][$numb]['sum_cb'] }}</td>
                    <td>{{ $info['result']['dhsh'][$numb]['sum_cb'] }}</td>
                    <td>{{ $info['result']['dmsh'][$numb]['sum_cb'] }}</td>
                </tr>
            @endif
        @endfor  
    @endfor
     
    <tr>
        <td><b>ИТОГО</b></td>
        <td></td>
        <td><b>{{ $info['total']['dhsh']['sum_fu'] + $info['total']['dmsh']['sum_fu'] }}</b></td>
        <td><b>{{ $info['total']['dhsh']['sum_fu'] }}</b></td>
        <td><b>{{ $info['total']['dmsh']['sum_fu'] }}</b></td>
        <td><b>{{ $info['total']['dhsh']['sum_cb'] + $info['total']['dmsh']['sum_cb'] }}</b></td>
        <td><b>{{ $info['total']['dhsh']['sum_cb'] }}</b></td>
        <td><b>{{ $info['total']['dmsh']['sum_cb'] }}</b></td> 
    </tr>
    </tbody>
</table>
