@include('layouts.main')
<div id="live_data"></div>

<script>
    $(document).ready(function(){       
        //Подгружаем BACK шаблон отрисовки
        
        function fetch_data(){              
            $.ajax({  
                url:"/budget/public/admin/reporting/back",
                method:"GET",
                success:function(data){  
                    $('#live_data').html(data);  
                }   
            });  
        } 
        fetch_data();       
        
    });
</script>  

