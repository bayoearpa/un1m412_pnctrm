<script type="text/javascript">
	
	$(document).ready(function() {

		 $('.link_ktp').click(function(e) {
            e.preventDefault();
            var url = $(this).data('link');
            window.open(url, '_blank');
        });
         $('.link_ijasah').click(function(e) {
            e.preventDefault();
            var url = $(this).data('link');
            window.open(url, '_blank');
        });
         $('.link_rapor').click(function(e) {
            e.preventDefault();
            var url = $(this).data('link');
            window.open(url, '_blank');
        });
         $('.link_kesehatan').click(function(e) {
            e.preventDefault();
            var url = $(this).data('link');
            window.open(url, '_blank');
        });
         $('.link_supersehat').click(function(e) {
            e.preventDefault();
            var url = $(this).data('link');
            window.open(url, '_blank');
        });
         $('.link_prestasi').click(function(e) {
            e.preventDefault();
            var url = $(this).data('link');
            window.open(url, '_blank');
        });
         $('.link_video_pushup').click(function(e) {
            e.preventDefault();
            var url = $(this).data('link');
            window.open(url, '_blank');
        });
         $('.link_video_pullup').click(function(e) {
            e.preventDefault();
            var url = $(this).data('link');
            window.open(url, '_blank');
        });
         $('.link_video_situp').click(function(e) {
            e.preventDefault();
            var url = $(this).data('link');
            window.open(url, '_blank');
        });
         $('.link_video_shuttle').click(function(e) {
            e.preventDefault();
            var url = $(this).data('link');
            window.open(url, '_blank');
        });


          var dataTable = $('#example4').DataTable({
            // Konfigurasi DataTable
            "order": [[0, "desc"]]
        });

         $('#example4').on('click', '.editseleksigdr1', function() {
        var no = $(this).data('no');
        // Ambil data yang akan diedit dari server dengan AJAX
        $.ajax({
          url: '<?php echo base_url('baak/getdataeditseleksi'); ?>/' + no, // Sesuaikan dengan URL yang sesuai
          type: 'GET',
              success: function(data) {
                // Isi modal dengan data yang diambil

                console.log(data); // Cetak nilai data ke konsol
                var parsedData = JSON.parse(data);
                if (parsedData && Object.keys(parsedData).length > 0) {
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
                $('#nama').val(parsedData.nama);
                } else {
                // Jika parsedData kosong, tampilkan pesan
                alert('Belum melakukan seleksi');
                }

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