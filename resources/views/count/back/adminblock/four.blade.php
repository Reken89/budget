@php
    $number = (count($info['result']['dhsh']));
@endphp

</br>
<table class="freeze-table" width="700px">
    
    <thead>
        <tr>
            <th style="min-width: 200px; width: 200px;" class="col-id-no fixed-header">Наименование расходов</th>
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
            @php
                if (isset($shared_dhsh_id) == FALSE){
                    $shared_dhsh_id = 89;
                    $shared_dmsh_id = 89;
                }
            @endphp
            @if ($info['result']['dhsh'][$numb]['ekr']['shared'] == 'Yes' && $info['result']['dhsh'][$numb]['ekr']['number'] == $n)
                @php
                    $shared_dhsh_id = $info['result']['dhsh'][$numb]['id'];
                    $shared_dmsh_id = $info['result']['dmsh'][$numb]['id']; 
                @endphp
            @endif  
                
            @if ($info['result']['dhsh'][$numb]['ekr']['main'] == 'Yes' && $info['result']['dhsh'][$numb]['ekr']['number'] == $n)
                @php
                    $main_dhsh_id = $info['result']['dhsh'][$numb]['id'];
                    $main_dmsh_id = $info['result']['dmsh'][$numb]['id'];  
                @endphp
            
                <tr>
                    <td class="col-id-no" scope="row"><b>{{ $info['result']['dhsh'][$numb]['ekr']['title'] }}</b></td>
                    <td><b>{{ $info['result']['dhsh'][$numb]['ekr']['ekr'] }}</b></td>
                    <td><b>{{ number_format($info['result']['dhsh'][$numb]['sum_fu'] + $info['result']['dmsh'][$numb]['sum_fu'], 2, ',', ' ') }}</b></td>                   
                    <td><b>{{ number_format($info['result']['dhsh'][$numb]['sum_fu'], 2, ',', ' ') }}</b></td>
                    <td><b>{{ number_format($info['result']['dmsh'][$numb]['sum_fu'], 2, ',', ' ') }}</b></td>
                    
                    <td><b><font color="blue">{{ number_format($info['result']['dhsh'][$numb]['sum_cb'] + $info['result']['dmsh'][$numb]['sum_cb'], 2, ',', ' ') }}</b></td>
                    <td><b><font color="blue">{{ number_format($info['result']['dhsh'][$numb]['sum_cb'], 2, ',', ' ') }}</b></td>
                    <td><b><font color="blue">{{ number_format($info['result']['dmsh'][$numb]['sum_cb'], 2, ',', ' ') }}</b></td>
                </tr>
            @endif
            
            @if ($info['result']['dhsh'][$numb]['ekr']['main'] == 'No' && $info['result']['dhsh'][$numb]['ekr']['number'] == $n)
                <tr>
                    <input type="hidden" class="number" value="{{ $info['result']['dhsh'][$numb]['ekr']['number'] }}">
                    <input type="hidden" class="year" value="{{ $info['year'] }}">
                    <td class="col-id-no" scope="row">{{ $info['result']['dhsh'][$numb]['ekr']['title'] }}</td>
                    <td>{{ $info['result']['dhsh'][$numb]['ekr']['ekr'] }}</td>
                    <td>{{ number_format($info['result']['dhsh'][$numb]['sum_fu'] + $info['result']['dmsh'][$numb]['sum_fu'], 2, ',', ' ') }}</td>
                    <td>{{ number_format($info['result']['dhsh'][$numb]['sum_fu'], 2, ',', ' ') }}</td>                   
                    <td>{{ number_format($info['result']['dmsh'][$numb]['sum_fu'], 2, ',', ' ') }}</td>                    
                    
                    <td><font color="blue">{{ number_format($info['result']['dhsh'][$numb]['sum_cb'] + $info['result']['dmsh'][$numb]['sum_cb'], 2, ',', ' ') }}</td>
                    <td><font color="blue">{{ number_format($info['result']['dhsh'][$numb]['sum_cb'], 2, ',', ' ') }}</td>
                    <td><font color="blue">{{ number_format($info['result']['dmsh'][$numb]['sum_cb'], 2, ',', ' ') }}</td>
                </tr>
            @endif
        @endfor  
    @endfor
     
    <tr>
        <td><b>ИТОГО</b></td>
        <td></td>
        <td><b>{{ number_format($info['total']['dhsh']['sum_fu'] + $info['total']['dmsh']['sum_fu'], 2, ',', ' ') }}</b></td>
        <td><b>{{ number_format($info['total']['dhsh']['sum_fu'], 2, ',', ' ') }}</b></td>
        <td><b>{{ number_format($info['total']['dmsh']['sum_fu'], 2, ',', ' ') }}</b></td>
        <td><b><font color="blue">{{ number_format($info['total']['dhsh']['sum_cb'] + $info['total']['dmsh']['sum_cb'], 2, ',', ' ') }}</b></td>
        <td><b><font color="blue">{{ number_format($info['total']['dhsh']['sum_cb'], 2, ',', ' ') }}</b></td>
        <td><b><font color="blue">{{ number_format($info['total']['dmsh']['sum_cb'], 2, ',', ' ') }}</b></td> 
    </tr>
    </tbody>
</table>
