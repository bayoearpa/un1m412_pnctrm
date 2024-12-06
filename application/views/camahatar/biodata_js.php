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

        function validateNumber(input) {
            // Menghapus karakter selain angka
            input.value = input.value.replace(/\D/g, '');
        }

        function toggleOtherInput() {
            const select = document.getElementById('prodi_lama');
            const otherInputContainer = document.getElementById('otherInputContainer');

            if (select.value === 'other') {
                otherInputContainer.style.display = 'block';
            } else {
                otherInputContainer.style.display = 'none';
                document.getElementById('prodi_lama_other').value = ''; // Clear other input
            }
        }
    });
</script>

