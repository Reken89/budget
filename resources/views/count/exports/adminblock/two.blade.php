@php
    $number = (count($info['result']['cb']));
@endphp

<table>
    
    <thead>
        <tr>
            <th style="min-width: 200px; width: 200px;">Наименование расходов</th>
            <th style="min-width: 70px; width: 70px;">ЭКР</th>
            <th style="min-width: 200px; width: 200px;">ИТОГ ФУ</th>
            <th style="min-width: 200px; width: 200px;">Централизованная бухгалтерия</th>
            <th style="min-width: 200px; width: 200px;">Закупки КГО</th>
            <th style="min-width: 200px; width: 200px;">ИТОГ ЦБ</th>
            <th style="min-width: 200px; width: 200px;">(ЦБ) Централизованная бухгалтерия</th>
            <th style="min-width: 200px; width: 200px;">(ЦБ) Закупки КГО</th>
        </tr>
    </thead>
    
    <tbody>
    
    @for ($n = 1; $n <= $info['max_number']; $n++)
        @for ($numb = 0; $numb < $number; $numb++)               
            @if ($info['result']['cb'][$numb]['ekr']['main'] == 'Yes' && $info['result']['cb'][$numb]['ekr']['number'] == $n)           
                <tr>
                    <td><b>{{ $info['result']['cb'][$numb]['ekr']['title'] }}</b></td>
                    <td><b>{{ $info['result']['cb'][$numb]['ekr']['ekr'] }}</b></td>
                    <td><b>{{ $info['result']['cb'][$numb]['sum_fu'] + $info['result']['zakupki'][$numb]['sum_fu'] }}</b></td>                   
                    <td><b>{{ $info['result']['cb'][$numb]['sum_fu'] }}</b></td>
                    <td><b>{{ $info['result']['zakupki'][$numb]['sum_fu'] }}</b></td>
                    
                    <td><b>{{ $info['result']['cb'][$numb]['sum_cb'] + $info['result']['zakupki'][$numb]['sum_cb'] }}</b></td>
                    <td><b>{{ $info['result']['cb'][$numb]['sum_cb'] }}</b></td>
                    <td><b>{{ $info['result']['zakupki'][$numb]['sum_cb'] }}</b></td>
                </tr>
            @endif
            
            @if ($info['result']['cb'][$numb]['ekr']['main'] == 'No' && $info['result']['cb'][$numb]['ekr']['number'] == $n)
                <tr>
                    <input type="hidden" class="number" value="{{ $info['result']['cb'][$numb]['ekr']['number'] }}">
                    <input type="hidden" class="year" value="{{ $info['year'] }}">
                    <td class="col-id-no" scope="row">{{ $info['result']['cb'][$numb]['ekr']['title'] }}</td>
                    <td>{{ $info['result']['cb'][$numb]['ekr']['ekr'] }}</td>
                    <td>{{ $info['result']['cb'][$numb]['sum_fu'] + $info['result']['zakupki'][$numb]['sum_fu'] }}</td>
                    <td>{{ $info['result']['cb'][$numb]['sum_fu'] }}</td>                 
                    <td>{{ $info['result']['zakupki'][$numb]['sum_fu'] }}</td>                                       
                    <td>{{ $info['result']['cb'][$numb]['sum_cb'] + $info['result']['zakupki'][$numb]['sum_cb'] }}</td>
                    <td>{{ $info['result']['cb'][$numb]['sum_cb'] }}</td>
                    <td>{{ $info['result']['zakupki'][$numb]['sum_cb'] }}</td>
                </tr>
            @endif
        @endfor  
    @endfor
     
    <tr>
        <td><b>ИТОГО</b></td>
        <td></td>
        <td><b>{{ $info['total']['cb']['sum_fu'] + $info['total']['zakupki']['sum_fu'] }}</b></td>
        <td><b>{{ $info['total']['cb']['sum_fu'] }}</b></td>
        <td><b>{{ $info['total']['zakupki']['sum_fu'] }}</b></td>
        <td><b>{{ $info['total']['cb']['sum_cb'] + $info['total']['zakupki']['sum_cb'] }}</b></td>
        <td><b>{{ $info['total']['cb']['sum_cb'] }}</b></td>
        <td><b>{{ $info['total']['zakupki']['sum_cb'] }}</b></td> 
    </tr>
    </tbody>
</table>

