<script type="text/javascript">
$(document).ready(function() {
	
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

// Panggil fungsi toggleGelombangForm saat halaman dimuat untuk menetapkan status awal
document.addEventListener('DOMContentLoaded', toggleGelombangForm);

});
</script>