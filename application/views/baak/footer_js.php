<script type="text/javascript">
    // Fungsi untuk mendapatkan notifikasi dari server
function getNotifikasi() {
    $.ajax({
        url: "<?php echo base_url('baak/getNotifikasi'); ?>",
        type: "GET",
        dataType: "json",
        success: function(data) {
            updateNotifikasi(data);
        }
    });
}
function getNotifikasitf() {
    $.ajax({
        url: "<?php echo base_url('baak/getNotifikasitf'); ?>",
        type: "GET",
        dataType: "json",
        success: function(data) {
            updateNotifikasitf(data);
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
        var notifikasiLink = "<?php echo base_url('baak/prosesseleksi/'); ?>" + notifikasi[i].nomor;
        $("#notifikasi-menu").append("<li><a href='" + notifikasiLink + "'><i class='fa fa-user text-red'></i> Pendaftar No. Reg: " + notifikasi[i].nomor + " | " + notifikasi[i].nama + " belum divalidasi</a></li>");
    }
}
// Fungsi untuk memperbarui tampilan notifikasi
function updateNotifikasitf(notifikasi) {
    var jumlahNotifikasi = notifikasi.length;
    $("#jumlah-notifikasi-tf").text(jumlahNotifikasi);
    $("#jumlah-notifikasi-menu-tf").text(jumlahNotifikasi);

    // Hapus notifikasi yang ada sebelumnya
    $("#notifikasi-menu-tf").empty();

    // Tambahkan notifikasi baru
   for (var i = 0; i < jumlahNotifikasi; i++) {
        var notifikasiLink = "<?php echo base_url('baak/prosesseleksi/'); ?>" + notifikasi[i].nomor;
        $("#notifikasi-menu-tf").append("<li><a href='" + notifikasiLink + "'><i class='fa fa-user text-red'></i> Pendaftar No. Reg: " + notifikasi[i].nomor + " | " + notifikasi[i].nama + " belum divalidasi</a></li>");
    }
}


// Mulai polling setiap 5 detik
setInterval(getNotifikasi, 5000);
// Mulai polling setiap 5 detik
setInterval(getNotifikasitf, 5000);



// Panggil fungsi pertama kali
getNotifikasi();
// Panggil fungsi pertama kali
getNotifikasitf();

</script>