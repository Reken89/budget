@php
    $fu_zakupki = 0;
    $fu_cb = 0;
    $cb_zakupki = 0;
    $cb_cb = 0;

    $color = "blue";
@endphp

<!doctype html>
<html lang="en"> 
<table>
    <thead>
        <tr>
            <th style="min-width: 200px; width: 400px;">Наименование</th>
            <th style="min-width: 70px; width: 70px;">ЭКР</th>
            <th style="min-width: 150px; width: 150px;">Итог ЦБ</th>
            <th style="min-width: 150px; width: 150px;">Закупки</th>
            <th style="min-width: 150px; width: 150px;">Централизованная бухгалтерия</th>
            <th style="min-width: 150px; width: 150px;">Итог ФЭУ</th>
            <th style="min-width: 150px; width: 150px;">(ФЭУ) Закупки</th>
            <th style="min-width: 150px; width: 150px;">(ФЭУ) Централизованная бухгалтерия</th>
        </tr>
    </thead>
    <tbody>
        @for ($i = 0; $i < count($info) - 1; $i++)
            @if(($i % 2) == 0 || $i == 0)
                @if($info[$i]['ekr']['shared'] == "Yes" || $info[$i]['ekr']['main'] == "Yes")
                    <tr>
                        <th>{{ $info[$i]['ekr']['title'] }}</th>
                        <td><b>{{ $info[$i]['ekr']['ekr'] }}<b></td>
                        <td><b>{{ number_format($info[$i]['sum_cb'] + $info[$i+1]['sum_cb'], 2, ',', ' ') }}<b></td>
                        <td><b>{{ number_format($info[$i]['sum_cb'], 2, ',', ' ') }}<b></td>
                        <td><b>{{ number_format($info[$i+1]['sum_cb'], 2, ',', ' ') }}<b></td>
                        <td><font color="{{ $color }}"><b>{{ number_format($info[$i]['sum_fu'] + $info[$i+1]['sum_fu'], 2, ',', ' ') }}<b></td>
                        <td><font color="{{ $color }}"><b>{{ number_format($info[$i]['sum_fu'], 2, ',', ' ') }}<b></td>
                        <td><font color="{{ $color }}"><b>{{ number_format($info[$i+1]['sum_fu'], 2, ',', ' ') }}<b></td>
                    </tr>
                @else
                    <tr>
                        <th>{{ $info[$i]['ekr']['title'] }}</th>
                        <td>{{ $info[$i]['ekr']['ekr'] }}</td>
                        <td>{{ number_format($info[$i]['sum_cb'] + $info[$i+1]['sum_cb'], 2, ',', ' ') }}</td>
                        @if($info[$i]['status'] == '2')
                        <td><input type="hidden" class="id" value="{{ $info[$i]['id'] }}">
                            <input type="text" class="sum" value="{{ number_format($info[$i]['sum_cb'], 2, ',', ' ') }}"></td>
                        <td><input type="hidden" class="id" value="{{ $info[$i+1]['id'] }}">
                            <input type="text" class="sum" value="{{ number_format($info[$i+1]['sum_cb'], 2, ',', ' ') }}"></td>
                        @else
                            <td>{{ number_format($info[$i]['sum_cb'], 2, ',', ' ') }}</td>
                            <td>{{ number_format($info[$i+1]['sum_cb'], 2, ',', ' ') }}</td>
                        @endif
                        <td><font color="{{ $color }}">{{ number_format($info[$i]['sum_fu'] + $info[$i+1]['sum_fu'], 2, ',', ' ') }}</td>
                        <td><font color="{{ $color }}">{{ number_format($info[$i]['sum_fu'], 2, ',', ' ') }}</td>
                        <td><font color="{{ $color }}">{{ number_format($info[$i+1]['sum_fu'], 2, ',', ' ') }}</td>
                    </tr>
                @endif
                @if($info[$i]['ekr']['shared'] == "No" && $info[$i]['ekr']['main'] == "Yes")
                    @php
                        $cb_zakupki += $info[$i]['sum_cb'];
                        $cb_cb += $info[$i+1]['sum_cb'];
                        $fu_zakupki += $info[$i]['sum_fu'];
                        $fu_cb += $info[$i+1]['sum_fu'];
                    @endphp
                @endif
            @endif        
        @endfor
        <tr>
            <th>Итог</th>
            <td></td>
            <td><b>{{ number_format($cb_zakupki + $cb_cb, 2, ',', ' ') }}<b></td>
            <td><b>{{ number_format($cb_zakupki, 2, ',', ' ') }}</b></td> 
            <td><b>{{ number_format($cb_cb, 2, ',', ' ') }}</b></td>  
            <td><font color="{{ $color }}"><b>{{ number_format($fu_zakupki + $fu_cb, 2, ',', ' ') }}<b></td>
            <td><font color="{{ $color }}"><b>{{ number_format($fu_zakupki, 2, ',', ' ') }}</b></td> 
            <td><font color="{{ $color }}"><b>{{ number_format($fu_cb, 2, ',', ' ') }}</b></td> 
        </tr>
    </tbody>
</table>
</html>
