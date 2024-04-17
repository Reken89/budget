<!-- Если user_id существует -->
@if(isset($info[0]['user_id']))

    <!-- Детализация администрации -->
    @if($info[0]['user_id'] == "53")
        @include('count24.exports.adminblock.one')
    @endif

    <!-- Если первое учреждение Совет -->
    @if($info[0]['user_id'] == "27")
        @include('count24.exports.adminblock.two')
    @endif

    <!-- Если первое учреждение Закупки -->
    @if($info[0]['user_id'] == "26")
        @include('count24.exports.adminblock.three')
    @endif

    <!-- Если первое учреждение ДС Ауринко -->
    @if($info[0]['user_id'] == "9")
        @include('count24.exports.adminblock.four')
    @endif

    <!-- Если первое учреждение ДХШ -->
    @if($info[0]['user_id'] == "18")
        @include('count24.exports.adminblock.five')
    @endif

    <!-- Если первое учреждение ВСОШ -->
    @if($info[0]['user_id'] == "8")
        @include('count24.exports.adminblock.six')
    @endif

    <!-- Если первое учреждение КУМС -->
    @if($info[0]['user_id'] == "23")
        @include('count24.exports.adminblock.seven')
    @endif

@else
    <!-- Свод по всем учреждениям за год -->
    @include('count24.exports.adminblock.eight')
@endif  
