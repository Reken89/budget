@include('layouts.version')
<div id="live_data"></div>

<script>
    $(document).ready(function(){
   
        //Подгружаем BACK шаблон отрисовки
        function fetch_data(){
            $.ajax({                
                url:"/budget/public/delo/directory/table", 
                method:"GET",
                success:function(data){  
                    $('#live_data').html(data); 
                    //setKeydownmyForm()
                }   
            });  
        } 
        fetch_data();
        
        //Выполняем действие (добавляем строку в таблицу)
        $(document).on('click', '#btn_add', function(){
            var tr = this.closest('tr');
            var title = $('.title', tr).val();
                        
            $.ajax({
                url:"/budget/public/delo/directory/add",  
                method:"post",
                data:{
                    "_token": "{{ csrf_token() }}",
                    title
                },
                dataType:"text",  
                success:function(data){ 
                    alert(data);
                    fetch_data();  
                } 
            }) 
        })
              
    });
</script>
