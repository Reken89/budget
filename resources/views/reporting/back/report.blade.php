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
            <a>Исполнение бюджета</a>
        </h2>
    </div>
    <div class="post-meta"><b>Таблица</b></div>
    <div class="border">
        <span></span>
        <span></span>
    </div>
</div>

@if ($status == 'yes')
    @php
        $text = "Информация загружена в БД Laravel";
    @endphp
@elseif ($status == 'no')
    @php
        $text = "Загрузка в Laravel не удалась, в excel таблице есть ошибки";
    @endphp
@elseif ($status == 'error')
    @php
        $text = "Вы пропустили один из параметров выбора (Год, месяц, раздел)";
    @endphp    
@endif

</br>
<div class="shadowbox">
    <p>{{ $text }}</p>
</div>

