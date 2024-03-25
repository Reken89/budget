<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
<div id="live_data"></div>

<script>
    $(document).ready(function(){
   
        //Подгружаем BACK шаблон отрисовки
        function fetch_data(){
            var variant = <?=json_encode($variant)?>;
            $.ajax({  
                url:"/budget/public/delo/back", 
                method:"GET",
                data:{
                    variant
                },
                dataType:"text",
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
            var author = $('.author', tr).val();
            var number = $('.number', tr).val();
            var npa = $('.npa', tr).val();
            var correspondent = $('.correspondent', tr).val();
            var date = $('.date', tr).val();
            var content = $('.content', tr).val();
            
            alert(author);                      
        })
      
    });
</script>


