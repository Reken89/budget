@include('layouts.main')
<div id="live_data"></div>

<script>
    $(document).ready(function(){       
        //Подгружаем BACK шаблон отрисовки
        function fetch_data(){              
            $.ajax({  
                url:"/budget/public/admin/tax/back",  
                success:function(data){  
                    $('#live_data').html(data);  
                    setKeydownmyForm()
                }   
            });  
        } 
        fetch_data();
        
    });
</script>    


