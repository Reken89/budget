@php
    $date = date('Y-m-d');
    $fu = 0;
    $cb = 0;
@endphp
<p>Таблица выгружена {{ $date }}</p> 
<table>
    <thead>
        <tr>
            <th style="min-width: 200px; width: 600px;">Наименование</th>
            <th style="min-width: 70px; width: 70px;">ЭКР</th>
            <th style="min-width: 150px; width: 150px;">СВОД ЦБ</th>
            <th style="min-width: 150px; width: 150px;">СВОД ФЭУ</th>
        </tr>
    </thead>
    <tbody>
        @for ($i = 0; $i < count($info['result']); $i++)
            
                @if($info['result'][$i]['ekr']['shared'] == "Yes" || $info['result'][$i]['ekr']['main'] == "Yes")
                    <tr>
                        <td><b>{{ $info['result'][$i]['ekr']['title'] }}</b></td>
                        <td><b>{{ $info['result'][$i]['ekr']['ekr'] }}</b></td>
                        <td><b>{{ $info['result'][$i]['sum_cb'] }}</b></td>
                        <td><b>{{ $info['result'][$i]['sum_fu'] }}</b></td>
                    </tr>
                @else
                    <tr>
                        <th>{{ $info['result'][$i]['ekr']['title'] }}</th>
                        <td>{{ $info['result'][$i]['ekr']['ekr'] }}</td>
                        <td>{{ $info['result'][$i]['sum_cb'] }}</td>
                        <td>{{ $info['result'][$i]['sum_fu'] }}</td>
                    </tr>
                @endif
                @if($info['result'][$i]['ekr']['shared'] == "No" && $info['result'][$i]['ekr']['main'] == "Yes")
                    @php
                        $fu += $info['result'][$i]['sum_fu'];
                        $cb += $info['result'][$i]['sum_cb'];
                    @endphp
                @endif
                   
        @endfor
        <tr>
            <td><b>Итог</b></td>
            <td></td>
            <td><b>{{ $cb }}</b></td> 
            <td><b>{{ $fu }}</b></td> 
        </tr>
    </tbody>
</table>



