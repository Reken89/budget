<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
<div id="live_data"></div>

<script>
    $(document).ready(function(){
   
        //Подгружаем BACK шаблон отрисовки
        function fetch_data(){
            var variant = <?=json_encode($variant)?>;
            if(variant == "out"){
                var link = "/budget/public/delo/out";
            }
            if(variant == "in"){
                var link = "/budget/public/delo/in";
            }
            $.ajax({                
                url:link, 
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
            var variant = $('.variant', tr).val();
            var number = $('.number', tr).val();
            var user = $('.user', tr).val();
            var npa = $('.npa', tr).val();
            var correspondent = $('.correspondent', tr).val();
            var date = $('.date', tr).val();
            var content = $('.content', tr).val();
                        
            $.ajax({
                url:"/budget/public/delo/docadd",  
                method:"post",
                data:{
                    "_token": "{{ csrf_token() }}",
                    author, variant, number, npa,
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


