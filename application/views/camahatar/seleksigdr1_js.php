<script type="text/javascript">
	$(document).ready(function() {

		$('.editseleksigdr1').click(function() {
	    var no = $(this).data('no');
	    // Ambil data yang akan diedit dari server dengan AJAX
	    $.ajax({
	      url: '<?php echo base_url('getDataGelombangDiniReguler'); ?>/' + no, // Sesuaikan dengan URL yang sesuai
	      type: 'GET',
	      success: function(data) {
	        // Isi modal dengan data yang diambil
	        console.log(data); // Cetak nilai data ke konsol
	        var parsedData = JSON.parse(data);
	        $('#id_link').val(parsedData.id_link);
	        $('#no').val(parsedData.no);
	        $('#link_ktp').val(parsedData.link_ktp);
	        $('#link_ijasah').val(parsedData.link_ijasah);
	        $('#link_rapor').val(parsedData.link_rapor);
	        $('#link_kesehatan').val(parsedData.link_kesehatan);
	        $('#link_supersehat').val(parsedData.link_supersehat);
	        $('#link_prestasi').val(parsedData.link_prestasi);
	        $('#link_video_pushup').val(parsedData.link_video_pushup);
	        $('#link_video_shitup').val(parsedData.link_video_shitup);
	        $('#link_video_pullup').val(parsedData.link_video_pullup);
	        $('#link_video_shuttle').val(parsedData.link_video_shuttle);
	        // Tambahkan input lain sesuai kebutuhan
	        $('#editFormModal').modal('show');
	      }
	    });
  });



	});

</script>