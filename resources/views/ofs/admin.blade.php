@include('layouts.main')
<div id="live_data"></div>

<script>
    //Подгружаем BACK шаблон отрисовки
    function fetch_data(){ 
        var form = <?=json_encode($info)?>;
        var year = form['year'];
        var mounth = form['mounth'];
        var user = form['user'];
        var chapter = form['chapter'];
        var info = form['info'];
        $.ajax({  
            url:"/budget/public/admin/ofs/back",  
            method:"GET",
            data:{
                year, mounth, user, chapter, info
            },
            dataType:"text",
            success:function(data){  
                $('#live_data').html(data);  
                setKeydownmyForm()
            }   
        });  
    } 
    fetch_data();
</script>

