<table width="700px">             
    <thead>
        <tr>
            <th style="min-width: 200px; width: 200px;">Наименование расходов</th>
            <th style="min-width: 70px; width: 70px;"></th>
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
            <td>17</td><td>18</td><td>19</td><td>20</td>
        </tr>             
        <tr>
            <td></td><td></td><td></td><td></td><td></td>
            <td>Всего</td><td>Просроченная</td><td>Всего</td><td>Просроченная</td>
            <td>Всего</td><td>Текущий месяц</td><td>Всего</td><td>Текущий месяц</td>
            <td>Всего</td><td>Просроченная</td><td>Всего</td><td>Просроченная</td>
            <td></td><td></td><td></td>
        </tr>
        
        @for ($n = 1; $n <= $info['number']; $n++)
            @foreach ($info['result'] as $value)                  
                @if ($value['ekr']['main'] == 'Yes' && $value['ekr']['number'] == $n)
                    <tr>
                        <td><b>{{ $value['ekr']['title'] }}</b></td>
                        <td></td>
                        <td><b>{{ $value['ekr']['ekr'] }}</b></td>
                        <td><b>{{ $value['lbo'] }}</b></td>
                        <td><b>{{ $value['prepaid'] }}</b></td>
                        <td><b>{{ $value['credit_year_all'] }}</b></td>
                        <td><b>{{ $value['credit_year_term'] }}</b></td>
                        <td><b>{{ $value['debit_year_all'] }}</b></td>
                        <td><b>{{ $value['debit_year_term'] }}</b></td>
                        <td><b>{{ $value['fact_all'] }}</b></td>
                        <td><b>{{ $value['fact_mounth'] }}</b></td>
                        <td><b>{{ $value['kassa_all'] }}</b></td>
                        <td><b>{{ $value['kassa_mounth'] }}</b></td>
                        <td><b>{{ $value['credit_end_all'] }}</b></td>
                        <td><b>{{ $value['credit_end_term'] }}</b></td>
                        <td><b>{{ $value['debit_end_all'] }}</b></td>
                        <td><b>{{ $value['debit_end_term'] }}</b></td>
                        <td><b>{{ $value['return_old_year'] }}</b></td>
                        <td><b>{{ $value['total1'] }}</b></td>
                        <td><b>{{ $value['total2'] }}</b></td>
                    </tr>
                @endif
                
                @if ($value['ekr']['main'] == 'No' && $value['ekr']['number'] == $n)
                        <tr>
                            <td>{{ $value['ekr']['title'] }}</td>
                            <td></td>
                            <td>{{ $value['ekr']['ekr'] }}</td>
                            <td>{{ $value['lbo'] }}</td>  
                            <td>{{ $value['prepaid'] }}</td>
                            <td>{{ $value['credit_year_all'] }}</td>
                            <td>{{ $value['credit_year_term'] }}</td>
                            <td>{{ $value['debit_year_all'] }}</td>
                            <td>{{ $value['debit_year_term'] }}</td>
                            <td>{{ $value['fact_all'] }}</td>
                            <td>{{ $value['fact_mounth'] }}</td>
                            <td>{{ $value['kassa_all'] }}</td>
                            <td>{{ $value['kassa_mounth'] }}</td>
                            <td>{{ $value['credit_end_all'] }}</td>
                            <td>{{ $value['credit_end_term'] }}</td>
                            <td>{{ $value['debit_end_all'] }}</td>
                            <td>{{ $value['debit_end_term'] }}</td>
                            <td>{{ $value['return_old_year'] }}</td>
                            <td>{{ $value['total1'] }}</td>
                            <td>{{ $value['total2'] }}</td>
                        </tr>
                @endif
            @endforeach 
        @endfor
        
        @php
            $total = $info['total'];
        @endphp
        <tr>
            <td><b>Итого</b></td>
            <td></td>
            <td></td>
            <td><b>{{ $total['lbo'] }}</b></td>
            <td><b>{{ $total['prepaid'] }}</b></td>
            <td><b>{{ $total['credit_year_all'] }}</b></td>
            <td><b>{{ $total['credit_year_term'] }}</b></td>
            <td><b>{{ $total['debit_year_all'] }}</b></td>
            <td><b>{{ $total['debit_year_term'] }}</b></td>
            <td><b>{{ $total['fact_all'] }}</b></td>
            <td><b>{{ $total['fact_mounth'] }}</b></td>
            <td><b>{{ $total['kassa_all'] }}</b></td>
            <td><b>{{ $total['kassa_mounth'] }}</b></td>
            <td><b>{{ $total['credit_end_all'] }}</b></td>
            <td><b>{{ $total['credit_end_term'] }}</b></td>
            <td><b>{{ $total['debit_end_all'] }}</b></td>
            <td><b>{{ $total['debit_end_term'] }}</b></td>
            <td><b>{{ $total['return_old_year'] }}</b></td>
            <td><b>{{ $total['total1'] }}</b></td>
            <td><b>{{ $total['total2'] }}</b></td>
        </tr>
  
    </tbody>
</table>



