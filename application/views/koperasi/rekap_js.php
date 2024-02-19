<script type="text/javascript">
	
	$(document).ready(function() {

        var dataTable = $('#example4').DataTable({
            // Konfigurasi DataTable
            "order": [[0, "desc"]]
        });

         $('#example4').on('click', '.lihatukuran', function() {
        var no = $(this).data('no');
        // Ambil data yang akan diedit dari server dengan AJAX
        $.ajax({
          url: '<?php echo base_url('koperasi/getdatacatarukurpakaian'); ?>/' + no, // Sesuaikan dengan URL yang sesuai
          type: 'GET',
              success: function(data) {
                // Isi modal dengan data yang diambil

                console.log(data); // Cetak nilai data ke konsol
                var parsedData = JSON.parse(data);
                if (parsedData && Object.keys(parsedData).length > 0) {

                $('#nama').val(parsedData.nama);
                $('#no').val(parsedData.no);

                $('#jk_pakaian').val(parsedData.jk_pakaian);

                $('#ukuran_sepatu').val(parsedData.ukuran_sepatu);
                $('#ukuran_sepatu_lainnya').val(parsedData.ukuran_sepatu_lainnya);

                $('#topipet').val(parsedData.topipet);

                $('#seragam_pdl').val(parsedData.seragam_pdl);
                $('#seragam_pdl_lainnya').val(parsedData.seragam_pdl_lainnya);

                $('#training_pack').val(parsedData.training_pack);
                $('#training_pack_lainnya').val(parsedData.training_pack_lainnya);

                $('#wearpack').val(parsedData.wearpack);
                $('#wearpack_lainnya').val(parsedData.wearpack_lainnya);

                $('#kaos_or').val(parsedData.kaos_or);
                $('#kaos_or_lainnya').val(parsedData.kaos_or_lainnya);

                $('#baju_renang').val(parsedData.baju_renang);
                $('#baju_renang_lainnya').val(parsedData.baju_renang_lainnya);

                $('#dogi').val(parsedData.dogi);

                $('#pdhpdub_kemeja').val(parsedData.pdhpdub_kemeja);
                $('#pdhpdub_kemeja_lainnya').val(parsedData.pdhpdub_kemeja_lainnya);

                $('#pdhpdub_celana').val(parsedData.pdhpdub_celana);
                $('#pdhpdub_celana_lainnya').val(parsedData.pdhpdub_celana_lainnya);

                $('#jaspdpm').val(parsedData.jaspdpm);
                $('#jaspdpm_lainnya').val(parsedData.jaspdpm_lainnya);

                $('#tb').val(parsedData.tb);


                $('#editFormModal').modal('show');
                } else {
                // Jika parsedData kosong, tampilkan pesan
                alert('Belum mengisi ukur pakaian');
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
                
              }
            });
        });


        setTimeout(function() {
            document.getElementById('pesan-alert').style.display = 'none';
        }, 2000);
         
    });
</script>