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
            <a>Муниципальный долг</a>
        </h2>
    </div>
    <div class="post-meta"><b>Таблица</b></div>
    <div class="border">
        <span></span>
        <span></span>
    </div>
</div>

<form id="detailing" method="get"> 
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
  
    <p><input type="button" style="width:250px;height:25px" name="formSubmit" id="btn_one" class="button5" value="Сформировать таблицу" /></p>                     
</form>  

</br>
<table class="freeze-table" width="700px">
    <thead>
        <tr>
            <th style="min-width: 100px; width: 100px;" class="col-id-no fixed-header">Месяц</th>
            <th style="min-width: 100px; width: 100px;">Год</th>
            <th style="min-width: 100px; width: 100px;">Муниципальный долг</th>
            <th style="min-width: 100px; width: 100px;">Обслуживание муниципального долга (%)</th>
            <th style="min-width: 100px; width: 100px;">Верхний предел муниципального внутреннего долга</th>
            <th style="min-width: 100px; width: 100px;">Размер ключевой ставки</th>
            <th style="min-width: 100px; width: 100px;">Размер максимальной процентной ставки</th>
        </tr>
    </thead>
    
    <tbody>
        @for ($m = 0; $m < 12; $m++)
        <tr>
            <input type="hidden" class="id" value="{{ $info[$m]['id'] }}">
            <td>{{ $info[$m]['mounth'] }}</td>
            <td>{{ $info[$m]['year'] }}</td>
            <td><input type="text" class="mundeb" value="{{ number_format($info[$m]['mundeb'], 1, ',', ' ') }}"></td>
            <td><input type="text" class="servmundeb" value="{{ number_format($info[$m]['servmundeb'], 1, ',', ' ') }}"></td>
            <td><input type="text" class="maxmunded" value="{{ number_format($info[$m]['maxmunded'], 1, ',', ' ') }}"></td>
            <td><input type="text" class="bank" value="{{ number_format($info[$m]['bank'], 2, ',', ' ') }}"></td>
            <td><input type="text" class="credit" value="{{ number_format($info[$m]['credit'], 2, ',', ' ') }}"></td>
        </tr>
        @endfor
    </tbody>
</table>    
