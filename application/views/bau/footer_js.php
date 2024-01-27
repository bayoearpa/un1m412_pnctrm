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
function getNotifikasi_du() {
    $.ajax({
        url: "<?php echo base_url('bau/getNotifikasi_du'); ?>",
        type: "GET",
        dataType: "json",
        success: function(data) {
            updateNotifikasi_du(data);
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
        var notifikasiLink = "<?php echo base_url('bau/validasi/'); ?>" + notifikasi[i].nomor;
        $("#notifikasi-menu").append("<li><a href='" + notifikasiLink + "'><i class='fa fa-user text-red'></i> Pendaftar No. Reg: " + notifikasi[i].nomor + " | " + notifikasi[i].nama + " belum divalidasi</a></li>");
    }
}
// Fungsi untuk memperbarui tampilan notifikasi
function updateNotifikasi_du(notifikasi) {
    var jumlahNotifikasi = notifikasi.length;
    $("#jumlah-notifikasi-du").text(jumlahNotifikasi);
    $("#jumlah-notifikasi-menu-du").text(jumlahNotifikasi);

    // Hapus notifikasi yang ada sebelumnya
    $("#notifikasi-menu-du").empty();

    // Tambahkan notifikasi baru
   for (var i = 0; i < jumlahNotifikasi; i++) {
        var notifikasiLink = "<?php echo base_url('bau/daful/'); ?>" + notifikasi[i].nomor;
        $("#notifikasi-menu-du").append("<li><a href='" + notifikasiLink + "'><i class='fa fa-user text-red'></i> Pendaftar No. Reg: " + notifikasi[i].nomor + " | " + notifikasi[i].nama + " belum divalidasi</a></li>");
    }
}

// Mulai polling setiap 5 detik
setInterval(getNotifikasi, 5000);

// Mulai polling setiap 5 detik
setInterval(getNotifikasi_du, 5000);

// Panggil fungsi pertama kali
getNotifikasi();
// Panggil fungsi pertama kali
getNotifikasi_du();
</script>