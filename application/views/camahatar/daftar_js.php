<script>
  // Fungsi untuk memeriksa apakah kedua password cocok
  function checkPasswordMatch() {
    var password = document.getElementById("password").value;
    var repassword = document.getElementById("repassword").value;
    var message = document.getElementById("passwordMatchMessage");

    if (password === repassword) {
      message.innerHTML = "Password cocok!";
      message.style.color = "green";
    } else {
      message.innerHTML = "Password tidak cocok.";
      message.style.color = "red";
    }
  }

  // Menambahkan event listener untuk memeriksa kecocokan password saat pengguna memasukkan data
  document.getElementById("password").addEventListener("input", checkPasswordMatch);
  document.getElementById("repassword").addEventListener("input", checkPasswordMatch);
</script>