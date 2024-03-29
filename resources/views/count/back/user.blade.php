<head>
    <meta charset="utf-8">
    <title>Таблица Смета</title>
</head>

<div class="post-header">
    <div class="post-cat">
        <a href="#">Информация:</a>
    </div>
    <div class="post-title">
        <h2>
            <a>Выберите параметры для отображения таблицы</a>
        </h2>
    </div>
    <div class="post-meta"><b>Таблица Смета</b></div>
    <div class="border">
        <span></span>
        <span></span>
    </div>
</div> 

<form id="count" method="get"> 
<h3>Выберите год</h3> 
<div>
    <label class="checkbox style-f">
        <input type="checkbox" name="year" value="2024">
        <div class="checkbox__checkmark"></div>
        <div class="checkbox__body">2024</div>
    </label>
    <label class="checkbox style-f">
        <input type="checkbox" name="year" value="2025">
        <div class="checkbox__checkmark"></div>
        <div class="checkbox__body">2025</div>
    </label>
    <label class="checkbox style-f">
        <input type="checkbox" name="year" value="2026">
        <div class="checkbox__checkmark"></div>
        <div class="checkbox__body">2026</div>
    </label>                        
</div>

</br>
<h3>Выберите раздел</h3>                                   
<div>                         
    <label class="checkbox style-f">
        <input type="checkbox" name="variant" value="1">
        <div class="checkbox__checkmark"></div>
        <div class="checkbox__body">ОМСУ</div>
    </label>
    <label class="checkbox style-f">
        <input type="checkbox" name="variant" value="2">
        <div class="checkbox__checkmark"></div>
        <div class="checkbox__body">ЦБ и Закупки</div>
    </label>
    <label class="checkbox style-f">
        <input type="checkbox" name="variant" value="3">
        <div class="checkbox__checkmark"></div>
        <div class="checkbox__body">Детские сады</div>
    </label>
    <label class="checkbox style-f">
        <input type="checkbox" name="variant" value="4">
        <div class="checkbox__checkmark"></div>
        <div class="checkbox__body">ДХШ и ДМШ</div>
    </label>
    <label class="checkbox style-f">
        <input type="checkbox" name="variant" value="5">
        <div class="checkbox__checkmark"></div>
        <div class="checkbox__body">ВСОШ</div>
    </label>
    <label class="checkbox style-f">
        <input type="checkbox" name="variant" value="6">
        <div class="checkbox__checkmark"></div>
        <div class="checkbox__body">КУМС</div>
    </label>
</div>

</br>
<input type="button" style="width:250px;height:25px" name="formSubmit" id="btn_one" class="button5" value="Сформировать таблицу"> 
</form> 

</br>
    <form action="/budget/public/user/count/export" method="get">
        <button type="submit" style="width:250px;height:25px" class="button5">Выгрузка в EXCEL</button>
    </form>

</br>
    <input type="button" style="width:250px;height:25px" name="formSubmit" id="btn_two" class="button5" value="Отправка в ФЭУ"> 
</br>   

</br>
<div class="shadowbox">
    <p>Выбранный год: {{$info['year']}} </p>
</div>

@if ($info['variant'] == '1')
    @include('count.back.userblock.one')
@elseif ($info['variant'] == '2')
    @include('count.back.userblock.two')
@elseif ($info['variant'] == '3')
    @include('count.back.userblock.three')
@elseif ($info['variant'] == '4')
    @include('count.back.userblock.four')
@elseif ($info['variant'] == '5')
    @include('count.back.userblock.five')
@elseif ($info['variant'] == '6')
    @include('count.back.userblock.six')
@endif

