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
        
        //Выполняем действие (добавляем пользователя в таблицу)
        $(document).on('click', '#btn_add', function(){
            var tr = this.closest('tr');
            var name = $('.name', tr).val();
            var email = $('.email', tr).val();
            var password = $('.password', tr).val();

            $.ajax({
                url:"/budget/public/adm/add",  
                method:"post",
                data:{
                    "_token": "{{ csrf_token() }}",
                    name, email, password
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




