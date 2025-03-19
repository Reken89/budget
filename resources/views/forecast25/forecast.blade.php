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
                    
                    //Получаем значения, меняем запятую на точку и убираем пробелы в числе                   
                    function structure(title){
                        var volume = $(title, tr).val();
                        var volume = volume.replace(",",".");
                        var volume = volume.replace(/ /g,'');
                        return volume;
                    }
                    
                    var tarrif_one = structure('.tarrif_one');
                    var tarrif_two = structure('.tarrif_two');
                                        
                    $.ajax({
                        url:"/budget/public/forecast25/update",  
                        method:"patch",  
                        data:{
                            "_token": "{{ csrf_token() }}",
                            id, tarrif_one, tarrif_two
                        },
                        dataType:"text",  
                        success:function(data){  
                            fetch_data(); 
                        } 
                    })                   
                }               
            })
        }
   
        //Подгружаем BACK шаблон отрисовки
        function fetch_data(){

            $.ajax({                
                url:"/budget/public/forecast25/back", 
                success:function(data){  
                    $('#live_data').html(data); 
                    setKeydownmyForm()
                }   
            });  
        } 
        fetch_data();
      
    });
</script>




