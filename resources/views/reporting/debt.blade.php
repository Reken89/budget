@include('layouts.main')
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
                    
                    var mundeb = structure('.mundeb');
                    var servmundeb = structure('.servmundeb');
                    var maxmunded = structure('.maxmunded');
                    var bank = structure('.bank');
                    var credit = structure('.credit');
                                        
                    $.ajax({
                        url:"/budget/public/admin/debts/update",  
                        method:"patch",  
                        data:{
                            "_token": "{{ csrf_token() }}",
                            id, mundeb, servmundeb, maxmunded, bank, credit
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
            var info = <?=json_encode($info)?>;
            var year = info['year'];
          
            $.ajax({  
                url:"/budget/public/admin/debts/back",
                method:"GET",
                data:{
                    year
                },
                dataType:"text",
                success:function(data){  
                    $('#live_data').html(data); 
                    setKeydownmyForm()
                }   
            });  
        } 
        fetch_data(); 
        
        //Выполняем действие (формируем таблицу) при нажатии на кнопку
        $(document).on('click', '#btn_one', function(){
            let infomany = $('#detailing').serializeArray();

            //Создаем пустые массивы
            let year_many = [];
            
            //Заполняем в массив year, все значения
            //из массива info, где ключ равен 'year'
            // *
            //Заполняем в массив mounth, все значения
            //из массива info, где ключ равен 'mounth'          
            for (const item of infomany) {
                const value = item.value;
                if (item.name === 'year') {
                    year_many.push(value);
                }
            }
            let year = year_many[0];
                
            $.ajax({
                url:"/budget/public/admin/debts/back",  
                method:"get",
                data:{
                    year
                },
                dataType:"text",  
                success:function(data){ 
                    $('#live_data').html(data);  
                    setKeydownmyForm()
                } 
            })               
        })        
        
    });
</script>  

