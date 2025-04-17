<!-- Если user_id существует -->
@if(isset($info['result'][0]['user_id']))

    <!-- Детализация администрации -->
    @if($info['result'][0]['user_id'] == "53")
        @include('count25.back.adminblock.one')
    @endif

    <!-- Если первое учреждение Совет -->
    @if($info['result'][0]['user_id'] == "27")
        @include('count25.back.adminblock.two')
    @endif

    <!-- Если первое учреждение Закупки -->
    @if($info['result'][0]['user_id'] == "26")
        @include('count25.back.adminblock.three')
    @endif

    <!-- Если первое учреждение ДС Ауринко -->
    @if($info['result'][0]['user_id'] == "9")
        @include('count25.back.adminblock.four')
    @endif

    <!-- Если первое учреждение ДХШ -->
    @if($info['result'][0]['user_id'] == "18")
        @include('count25.back.adminblock.five')
    @endif

    <!-- Если первое учреждение ВСОШ -->
    @if($info['result'][0]['user_id'] == "8")
        @include('count25.back.adminblock.six')
    @endif

    <!-- Если первое учреждение КУМС -->
    @if($info['result'][0]['user_id'] == "23")
        @include('count25.back.adminblock.seven')
    @endif

@else
    <!-- Свод по всем учреждениям за год -->
    @include('count25.back.adminblock.eight')
@endif    


