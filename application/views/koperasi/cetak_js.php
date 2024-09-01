<script type="text/javascript">

	function toggleGelombangForm() {
    var jalur = document.getElementById('jalur').value;
    var gelombangForm = document.getElementById('gelombang').parentNode;

    // Jika jalur yang dipilih adalah 'gdr1', sembunyikan form gelombang
    if (jalur === 'gdr1') {
        gelombangForm.style.display = 'none';
    } else {
        gelombangForm.style.display = 'block';
    }
	}
	$(document).ready(function() {
		
	// Panggil fungsi toggleGelombangForm saat halaman dimuat untuk menetapkan status awal
	document.addEventListener('DOMContentLoaded', toggleGelombangForm);

    $('#previewForm').on('submit', function(e){
    e.preventDefault(); // Prevent the form from submitting via the browser

    $.ajax({
      type: "POST",
      url: "<?php echo base_url('koperasi/preview_cetak2'); ?>", // Change the URL to your controller method
      data: $(this).serialize(),
      success: function(response) {
        $('#results').html(response); // Load the response into the div with id 'results'
      }
    });
  });

	});
</script>