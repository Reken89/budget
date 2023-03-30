<table class="freeze-table" width="700px">
    <thead>
        <tr>
            <th style="min-width: 150px; width: 150px;">Учреждение</th>
            <th style="min-width: 150px; width: 150px;">Объем 1-полугодие</th>
            <th style="min-width: 150px; width: 150px;">Сумма 1-полугодие</th>
            <th style="min-width: 150px; width: 150px;">Объем 2-полугодие</th>
            <th style="min-width: 150px; width: 150px;">Сумма 2-полугодие</th>
            <th style="min-width: 150px; width: 150px;">Объем за год</th>
            <th style="min-width: 150px; width: 150px;">Сумма за год</th>
        </tr>
    </thead>
    
    <tbody>
        @foreach ($info['communal'] as $value)
            <tr>
                <td>{{ $value['user']['name'] }}</td>
                <td>{{ $value['volume_one'] }}</td>
                <td>{{ $value['sum_one'] }}</td>
                <td>{{ $value['volume_two'] }}</td>
                <td>{{ $value['sum_two'] }}</td>
                <td>{{ $value['volume_year'] }}</td>
                <td>{{ $value['sum_year'] }}</td>
            </tr>
        @endforeach
    </tbody>
    
    <tr>
        <td><b>ИТОГ</b></td>
        <td><b>{{ $info['total']['volume_one'] }}</b></td>
        <td><b>{{ $info['total']['sum_one'] }}</b></td>
        <td><b>{{ $info['total']['volume_two'] }}</b></td>
        <td><b>{{ $info['total']['sum_two'] }}</b></td>
        <td><b>{{ $info['total']['volume_year'] }}</b></td>
        <td><b>{{ $info['total']['sum_year'] }}</b></td>
    </tr>
</table> 

