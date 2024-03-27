<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
<div id="live_data"></div>

<script>
    $(document).ready(function(){
   
        //Подгружаем BACK шаблон отрисовки
        function fetch_data(){
            $.ajax({                
                url:"/budget/public/delo/correspondents/table", 
                method:"GET",
                success:function(data){  
                    $('#live_data').html(data); 
                    //setKeydownmyForm()
                }   
            });  
        } 
        fetch_data();
        
        //Выполняем действие (обновляем строку в таблицу)
        $(document).on('click', '#btn_change', function(){
            var tr = this.closest('tr');
            var id = $('.id', tr).val();
            var title = $('.title', tr).val();
                        
            $.ajax({
                url:"/budget/public/delo/correspondents/update",  
                method:"patch",
                data:{
                    "_token": "{{ csrf_token() }}",
                    id, title
                },
                dataType:"text",  
                success:function(data){  
                    fetch_data();  
                } 
            }) 
        })
              
    });
</script>



