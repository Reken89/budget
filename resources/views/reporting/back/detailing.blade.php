@include('layouts.main')
<head>
    <meta charset="utf-8">
    <title>Исполнение бюджета</title>
</head>

<div class="post-header">
    <div class="post-cat">
        <a href="#">Информация:</a>
    </div>
    <div class="post-title">
        <h2>
            <a>Детализация таблицы исполнения бюджета</a>
        </h2>
    </div>
    <div class="post-meta"><b>Таблица</b></div>
    <div class="border">
        <span></span>
        <span></span>
    </div>
</div>

@if ($result['options']['meaning'] == 'expenses')
    @php
        $meaning = "Расходы";
    @endphp
@elseif ($result['options']['meaning'] == 'income')
    @php
        $meaning = "Доходы";
    @endphp  
@endif

<form id="detailing" method="get"> 
    <h3>Выберите месяц</h3>                                   
    <div>                         
        <label class="checkbox style-f">
            <input type="checkbox" name="mounth" value="1">
            <div class="checkbox__checkmark"></div>
            <div class="checkbox__body">Январь</div>
        </label>
        <label class="checkbox style-f">
            <input type="checkbox" name="mounth" value="2">
            <div class="checkbox__checkmark"></div>
            <div class="checkbox__body">Февраль</div>
        </label>
        <label class="checkbox style-f">
            <input type="checkbox" name="mounth" value="3">
            <div class="checkbox__checkmark"></div>
            <div class="checkbox__body">Март</div>
        </label>
        <label class="checkbox style-f">
            <input type="checkbox" name="mounth" value="4">
            <div class="checkbox__checkmark"></div>
            <div class="checkbox__body">Апрель</div>
        </label>
        <label class="checkbox style-f">
            <input type="checkbox" name="mounth" value="5">
            <div class="checkbox__checkmark"></div>
            <div class="checkbox__body">Май</div>
        </label>
        <label class="checkbox style-f">
            <input type="checkbox" name="mounth" value="6">
            <div class="checkbox__checkmark"></div>
            <div class="checkbox__body">Июнь</div>
        </label>
        </br>
        <label class="checkbox style-f">
            <input type="checkbox" name="mounth" value="7">
            <div class="checkbox__checkmark"></div>
            <div class="checkbox__body">Июль</div>
        </label>
        <label class="checkbox style-f">
            <input type="checkbox" name="mounth" value="8">
            <div class="checkbox__checkmark"></div>
            <div class="checkbox__body">Август</div>
        </label>
        <label class="checkbox style-f">
            <input type="checkbox" name="mounth" value="9">
            <div class="checkbox__checkmark"></div>
            <div class="checkbox__body">Сентябрь</div>
        </label>
        <label class="checkbox style-f">
            <input type="checkbox" name="mounth" value="10">
            <div class="checkbox__checkmark"></div>
            <div class="checkbox__body">Октябрь</div>
        </label>
        <label class="checkbox style-f">
            <input type="checkbox" name="mounth" value="11">
            <div class="checkbox__checkmark"></div>
            <div class="checkbox__body">Ноябрь</div>
        </label>
        <label class="checkbox style-f">
            <input type="checkbox" name="mounth" value="12">
            <div class="checkbox__checkmark"></div>
            <div class="checkbox__body">Декабрь</div>
        </label>                            
    </div>

    </br>
    <h3>Выберите год</h3>                                   
    <div>                         
        <label class="checkbox style-f">
            <input type="checkbox" name="year" value="2020">
            <div class="checkbox__checkmark"></div>
            <div class="checkbox__body">2020</div>
        </label>
        <label class="checkbox style-f">
            <input type="checkbox" name="year" value="2021">
            <div class="checkbox__checkmark"></div>
            <div class="checkbox__body">2021</div>
        </label>
        <label class="checkbox style-f">
            <input type="checkbox" name="year" value="2022">
            <div class="checkbox__checkmark"></div>
            <div class="checkbox__body">2022</div>
        </label>
        <label class="checkbox style-f">
            <input type="checkbox" name="year" value="2023">
            <div class="checkbox__checkmark"></div>
            <div class="checkbox__body">2023</div>
        </label>
    </div>     

    </br>
    <h3>Выберите раздел</h3>                                   
    <div>                         
        <label class="checkbox style-f">
            <input type="checkbox" name="meaning" value="expenses">
            <div class="checkbox__checkmark"></div>
            <div class="checkbox__body">Расходы</div>
        </label>
        <label class="checkbox style-f">
            <input type="checkbox" name="meaning" value="income">
            <div class="checkbox__checkmark"></div>
            <div class="checkbox__body">Доходы</div>
        </label>
    </div>
    <p><input type="button" style="width:250px;height:25px" name="formSubmit" id="btn_one" class="button5" value="Сформировать таблицу" /></p>                     
</form>    

</br>
    <input type="button" style="width:250px;height:25px" name="formSubmit" id="btn_two" class="button5" value="Удалить содержимое таблицы"> 

</br>
<div class="shadowbox">
    <p>Год: {{ $result['options']['year'] }}</br>Месяц: {{ $result['options']['mounth'] }}</br>Раздел: {{ $meaning }}</p>
</div>

</br>
<table class="freeze-table" width="700px">
    <thead>
        <tr>
            <th style="min-width: 300px; width: 300px;" class="col-id-no fixed-header">Наименование</th>
            <th style="min-width: 200px; width: 200px;">КБК</th>
            <th style="min-width: 150px; width: 150px;">Утвержденные</th>
            <th style="min-width: 150px; width: 150px;">Исполнено</th>
            <th style="min-width: 150px; width: 150px;">Неисполненные</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($result['info'] as $value)
            <tr>
                <td>{{ $value['title'] }}</td>
                <td>{{ $value['kbk'] }}</td>
                <td>{{ $value['approved'] }}</td>
                <td>{{ $value['fulfilled'] }}</td>
                <td>{{ $value['unused'] }}</td>
            </tr>       
        @endforeach        
    </tbody>
</table>