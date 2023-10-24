<table width="700px">             
    <thead>
        <tr>
            <th style="min-width: 200px; width: 200px;">Наименование расходов</th>
            <th style="min-width: 70px; width: 70px;">ЭКР</th>
            <th style="min-width: 200px; width: 200px;">Плановые назначения ЛБО</th>
            <th style="min-width: 200px; width: 200px;">Зачет авансов, выплаченных в прошлом году</th>
            <th style="min-width: 200px; width: 200px;" colspan="2">Кредиторская задолженность на начало года</th>
            <th style="min-width: 200px; width: 200px;" colspan="2">Дебиторская задолженность на начало года</th>
            <th style="min-width: 200px; width: 200px;" colspan="2">Факт</th>
            <th style="min-width: 200px; width: 200px;" colspan="2">Кассовые расходы</th>
            <th style="min-width: 200px; width: 200px;" colspan="2">Кредиторская задолженность на конец отчетного периода</th>
            <th style="min-width: 200px; width: 200px;" colspan="2">Дебиторская задолженность на конец отчетного периода</th>
            <th style="min-width: 200px; width: 200px;">Возвращено Дт прошлых лет в доход бюджета</th>
            <th style="min-width: 200px; width: 200px;">Контрольное соотношение</th>
            <th style="min-width: 200px; width: 200px;">Контрольное соотношение к плану ЛБО</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td>1</td><td>2</td><td>3</td><td>4</td>
            <td>5</td><td>6</td><td>7</td><td>8</td>
            <td>9</td><td>10</td><td>11</td><td>12</td>
            <td>13</td><td>14</td><td>15</td><td>16</td>
            <td>17</td><td>18</td><td>19</td>
        </tr>             
        <tr>
            <td></td><td></td><td></td><td></td><td></td>
            <td>Всего</td><td>Просроченная</td><td>Всего</td><td>Просроченная</td>
            <td>Всего</td><td>Текущий месяц</td><td>Всего</td><td>Текущий месяц</td>
            <td>Всего</td><td>Просроченная</td><td>Всего</td><td>Просроченная</td>
            <td></td><td></td><td></td>
        </tr>
        @foreach ($info['result'] as $value)
            @if ($value['ekr']['main'] == 'Yes' || $value['ekr']['shared'] == 'Yes')
                <tr>
                    <td class="col-id-no" scope="row"><b>{{ $value['ekr']['title'] }}</b></td>
                    <td><b>{{ $value['ekr']['ekr'] }}</b></td>
                    <td><b>{{ number_format($value['lbo'], 2, ',', ' ') }}</b></td>
                    <td><b>{{ number_format($value['prepaid'], 2, ',', ' ') }}</b></td>
                    <td><b>{{ number_format($value['credit_year_all'], 2, ',', ' ') }}</b></td>
                    <td><b>{{ number_format($value['credit_year_term'], 2, ',', ' ') }}</b></td>
                    <td><b>{{ number_format($value['debit_year_all'], 2, ',', ' ') }}</b></td>
                    <td><b>{{ number_format($value['debit_year_term'], 2, ',', ' ') }}</b></td>
                    <td><b>{{ number_format($value['fact_all'], 2, ',', ' ') }}</b></td>
                    <td><b>{{ number_format($value['fact_mounth'], 2, ',', ' ') }}</b></td>
                    <td><b>{{ number_format($value['kassa_all'], 2, ',', ' ') }}</b></td>
                    <td><b>{{ number_format($value['kassa_mounth'], 2, ',', ' ') }}</b></td>
                    <td><b>{{ number_format($value['credit_end_all'], 2, ',', ' ') }}</b></td>
                    <td><b>{{ number_format($value['credit_end_term'], 2, ',', ' ') }}</b></td>
                    <td><b>{{ number_format($value['debit_end_all'], 2, ',', ' ') }}</b></td>
                    <td><b>{{ number_format($value['debit_end_term'], 2, ',', ' ') }}</b></td>
                    <td><b>{{ number_format($value['return_old_year'], 2, ',', ' ') }}</b></td>
                    <td><b>{{ number_format($value['total1'], 2, ',', ' ') }}</b></td>
                    <td><b>{{ number_format($value['total2'], 2, ',', ' ') }}</b></td>
                </tr>
            @else
                <tr>
                    <td class="col-id-no" scope="row">{{ $value['ekr']['title'] }}</td>
                    <td>{{ $value['ekr']['ekr'] }}</td>
                    <td>{{ number_format($value['lbo'], 2, ',', ' ') }}</td>  
                    <td>{{ number_format($value['prepaid'], 2, ',', ' ') }}</td>
                    <td>{{ number_format($value['credit_year_all'], 2, ',', ' ') }}</td>
                    <td>{{ number_format($value['credit_year_term'], 2, ',', ' ') }}</td>
                    <td>{{ number_format($value['debit_year_all'], 2, ',', ' ') }}</td>
                    <td>{{ number_format($value['debit_year_term'], 2, ',', ' ') }}</td>
                    <td>{{ number_format($value['fact_all'], 2, ',', ' ') }}</td>
                    <td>{{ number_format($value['fact_mounth'], 2, ',', ' ') }}</td>
                    <td>{{ number_format($value['kassa_all'], 2, ',', ' ') }}</td>
                    <td>{{ number_format($value['kassa_mounth'], 2, ',', ' ') }}</td>
                    <td>{{ number_format($value['credit_end_all'], 2, ',', ' ') }}</td>
                    <td>{{ number_format($value['credit_end_term'], 2, ',', ' ') }}</td>
                    <td>{{ number_format($value['debit_end_all'], 2, ',', ' ') }}</td>
                    <td>{{ number_format($value['debit_end_term'], 2, ',', ' ') }}</td>
                    <td>{{ number_format($value['return_old_year'], 2, ',', ' ') }}</td>
                    <td>{{ number_format($value['total1'], 2, ',', ' ') }}</td>
                    <td>{{ number_format($value['total2'], 2, ',', ' ') }}</td>
                </tr>
            @endif 
        @endforeach 
        <tr>
            <td class="col-id-no" scope="row"><b>Итого</b></td>
            <td></td>
            <td><b>{{ number_format($info['total']['lbo'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['total']['prepaid'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['total']['credit_year_all'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['total']['credit_year_term'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['total']['debit_year_all'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['total']['debit_year_term'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['total']['fact_all'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['total']['fact_mounth'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['total']['kassa_all'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['total']['kassa_mounth'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['total']['credit_end_all'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['total']['credit_end_term'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['total']['debit_end_all'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['total']['debit_end_term'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['total']['return_old_year'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['total']['total1'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['total']['total2'], 2, ',', ' ') }}</b></td>
        </tr>
    </tbody>
</table>    
