<script>
 // Fungsi untuk memeriksa panjang username
  function checkUsernameLength() {
    var username = document.getElementById("username").value;
    var usernameLengthMessage = document.getElementById("usernameLengthMessage");

    if (username.length >= 8) {
      isUsernameAvailable(username);
    } else {
      usernameLengthMessage.innerHTML = "Username harus memiliki setidaknya 8 karakter.";
      usernameLengthMessage.style.color = "red";
      disableForm();
    }
  }
  // Fungsi untuk memeriksa apakah username sudah tersedia (menggunakan jQuery Ajax)
function isUsernameAvailable(username) {
  $.ajax({
    type: "POST",
    url: "<?php echo base_url() ?>cek?>", // Gantilah dengan URL yang sesuai di sisi server
    data: { username: username },
    success: function (response) {
      if (response === "available") {
        usernameLengthMessage.innerHTML = "Panjang username mencukupi dan tersedia.";
        usernameLengthMessage.style.color = "green";
        validateForm();
      } else {
        usernameLengthMessage.innerHTML = "Username sudah digunakan. Silakan pilih username lain.";
        usernameLengthMessage.style.color = "red";
        disableForm();
      }
    },
    error: function () {
      // Penanganan kesalahan jika permintaan gagal
    }
  });
}

  // Fungsi untuk memeriksa panjang password dan kesesuaian kedua password
  function checkPassword() {
    var password = document.getElementById("password").value;
    var repassword = document.getElementById("repassword").value;
    var passwordLengthMessage = document.getElementById("passwordLengthMessage");
    var passwordMatchMessage = document.getElementById("passwordMatchMessage");

    if (password.length >= 8 && repassword.length >= 8 && password === repassword) {
      passwordLengthMessage.innerHTML = "Password mencukupi dan cocok.";
      passwordLengthMessage.style.color = "green";
      passwordMatchMessage.innerHTML = "Password cocok.";
      passwordMatchMessage.style.color = "green";
      validateForm();
    } else {
      passwordLengthMessage.innerHTML = "Password harus memiliki setidaknya 8 karakter.";
      passwordLengthMessage.style.color = "red";
      passwordMatchMessage.innerHTML = "Password tidak cocok.";
      passwordMatchMessage.style.color = "red";
      disableForm();
    }
  }

  // Fungsi untuk memeriksa apakah jalur (informasi) sudah dipilih
function checkJalur() {
  var jalur = document.getElementById("jalur").value;
  var jalurMessage = document.getElementById("jalurMessage");
  var submitButton = document.getElementById("submitBtn");

  if (jalur !== "") {
    jalurMessage.innerHTML = "Jalur pendaftaran dipilih.";
    jalurMessage.style.color = "green";
    validateForm();
  } else {
    jalurMessage.innerHTML = "Pilih jalur pendaftaran.";
    jalurMessage.style.color = "red";
    disableForm();
  }
}

  // Fungsi untuk mengaktifkan tombol "Daftar"
  function validateForm() {
    var submitButton = document.getElementById("submitBtn");
    submitButton.disabled = false;
  }

  // Fungsi untuk menonaktifkan tombol "Daftar"
  function disableForm() {
    var submitButton = document.getElementById("submitBtn");
    submitButton.disabled = true;
  }

  // Menambahkan event listener untuk memeriksa panjang username saat pengguna memasukkan data
  document.getElementById("username").addEventListener("input", checkUsernameLength);

  // Menambahkan event listener untuk memeriksa panjang password dan kesesuaian kedua password saat pengguna memasukkan data
  document.getElementById("password").addEventListener("input", checkPassword);
  document.getElementById("repassword").addEventListener("input", checkPassword);

  // Menambahkan event listener untuk memeriksa apakah jalur (informasi) sudah dipilih
  document.getElementById("jalur").addEventListener("change", checkJalur);


  // Fungsi untuk mengirim data pendaftaran ke tabel tbl_catar_2024
function submitRegistration() {
  var nama = document.getElementById("nama").value;
  var username = document.getElementById("username").value;
  var password = document.getElementById("password").value;
  var jalur = document.getElementById("jalur").value;

  $.ajax({
    type: "POST",
    url: "<?php echo base_url() ?>pendaftaran", // Gantilah dengan URL yang sesuai di sisi server untuk menangani pendaftaran
    data: {
      nama: nama,
      username: username,
      password: password,
      jalur: jalur,
    },
    success: function (response) {
      if (response === "success") {
        // Pendaftaran berhasil, arahkan ke halaman login
        window.location.href = "<?php echo base_url() ?>masuk";
      } else {
        // Pendaftaran gagal, Anda dapat menampilkan pesan kesalahan jika diperlukan
        alert("Pendaftaran gagal. Silakan coba lagi.");
      }
    },
    error: function () {
      // Penanganan kesalahan jika permintaan gagal
      alert("Terjadi kesalahan saat mengirim data pendaftaran.");
    }
  });
}

// Event listener untuk mengirim data pendaftaran saat tombol "Daftar" diklik
document.getElementById("submitBtn").addEventListener("click", function (e) {
  e.preventDefault(); // Mencegah pengisian form dilanjutkan secara otomatis
  submitRegistration(); // Memanggil fungsi submitRegistration
});

</script>