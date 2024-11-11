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
	        $('#id_seleksi').val(parsedData.id_seleksi);
	        $('#no').val(parsedData.no);
	        $('#efile_ktp').val(parsedData.file_ktp);
	        $('#efile_suket').val(parsedData.file_suket);
	        $('#en101').val(parsedData.n101);
	        $('#en102').val(parsedData.n102);
	        $('#en111').val(parsedData.n111);
	        $('#en112').val(parsedData.n112);
	        $('#en121').val(parsedData.n121);
	        $('#en122').val(parsedData.n122);
	        $('#efile_supersehat').val(parsedData.file_supersehat);
	       
	        // Tambahkan input lain sesuai kebutuhan
	        $('#editFormModal').modal('show');
	      }
	    });
  });



	});

</script>