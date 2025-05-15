@include('layouts.version')
<div id="live_data"></div>
<script>
    $(document).ready(function(){ 
        //Подгружаем BACK шаблон отрисовки
        function fetch_data(){ 
            var form = <?=json_encode($info)?>;
            var year = form['year'];
            var mounth = form['mounth'];
            
            $.ajax({  
                url:"/budget/public/user/utilities/table",  
                method:"GET",
                data:{
                    year, mounth
                },
                dataType:"text", 
                success:function(data){  
                    $('#live_data').html(data);  
                    //setKeydownmyForm()
                }   
            });  
        } 
        fetch_data();    
    });
</script>




