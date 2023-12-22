@php
    $number = (count($info['result']['aurinko']));
@endphp

<table>
    
    <thead>
        <tr>
            <th style="min-width: 200px; width: 200px;">Наименование расходов</th>
            <th style="min-width: 70px; width: 70px;">ЭКР</th>
            <th style="min-width: 200px; width: 200px;">Ауринко</th>
            <th style="min-width: 200px; width: 200px;">Березка</th>
            <th style="min-width: 200px; width: 200px;">Гномик</th>
            <th style="min-width: 200px; width: 200px;">Золотой</th>
            <th style="min-width: 200px; width: 200px;">Кораблик</th>
            <th style="min-width: 200px; width: 200px;">Сказка</th>
            <th style="min-width: 200px; width: 200px;">Солнышко</th>
            <th style="min-width: 200px; width: 200px;">ИТОГ</th>
            <th style="min-width: 200px; width: 200px;">Ауринко (ФЭУ)</th>
            <th style="min-width: 200px; width: 200px;">Березка (ФЭУ)</th>
            <th style="min-width: 200px; width: 200px;">Гномик (ФЭУ)</th>
            <th style="min-width: 200px; width: 200px;">Золотой (ФЭУ)</th>
            <th style="min-width: 200px; width: 200px;">Кораблик (ФЭУ)</th>
            <th style="min-width: 200px; width: 200px;">Сказка (ФЭУ)</th>
            <th style="min-width: 200px; width: 200px;">Солнышко (ФЭУ)</th>
            <th style="min-width: 200px; width: 200px;">ИТОГ (ФЭУ)</th>
        </tr>
    </thead>
    
    <tbody>
    
    @for ($n = 1; $n <= $info['max_number']; $n++)
        @for ($numb = 0; $numb < $number; $numb++)                
            @if ($info['result']['aurinko'][$numb]['ekr']['main'] == 'Yes' && $info['result']['aurinko'][$numb]['ekr']['number'] == $n)           
                <tr>
                    <td><b>{{ $info['result']['aurinko'][$numb]['ekr']['title'] }}</b></td>
                    <td><b>{{ $info['result']['aurinko'][$numb]['ekr']['ekr'] }}</b></td>
                    <td><b>{{ $info['result']['aurinko'][$numb]['sum_cb'] }}</b></td>
                    <td><b>{{ $info['result']['berezka'][$numb]['sum_cb'] }}</b></td>
                    <td><b>{{ $info['result']['gnomik'][$numb]['sum_cb'] }}</b></td>
                    <td><b>{{ $info['result']['zoloto'][$numb]['sum_cb'] }}</b></td>
                    <td><b>{{ $info['result']['korablik'][$numb]['sum_cb'] }}</b></td>
                    <td><b>{{ $info['result']['skazka'][$numb]['sum_cb'] }}</b></td>
                    <td><b>{{ $info['result']['solnce'][$numb]['sum_cb'] }}</b></td>                   
                    <td><b>{{ $info['result']['aurinko'][$numb]['sum_cb'] + $info['result']['berezka'][$numb]['sum_cb'] + $info['result']['gnomik'][$numb]['sum_cb'] + $info['result']['zoloto'][$numb]['sum_cb'] + $info['result']['korablik'][$numb]['sum_cb'] + $info['result']['skazka'][$numb]['sum_cb'] + $info['result']['solnce'][$numb]['sum_cb'] }}</b></td>   
                    
                    <td><b>{{ $info['result']['aurinko'][$numb]['sum_fu'] }}</b></td>
                    <td><b>{{ $info['result']['berezka'][$numb]['sum_fu'] }}</b></td>
                    <td><b>{{ $info['result']['gnomik'][$numb]['sum_fu'] }}</b></td>
                    <td><b>{{ $info['result']['zoloto'][$numb]['sum_fu'] }}</b></td>
                    <td><b>{{ $info['result']['korablik'][$numb]['sum_fu'] }}</b></td>
                    <td><b>{{ $info['result']['skazka'][$numb]['sum_fu'] }}</b></td>
                    <td><b>{{ $info['result']['solnce'][$numb]['sum_fu'] }}</b></td>                   
                    <td><b>{{ $info['result']['aurinko'][$numb]['sum_fu'] + $info['result']['berezka'][$numb]['sum_fu'] + $info['result']['gnomik'][$numb]['sum_fu'] + $info['result']['zoloto'][$numb]['sum_fu'] + $info['result']['korablik'][$numb]['sum_fu'] + $info['result']['skazka'][$numb]['sum_fu'] + $info['result']['solnce'][$numb]['sum_fu'] }}</b></td> 
                </tr>
            @endif
            
            @if ($info['result']['aurinko'][$numb]['ekr']['main'] == 'No' && $info['result']['aurinko'][$numb]['ekr']['number'] == $n)
                <tr>
                    <td>{{ $info['result']['aurinko'][$numb]['ekr']['title'] }}</td>
                    <td>{{ $info['result']['aurinko'][$numb]['ekr']['ekr'] }}</td> 
                    <td>{{ $info['result']['aurinko'][$numb]['sum_cb'] }}</td>
                    <td>{{ $info['result']['berezka'][$numb]['sum_cb'] }}</td>
                    <td>{{ $info['result']['gnomik'][$numb]['sum_cb'] }}</td>
                    <td>{{ $info['result']['zoloto'][$numb]['sum_cb'] }}</td>
                    <td>{{ $info['result']['korablik'][$numb]['sum_cb'] }}</td>
                    <td>{{ $info['result']['skazka'][$numb]['sum_cb'] }}</td>
                    <td>{{ $info['result']['solnce'][$numb]['sum_cb'] }}</td>                   
                    <td>{{ $info['result']['aurinko'][$numb]['sum_cb'] + $info['result']['berezka'][$numb]['sum_cb'] + $info['result']['gnomik'][$numb]['sum_cb'] + $info['result']['zoloto'][$numb]['sum_cb'] + $info['result']['korablik'][$numb]['sum_cb'] + $info['result']['skazka'][$numb]['sum_cb'] + $info['result']['solnce'][$numb]['sum_cb'] }}</td>
                    
                    <td>{{ $info['result']['aurinko'][$numb]['sum_fu'] }}</td>
                    <td>{{ $info['result']['berezka'][$numb]['sum_fu'] }}</td>
                    <td>{{ $info['result']['gnomik'][$numb]['sum_fu'] }}</td>
                    <td>{{ $info['result']['zoloto'][$numb]['sum_fu'] }}</td>
                    <td>{{ $info['result']['korablik'][$numb]['sum_fu'] }}</td>
                    <td>{{ $info['result']['skazka'][$numb]['sum_fu'] }}</td>
                    <td>{{ $info['result']['solnce'][$numb]['sum_fu'] }}</td>                   
                    <td>{{ $info['result']['aurinko'][$numb]['sum_fu'] + $info['result']['berezka'][$numb]['sum_fu'] + $info['result']['gnomik'][$numb]['sum_fu'] + $info['result']['zoloto'][$numb]['sum_fu'] + $info['result']['korablik'][$numb]['sum_fu'] + $info['result']['skazka'][$numb]['sum_fu'] + $info['result']['solnce'][$numb]['sum_fu'] }}</td>
                </tr>
            @endif
        @endfor  
    @endfor
     
    <tr>
        <td><b>ИТОГО</b></td>
        <td></td>
        <td><b>{{ $info['total']['aurinko']['sum_cb'] }}</b></td>
        <td><b>{{ $info['total']['berezka']['sum_cb'] }}</b></td>
        <td><b>{{ $info['total']['gnomik']['sum_cb'] }}</b></td>
        <td><b>{{ $info['total']['zoloto']['sum_cb'] }}</b></td>
        <td><b>{{ $info['total']['korablik']['sum_cb'] }}</b></td>
        <td><b>{{ $info['total']['skazka']['sum_cb'] }}</b></td>
        <td><b>{{ $info['total']['solnce']['sum_cb'] }}</b></td>
        <td><b>{{ $info['total']['aurinko']['sum_cb'] + $info['total']['berezka']['sum_cb'] + $info['total']['gnomik']['sum_cb'] + $info['total']['zoloto']['sum_cb'] + $info['total']['korablik']['sum_cb'] + $info['total']['skazka']['sum_cb'] + $info['total']['solnce']['sum_cb'] }}</b></td>
        
        <td><b>{{ $info['total']['aurinko']['sum_fu'] }}</b></td>
        <td><b>{{ $info['total']['berezka']['sum_fu'] }}</b></td>
        <td><b>{{ $info['total']['gnomik']['sum_fu'] }}</b></td>
        <td><b>{{ $info['total']['zoloto']['sum_fu'] }}</b></td>
        <td><b>{{ $info['total']['korablik']['sum_fu'] }}</b></td>
        <td><b>{{ $info['total']['skazka']['sum_fu'] }}</b></td>
        <td><b>{{ $info['total']['solnce']['sum_fu'] }}</b></td>
        <td><b>{{ $info['total']['aurinko']['sum_fu'] + $info['total']['berezka']['sum_fu'] + $info['total']['gnomik']['sum_fu'] + $info['total']['zoloto']['sum_fu'] + $info['total']['korablik']['sum_fu'] + $info['total']['skazka']['sum_fu'] + $info['total']['solnce']['sum_fu'] }}</b></td>
    </tr>
    </tbody>
</table>



