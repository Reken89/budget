@php
    $number = (count($info['result']['glava']));
@endphp

</br>
<table class="freeze-table" width="700px">
    
    <thead>
        <tr>
            <th style="min-width: 200px; width: 200px;" class="col-id-no fixed-header">Наименование расходов</th>
            <th style="min-width: 70px; width: 70px;">ЭКР</th>
            <th style="min-width: 200px; width: 200px;">Глава</th>
            <th style="min-width: 200px; width: 200px;">Администрация КГО</th>
            <th style="min-width: 200px; width: 200px;">Совет КГО</th>
            <th style="min-width: 200px; width: 200px;">КСО Костомукша</th>
            <th style="min-width: 200px; width: 200px;">ИТОГ</th>
            <th style="min-width: 200px; width: 200px;">Глава (ФЭУ)</th>
            <th style="min-width: 200px; width: 200px;">Администрация КГО (ФЭУ)</th>
            <th style="min-width: 200px; width: 200px;">Совет КГО (ФЭУ)</th>
            <th style="min-width: 200px; width: 200px;">КСО Костомукша (ФЭУ)</th>
            <th style="min-width: 200px; width: 200px;">ИТОГ (ФЭУ)</th>
        </tr>
    </thead>
    
    <tbody>
    
    @for ($n = 1; $n <= $info['max_number']; $n++)
        @for ($numb = 0; $numb < $number; $numb++)
            @php
                if (isset($shared_glava_id) == FALSE){
                    $shared_glava_id = 89;
                    $shared_adm_id = 89;
                    $shared_sovet_id = 89;
                    $shared_kso_id = 89;
                }
            @endphp
            @if ($info['result']['glava'][$numb]['ekr']['shared'] == 'Yes' && $info['result']['glava'][$numb]['ekr']['number'] == $n)
                @php
                    $shared_glava_id = $info['result']['glava'][$numb]['id'];
                    $shared_adm_id = $info['result']['adm'][$numb]['id']; 
                    $shared_sovet_id = $info['result']['sovet'][$numb]['id']; 
                    $shared_kso_id = $info['result']['kso'][$numb]['id']; 
                @endphp
            @endif  
                
            @if ($info['result']['glava'][$numb]['ekr']['main'] == 'Yes' && $info['result']['glava'][$numb]['ekr']['number'] == $n)
                @php
                    $main_glava_id = $info['result']['glava'][$numb]['id'];
                    $main_adm_id = $info['result']['adm'][$numb]['id']; 
                    $main_sovet_id = $info['result']['sovet'][$numb]['id']; 
                    $main_kso_id = $info['result']['kso'][$numb]['id']; 
                @endphp
            
                <tr>
                    <td class="col-id-no" scope="row"><b>{{ $info['result']['glava'][$numb]['ekr']['title'] }}</b></td>
                    <td><b>{{ $info['result']['glava'][$numb]['ekr']['ekr'] }}</b></td>
                    <td><b>{{ number_format($info['result']['glava'][$numb]['sum_cb'], 2, ',', ' ') }}</b></td>
                    <td><b>{{ number_format($info['result']['adm'][$numb]['sum_cb'], 2, ',', ' ') }}</b></td>
                    <td><b>{{ number_format($info['result']['sovet'][$numb]['sum_cb'], 2, ',', ' ') }}</b></td>
                    <td><b>{{ number_format($info['result']['kso'][$numb]['sum_cb'], 2, ',', ' ') }}</b></td>                   
                    <td><b>{{ number_format($info['result']['glava'][$numb]['sum_cb'] + $info['result']['adm'][$numb]['sum_cb'] + $info['result']['sovet'][$numb]['sum_cb'] + $info['result']['kso'][$numb]['sum_cb'], 2, ',', ' ') }}</b></td>
                    
                    <td><b><font color="blue">{{ number_format($info['result']['glava'][$numb]['sum_fu'], 2, ',', ' ') }}</b></td>
                    <td><b><font color="blue">{{ number_format($info['result']['adm'][$numb]['sum_fu'], 2, ',', ' ') }}</b></td>
                    <td><b><font color="blue">{{ number_format($info['result']['sovet'][$numb]['sum_fu'], 2, ',', ' ') }}</b></td>
                    <td><b><font color="blue">{{ number_format($info['result']['kso'][$numb]['sum_fu'], 2, ',', ' ') }}</b></td>                   
                    <td><b><font color="blue">{{ number_format($info['result']['glava'][$numb]['sum_fu'] + $info['result']['adm'][$numb]['sum_fu'] + $info['result']['sovet'][$numb]['sum_fu'] + $info['result']['kso'][$numb]['sum_fu'], 2, ',', ' ') }}</b></td>
                </tr>
            @endif
            
            @if ($info['result']['glava'][$numb]['ekr']['main'] == 'No' && $info['result']['glava'][$numb]['ekr']['number'] == $n)
                <tr>
                    <input type="hidden" class="number" value="{{ $info['result']['glava'][$numb]['ekr']['number'] }}">
                    <input type="hidden" class="year" value="{{ $info['year'] }}">
                    <td class="col-id-no" scope="row">{{ $info['result']['glava'][$numb]['ekr']['title'] }}</td>
                    <td>{{ $info['result']['glava'][$numb]['ekr']['ekr'] }}</td>
                    
                    <td>{{ number_format($info['result']['glava'][$numb]['sum_cb'], 2, ',', ' ') }}</td>
                    <td>{{ number_format($info['result']['adm'][$numb]['sum_cb'], 2, ',', ' ') }}</td>
                    <td>{{ number_format($info['result']['sovet'][$numb]['sum_cb'], 2, ',', ' ') }}</td>
                    <td>{{ number_format($info['result']['kso'][$numb]['sum_cb'], 2, ',', ' ') }}</td>
                    <td>{{ number_format($info['result']['glava'][$numb]['sum_cb'] + $info['result']['adm'][$numb]['sum_cb'] + $info['result']['sovet'][$numb]['sum_cb'] + $info['result']['kso'][$numb]['sum_cb'], 2, ',', ' ') }}</td>

                    <td><font color="blue">{{ number_format($info['result']['glava'][$numb]['sum_fu'], 2, ',', ' ') }}</td>
                    <td><font color="blue">{{ number_format($info['result']['adm'][$numb]['sum_fu'], 2, ',', ' ') }}</td>
                    <td><font color="blue">{{ number_format($info['result']['sovet'][$numb]['sum_fu'], 2, ',', ' ') }}</td>
                    <td><font color="blue">{{ number_format($info['result']['kso'][$numb]['sum_fu'], 2, ',', ' ') }}</td>
                    <td><font color="blue">{{ number_format($info['result']['glava'][$numb]['sum_fu'] + $info['result']['adm'][$numb]['sum_fu'] + $info['result']['sovet'][$numb]['sum_fu'] + $info['result']['kso'][$numb]['sum_fu'], 2, ',', ' ') }}</td>

                </tr>
            @endif
        @endfor  
    @endfor
     
    <tr>
        <td><b>ИТОГО</b></td>
        <td></td> 
        <td><b>{{ number_format($info['total']['glava']['sum_cb'], 2, ',', ' ') }}</b></td>
        <td><b>{{ number_format($info['total']['adm']['sum_cb'], 2, ',', ' ') }}</b></td>
        <td><b>{{ number_format($info['total']['sovet']['sum_cb'], 2, ',', ' ') }}</b></td>
        <td><b>{{ number_format($info['total']['kso']['sum_cb'], 2, ',', ' ') }}</b></td> 
        <td><b>{{ number_format($info['total']['glava']['sum_cb'] + $info['total']['adm']['sum_cb'] + $info['total']['sovet']['sum_cb'] + $info['total']['kso']['sum_cb'], 2, ',', ' ') }}</b></td>
        
        <td><b><font color="blue">{{ number_format($info['total']['glava']['sum_fu'], 2, ',', ' ') }}</b></td>
        <td><b><font color="blue">{{ number_format($info['total']['adm']['sum_fu'], 2, ',', ' ') }}</b></td>
        <td><b><font color="blue">{{ number_format($info['total']['sovet']['sum_fu'], 2, ',', ' ') }}</b></td>
        <td><b><font color="blue">{{ number_format($info['total']['kso']['sum_fu'], 2, ',', ' ') }}</b></td> 
        <td><b><font color="blue">{{ number_format($info['total']['glava']['sum_fu'] + $info['total']['adm']['sum_fu'] + $info['total']['sovet']['sum_fu'] + $info['total']['kso']['sum_fu'], 2, ',', ' ') }}</b></td>
    </tr>
    </tbody>
</table>
