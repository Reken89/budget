@php
    $number = (count($info['result']['glava']));
@endphp

<table>
    
    <thead>
        <tr>
            <th style="min-width: 200px; width: 200px;">Наименование расходов</th>
            <th style="min-width: 70px; width: 70px;">ЭКР</th>
            <th style="min-width: 200px; width: 200px;">ИТОГ ФУ</th>
            <th style="min-width: 200px; width: 200px;">Глава</th>
            <th style="min-width: 200px; width: 200px;">Администрация КГО</th>
            <th style="min-width: 200px; width: 200px;">Совет КГО</th>
            <th style="min-width: 200px; width: 200px;">КСО Костомукша</th>
            <th style="min-width: 200px; width: 200px;">ИТОГ ЦБ</th>
            <th style="min-width: 200px; width: 200px;">(ЦБ) Глава</th>
            <th style="min-width: 200px; width: 200px;">(ЦБ) Администрация КГО</th>
            <th style="min-width: 200px; width: 200px;">(ЦБ) Совет КГО</th>
            <th style="min-width: 200px; width: 200px;">(ЦБ) КСО Костомукша</th>
        </tr>
    </thead>
    
    <tbody>
    
    @for ($n = 1; $n <= $info['max_number']; $n++)
        @for ($numb = 0; $numb < $number; $numb++)               
            @if ($info['result']['glava'][$numb]['ekr']['main'] == 'Yes' && $info['result']['glava'][$numb]['ekr']['number'] == $n)           
                <tr>
                    <td><b>{{ $info['result']['glava'][$numb]['ekr']['title'] }}</b></td>
                    <td><b>{{ $info['result']['glava'][$numb]['ekr']['ekr'] }}</b></td>
                    <td><b>{{ $info['result']['glava'][$numb]['sum_fu'] + $info['result']['adm'][$numb]['sum_fu'] + $info['result']['sovet'][$numb]['sum_fu'] + $info['result']['kso'][$numb]['sum_fu'] }}</b></td>                   
                    <td><b>{{ $info['result']['glava'][$numb]['sum_fu'] }}</b></td>
                    <td><b>{{ $info['result']['adm'][$numb]['sum_fu'] }}</b></td>
                    <td><b>{{ $info['result']['sovet'][$numb]['sum_fu'] }}</b></td>
                    <td><b>{{ $info['result']['kso'][$numb]['sum_fu'] }}</b></td>
                    
                    <td><b>{{ $info['result']['glava'][$numb]['sum_cb'] + $info['result']['adm'][$numb]['sum_cb'] + $info['result']['sovet'][$numb]['sum_cb'] + $info['result']['kso'][$numb]['sum_cb'] }}</b></td>
                    <td><b>{{ $info['result']['glava'][$numb]['sum_cb'] }}</b></td>
                    <td><b>{{ $info['result']['adm'][$numb]['sum_cb'] }}</b></td>
                    <td><b>{{ $info['result']['sovet'][$numb]['sum_cb'] }}</b></td>
                    <td><b>{{ $info['result']['kso'][$numb]['sum_cb'] }}</b></td>
                </tr>
            @endif
            
            @if ($info['result']['glava'][$numb]['ekr']['main'] == 'No' && $info['result']['glava'][$numb]['ekr']['number'] == $n)
                <tr>
                    <td>{{ $info['result']['glava'][$numb]['ekr']['title'] }}</td>
                    <td>{{ $info['result']['glava'][$numb]['ekr']['ekr'] }}</td>
                    <td>{{ $info['result']['glava'][$numb]['sum_fu'] + $info['result']['adm'][$numb]['sum_fu'] + $info['result']['sovet'][$numb]['sum_fu'] + $info['result']['kso'][$numb]['sum_fu'] }}</td>
                    <td>{{ $info['result']['glava'][$numb]['sum_fu'] }} </td>                  
                    <td>{{ $info['result']['adm'][$numb]['sum_fu']}} </td>                     
                    <td>{{ $info['result']['sovet'][$numb]['sum_fu'] }}</td>                     
                    <td>{{ $info['result']['kso'][$numb]['sum_fu'] }}</td>                     
                    <td>{{ $info['result']['glava'][$numb]['sum_cb'] + $info['result']['adm'][$numb]['sum_cb'] + $info['result']['sovet'][$numb]['sum_cb'] + $info['result']['kso'][$numb]['sum_cb'] }}</td>
                    <td>{{ $info['result']['glava'][$numb]['sum_cb'] }}</td>
                    <td>{{ $info['result']['adm'][$numb]['sum_cb'] }}</td>
                    <td>{{ $info['result']['sovet'][$numb]['sum_cb'] }}</td>
                    <td>{{ $info['result']['kso'][$numb]['sum_cb'] }}</td>
                </tr>
            @endif
        @endfor  
    @endfor
     
    <tr>
        <td><b>ИТОГО</b></td>
        <td></td>
        <td><b>{{ $info['total']['glava']['sum_fu'] + $info['total']['adm']['sum_fu'] + $info['total']['sovet']['sum_fu'] + $info['total']['kso']['sum_fu'] }}</b></td>
        <td><b>{{ $info['total']['glava']['sum_fu'] }}</b></td>
        <td><b>{{ $info['total']['adm']['sum_fu'] }}</b></td>
        <td><b>{{ $info['total']['sovet']['sum_fu'] }}</b></td>
        <td><b>{{ $info['total']['kso']['sum_fu'] }}</b></td>  
        <td><b>{{ $info['total']['glava']['sum_cb'] + $info['total']['adm']['sum_cb'] + $info['total']['sovet']['sum_cb'] + $info['total']['kso']['sum_cb'] }}</b></td>
        <td><b>{{ $info['total']['glava']['sum_cb'] }}</b></td>
        <td><b>{{ $info['total']['adm']['sum_cb'] }}</b></td>
        <td><b>{{ $info['total']['sovet']['sum_cb'] }}</b></td>
        <td><b>{{ $info['total']['kso']['sum_cb'] }}</b></td> 
    </tr>
    </tbody>
</table>