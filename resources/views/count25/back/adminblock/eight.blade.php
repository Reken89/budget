@php
    $fu = 0;
    $cb = 0;
@endphp

<!doctype html>
<html lang="en">
<table>
    <thead>
        <tr>
            <th style="min-width: 200px; width: 600px;">Наименование</th>
            <th style="min-width: 70px; width: 70px;">ЭКР</th>
            <th style="min-width: 150px; width: 150px;">СВОД ФЭУ</th>
            <th style="min-width: 150px; width: 150px;">СВОД ЦБ</th>
        </tr>
    </thead>
    <tbody>
        @for ($i = 0; $i < count($info['result']); $i++)
            
                @if($info['result'][$i]['ekr']['shared'] == "Yes" || $info['result'][$i]['ekr']['main'] == "Yes")
                    <tr>
                        <th>{{ $info['result'][$i]['ekr']['title'] }}</th>
                        <td><b>{{ $info['result'][$i]['ekr']['ekr'] }}<b></td>
                        <td><b>{{ number_format($info['result'][$i]['sum_fu'], 2, ',', ' ') }}<b></td>
                        <td><font color="{{ $info['color'] }}"><b>{{ number_format($info['result'][$i]['sum_cb'], 2, ',', ' ') }}<b></td>
                    </tr>
                @else
                    <tr>
                        <th>{{ $info['result'][$i]['ekr']['title'] }}</th>
                        <td>{{ $info['result'][$i]['ekr']['ekr'] }}</td>
                        <td>{{ number_format($info['result'][$i]['sum_fu'], 2, ',', ' ') }}</td>
                        <td><font color="{{ $info['color'] }}">{{ number_format($info['result'][$i]['sum_cb'], 2, ',', ' ') }}</td>
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
            <th>Итог</th>
            <td></td>
            <td><b>{{ number_format($fu, 2, ',', ' ') }}</b></td> 
            <td><font color="{{ $info['color'] }}"><b>{{ number_format($cb, 2, ',', ' ') }}</b></td> 
        </tr>
    </tbody>
</table>
</html>
