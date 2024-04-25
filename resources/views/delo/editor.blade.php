<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
<script src="https://snipp.ru/cdn/select2/4.0.13/dist/js/select2.min.js"></script>
<script src="https://snipp.ru/cdn/select2/4.0.13/dist/js/i18n/ru.js"></script>
<div id="live_data"></div>

<script>
    $(document).ready(function(){
   
        //Подгружаем BACK шаблон отрисовки
        function fetch_data(){
            $.ajax({                
                url:"/budget/public/delo/editor/table", 
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
            var variant = $('.variant', tr).val();
            var exception = $('.exception', tr).val();
            var number = $('.number', tr).val();
            var user = $('.user', tr).val();
            var npa = $('.npa', tr).val();
            var correspondent = $('.correspondent', tr).val();
            var date = $('.date', tr).val();
            var content = $('.content', tr).val();
                        
            $.ajax({
                url:"/budget/public/delo/editor/update",  
                method:"patch",
                data:{
                    "_token": "{{ csrf_token() }}",
                    id, variant, exception, number, npa,
                    correspondent, date, content, user
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

