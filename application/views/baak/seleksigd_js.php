<script type="text/javascript">
	
	$(document).ready(function() {

		 $('.view-fileui-button').click(function() {
            var filename = $(this).data('filename');
            // Gantilah '/uploads/' dengan direktori tempat Anda menyimpan file
            var fileUrl = '/assets/upload/2024/upload_ijasah_d3/' + filename;
            
            // Buka tautan ke file di jendela baru
            window.open(fileUrl, '_blank');
        });

         $('.view-fileut-button').click(function() {
            var filename = $(this).data('filename');
            // Gantilah '/uploads/' dengan direktori tempat Anda menyimpan file
            var fileUrl = '/assets/upload/2024/upload_transkip_d3/' + filename;
            
            // Buka tautan ke file di jendela baru
            window.open(fileUrl, '_blank');
        });

         $('.view-filess-button').click(function() {
            var filename = $(this).data('filename');
            // Gantilah '/uploads/' dengan direktori tempat Anda menyimpan file
            var fileUrl = '/assets/upload/2024/upload_surat_pernyataan_sehat/' + filename;
            
            // Buka tautan ke file di jendela baru
            window.open(fileUrl, '_blank');
        }); 

          $('.editseleksigdr1').click(function() {
        var no = $(this).data('no');
        // Ambil data yang akan diedit dari server dengan AJAX
        $.ajax({
          url: '<?php echo base_url('baak/getdataeditseleksigdr1'); ?>/' + no, // Sesuaikan dengan URL yang sesuai
          type: 'GET',
              success: function(data) {
                // Isi modal dengan data yang diambil
                console.log(data); // Cetak nilai data ke konsol
                var parsedData = JSON.parse(data);
                $('#link_ktp').data('link', parsedData.link_ktp);
                $('#link_ijasah').data('link', parsedData.link_ijasah);
                $('#link_rapor').data('link', parsedData.link_rapor);
                $('#link_kesehatan').data('link', parsedData.link_kesehatan);
                $('#link_supersehat').data('link', parsedData.link_supersehat);
                $('#link_prestasi').data('link', parsedData.link_prestasi);
                $('#link_video_pushup').data('link', parsedData.link_video_pushup);
                $('#link_video_situp').data('link', parsedData.link_video_shitup);
                $('#link_video_pullup').data('link', parsedData.link_video_pullup);
                $('#link_video_shuttle').data('link', parsedData.link_video_shuttle);


                // $('#id_link').val(parsedData.id_link);
                // $('#no').val(parsedData.no);
                // $('#link_ktp').val(parsedData.link_ktp);
                // $('#link_ijasah').val(parsedData.link_ijasah);
                // $('#link_rapor').val(parsedData.link_rapor);
                // $('#link_kesehatan').val(parsedData.link_kesehatan);
                // $('#link_supersehat').val(parsedData.link_supersehat);
                // $('#link_prestasi').val(parsedData.link_prestasi);
                // $('#link_video_pushup').val(parsedData.link_video_pushup);
                // $('#link_video_shitup').val(parsedData.link_video_shitup);
                // $('#link_video_pullup').val(parsedData.link_video_pullup);
                // $('#link_video_shuttle').val(parsedData.link_video_shuttle);
                // Tambahkan input lain sesuai kebutuhan
                $('#editFormModal').modal('show');
              }
            });
        });


    });
</script>