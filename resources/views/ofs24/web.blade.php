<!doctype html>
@include('layouts.main')
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>ОФС 2024 WEB форма</title>
</head>

<body>

<table class="freeze-table" width="700px">             
    <thead>
        <tr>
            <th style="min-width: 200px; width: 200px;" class="col-id-no fixed-header">Наименование расходов</th>
            <th style="min-width: 70px; width: 70px;">ЭКР</th>
            <th style="min-width: 120px; width: 120px;">Плановые назначения ЛБО</th>
            <th style="min-width: 120px; width: 120px;">Зачет авансов, выплаченных в прошлом году</th>
            <th style="min-width: 150px; width: 150px;" colspan="2">Кредиторская задолженность</br> на начало года</th>
            <th style="min-width: 150px; width: 150px;" colspan="2">Дебиторская задолженность</br> на начало года</th>
            <th style="min-width: 150px; width: 150px;" colspan="2">Факт</th>
            <th style="min-width: 150px; width: 150px;" colspan="2">Кассовые расходы</th>
            <th style="min-width: 150px; width: 150px;" colspan="2">Кредиторская задолженность на</br> конец отчетного периода</th>
            <th style="min-width: 150px; width: 150px;" colspan="2">Дебиторская задолженность на</br> конец отчетного периода</th>
            <th style="min-width: 120px; width: 120px;">Возвращено Дт прошлых лет в доход бюджета</th>
            <th style="min-width: 120px; width: 120px;">Контрольное соотношение</th>
            <th style="min-width: 120px; width: 120px;">Контрольное соотношение к плану ЛБО</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <th class="col-id-no" scope="row">1</th><th>2</th><th>3</th><th>4</th>
            <th>5</th><th>6</th><th>7</th><th>8</th>
            <th>9</th><th>10</th><th>11</th><th>12</th>
            <th>13</th><th>14</th><th>15</th><th>16</th>
            <th>17</th><th>18</th><th>19</th>
        </tr>             
        <tr>
            <td class="col-id-no" scope="row"></td><td></td><td></td><td></td>
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
          
</body>
</html>    
