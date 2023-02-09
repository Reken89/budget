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
                    var user_id = $('.user_id', tr).val();
                    var work_id = $('.work_id', tr).val();
                    var mounth = $('.mounth', tr).val();
                    var number = $('.number', tr).val();
                    var period = $('.period', tr).val();
                    var year = 2023;
                    
                    //Получаем значения, меняем запятую на точку и убираем пробелы в числе                   
                    function structure(title){
                        var volume = $(title, tr).val();
                        var volume = volume.replace(",",".");
                        var volume = volume.replace(/ /g,'');
                        return volume;
                    }
                    
                    var contract_sum = structure('.contract_sum');
                    var kassa_sum = structure('.kassa_sum');
                    var fact_sum = structure('.fact_sum');
                                        
                    $.ajax({
                        url:"/budget/public/user/build/update",  
                        method:"patch",  
                        data:{
                            "_token": "{{ csrf_token() }}",
                            id, user_id, work_id, mounth, number, period, year,
                            contract_sum, kassa_sum, fact_sum
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
            var mounth = info['mounth'];
            var variant = info['variant'];
            $.ajax({  
                url:"/budget/public/user/build/back",  
                method:"GET",
                data:{
                    year, mounth, variant
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
            let infomany = $('#build').serializeArray();
           
            let year = 2023;

            //Создаем пустые массивы
            let mounth = [];
            let variant_many = [];
            
            //Заполняем в массив year, все значения
            //из массива info, где ключ равен 'year'
            // *
            //Заполняем в массив mounth, все значения
            //из массива info, где ключ равен 'mounth'          
            for (const item of infomany) {
                const value = item.value;
                if (item.name === 'mounth') {
                    mounth.push(value);
                } else if (item.name === 'variant') {
                    variant_many.push(value);
                }
            }
            
            let variant = variant_many[0];
                
            $.ajax({
                url:"/budget/public/user/build/back",  
                method:"get",
                data:{
                    year, mounth, variant
                },
                dataType:"text",  
                success:function(data){ 
                    $('#live_data').html(data);  
                    setKeydownmyForm() 
                    //alert(mounth);
                } 
            })               
        })
        
        //Выполняем действие (отправка данных) при нажатии на кнопку
        $(document).on('click', '#btn_two', function(){
            var tr = this.closest('tr');
            var user_id = $('.user_id', tr).val();
            var ekr = $('.ekr', tr).val();
            var ekr_double = $('.ekr_double', tr).val();
            var title = $('.title', tr).val();
            var mounth = $('.mounth', tr).val();
            var number = $('.number', tr).val();
            var period = $('.period', tr).val();
            var year = 2023;
            
            //Получаем значения, меняем запятую на точку и убираем пробелы в числе                   
            function structure(title){
                var volume = $(title, tr).val();
                var volume = volume.replace(",",".");
                var volume = volume.replace(/ /g,'');
                return volume;
            }
                    
            var contract_sum = structure('.contract_sum');
            var kassa_sum = structure('.kassa_sum');
            var fact_sum = structure('.fact_sum');
            
            $.ajax({
                url:"/budget/public/user/build/add",  
                method:"post",
                data:{
                    "_token": "{{ csrf_token() }}",
                    user_id, mounth, year, 
                    ekr, ekr_double, number,
                    title, period, contract_sum,
                    kassa_sum, fact_sum
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

