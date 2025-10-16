<script type="text/javascript">
$(document).ready(function() {

	$('#example1').on('click', '.view-file-button_ktp', function() {
        var filename = $(this).data('filename');
        // Gantilah '/uploads/' dengan direktori tempat Anda menyimpan file
        var fileUrl = '/assets/upload/2025/upload_ktp/' + filename;
        
        // Buka tautan ke file di jendela baru
        window.open(fileUrl, '_blank');
    });

    $('#example1').on('click', '.view-file-button_ijsh', function() {
        var filename = $(this).data('filename');
        // Gantilah '/uploads/' dengan direktori tempat Anda menyimpan file
        var fileUrl = '/assets/upload/2025/upload_ijasah_d3/' + filename;
        
        // Buka tautan ke file di jendela baru
        window.open(fileUrl, '_blank');
    });

    $('#example1').on('click', '.view-file-button_trans', function() {
        var filename = $(this).data('filename');
        // Gantilah '/uploads/' dengan direktori tempat Anda menyimpan file
        var fileUrl = '/assets/upload/2025/upload_transkip_d3/' + filename;
        
        // Buka tautan ke file di jendela baru
        window.open(fileUrl, '_blank');
    });

});
</script>