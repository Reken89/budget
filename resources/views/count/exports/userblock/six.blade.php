@php
    $number = (count($info['result']['kums']));
@endphp

<table>
    
    <thead>
        <tr>
            <th style="min-width: 200px; width: 200px;">Наименование расходов</th>
            <th style="min-width: 70px; width: 70px;">ЭКР</th>
            <th style="min-width: 200px; width: 200px;">КУМС</th>
            <th style="min-width: 200px; width: 200px;">Управление собственностью</th>
            <th style="min-width: 200px; width: 200px;">ЕДДС</th>
            <th style="min-width: 200px; width: 200px;">ИТОГ</th>
            <th style="min-width: 200px; width: 200px;">КУМС (ФЭУ)</th>
            <th style="min-width: 200px; width: 200px;">Управление собственностью (ФЭУ)</th>
            <th style="min-width: 200px; width: 200px;">ЕДДС (ФЭУ)</th>
            <th style="min-width: 200px; width: 200px;">ИТОГ (ФЭУ)</th>
        </tr>
    </thead>
    
    <tbody>
    
    @for ($n = 1; $n <= $info['max_number']; $n++)
        @for ($numb = 0; $numb < $number; $numb++)               
            @if ($info['result']['kums'][$numb]['ekr']['main'] == 'Yes' && $info['result']['kums'][$numb]['ekr']['number'] == $n)
            
                <tr>
                    <td><b>{{ $info['result']['kums'][$numb]['ekr']['title'] }}</b></td>
                    <td><b>{{ $info['result']['kums'][$numb]['ekr']['ekr'] }}</b></td>
                    <td><b>{{ $info['result']['kums'][$numb]['sum_cb'] }}</b></td>
                    <td><b>{{ $info['result']['us'][$numb]['sum_cb'] }}</b></td>
                    <td><b>{{ $info['result']['edds'][$numb]['sum_cb'] }}</b></td>                  
                    <td><b>{{ $info['result']['kums'][$numb]['sum_cb'] + $info['result']['us'][$numb]['sum_cb'] + $info['result']['edds'][$numb]['sum_cb'] }}</b></td>
                    
                    <td><b>{{ $info['result']['kums'][$numb]['sum_fu'] }}</b></td>
                    <td><b>{{ $info['result']['us'][$numb]['sum_fu'] }}</b></td>
                    <td><b>{{ $info['result']['edds'][$numb]['sum_fu'] }}</b></td>                  
                    <td><b>{{ $info['result']['kums'][$numb]['sum_fu'] + $info['result']['us'][$numb]['sum_fu'] + $info['result']['edds'][$numb]['sum_fu'] }}</b></td>
                </tr>
            @endif
            
            @if ($info['result']['kums'][$numb]['ekr']['main'] == 'No' && $info['result']['kums'][$numb]['ekr']['number'] == $n)
                <tr>
                    <td>{{ $info['result']['kums'][$numb]['ekr']['title'] }}</td>
                    <td>{{ $info['result']['kums'][$numb]['ekr']['ekr'] }}</td>

                    <td>{{ $info['result']['kums'][$numb]['sum_cb'] }}</td>
                    <td>{{ $info['result']['us'][$numb]['sum_cb'] }}</td>
                    <td>{{ $info['result']['edds'][$numb]['sum_cb'] }}</td>
                                       
                    <td>{{ $info['result']['kums'][$numb]['sum_cb'] + $info['result']['us'][$numb]['sum_cb'] + $info['result']['edds'][$numb]['sum_cb'] }}</td>
                    
                    <td>{{ $info['result']['kums'][$numb]['sum_fu'] }}</td>
                    <td>{{ $info['result']['us'][$numb]['sum_fu'] }}</td>
                    <td>{{ $info['result']['edds'][$numb]['sum_fu'] }}</td>
                                       
                    <td>{{ $info['result']['kums'][$numb]['sum_fu'] + $info['result']['us'][$numb]['sum_fu'] + $info['result']['edds'][$numb]['sum_fu'] }}</td>
                </tr>
            @endif
        @endfor  
    @endfor
     
    <tr>
        <td><b>ИТОГО</b></td>
        <td></td>
        <td><b>{{ $info['total']['kums']['sum_cb'] }}</b></td>
        <td><b>{{ $info['total']['us']['sum_cb'] }}</b></td>
        <td><b>{{ $info['total']['edds']['sum_cb'] }}</b></td> 
        <td><b>{{ $info['total']['kums']['sum_cb'] + $info['total']['us']['sum_cb'] + $info['total']['edds']['sum_cb'] }}</b></td>
        
        <td><b>{{ $info['total']['kums']['sum_fu'] }}</b></td>
        <td><b>{{ $info['total']['us']['sum_fu'] }}</b></td>
        <td><b>{{ $info['total']['edds']['sum_fu'] }}</b></td> 
        <td><b>{{ $info['total']['kums']['sum_fu'] + $info['total']['us']['sum_fu'] + $info['total']['edds']['sum_fu'] }}</b></td>
    </tr>
    </tbody>
</table>



