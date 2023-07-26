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
            <a>Исполнение бюджета</a>
        </h2>
    </div>
    <div class="post-meta"><b>Таблица</b></div>
    <div class="border">
        <span></span>
        <span></span>
    </div>
</div>

<head>       
    <style>    
       #left { position: absolute; left: 0; top: 0; width: 50%; }
       #right { position: absolute; right: 0; top: 25%; width: 50%; } 
    </style>
</head>

</br>
<h3>Загрузите файл из "АС Бюджета"</h3>   
<form enctype="multipart/form-data" action="/budget/public/admin/reporting/upload" method="POST">
    @csrf
    <input name="file" id="file" type="file">
    <input type="submit" id="btn_one" class="btn btn-default" value="Загрузить">
    
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
        <input type="checkbox" name="year" value="2018">
        <div class="checkbox__checkmark"></div>
        <div class="checkbox__body">2018</div>
    </label>
    <label class="checkbox style-f">
        <input type="checkbox" name="year" value="2019">
        <div class="checkbox__checkmark"></div>
        <div class="checkbox__body">2019</div>
    </label>
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
</form>