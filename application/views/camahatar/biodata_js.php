<script type="text/javascript">
	$(document).ready(function(){
        $('#provinsi').change(function(){
            var id=$(this).val();
            $.ajax({
                url : "<?php echo base_url();?>getkabkota",
                method : "POST",
                data : {id: id},
                async : false,
                dataType : 'json',
                success: function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<option value='+data[i].id_wil+'>'+data[i].nm_wil+'</option>';
                    }
                    $('.ktkb').html(html);
                     
                }
            });
        });
    });
</script>