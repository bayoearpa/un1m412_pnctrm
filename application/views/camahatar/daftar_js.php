<script>
 // Fungsi untuk memeriksa panjang username
  function checkUsernameLength() {
    var username = document.getElementById("username").value;
    var usernameLengthMessage = document.getElementById("usernameLengthMessage");

    if (username.length >= 8) {
      usernameLengthMessage.innerHTML = "Panjang username mencukupi.";
      usernameLengthMessage.style.color = "green";
      validateForm();
    } else {
      usernameLengthMessage.innerHTML = "Username harus memiliki setidaknya 8 karakter.";
      usernameLengthMessage.style.color = "red";
      disableForm();
    }
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
</script>