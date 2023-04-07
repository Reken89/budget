@if ($info['result']['cb'][2]['status'] == '2')
    <blockquote class="blockquote-7">
        <p><b><font color='red'>Централизованная бухгалтерия ещё работает с таблицей!</font></b></p>
        <cite></cite>
    </blockquote>
@endif

@php
    $number = (count($info['result']['cb']));
@endphp

</br>
<table class="freeze-table" width="700px">
    
    <thead>
        <tr>
            <th style="min-width: 200px; width: 200px;" class="col-id-no fixed-header">Наименование расходов</th>
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
            @php
                if (isset($shared_cb_id) == FALSE){
                    $shared_cb_id = 89;
                    $shared_zakupki_id = 89;
                }
            @endphp
            @if ($info['result']['cb'][$numb]['ekr']['shared'] == 'Yes' && $info['result']['cb'][$numb]['ekr']['number'] == $n)
                @php
                    $shared_cb_id = $info['result']['cb'][$numb]['id'];
                    $shared_zakupki_id = $info['result']['zakupki'][$numb]['id']; 
                @endphp
            @endif  
                
            @if ($info['result']['cb'][$numb]['ekr']['main'] == 'Yes' && $info['result']['cb'][$numb]['ekr']['number'] == $n)
                @php
                    $main_cb_id = $info['result']['cb'][$numb]['id'];
                    $main_zakupki_id = $info['result']['zakupki'][$numb]['id'];  
                @endphp
            
                <tr>
                    <td class="col-id-no" scope="row"><b>{{ $info['result']['cb'][$numb]['ekr']['title'] }}</b></td>
                    <td><b>{{ $info['result']['cb'][$numb]['ekr']['ekr'] }}</b></td>
                    <td><b>{{ number_format($info['result']['cb'][$numb]['sum_fu'] + $info['result']['zakupki'][$numb]['sum_fu'], 2, ',', ' ') }}</b></td>                   
                    <td><b>{{ number_format($info['result']['cb'][$numb]['sum_fu'], 2, ',', ' ') }}</b></td>
                    <td><b>{{ number_format($info['result']['zakupki'][$numb]['sum_fu'], 2, ',', ' ') }}</b></td>
                    
                    <td><b>{{ number_format($info['result']['cb'][$numb]['sum_cb'] + $info['result']['zakupki'][$numb]['sum_cb'], 2, ',', ' ') }}</b></td>
                    <td><b>{{ number_format($info['result']['cb'][$numb]['sum_cb'], 2, ',', ' ') }}</b></td>
                    <td><b>{{ number_format($info['result']['zakupki'][$numb]['sum_cb'], 2, ',', ' ') }}</b></td>
                </tr>
            @endif
            
            @if ($info['result']['cb'][$numb]['ekr']['main'] == 'No' && $info['result']['cb'][$numb]['ekr']['number'] == $n)
                <tr>
                    <input type="hidden" class="number" value="{{ $info['result']['cb'][$numb]['ekr']['number'] }}">
                    <input type="hidden" class="year" value="{{ $info['year'] }}">
                    <td class="col-id-no" scope="row">{{ $info['result']['cb'][$numb]['ekr']['title'] }}</td>
                    <td>{{ $info['result']['cb'][$numb]['ekr']['ekr'] }}</td>
                    <td>{{ number_format($info['result']['cb'][$numb]['sum_fu'] + $info['result']['zakupki'][$numb]['sum_fu'], 2, ',', ' ') }}</td>
                    <td><input type="hidden" class="shared_id" value="{{ $shared_cb_id }}">
                        <input type="hidden" class="main_id" value="{{ $main_cb_id }}">
                        <input type="hidden" class="user_id" value="29">
                        <input type="hidden" class="id" value="{{ $info['result']['cb'][$numb]['id'] }}">
                        <input type="text" class="sum_fu" value="{{ number_format($info['result']['cb'][$numb]['sum_fu'], 2, ',', ' ') }}"></td>
                    
                    <td><input type="hidden" class="shared_id" value="{{ $shared_zakupki_id }}">
                        <input type="hidden" class="main_id" value="{{ $main_zakupki_id }}">
                        <input type="hidden" class="user_id" value="26">
                        <input type="hidden" class="id" value="{{ $info['result']['zakupki'][$numb]['id'] }}">
                        <input type="text" class="sum_fu" value="{{ number_format($info['result']['zakupki'][$numb]['sum_fu'], 2, ',', ' ') }}"></td>                    
                    
                    <td>{{ number_format($info['result']['cb'][$numb]['sum_cb'] + $info['result']['zakupki'][$numb]['sum_cb'], 2, ',', ' ') }}</td>
                    <td>{{ number_format($info['result']['cb'][$numb]['sum_cb'], 2, ',', ' ') }}</td>
                    <td>{{ number_format($info['result']['zakupki'][$numb]['sum_cb'], 2, ',', ' ') }}</td>
                </tr>
            @endif
        @endfor  
    @endfor
     
    <tr>
        <td><b>ИТОГО</b></td>
        <td></td>
        <td><b>{{ number_format($info['total']['cb']['sum_fu'] + $info['total']['zakupki']['sum_fu'], 2, ',', ' ') }}</b></td>
        <td><b>{{ number_format($info['total']['cb']['sum_fu'], 2, ',', ' ') }}</b></td>
        <td><b>{{ number_format($info['total']['zakupki']['sum_fu'], 2, ',', ' ') }}</b></td>
        <td><b>{{ number_format($info['total']['cb']['sum_cb'] + $info['total']['zakupki']['sum_cb'], 2, ',', ' ') }}</b></td>
        <td><b>{{ number_format($info['total']['cb']['sum_cb'], 2, ',', ' ') }}</b></td>
        <td><b>{{ number_format($info['total']['zakupki']['sum_cb'], 2, ',', ' ') }}</b></td> 
    </tr>
    </tbody>
</table>