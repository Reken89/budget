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
        
        //Выполняем действие (добавляем строку в таблицу)
        $(document).on('click', '#btn_add', function(){
            var tr = this.closest('tr');
            var number = $('.number', tr).val();
            var npa = $('.npa', tr).val();
            var correspondent = $('.correspondent', tr).val();
            var date = $('.date', tr).val();
            var content = $('.content', tr).val();
            
            alert(npa);                      
        })
      
    });
</script>


