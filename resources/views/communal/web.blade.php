@php   
    $mounth = [
        "Месяц", "Январь", "Февраль", "Март",
        "Апрель", "Май", "Июнь", "Июль",
        "Август", "Сентябрь", "Октябрь",
        "Ноябрь", "Декабрь"
    ];
@endphp 

<!doctype html>
<html lang="en">

<head>
    <title>WEB форма</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style2.css') }}">
</head>

<body>
    <div class="container_fix2">
        <div class="table2">
            <table>             
                <thead>
                    <tr>
                        <th style="min-width: 150px; width: 150px;" class="col-id-no fixed-header">Месяц</th>
                        <th style="min-width: 200px; width: 200px;" colspan="2">Теплоснабжение</th>
                        <th style="min-width: 200px; width: 200px;" colspan="2">Водоотведение</th>
                        <th style="min-width: 200px; width: 200px;" colspan="2">Негативное воздействие</th>
                        <th style="min-width: 200px; width: 200px;" colspan="2">Водоснабжение</th>
                        <th style="min-width: 200px; width: 200px;" colspan="2">Электроснабжение</th>
                        <th style="min-width: 200px; width: 200px;" colspan="2">Вывоз мусора</th>
                        <th style="min-width: 150px; width: 150px;" rowspan="2">ИТОГО</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <th class="col-id-no" scope="row"><b>{{ $info['result']['communal'][0]['year'] }} год</b></th>
                        <td style="min-width: 150px; width: 150px;"><b>Объем</b></td><td style="min-width: 150px; width: 150px;"><b>Сумма</b></td>
                        <td style="min-width: 150px; width: 150px;"><b>Объем</b></td><td style="min-width: 150px; width: 150px;"><b>Сумма</b></td>
                        <td style="min-width: 150px; width: 150px;"><b>Объем</b></td><td style="min-width: 150px; width: 150px;"><b>Сумма</b></td>
                        <td style="min-width: 150px; width: 150px;"><b>Объем</b></td><td style="min-width: 150px; width: 150px;"><b>Сумма</b></td>
                        <td style="min-width: 150px; width: 150px;"><b>Объем</b></td><td style="min-width: 150px; width: 150px;"><b>Сумма</b></td>
                        <td style="min-width: 150px; width: 150px;"><b>Объем</b></td><td style="min-width: 150px; width: 150px;"><b>Сумма</b></td>
                        <td></td>
                    </tr>

                    @foreach ($info['result']['communal'] as $value)
                        <tr>
                            <th class="col-id-no" scope="row"><b>{{ $mounth[$value['mounth']] }}</b></th>
                            <td><font color="blue">{{ number_format($value['heat-volume'], 3, ',', ' ') }}</td>
                            <td><font color="blue">{{ number_format($value['heat-sum'], 2, ',', ' ') }}</td>
                            <td><font color="blue">{{ number_format($value['drainage-volume'], 3, ',', ' ') }}</td>
                            <td><font color="blue">{{ number_format($value['drainage-sum'], 2, ',', ' ') }}</td>
                            <td><font color="blue">{{ number_format($value['negative-volume'], 3, ',', ' ') }}</td>
                            <td><font color="blue">{{ number_format($value['negative-sum'], 2, ',', ' ') }}</td>
                            <td><font color="blue">{{ number_format($value['water-volume'], 3, ',', ' ') }}</td>
                            <td><font color="blue">{{ number_format($value['water-sum'], 2, ',', ' ') }}</td>
                            <td><font color="blue">{{ number_format($value['power-volume'], 3, ',', ' ') }}</td>
                            <td><font color="blue">{{ number_format($value['power-sum'], 2, ',', ' ') }}</td>
                            <td><font color="blue">{{ number_format($value['trash-volume'], 3, ',', ' ') }}</td>
                            <td><font color="blue">{{ number_format($value['trash-sum'], 2, ',', ' ') }}</td>
                            <td><font color="blue">{{ number_format($value['total'], 2, ',', ' ') }}</td>
                        </tr>
                    @endforeach

                    <tr>
                        <th class="col-id-no" scope="row"><b>ИТОГО</b></th>
                        <td><font color="blue"><b>{{ number_format($info['total']['heat_volume'], 3, ',', ' ') }}</b></td>
                        <td><font color="blue"><b>{{ number_format($info['total']['heat_sum'], 2, ',', ' ') }}</b></td>
                        <td><font color="blue"><b>{{ number_format($info['total']['drainage_volume'], 3, ',', ' ') }}</b></td>
                        <td><font color="blue"><b>{{ number_format($info['total']['drainage_sum'], 2, ',', ' ') }}</b></td>
                        <td><font color="blue"><b>{{ number_format($info['total']['negative_volume'], 3, ',', ' ') }}</b></td>
                        <td><font color="blue"><b>{{ number_format($info['total']['negative_sum'], 2, ',', ' ') }}</b></td>
                        <td><font color="blue"><b>{{ number_format($info['total']['water_volume'], 3, ',', ' ') }}</b></td>
                        <td><font color="blue"><b>{{ number_format($info['total']['water_sum'], 2, ',', ' ') }}</b></td>
                        <td><font color="blue"><b>{{ number_format($info['total']['power_volume'], 3, ',', ' ') }}</b></td>
                        <td><font color="blue"><b>{{ number_format($info['total']['power_sum'], 2, ',', ' ') }}</b></td>
                        <td><font color="blue"><b>{{ number_format($info['total']['trash_volume'], 3, ',', ' ') }}</b></td>
                        <td><font color="blue"><b>{{ number_format($info['total']['trash_sum'], 2, ',', ' ') }}</b></td>
                        <td><font color="blue"><b>{{ number_format($info['total']['total'], 2, ',', ' ') }}</b></td>
                    </tr>       
                </tbody> 
            </table>  
        </div>    
    </div>
</body> 
</html>