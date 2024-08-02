
<!doctype html>
<html lang="en">
<table>
    <thead>
        <tr>
            <th style="min-width: 200px; width: 400px;">Показатели</th>
            <th style="min-width: 70px; width: 70px;">Код</th>
            <th style="min-width: 150px; width: 150px;">Среднесписочная численность за отчетный период (человек)</th>
            <th style="min-width: 150px; width: 150px;">Численность на конец отчетного периода (человек)</th>
            <th style="min-width: 150px; width: 150px;">Количество классов (классов-комплектов), групп на конец отчетного периода (ед.)</th>
        </tr>
    </thead>
    <tbody>
        @for ($i = 0; $i < count($info['info']); $i++)
            @if($info['info'][$i]['indicator']['shared'] == "Yes" || $info['info'][$i]['indicator']['main'] == "Yes")
            <tr>
                <th>{{ $info['info'][$i]['indicator']['title'] }}</th>
                <td><b>{{ $info['info'][$i]['indicator']['code'] }}<b></td>
                <td><b>{{ number_format($info['info'][$i]['average'], 2, ',', ' ') }}<b></td>
                <td><b>{{ number_format($info['info'][$i]['report'], 2, ',', ' ') }}<b></td>
                <td><b>{{ number_format($info['info'][$i]['classes'], 2, ',', ' ') }}<b></td>
            </tr>   
            @else
                @if($info['position'] == "many")
                    <tr>
                        <th>{{ $info['info'][$i]['indicator']['title'] }}</th>
                        <td>{{ $info['info'][$i]['indicator']['code'] }}</td>
                        <td>{{ number_format($info['info'][$i]['average'], 2, ',', ' ') }}</td>
                        <td>{{ number_format($info['info'][$i]['report'], 2, ',', ' ') }}</td>
                        <td>{{ number_format($info['info'][$i]['classes'], 2, ',', ' ') }}</td>
                    </tr>
                @else
                    @if($info['info'][$i]['indicator']['code'] == "01261")
                        <tr bgcolor="Aqua"><td><b>В том числе</b></td><td></td><td></td><td></td><td></td></tr>
                    @endif
                    @if($info['info'][$i]['indicator']['code'] == "0111")
                        <tr bgcolor="Aqua"><td><b>В том числе</b></td><td></td><td></td><td></td><td></td></tr>
                    @endif
                    @if($info['info'][$i]['indicator']['code'] == "0131")
                        <tr bgcolor="Aqua"><td><b>В том числе</b></td><td></td><td></td><td></td><td></td></tr>
                    @endif
                    @if($info['info'][$i]['indicator']['code'] == "01531")
                        <tr bgcolor="Aqua"><td><b>В том числе</b></td><td></td><td></td><td></td><td></td></tr>
                    @endif
                    <tr>
                        <th>{{ $info['info'][$i]['indicator']['title'] }}</th>
                        <td>{{ $info['info'][$i]['indicator']['code'] }}</td>
                        <td><input type="hidden" class="year" value="{{ $info['year'] }}">
                        <input type="hidden" class="mounth" value="{{ $info['mounth'] }}">
                        <input type="hidden" class="variant" value="{{ $info['variant'] }}">
                        <input type="hidden" class="user" value="{{ $info['user'][0] }}">
                        <input type="hidden" class="indicator" value="{{ $info['info'][$i]['indicator_id'] }}">
                        <input type="hidden" class="number" value="{{ $info['info'][$i]['indicator']['number'] }}">
                        <input type="text" class="meaning1" value="{{ number_format($info['info'][$i]['average'], 2, ',', ' ') }}"></td>
                        <td><input type="text" class="meaning2" value="{{ number_format($info['info'][$i]['report'], 2, ',', ' ') }}"></td>
                        <td><input type="text" class="meaning3" value="{{ number_format($info['info'][$i]['classes'], 2, ',', ' ') }}">
                        <input type="hidden" class="meaning4" value="0">
                        <input type="hidden" class="meaning5" value="0">
                        <input type="hidden" class="meaning6" value="0">
                        <input type="hidden" class="meaning7" value="0"></td>
                    </tr>
                @endif
            @endif
        @endfor
    </tbody>
</table>
</html>

<?php

//echo "<pre>";
//var_dump($info);
