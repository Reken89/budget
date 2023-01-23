@include('layouts.main')
<div id="live_data"></div>

<script>
    $(document).ready(function(){
        
        //Подгружаем BACK шаблон отрисовки
        function fetch_data(){  
            var info = <?=json_encode($info)?>;
            var year = info['year'];
            var mounth = info['mounth'];
            var variant = info['variant'];
            $.ajax({  
                url:"/budget/public/admin/build/back",  
                method:"GET",
                data:{
                    //"_token": "{{ csrf_token() }}",
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
        
    });
</script>

