@php
    //var_dump($info['result']);
    $number = (count($info['result']['svod']));
@endphp

</br>
<table class="freeze-table" width="700px">
    
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
                        <td><b>{{ number_format($info['result']['svod'][$numb]['sum_fu'], 2, ',', ' ') }}</b></td>
                        <td><b>{{ number_format($info['result']['svod'][$numb]['sum_cb'], 2, ',', ' ') }}</b></td>
                    </tr>
                @endif

                @if ($info['result']['svod'][$numb]['ekr']['main'] == 'No' && $info['result']['svod'][$numb]['ekr']['number'] == $n)
                    <tr>
                        <td class="col-id-no" scope="row">{{ $info['result']['svod'][$numb]['ekr']['title'] }}</td>
                        <td>{{ $info['result']['svod'][$numb]['ekr']['ekr'] }}</td>                       
                        <td>{{ number_format($info['result']['svod'][$numb]['sum_fu'], 2, ',', ' ') }}</td>
                        <td>{{ number_format($info['result']['svod'][$numb]['sum_cb'], 2, ',', ' ') }}</td>
                    </tr>
                @endif
            @endfor  
        @endfor
        
        <tr>
            <td><b>ИТОГО</b></td>
            <td></td>
            <td><b>{{ number_format($info['total']['svod']['sum_fu'], 2, ',', ' ') }}</b></td> 
            <td><b>{{ number_format($info['total']['svod']['sum_cb'], 2, ',', ' ') }}</b></td> 
        </tr>
    </tbody>
</table>