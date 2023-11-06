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

   // Fungsi untuk memeriksa panjang kata sandi
  function checkPasswordLength() {
    var password = document.getElementById("password").value;
    var repassword = document.getElementById("repassword").value;
    var passwordLengthMessage = document.getElementById("passwordLengthMessage");

    if (password.length >= 8) {
      passwordLengthMessage.innerHTML = "Panjang password mencukupi.";
      passwordLengthMessage.style.color = "green";
    } else {
      passwordLengthMessage.innerHTML = "Password harus memiliki setidaknya 8 karakter.";
      passwordLengthMessage.style.color = "red";
    }
  }

  // Menambahkan event listener untuk memeriksa panjang password saat pengguna memasukkan data
  document.getElementById("password").addEventListener("input", checkPasswordLength);
  document.getElementById("repassword").addEventListener("input", checkPasswordLength);

  // Fungsi untuk memeriksa panjang username
  function checkUsernameLength() {
    var username = document.getElementById("username").value;
    var usernameLengthMessage = document.getElementById("usernameLengthMessage");

    if (username.length >= 8) {
      usernameLengthMessage.innerHTML = "Panjang username mencukupi.";
      usernameLengthMessage.style.color = "green";
    } else {
      usernameLengthMessage.innerHTML = "Username harus memiliki setidaknya 8 karakter.";
      usernameLengthMessage.style.color = "red";
    }
  }

  // Menambahkan event listener untuk memeriksa panjang username saat pengguna memasukkan data
  document.getElementById("username").addEventListener("input", checkUsernameLength);
</script>