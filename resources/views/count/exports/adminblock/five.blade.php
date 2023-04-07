@php
    $number = (count($info['result']['school']));
@endphp

<table>   
    <thead>
        <tr>
            <th style="min-width: 200px; width: 200px;">Наименование расходов</th>
            <th style="min-width: 70px; width: 70px;">ЭКР</th>
            <th style="min-width: 200px; width: 200px;">ИТОГ ФУ</th>
            <th style="min-width: 200px; width: 200px;">Школа</th>
            <th style="min-width: 200px; width: 200px;">Сад</th>
            <th style="min-width: 200px; width: 200px;">ИТОГ ЦБ</th>
            <th style="min-width: 200px; width: 200px;">(ЦБ) Школа</th>
            <th style="min-width: 200px; width: 200px;">(ЦБ) Сад</th>
        </tr>
    </thead>
    
    <tbody>    
    @for ($n = 1; $n <= $info['max_number']; $n++)
        @for ($numb = 0; $numb < $number; $numb++)               
            @if ($info['result']['school'][$numb]['ekr']['main'] == 'Yes' && $info['result']['school'][$numb]['ekr']['number'] == $n)
                <tr>
                    <td><b>{{ $info['result']['school'][$numb]['ekr']['title'] }}</b></td>
                    <td><b>{{ $info['result']['school'][$numb]['ekr']['ekr'] }}</b></td>
                    <td><b>{{ $info['result']['school'][$numb]['sum_fu'] + $info['result']['kinder'][$numb]['sum_fu'] }}</b></td>                   
                    <td><b>{{ $info['result']['school'][$numb]['sum_fu'] }}</b></td>
                    <td><b>{{ $info['result']['kinder'][$numb]['sum_fu'] }}</b></td>
                    
                    <td><b>{{ $info['result']['school'][$numb]['sum_cb'] + $info['result']['kinder'][$numb]['sum_cb'] }}</b></td>
                    <td><b>{{ $info['result']['school'][$numb]['sum_cb'] }}</b></td>
                    <td><b>{{ $info['result']['kinder'][$numb]['sum_cb'] }}</b></td>
                </tr>
            @endif
            
            @if ($info['result']['school'][$numb]['ekr']['main'] == 'No' && $info['result']['school'][$numb]['ekr']['number'] == $n)
                <tr>
                    <td>{{ $info['result']['school'][$numb]['ekr']['title'] }}</td>
                    <td>{{ $info['result']['school'][$numb]['ekr']['ekr'] }}</td>
                    <td>{{ $info['result']['school'][$numb]['sum_fu'] + $info['result']['kinder'][$numb]['sum_fu'] }}</td>
                    <td>{{ $info['result']['school'][$numb]['sum_fu'] }}</td>                    
                    <td>{{ $info['result']['kinder'][$numb]['sum_fu'] }}</td>                    
                    
                    <td>{{ $info['result']['school'][$numb]['sum_cb'] + $info['result']['kinder'][$numb]['sum_cb'] }}</td>
                    <td>{{ $info['result']['school'][$numb]['sum_cb'] }}</td>
                    <td>{{ $info['result']['kinder'][$numb]['sum_cb'] }}</td>
                </tr>
            @endif
        @endfor  
    @endfor
     
    <tr>
        <td><b>ИТОГО</b></td>
        <td></td>
        <td><b>{{ $info['total']['school']['sum_fu'] + $info['total']['kinder']['sum_fu'] }}</b></td>
        <td><b>{{ $info['total']['school']['sum_fu'] }}</b></td>
        <td><b>{{ $info['total']['kinder']['sum_fu'] }}</b></td>
        <td><b>{{ $info['total']['school']['sum_cb'] + $info['total']['kinder']['sum_cb'] }}</b></td>
        <td><b>{{ $info['total']['school']['sum_cb'] }}</b></td>
        <td><b>{{ $info['total']['kinder']['sum_cb'] }}</b></td> 
    </tr>
    </tbody>
</table>


