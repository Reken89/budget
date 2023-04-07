@php
    $number = (count($info['result']['svod']));
@endphp

<table>   
    <thead>
        <tr>
            <th style="min-width: 200px; width: 200px;">Наименование расходов</th>
            <th style="min-width: 70px; width: 70px;">ЭКР</th>
            <th style="min-width: 200px; width: 200px;">ИТОГ ФУ</th>
            <th style="min-width: 200px; width: 200px;">ИТОГ ЦБ</th>
        </tr>
    </thead>
    
    <tbody>
        @for ($n = 1; $n <= $info['max_number']; $n++)
            @for ($numb = 0; $numb < $number; $numb++)
                @if ($info['result']['svod'][$numb]['ekr']['main'] == 'Yes' && $info['result']['svod'][$numb]['ekr']['number'] == $n)
                    <tr>
                        <td><b>{{ $info['result']['svod'][$numb]['ekr']['title'] }}</b></td>
                        <td><b>{{ $info['result']['svod'][$numb]['ekr']['ekr'] }}</b></td>                                         
                        <td><b>{{ $info['result']['svod'][$numb]['sum_fu'] }}</b></td>
                        <td><b>{{ $info['result']['svod'][$numb]['sum_cb'] }}</b></td>
                    </tr>
                @endif

                @if ($info['result']['svod'][$numb]['ekr']['main'] == 'No' && $info['result']['svod'][$numb]['ekr']['number'] == $n)
                    <tr>
                        <td>{{ $info['result']['svod'][$numb]['ekr']['title'] }}</td>
                        <td>{{ $info['result']['svod'][$numb]['ekr']['ekr'] }}</td>                       
                        <td>{{ $info['result']['svod'][$numb]['sum_fu'] }}</td>
                        <td>{{ $info['result']['svod'][$numb]['sum_cb'] }}</td>
                    </tr>
                @endif
            @endfor  
        @endfor
        
        <tr>
            <td><b>ИТОГО</b></td>
            <td></td>
            <td><b>{{ $info['total']['svod']['sum_fu'] }}</b></td> 
            <td><b>{{ $info['total']['svod']['sum_cb'] }}</b></td> 
        </tr>
    </tbody>
</table>