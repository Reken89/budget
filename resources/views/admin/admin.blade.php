@include('layouts.version')
<div id="live_data"></div>

<script>
    $(document).ready(function(){              
        //Подгружаем BACK шаблон отрисовки
        function fetch_data(){  
            $.ajax({  
                url:"/budget/public/adm/back",  
                method:"GET",
                success:function(data){  
                    $('#live_data').html(data);  
                    //setKeydownmyForm()
                }   
            });  
        } 
        fetch_data();
                    
    });
</script>




