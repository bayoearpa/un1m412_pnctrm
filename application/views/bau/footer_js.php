<script type="text/javascript">
    // Fungsi untuk mendapatkan notifikasi dari server
function getNotifikasi() {
    $.ajax({
        url: "<?php echo base_url('bau/getNotifikasi'); ?>",
        type: "GET",
        dataType: "json",
        success: function(data) {
            updateNotifikasi(data);
        }
    });
}

// Fungsi untuk memperbarui tampilan notifikasi
function updateNotifikasi(notifikasi) {
    var jumlahNotifikasi = notifikasi.length;
    $("#jumlah-notifikasi").text(jumlahNotifikasi);
    $("#jumlah-notifikasi-menu").text(jumlahNotifikasi);

    // Hapus notifikasi yang ada sebelumnya
    $("#notifikasi-menu").empty();

    // Tambahkan notifikasi baru
    for (var i = 0; i < jumlahNotifikasi; i++) {
        $("#notifikasi-menu").append("<li><a href='#'><i class='fa fa-user text-red'></i> Calon mahasiswa belum divalidasi - No. Reg: " + notifikasi[i].no_reg + "</a></li>");
    }
}

// Mulai polling setiap 5 detik
setInterval(getNotifikasi, 5000);

// Panggil fungsi pertama kali
getNotifikasi();
</script>