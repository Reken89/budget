@php
    $number = (count($info['result']['kums']));
@endphp

</br>
<table class="freeze-table" width="700px">
    
    <thead>
        <tr>
            <th style="min-width: 200px; width: 200px;" class="col-id-no fixed-header">Наименование расходов</th>
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
            @php
                if (isset($shared_kums_id) == FALSE){
                    $shared_kums_id = 89;
                    $shared_us_id = 89;
                    $shared_edds_id = 89;
                }
            @endphp
            @if ($info['result']['kums'][$numb]['ekr']['shared'] == 'Yes' && $info['result']['kums'][$numb]['ekr']['number'] == $n)
                @php
                    $shared_kums_id = $info['result']['kums'][$numb]['id'];
                    $shared_us_id = $info['result']['us'][$numb]['id']; 
                    $shared_edds_id = $info['result']['edds'][$numb]['id']; 
                @endphp
            @endif  
                
            @if ($info['result']['kums'][$numb]['ekr']['main'] == 'Yes' && $info['result']['kums'][$numb]['ekr']['number'] == $n)
                @php
                    $main_kums_id = $info['result']['kums'][$numb]['id'];
                    $main_us_id = $info['result']['us'][$numb]['id']; 
                    $main_edds_id = $info['result']['edds'][$numb]['id'];  
                @endphp
            
                <tr>
                    <td class="col-id-no" scope="row"><b>{{ $info['result']['kums'][$numb]['ekr']['title'] }}</b></td>
                    <td><b>{{ $info['result']['kums'][$numb]['ekr']['ekr'] }}</b></td>
                    <td><b>{{ number_format($info['result']['kums'][$numb]['sum_cb'], 2, ',', ' ') }}</b></td>
                    <td><b>{{ number_format($info['result']['us'][$numb]['sum_cb'], 2, ',', ' ') }}</b></td>
                    <td><b>{{ number_format($info['result']['edds'][$numb]['sum_cb'], 2, ',', ' ') }}</b></td>                  
                    <td><b>{{ number_format($info['result']['kums'][$numb]['sum_cb'] + $info['result']['us'][$numb]['sum_cb'] + $info['result']['edds'][$numb]['sum_cb'], 2, ',', ' ') }}</b></td>
                    
                    <td><b>{{ number_format($info['result']['kums'][$numb]['sum_fu'], 2, ',', ' ') }}</b></td>
                    <td><b>{{ number_format($info['result']['us'][$numb]['sum_fu'], 2, ',', ' ') }}</b></td>
                    <td><b>{{ number_format($info['result']['edds'][$numb]['sum_fu'], 2, ',', ' ') }}</b></td>                  
                    <td><b>{{ number_format($info['result']['kums'][$numb]['sum_fu'] + $info['result']['us'][$numb]['sum_fu'] + $info['result']['edds'][$numb]['sum_fu'], 2, ',', ' ') }}</b></td>
                </tr>
            @endif
            
            @if ($info['result']['kums'][$numb]['ekr']['main'] == 'No' && $info['result']['kums'][$numb]['ekr']['number'] == $n)
                <tr>
                    <input type="hidden" class="number" value="{{ $info['result']['kums'][$numb]['ekr']['number'] }}">
                    <input type="hidden" class="year" value="{{ $info['year'] }}">
                    <td class="col-id-no" scope="row">{{ $info['result']['kums'][$numb]['ekr']['title'] }}</td>
                    <td>{{ $info['result']['kums'][$numb]['ekr']['ekr'] }}</td>
                    
                    @if ($info['result']['kums'][2]['status'] == '2')
                        <td><input type="hidden" class="shared_id" value="{{ $shared_kums_id }}">
                            <input type="hidden" class="main_id" value="{{ $main_kums_id }}">
                            <input type="hidden" class="user_id" value="23">
                            <input type="hidden" class="id" value="{{ $info['result']['kums'][$numb]['id'] }}">
                            <input type="text" class="sum_cb" value="{{ number_format($info['result']['kums'][$numb]['sum_cb'], 2, ',', ' ') }}"></td>

                        <td><input type="hidden" class="shared_id" value="{{ $shared_us_id }}">
                            <input type="hidden" class="main_id" value="{{ $main_us_id }}">
                            <input type="hidden" class="user_id" value="37">
                            <input type="hidden" class="id" value="{{ $info['result']['us'][$numb]['id'] }}">
                            <input type="text" class="sum_cb" value="{{ number_format($info['result']['us'][$numb]['sum_cb'], 2, ',', ' ') }}"></td> 

                        <td><input type="hidden" class="shared_id" value="{{ $shared_edds_id }}">
                            <input type="hidden" class="main_id" value="{{ $main_edds_id }}">
                            <input type="hidden" class="user_id" value="38">
                            <input type="hidden" class="id" value="{{ $info['result']['edds'][$numb]['id'] }}">
                            <input type="text" class="sum_cb" value="{{ number_format($info['result']['edds'][$numb]['sum_cb'], 2, ',', ' ') }}"></td> 
                        
                        <td>{{ number_format($info['result']['kums'][$numb]['sum_fu'], 2, ',', ' ') }}</td>
                        <td>{{ number_format($info['result']['us'][$numb]['sum_fu'], 2, ',', ' ') }}</td>
                        <td>{{ number_format($info['result']['edds'][$numb]['sum_fu'], 2, ',', ' ') }}</td>
                    @else
                        <td>{{ number_format($info['result']['kums'][$numb]['sum_cb'], 2, ',', ' ') }}</td>
                        <td>{{ number_format($info['result']['us'][$numb]['sum_cb'], 2, ',', ' ') }}</td>
                        <td>{{ number_format($info['result']['edds'][$numb]['sum_cb'], 2, ',', ' ') }}</td>
                        
                        <td>{{ number_format($info['result']['kums'][$numb]['sum_fu'], 2, ',', ' ') }}</td>
                        <td>{{ number_format($info['result']['us'][$numb]['sum_fu'], 2, ',', ' ') }}</td>
                        <td>{{ number_format($info['result']['edds'][$numb]['sum_fu'], 2, ',', ' ') }}</td>
                    @endif
                                       
                    <td>{{ number_format($info['result']['kums'][$numb]['sum_cb'] + $info['result']['us'][$numb]['sum_cb'] + $info['result']['edds'][$numb]['sum_cb'], 2, ',', ' ') }}</td>
                    <td>{{ number_format($info['result']['kums'][$numb]['sum_fu'] + $info['result']['us'][$numb]['sum_fu'] + $info['result']['edds'][$numb]['sum_fu'], 2, ',', ' ') }}</td>
                </tr>
            @endif
        @endfor  
    @endfor
     
    <tr>
        <td><b>ИТОГО</b></td>
        <td></td>
        <td><b>{{ number_format($info['total']['kums']['sum_cb'], 2, ',', ' ') }}</b></td>
        <td><b>{{ number_format($info['total']['us']['sum_cb'], 2, ',', ' ') }}</b></td>
        <td><b>{{ number_format($info['total']['edds']['sum_cb'], 2, ',', ' ') }}</b></td> 
        <td><b>{{ number_format($info['total']['kums']['sum_cb'] + $info['total']['us']['sum_cb'] + $info['total']['edds']['sum_cb'], 2, ',', ' ') }}</b></td>
        
        <td><b>{{ number_format($info['total']['kums']['sum_fu'], 2, ',', ' ') }}</b></td>
        <td><b>{{ number_format($info['total']['us']['sum_fu'], 2, ',', ' ') }}</b></td>
        <td><b>{{ number_format($info['total']['edds']['sum_fu'], 2, ',', ' ') }}</b></td> 
        <td><b>{{ number_format($info['total']['kums']['sum_fu'] + $info['total']['us']['sum_fu'] + $info['total']['edds']['sum_fu'], 2, ',', ' ') }}</b></td>
    </tr>
    </tbody>
</table>

