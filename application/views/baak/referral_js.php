<script type="text/javascript">
	
	$(document).ready(function() {


          var dataTable = $('#example4').DataTable({
            // Konfigurasi DataTable
            "order": [[0, "asc"]]
        });

          // Ketika tombol Tambah Data Referral diklik
        $("#tambahref").click(function(){
          // Tampilkan modal
          $("#tambahFormModal").modal('show');
        });

         $('#example4').on('click', '.editref', function() {
        var id_ref = $(this).data('id_ref');
        // Ambil data yang akan diedit dari server dengan AJAX
        $.ajax({
          url: '<?php echo base_url('baak/getdataeditreferral'); ?>/' + id_ref, // Sesuaikan dengan URL yang sesuai
          type: 'GET',
              success: function(data) {
                // Isi modal dengan data yang diambil

                console.log(data); // Cetak nilai data ke konsol
                var parsedData = JSON.parse(data);
               $('#id_ref').val(parsedData.id_ref);
                $('#enama').val(parsedData.nama);
                $('#ealamat').val(parsedData.alamat);
                $('#eno_telp').val(parsedData.no_telp);
                $('#ereferral').val(parsedData.ref);
                $('#epassword').val(parsedData.password);
                $('#eaktif').val(parsedData.aktif);
                 $('#etipe').val(parsedData.tipe);
               
                // Tambahkan input lain sesuai kebutuhan
                $('#editFormModal').modal('show');
              }
            });
        });


    });
</script>