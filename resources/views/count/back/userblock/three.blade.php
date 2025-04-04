@php
    $number = (count($info['result']['aurinko']));
@endphp

</br>
<table class="freeze-table" width="700px">
    
    <thead>
        <tr>
            <th style="min-width: 200px; width: 200px;" class="col-id-no fixed-header">Наименование расходов</th>
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
            <th style="min-width: 200px; width: 200px;">Гномик (ФЭУ)/th>
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
            @php
                if (isset($shared_aurinko_id) == FALSE){
                    $shared_aurinko_id = 89;
                    $shared_berezka_id = 89;
                    $shared_gnomik_id = 89;
                    $shared_zoloto_id = 89;
                    $shared_korablik_id = 89;
                    $shared_skazka_id = 89;
                    $shared_solnce_id = 89;
                }
            @endphp
            @if ($info['result']['aurinko'][$numb]['ekr']['shared'] == 'Yes' && $info['result']['aurinko'][$numb]['ekr']['number'] == $n)
                @php
                    $shared_aurinko_id = $info['result']['aurinko'][$numb]['id'];
                    $shared_berezka_id = $info['result']['berezka'][$numb]['id']; 
                    $shared_gnomik_id = $info['result']['gnomik'][$numb]['id']; 
                    $shared_zoloto_id = $info['result']['zoloto'][$numb]['id'];
                    $shared_korablik_id = $info['result']['korablik'][$numb]['id'];
                    $shared_skazka_id = $info['result']['skazka'][$numb]['id'];
                    $shared_solnce_id = $info['result']['solnce'][$numb]['id'];
                @endphp
            @endif  
                
            @if ($info['result']['aurinko'][$numb]['ekr']['main'] == 'Yes' && $info['result']['aurinko'][$numb]['ekr']['number'] == $n)
                @php
                    $main_aurinko_id = $info['result']['aurinko'][$numb]['id'];
                    $main_berezka_id = $info['result']['berezka'][$numb]['id'];  
                    $main_gnomik_id = $info['result']['gnomik'][$numb]['id']; 
                    $main_zoloto_id = $info['result']['zoloto'][$numb]['id']; 
                    $main_korablik_id = $info['result']['korablik'][$numb]['id'];
                    $main_skazka_id = $info['result']['skazka'][$numb]['id'];
                    $main_solnce_id = $info['result']['solnce'][$numb]['id'];
                @endphp
            
                <tr>
                    <td class="col-id-no" scope="row"><b>{{ $info['result']['aurinko'][$numb]['ekr']['title'] }}</b></td>
                    <td><b>{{ $info['result']['aurinko'][$numb]['ekr']['ekr'] }}</b></td>
                    <td><b>{{ number_format($info['result']['aurinko'][$numb]['sum_cb'], 2, ',', ' ') }}</b></td>
                    <td><b>{{ number_format($info['result']['berezka'][$numb]['sum_cb'], 2, ',', ' ') }}</b></td>
                    <td><b>{{ number_format($info['result']['gnomik'][$numb]['sum_cb'], 2, ',', ' ') }}</b></td>
                    <td><b>{{ number_format($info['result']['zoloto'][$numb]['sum_cb'], 2, ',', ' ') }}</b></td>
                    <td><b>{{ number_format($info['result']['korablik'][$numb]['sum_cb'], 2, ',', ' ') }}</b></td>
                    <td><b>{{ number_format($info['result']['skazka'][$numb]['sum_cb'], 2, ',', ' ') }}</b></td>
                    <td><b>{{ number_format($info['result']['solnce'][$numb]['sum_cb'], 2, ',', ' ') }}</b></td>                   
                    <td><b>{{ number_format($info['result']['aurinko'][$numb]['sum_cb'] + $info['result']['berezka'][$numb]['sum_cb'] + $info['result']['gnomik'][$numb]['sum_cb'] + $info['result']['zoloto'][$numb]['sum_cb'] + $info['result']['korablik'][$numb]['sum_cb'] + $info['result']['skazka'][$numb]['sum_cb'] + $info['result']['solnce'][$numb]['sum_cb'], 2, ',', ' ') }}</b></td>   
                    
                    <td><b><font color="blue">{{ number_format($info['result']['aurinko'][$numb]['sum_fu'], 2, ',', ' ') }}</b></td>
                    <td><b><font color="blue">{{ number_format($info['result']['berezka'][$numb]['sum_fu'], 2, ',', ' ') }}</b></td>
                    <td><b><font color="blue">{{ number_format($info['result']['gnomik'][$numb]['sum_fu'], 2, ',', ' ') }}</b></td>
                    <td><b><font color="blue">{{ number_format($info['result']['zoloto'][$numb]['sum_fu'], 2, ',', ' ') }}</b></td>
                    <td><b><font color="blue">{{ number_format($info['result']['korablik'][$numb]['sum_fu'], 2, ',', ' ') }}</b></td>
                    <td><b><font color="blue">{{ number_format($info['result']['skazka'][$numb]['sum_fu'], 2, ',', ' ') }}</b></td>
                    <td><b><font color="blue">{{ number_format($info['result']['solnce'][$numb]['sum_fu'], 2, ',', ' ') }}</b></td>                   
                    <td><b><font color="blue">{{ number_format($info['result']['aurinko'][$numb]['sum_fu'] + $info['result']['berezka'][$numb]['sum_fu'] + $info['result']['gnomik'][$numb]['sum_fu'] + $info['result']['zoloto'][$numb]['sum_fu'] + $info['result']['korablik'][$numb]['sum_fu'] + $info['result']['skazka'][$numb]['sum_fu'] + $info['result']['solnce'][$numb]['sum_fu'], 2, ',', ' ') }}</b></td>  
                </tr>
            @endif
            
            @if ($info['result']['aurinko'][$numb]['ekr']['main'] == 'No' && $info['result']['aurinko'][$numb]['ekr']['number'] == $n)
                <tr>
                    <input type="hidden" class="number" value="{{ $info['result']['aurinko'][$numb]['ekr']['number'] }}">
                    <input type="hidden" class="year" value="{{ $info['year'] }}">
                    <td class="col-id-no" scope="row">{{ $info['result']['aurinko'][$numb]['ekr']['title'] }}</td>
                    <td>{{ $info['result']['aurinko'][$numb]['ekr']['ekr'] }}</td> 
                    
                    <td>{{ number_format($info['result']['aurinko'][$numb]['sum_cb'], 2, ',', ' ') }}</td>
                    <td>{{ number_format($info['result']['berezka'][$numb]['sum_cb'], 2, ',', ' ') }}</td>
                    <td>{{ number_format($info['result']['gnomik'][$numb]['sum_cb'], 2, ',', ' ') }}</td>
                    <td>{{ number_format($info['result']['zoloto'][$numb]['sum_cb'], 2, ',', ' ') }}</td>
                    <td>{{ number_format($info['result']['korablik'][$numb]['sum_cb'], 2, ',', ' ') }}</td>
                    <td>{{ number_format($info['result']['skazka'][$numb]['sum_cb'], 2, ',', ' ') }}</td>
                    <td>{{ number_format($info['result']['solnce'][$numb]['sum_cb'], 2, ',', ' ') }}</td>
                    <td>{{ number_format($info['result']['aurinko'][$numb]['sum_cb'] + $info['result']['berezka'][$numb]['sum_cb'] + $info['result']['gnomik'][$numb]['sum_cb'] + $info['result']['zoloto'][$numb]['sum_cb'] + $info['result']['korablik'][$numb]['sum_cb'] + $info['result']['skazka'][$numb]['sum_cb'] + $info['result']['solnce'][$numb]['sum_cb'], 2, ',', ' ') }}</td>

                    <td><font color="blue">{{ number_format($info['result']['aurinko'][$numb]['sum_fu'], 2, ',', ' ') }}</td>
                    <td><font color="blue">{{ number_format($info['result']['berezka'][$numb]['sum_fu'], 2, ',', ' ') }}</td>
                    <td><font color="blue">{{ number_format($info['result']['gnomik'][$numb]['sum_fu'], 2, ',', ' ') }}</td>
                    <td><font color="blue">{{ number_format($info['result']['zoloto'][$numb]['sum_fu'], 2, ',', ' ') }}</td>
                    <td><font color="blue">{{ number_format($info['result']['korablik'][$numb]['sum_fu'], 2, ',', ' ') }}</td>
                    <td><font color="blue">{{ number_format($info['result']['skazka'][$numb]['sum_fu'], 2, ',', ' ') }}</td>
                    <td><font color="blue">{{ number_format($info['result']['solnce'][$numb]['sum_fu'], 2, ',', ' ') }}</td>
                    <td><font color="blue">{{ number_format($info['result']['aurinko'][$numb]['sum_fu'] + $info['result']['berezka'][$numb]['sum_fu'] + $info['result']['gnomik'][$numb]['sum_fu'] + $info['result']['zoloto'][$numb]['sum_fu'] + $info['result']['korablik'][$numb]['sum_fu'] + $info['result']['skazka'][$numb]['sum_fu'] + $info['result']['solnce'][$numb]['sum_fu'], 2, ',', ' ') }}</td>

                </tr>
            @endif
        @endfor  
    @endfor
     
    <tr>
        <td><b>ИТОГО</b></td>
        <td></td>
        <td><b>{{ number_format($info['total']['aurinko']['sum_cb'], 2, ',', ' ') }}</b></td>
        <td><b>{{ number_format($info['total']['berezka']['sum_cb'], 2, ',', ' ') }}</b></td>
        <td><b>{{ number_format($info['total']['gnomik']['sum_cb'], 2, ',', ' ') }}</b></td>
        <td><b>{{ number_format($info['total']['zoloto']['sum_cb'], 2, ',', ' ') }}</b></td>
        <td><b>{{ number_format($info['total']['korablik']['sum_cb'], 2, ',', ' ') }}</b></td>
        <td><b>{{ number_format($info['total']['skazka']['sum_cb'], 2, ',', ' ') }}</b></td>
        <td><b>{{ number_format($info['total']['solnce']['sum_cb'], 2, ',', ' ') }}</b></td>
        <td><b>{{ number_format($info['total']['aurinko']['sum_cb'] + $info['total']['berezka']['sum_cb'] + $info['total']['gnomik']['sum_cb'] + $info['total']['zoloto']['sum_cb'] + $info['total']['korablik']['sum_cb'] + $info['total']['skazka']['sum_cb'] + $info['total']['solnce']['sum_cb'], 2, ',', ' ') }}</b></td>
        
        <td><b><font color="blue">{{ number_format($info['total']['aurinko']['sum_fu'], 2, ',', ' ') }}</b></td>
        <td><b><font color="blue">{{ number_format($info['total']['berezka']['sum_fu'], 2, ',', ' ') }}</b></td>
        <td><b><font color="blue">{{ number_format($info['total']['gnomik']['sum_fu'], 2, ',', ' ') }}</b></td>
        <td><b><font color="blue">{{ number_format($info['total']['zoloto']['sum_fu'], 2, ',', ' ') }}</b></td>
        <td><b><font color="blue">{{ number_format($info['total']['korablik']['sum_fu'], 2, ',', ' ') }}</b></td>
        <td><b><font color="blue">{{ number_format($info['total']['skazka']['sum_fu'], 2, ',', ' ') }}</b></td>
        <td><b><font color="blue">{{ number_format($info['total']['solnce']['sum_fu'], 2, ',', ' ') }}</b></td>
        <td><b><font color="blue">{{ number_format($info['total']['aurinko']['sum_fu'] + $info['total']['berezka']['sum_fu'] + $info['total']['gnomik']['sum_fu'] + $info['total']['zoloto']['sum_fu'] + $info['total']['korablik']['sum_fu'] + $info['total']['skazka']['sum_fu'] + $info['total']['solnce']['sum_fu'], 2, ',', ' ') }}</b></td>
    </tr>
    </tbody>
</table>

