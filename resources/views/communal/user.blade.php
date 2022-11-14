@include('layouts.main')
<div id="live_data"></div>

<script>
    $(document).ready(function(){
        
        function setKeydownmyForm() {
            $('input').keydown(function(e) {
                if (e.keyCode === 13) {
                    var tr = this.closest('tr');
                    var id = $('.id', tr).val(); 
                    
                    //Получаем значения, меняем запятую на точку и убираем пробелы в числе                   
                    function structure(title){
                        var volume = $(title, tr).val();
                        var volume = volume.replace(",",".");
                        var volume = volume.replace(" ","");
                        return volume;
                    }
                    
                    var heat_volume = structure('.heat-volume');
                    var heat_sum = structure('.heat-sum');
                    var drainage_volume = structure('.drainage-volume');
                    var drainage_sum = structure('.drainage-sum');
                    var negative_volume = structure('.negative-volume');
                    var negative_sum = structure('.negative-sum');
                    var water_volume = structure('.water-volume');
                    var water_sum = structure('.water-sum');
                    var power_volume = structure('.power-volume');
                    var power_sum = structure('.power-sum');
                    var trash_volume = structure('.trash-volume');
                    var trash_sum = structure('.trash-sum');
                    var disposal_volume = structure('.disposal-volume');
                    var disposal_sum = structure('.disposal-sum');
                                        
                    $.ajax({
                        url:"/budget/public/user/communal/update",  
                        method:"patch",  
                        data:{
                            "_token": "{{ csrf_token() }}",
                            id, heat_volume, heat_sum, drainage_volume, drainage_sum,
                            negative_volume, negative_sum, water_volume, water_sum,
                            power_volume, power_sum, trash_volume, trash_sum,
                            disposal_volume, disposal_sum
                        },
                        dataType:"text",  
                        success:function(data){  
                            //alert(data);
                            fetch_data();  
                        } 
                    })                   
                }               
            })
        }
        
        function fetch_data(){              
            let year ='<?= $year ?>';
            $.ajax({  
                url:"/budget/public/user/communal/back",  
                method:"GET",
                data:{
                    //"_token": "{{ csrf_token() }}",
                    year:year
                },
                dataType:"text",
                success:function(data){  
                    $('#live_data').html(data);  
                    setKeydownmyForm()
                }   
            });  
        } 
     fetch_data(); 
     
        $(document).on('click', '#btn_two', function(){
            var tr = this.closest('tr');
            var id = $('.id', tr).val();
            var mounth = $('.mounth', tr).val();
            var year ='<?= $year ?>';
                $.ajax({
                    url:"/budget/public/user/communal/sending",  
                    method:"patch",
                    data:{
                        "_token": "{{ csrf_token() }}",
                        id, mounth, year
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


