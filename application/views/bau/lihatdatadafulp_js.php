<script type="text/javascript">
	$(document).ready(function() {
		 $('#example1').on('click', '.view-file-button', function() {
            var filename = $(this).data('filename');
            // Gantilah '/uploads/' dengan direktori tempat Anda menyimpan file
            var fileUrl = '/v1/assets/upload/2025/bukti_bayar_daful/' + filename;
            
            // Buka tautan ke file di jendela baru
            window.open(fileUrl, '_blank');
        });


    });
</script>