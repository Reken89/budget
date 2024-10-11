<head>
    <title>ОФС 2025</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style2.css') }}">
</head>

<div class="container_fix2">
    <div class="table2">
        <div id="content"></div>
    </div>    
</div>

@include('layouts.version')
<script>
    $(document).ready(function(){ 
        //Выполняем запись в БД при нажатии на клавишу ENTER
        function setKeydownmyForm() {
            $('input').keydown(function(e) {
                if (e.keyCode === 13) {
                    var tr = this.closest('tr');
                    var ekr_id = $('.ekr_id', tr).val(); 
                    var number = $('.number', tr).val();
                    var mounth = $('.mounth', tr).val();
                    var chapter = $('.chapter', tr).val();
                    var user_id = $('.user_id', tr).val();
                    
                    //Получаем значения, меняем запятую на точку и убираем пробелы в числе                   
                    function structure(title){
                        var volume = $(title, tr).val();
                        //Меняем запятую на точку
                        //Убираем лишние пробелы
                        //Выполняем арифметические действия в строке
                        var volume = volume.replace(/\,/g,'.');
                        var volume = volume.replace(/ /g,'');
                        var volume = eval(volume);
                        return volume;
                    }
                    
                    var lbo = structure('.lbo');
                    var prepaid = structure('.prepaid');
                    var credit_year_all = structure('.credit_year_all');
                    var credit_year_term = structure('.credit_year_term');
                    var debit_year_all = structure('.debit_year_all');
                    var debit_year_term = structure('.debit_year_term');
                    var fact_mounth = structure('.fact_mounth');
                    var kassa_mounth = structure('.kassa_mounth');
                    var credit_end_all = structure('.credit_end_all');
                    var credit_end_term = structure('.credit_end_term');
                    var debit_end_all = structure('.debit_end_all');
                    var debit_end_term = structure('.debit_end_term');
                    var return_old_year = structure('.return_old_year');
                                        
                    $.ajax({
                        url:"/budget/public/user/ofs25/update",  
                        method:"patch",  
                        data:{
                            "_token": "{{ csrf_token() }}",
                            ekr_id, number, lbo, prepaid, credit_year_all,
                            credit_year_term, debit_year_all, debit_year_term,
                            fact_mounth, kassa_mounth, credit_end_all, credit_end_term,
                            debit_end_all, debit_end_term, return_old_year,
                            mounth, chapter, user_id
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
            var form = <?=json_encode($info)?>;
            var mounth = form['mounth'];
            var chapter = form['chapter'];
            var user = form['user'];
            
            $.ajax({  
                url:"/budget/public/scale/ofs25/table",  
                method:"GET",
                data:{
                    mounth, chapter, user
                },
                dataType:"text", 
                success:function(data){  
                    $('#content').html(data);  
                    setKeydownmyForm()
                }   
            });  
        } 
        fetch_data();
        
        //Выполняем действие (сбрасываем значения) при нажатии на кнопку reset
        $(document).on('click', '#reset', function(){          
            var tr = this.closest('tr');
                var number = $('.number', tr).val();
                var mounth = $('.mounth', tr).val();
                var chapter = $('.chapter', tr).val();
                var user_id = $('.user_id', tr).val();
                var ekr_id = $('.ekr_id', tr).val();
                
            $.ajax({
                url:"/budget/public/user/ofs25/reset",  
                method:"patch",
                data:{
                    "_token": "{{ csrf_token() }}",
                    number, mounth, chapter,
                    user_id, ekr_id
                },
                dataType:"text",  
                success:function(data){
                    fetch_data();
                    //alert(data);
                } 
            })               
        })

    });
</script>



