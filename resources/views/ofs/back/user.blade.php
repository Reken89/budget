<head>
    <meta charset="utf-8">
    <title>Таблица ОФС</title>
</head>

<div class="post-header">
    <div class="post-cat">
        <a href="#">Информация:</a>
    </div>
    <div class="post-title">
        <h2>
            <a>Значение при делении суммы на объем, должно соответствовать диапазону тарифа</a>
        </h2>
    </div>
    <div class="post-meta"><b>Таблица ОФС</b></div>
    <div class="border">
        <span></span>
        <span></span>
    </div>
</div> 

<table class="freeze-table" width="700px">             
    <thead>
        <tr>
            <th style="min-width: 200px; width: 200px;" class="col-id-no fixed-header">Наименование расходов</th>
            <th style="min-width: 70px; width: 70px;"></th>
            <th style="min-width: 70px; width: 70px;">ЭКР</th>
            <th style="min-width: 200px; width: 200px;">Плановые назначения ЛБО</th>
            <th style="min-width: 200px; width: 200px;">Зачет авансов, выплаченных в прошлом году</th>
            <th style="min-width: 200px; width: 200px;" colspan="2">Кредиторская задолженность</br> на начало года</th>
            <th style="min-width: 200px; width: 200px;" colspan="2">Дебиторская задолженность</br> на начало года</th>
            <th style="min-width: 200px; width: 200px;" colspan="2">Факт</th>
            <th style="min-width: 200px; width: 200px;" colspan="2">Кассовые расходы</th>
            <th style="min-width: 200px; width: 200px;" colspan="2">Кредиторская задолженность на</br> конец отчетного периода</th>
            <th style="min-width: 200px; width: 200px;" colspan="2">Дебиторская задолженность на</br> конец отчетного периода</th>
            <th style="min-width: 200px; width: 200px;">Возвращено Дт прошлых лет в доход бюджета</th>
            <th style="min-width: 200px; width: 200px;">Контрольное соотношение</th>
            <th style="min-width: 200px; width: 200px;">Контрольное соотношение к плану ЛБО</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td class="col-id-no" scope="row">1</td><td>2</td><td>3</td><td>4</td>
            <td>5</td><td>6</td><td>7</td><td>8</td>
            <td>9</td><td>10</td><td>11</td><td>12</td>
            <td>13</td><td>14</td><td>15</td><td>16</td>
            <td>17</td><td>18</td><td>19</td><td>20</td>
        </tr>             
        <tr>
            <td class="col-id-no" scope="row"></td><td></td><td></td><td></td><td></td>
            <td>Всего</td><td>Просроченная</td><td>Всего</td><td>Просроченная</td>
            <td>Всего</td><td>Текущий месяц</td><td>Всего</td><td>Текущий месяц</td>
            <td>Всего</td><td>Просроченная</td><td>Всего</td><td>Просроченная</td>
            <td></td><td></td><td></td>
        </tr>
        
        @for ($n = 1; $n <= $info['number']; $n++)
            @foreach ($info['result'] as $value)
                @if ($value['ekr']['main'] == 'Yes' && $value['ekr']['number'] == $n)
                    <tr>
                        <td class="col-id-no" scope="row"><b>{{ $value['ekr']['title'] }}</b></td>
                        <td></td>
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
                @endif
                
                @if ($value['ekr']['main'] == 'No' && $value['ekr']['number'] == $n)
                    @if ($value['status'] == '2')
                        <tr>
                            <td class="col-id-no" scope="row">{{ $value['ekr']['title'] }}</td>
                            <td><input type=button class='button' id='btn_one' value='Сброс'></td>
                            <td>{{ $value['ekr']['ekr'] }}</td>
                            <td><input type="text" class="lbo" value="{{ number_format($value['lbo'], 2, ',', ' ') }}"></td>  
                            <td><input type="text" class="prepaid" value="{{ number_format($value['prepaid'], 2, ',', ' ') }}"></td>
                            <td><input type="text" class="credit_year_all" value="{{ number_format($value['credit_year_all'], 2, ',', ' ') }}"></td>
                            <td><input type="text" class="credit_year_term" value="{{ number_format($value['credit_year_term'], 2, ',', ' ') }}"></td>
                            <td><input type="text" class="debit_year_all" value="{{ number_format($value['debit_year_all'], 2, ',', ' ') }}"></td>
                            <td><input type="text" class="debit_year_term" value="{{ number_format($value['debit_year_term'], 2, ',', ' ') }}"></td>
                            <td>{{ number_format($value['fact_all'], 2, ',', ' ') }}</td>
                            <td><input type="text" class="fact_mounth" value="{{ number_format($value['fact_mounth'], 2, ',', ' ') }}"></td>
                            <td>{{ number_format($value['kassa_all'], 2, ',', ' ') }}</td>
                            <td><input type="text" class="kassa_mounth" value="{{ number_format($value['kassa_mounth'], 2, ',', ' ') }}"></td>
                            <td><input type="text" class="credit_end_all" value="{{ number_format($value['credit_end_all'], 2, ',', ' ') }}"></td>
                            <td><input type="text" class="credit_end_term" value="{{ number_format($value['credit_end_term'], 2, ',', ' ') }}"></td>
                            <td><input type="text" class="debit_end_all" value="{{ number_format($value['debit_end_all'], 2, ',', ' ') }}"></td>
                            <td><input type="text" class="debit_end_term" value="{{ number_format($value['debit_end_term'], 2, ',', ' ') }}"></td>
                            <td><input type="text" class="return_old_year" value="{{ number_format($value['return_old_year'], 2, ',', ' ') }}"></td>
                            <td>{{ number_format($value['total1'], 2, ',', ' ') }}</td>
                            <td>{{ number_format($value['total2'], 2, ',', ' ') }}</td>
                        </tr>
                    @elseif ($value['status'] == '1')
                    @endif
                @endif
            @endforeach 
        @endfor
        
        @php
            $total = $info['total'][0];
        @endphp
        <tr>
            <td class="col-id-no" scope="row"><b>Итого</b></td>
            <td></td>
            <td></td>
            <td><b>{{ number_format($total['lbo'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($total['prepaid'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($total['credit_year_all'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($total['credit_year_term'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($total['debit_year_all'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($total['debit_year_term'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($total['fact_all'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($total['fact_mounth'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($total['kassa_all'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($total['kassa_mounth'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($total['credit_end_all'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($total['credit_end_term'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($total['debit_end_all'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($total['debit_end_term'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($total['return_old_year'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($total['total1'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($total['total2'], 2, ',', ' ') }}</b></td>
            <td></td>
        </tr>
  
    </tbody>
</table>

