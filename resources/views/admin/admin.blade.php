@include('layouts.version')
<div id="live_data"></div>

<script>
    $(document).ready(function(){    
        //Выполняем запись в БД при нажатии на клавишу ENTER
        function setKeydownmyForm() {
            $('input').keydown(function(e) {
                if (e.keyCode === 13) {
                    var tr = this.closest('tr');
                    var id = $('.id', tr).val(); 
                    var name = $('.name', tr).val();
                    var email = $('.email', tr).val();
                    var role = $('.role', tr).val();
                                        
                    $.ajax({
                        url:"/budget/public/adm/update",  
                        method:"patch",  
                        data:{
                            "_token": "{{ csrf_token() }}",
                            id, name, email, role
                        },
                        dataType:"text",  
                        success:function(data){  
                            fetch_data(); 
                            //alert(data);
                        } 
                    })                   
                }               
            })
        }
        
        //Подгружаем BACK шаблон отрисовки
        function fetch_data(){  
            $.ajax({  
                url:"/budget/public/adm/back",  
                method:"GET",
                success:function(data){  
                    $('#live_data').html(data);  
                    setKeydownmyForm()
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
        
        //Выполняем действие (обновляем пароль пользователя)
        $(document).on('click', '#update_password', function(){
            var tr = this.closest('tr');
            var id = $('.id', tr).val();
            let password = prompt('Введите новый пароль для пользователя', );

            $.ajax({
                url:"/budget/public/adm/password",  
                method:"patch",
                data:{
                    "_token": "{{ csrf_token() }}",
                    id, password
                },
                dataType:"text",  
                success:function(data){ 
                    //alert(data);
                    fetch_data();  
                } 
            }) 
        })
                    
    });
</script>




