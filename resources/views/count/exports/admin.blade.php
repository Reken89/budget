@if ($info['variant'] == '1')
    @include('count.exports.adminblock.one')
@elseif ($info['variant'] == '2')
    @include('count.exports.adminblock.two')
@elseif ($info['variant'] == '3')
    @include('count.exports.adminblock.three')
@elseif ($info['variant'] == '4')
    @include('count.exports.adminblock.four')
@elseif ($info['variant'] == '5')
    @include('count.exports.adminblock.five')
@elseif ($info['variant'] == '6')
    @include('count.exports.adminblock.six')   
@elseif ($info['variant'] == '7')
    @include('count.exports.adminblock.seven') 
@endif