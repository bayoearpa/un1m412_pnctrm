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
        var notifikasiLink = "<?php echo base_url('bau/validasi/'); ?>" + notifikasi[i].no;
        $("#notifikasi-menu").append("<li><a href='" + notifikasiLink + "'><i class='fa fa-user text-red'></i> Pendaftar No. Reg: " + notifikasi[i].no + " | " + notifikasi[i].nama + " belum divalidasi</a></li>");
    }
}

// Mulai polling setiap 5 detik
setInterval(getNotifikasi, 5000);

// Panggil fungsi pertama kali
getNotifikasi();
</script>