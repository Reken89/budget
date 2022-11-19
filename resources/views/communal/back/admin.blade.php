<head>
    <meta charset="utf-8">
    <title>Таблица коммунальных услуг</title>
</head>

<div class="post-header">
    <div class="post-cat">
        <a href="#">Информация:</a>
    </div>
    <div class="post-title">
        <h2>
            <a>Выберите год и месяц для отображения таблицы</a>
        </h2>
    </div>
    <div class="post-meta"><b>Таблица Коммунальные услуги</b></div>
    <div class="border">
        <span></span>
        <span></span>
    </div>
</div>

<form id="communal" method="get">                 
<p><b>Выберите год </b></p>                 
    <div class="size_block">                  
        <label class="container">
            <input type="checkbox" name="year" value="2018">
            <span class="checkmark">2018</span>
        </label>                 
        <label class="container">
            <input type="checkbox" name="year" value="2019">
            <span class="checkmark">2019</span>
        </label>                  
        <label class="container">
            <input type="checkbox" name="year" value="2020">
            <span class="checkmark">2020</span>
        </label>                  
        <label class="container">
            <input type="checkbox" name="year" value="2021">
            <span class="checkmark">2021</span>
        </label>                 
        <label class="container">
            <input type="checkbox" name="year" value="2022">
            <span class="checkmark">2022</span>
        </label>                  
    </div>
                         
<p><b>Выберите месяц</b></p>                                   
<div class="size_block">                         
    <label class="container">
        <input type="checkbox" name="mounth" value="1">
        <span class="checkmark">Январь</span>
    </label>
    <label class="container">
        <input type="checkbox" name="mounth" value="2">
        <span class="checkmark">Февраль</span>
    </label>
    <label class="container">
        <input type="checkbox" name="mounth" value="3">
        <span class="checkmark">Март</span>
    </label>
    <label class="container">
        <input type="checkbox" name="mounth" value="4">
        <span class="checkmark">Апрель</span>
    </label>
    <label class="container">
        <input type="checkbox" name="mounth" value="5">
        <span class="checkmark">Май</span>
    </label>
    <label class="container">
        <input type="checkbox" name="mounth" value="6">
        <span class="checkmark">Июнь</span>
    </label>
    <label class="container">
        <input type="checkbox" name="mounth" value="7">
        <span class="checkmark">Июль</span>
    </label>
    <label class="container">
        <input type="checkbox" name="mounth" value="8">
        <span class="checkmark">Август</span>
    </label>
    <label class="container">
        <input type="checkbox" name="mounth" value="9">
        <span class="checkmark">Сентябрь</span>
    </label>
    <label class="container">
        <input type="checkbox" name="mounth" value="10">
        <span class="checkmark">Октябрь</span>
    </label>
    <label class="container">
        <input type="checkbox" name="mounth" value="11">
        <span class="checkmark">Ноябрь</span>
    </label>
    <label class="container">
        <input type="checkbox" name="mounth" value="12">
        <span class="checkmark">Декабрь</span>
    </label>                            
</div>
                         
<p><input type="button" style="width:250px;height:25px" name="formSubmit" id="btn_one" class="btn" value="Сформировать таблицу" /></p>                     
</form>

@php
    var_dump($info);
@endphp
