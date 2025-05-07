@php
    //var_dump($info);
@endphp
<table style="min-width: 200px; width: 200px;" class="table align-middle mb-0">
    <thead class="table-light">
        <tr>
            <th style="min-width: 50px; width: 50px;">Тарифы</th>
            <th style="min-width: 50px; width: 50px;">MIN тариф</th>
            <th style="min-width: 50px; width: 50px;">MAX тариф</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><b>Теплоснабжение</b></td>
            <input type="hidden" class="id" value="{{ $info['tarrifs'][0]['id'] }}">
            <td><input type="text" class="tarrif_min" value="{{ number_format($info['tarrifs'][0]['tarrif_min'], 4, ',', ' ') }}"></td>
            <td><input type="text" class="tarrif_max" value="{{ number_format($info['tarrifs'][0]['tarrif_max'], 4, ',', ' ') }}"></td>
        </tr>   
        <tr>
            <td><b>Водоснабжение</b></td>
            <input type="hidden" class="id" value="{{ $info['tarrifs'][1]['id'] }}">
            <td><input type="text" class="tarrif_min" value="{{ number_format($info['tarrifs'][1]['tarrif_min'], 4, ',', ' ') }}"></td>
            <td><input type="text" class="tarrif_max" value="{{ number_format($info['tarrifs'][1]['tarrif_max'], 4, ',', ' ') }}"></td>
        </tr>
        <tr>
            <td><b>Водоотведение</b></td>
            <input type="hidden" class="id" value="{{ $info['tarrifs'][2]['id'] }}">
            <td><input type="text" class="tarrif_min" value="{{ number_format($info['tarrifs'][2]['tarrif_min'], 4, ',', ' ') }}"></td>
            <td><input type="text" class="tarrif_max" value="{{ number_format($info['tarrifs'][2]['tarrif_max'], 4, ',', ' ') }}"></td>
        </tr>
        <tr>
            <td><b>Электроснабжение</b></td>
            <input type="hidden" class="id" value="{{ $info['tarrifs'][3]['id'] }}">
            <td><input type="text" class="tarrif_min" value="{{ number_format($info['tarrifs'][3]['tarrif_min'], 4, ',', ' ') }}"></td>
            <td><input type="text" class="tarrif_max" value="{{ number_format($info['tarrifs'][3]['tarrif_max'], 4, ',', ' ') }}"></td>
        </tr>
        <tr>
            <td><b>Вывоз мусора</b></td>
            <input type="hidden" class="id" value="{{ $info['tarrifs'][4]['id'] }}">
            <td><input type="text" class="tarrif_min" value="{{ number_format($info['tarrifs'][4]['tarrif_min'], 4, ',', ' ') }}"></td>
            <td><input type="text" class="tarrif_max" value="{{ number_format($info['tarrifs'][4]['tarrif_max'], 4, ',', ' ') }}"></td>
        </tr>
        <tr>
            <td><b>Негативное воздействие</b></td>
            <input type="hidden" class="id" value="{{ $info['tarrifs'][5]['id'] }}">
            <td><input type="text" class="tarrif_min" value="{{ number_format($info['tarrifs'][5]['tarrif_min'], 4, ',', ' ') }}"></td>
            <td><input type="text" class="tarrif_max" value="{{ number_format($info['tarrifs'][5]['tarrif_max'], 4, ',', ' ') }}"></td>
        </tr>
    </tbody>
</table>

