@include('layouts.main')
<head>
    <meta charset="utf-8">
    <title>Таблица ЕНП</title>
</head>

<div class="post-header">
    <div class="post-cat">
        <a href="#">Информация:</a>
    </div>
    <div class="post-title">
        <h2>
            <a>Таблица ЕНП</a>
        </h2>
    </div>
    <div class="post-meta"><b>Таблица</b></div>
    <div class="border">
        <span></span>
        <span></span>
    </div>
</div>

@if ($status == '1')
    @php
        $text = "XML файл загружен в БД Laravel";
    @endphp
@elseif ($status == '2')
    @php
        $text = "Загрузка в Laravel не удалась";
    @endphp
@elseif ($status == '3')
    @php
        $text = "Загружаемый файл, не является XML форматом! Загрузка не возможна!";
    @endphp
@endif

</br>
<div class="shadowbox">
    <p>{{ $text }}</p>
</div>