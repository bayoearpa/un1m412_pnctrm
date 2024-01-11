<script type="text/javascript">
$(document).ready(function() {
	
		$("#ukuran_sepatu_lainnya").hide();
		  $("#ukuran_sepatu").change(function() {
		    if ($(this).val() == "lainnya") {
		      $("#ukuran_sepatu_lainnya").show();
		    } else {
		      $("#ukuran_sepatu_lainnya").hide();
		    }
		  });

});

</script>