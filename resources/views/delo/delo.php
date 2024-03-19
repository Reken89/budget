<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
<div id="live_data"></div>

<script>
    $(document).ready(function(){
   
        //Подгружаем BACK шаблон отрисовки
        function fetch_data(){  
            $.ajax({  
                url:"/budget/public/delo/back",  
                success:function(data){  
                    $('#live_data').html(data);  
                    //setKeydownmyForm()
                }   
            });  
        } 
        fetch_data();
      
    });
</script>


