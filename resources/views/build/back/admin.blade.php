<head>
    <meta charset="utf-8">
    <title>Таблица ремонты</title>
</head>

@php
    var_dump($info);
@endphp

<div class="post-header">
    <div class="post-cat">
        <a href="#">Информация:</a>
    </div>
    <div class="post-title">
        <h2>
            <a>Выберите параметры для отображения таблицы</a>
        </h2>
    </div>
    <div class="post-meta"><b>Таблица ремонты</b></div>
    <div class="border">
        <span></span>
        <span></span>
    </div>
</div>

<form id="build" method="get"> 
<p><b>Выберите вариант таблицы</b></p>                 
    <div class="size_block">                  
        <label class="checkbox style-f">
            <input type="checkbox" name="variant" value="2">
            <div class="checkbox__checkmark"></div>
            <div class="checkbox__body">Учреждения АУ, БУ</div>
        </label>
        <label class="checkbox style-f">
            <input type="checkbox" name="variant" value="3">
            <div class="checkbox__checkmark"></div>
            <div class="checkbox__body">Детские сады</div>
        </label>
        <label class="checkbox style-f">
            <input type="checkbox" name="variant" value="4">
            <div class="checkbox__checkmark"></div>
            <div class="checkbox__body">Администрация и КУМС</div>
        </label>                  
        <label class="checkbox style-f">
            <input type="checkbox" name="variant" value="5">
            <div class="checkbox__checkmark"></div>
            <div class="checkbox__body">ДМШ и ДХШ</div>
        </label>                 
        <label class="checkbox style-f">
            <input type="checkbox" name="variant" value="6">
            <div class="checkbox__checkmark"></div>
            <div class="checkbox__body">ВСОШ</div>
        </label>
    </div>
                         
<p><b>Выберите месяц</b></p>                                   
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
                         
<p><input type="button" style="width:250px;height:25px" name="formSubmit" id="btn_one" class="button5" value="Сформировать таблицу" /></p>                     
</form>