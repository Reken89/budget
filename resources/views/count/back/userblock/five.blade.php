@php
    $number = (count($info['result']['school']));
@endphp

</br>
<table class="freeze-table" width="700px">
    
    <thead>
        <tr>
            <th style="min-width: 200px; width: 200px;" class="col-id-no fixed-header">Наименование расходов</th>
            <th style="min-width: 70px; width: 70px;">ЭКР</th>
            <th style="min-width: 200px; width: 200px;">Школа</th>
            <th style="min-width: 200px; width: 200px;">Сад</th>
            <th style="min-width: 200px; width: 200px;">ИТОГ</th>
        </tr>
    </thead>
    
    <tbody>
    
    @for ($n = 1; $n <= $info['max_number']; $n++)
        @for ($numb = 0; $numb < $number; $numb++)
            @php
                if (isset($shared_school_id) == FALSE){
                    $shared_school_id = 89;
                    $shared_kinder_id = 89;
                }
            @endphp
            @if ($info['result']['school'][$numb]['ekr']['shared'] == 'Yes' && $info['result']['school'][$numb]['ekr']['number'] == $n)
                @php
                    $shared_school_id = $info['result']['school'][$numb]['id'];
                    $shared_kinder_id = $info['result']['kinder'][$numb]['id']; 
                @endphp
            @endif  
                
            @if ($info['result']['school'][$numb]['ekr']['main'] == 'Yes' && $info['result']['school'][$numb]['ekr']['number'] == $n)
                @php
                    $main_school_id = $info['result']['school'][$numb]['id'];
                    $main_kinder_id = $info['result']['kinder'][$numb]['id'];  
                @endphp
            
                <tr>
                    <td class="col-id-no" scope="row"><b>{{ $info['result']['school'][$numb]['ekr']['title'] }}</b></td>
                    <td><b>{{ $info['result']['school'][$numb]['ekr']['ekr'] }}</b></td>
                    <td><b>{{ number_format($info['result']['school'][$numb]['sum_cb'], 2, ',', ' ') }}</b></td>
                    <td><b>{{ number_format($info['result']['kinder'][$numb]['sum_cb'], 2, ',', ' ') }}</b></td>                    
                    <td><b>{{ number_format($info['result']['school'][$numb]['sum_cb'] + $info['result']['kinder'][$numb]['sum_cb'], 2, ',', ' ') }}</b></td>
                </tr>
            @endif
            
            @if ($info['result']['school'][$numb]['ekr']['main'] == 'No' && $info['result']['school'][$numb]['ekr']['number'] == $n)
                <tr>
                    <input type="hidden" class="number" value="{{ $info['result']['school'][$numb]['ekr']['number'] }}">
                    <input type="hidden" class="year" value="{{ $info['year'] }}">
                    <td class="col-id-no" scope="row">{{ $info['result']['school'][$numb]['ekr']['title'] }}</td>
                    <td>{{ $info['result']['school'][$numb]['ekr']['ekr'] }}</td>
                    <td><input type="hidden" class="shared_id" value="{{ $shared_school_id }}">
                        <input type="hidden" class="main_id" value="{{ $main_school_id }}">
                        <input type="hidden" class="user_id" value="8">
                        <input type="hidden" class="id" value="{{ $info['result']['school'][$numb]['id'] }}">
                        <input type="text" class="sum_cb" value="{{ number_format($info['result']['school'][$numb]['sum_cb'], 2, ',', ' ') }}"></td>
                    
                    <td><input type="hidden" class="shared_id" value="{{ $shared_kinder_id }}">
                        <input type="hidden" class="main_id" value="{{ $main_kinder_id }}">
                        <input type="hidden" class="user_id" value="36">
                        <input type="hidden" class="id" value="{{ $info['result']['kinder'][$numb]['id'] }}">
                        <input type="text" class="sum_cb" value="{{ number_format($info['result']['kinder'][$numb]['sum_cb'], 2, ',', ' ') }}"></td>                    
                    
                    <td>{{ number_format($info['result']['school'][$numb]['sum_cb'] + $info['result']['kinder'][$numb]['sum_cb'], 2, ',', ' ') }}</td>
                </tr>
            @endif
        @endfor  
    @endfor
     
    <tr>
        <td><b>ИТОГО</b></td>
        <td></td>
        <td><b>{{ number_format($info['total']['school']['sum_cb'], 2, ',', ' ') }}</b></td>
        <td><b>{{ number_format($info['total']['kinder']['sum_cb'], 2, ',', ' ') }}</b></td> 
        <td><b>{{ number_format($info['total']['school']['sum_cb'] + $info['total']['kinder']['sum_cb'], 2, ',', ' ') }}</b></td>
    </tr>
    </tbody>
</table>



