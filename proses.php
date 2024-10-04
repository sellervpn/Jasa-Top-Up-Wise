<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $service = $_POST["service"];
  $jumlah = isset($_POST["jumlah"]) ? $_POST["jumlah"] : "";
  $saldo = isset($_POST["saldo"]) ? $_POST["saldo"] : ""; 
  $region = isset($_POST["region"]) ? $_POST["region"] : "";
  $email_hastag = isset($_POST["email_hastag"]) ? $_POST["email_hastag"] : "";
  $email_paypal = isset($_POST["email_paypal"]) ? $_POST["email_paypal"] : ""; 

  // Validasi data
  $errors = array();
  if (empty($service)) {
    $errors[] = "Pilih layanan yang diinginkan.";
  }
  if (($service == "beli_akun" || $service == "beli_vcc") && (empty($jumlah) || $jumlah <= 0)) {
    $errors[] = "Masukkan jumlah yang valid.";
  }
  if (($service == "topup_saldo" || $service == "topup_paypal" || $service == "beli_vcc" || $service == "beli_akun") && (empty($saldo) || $saldo <= 0)) { 
    $errors[] = "Masukkan isi saldo yang valid.";
  }
  if (($service == "beli_akun" || $service == "beli_vcc") && empty($region)) { 
    $errors[] = "Pilih region."; 
  }
  if ($service == "topup_saldo" && empty($email_hastag)) {
    $errors[] = "Masukkan email/hastag.";
  }
  if ($service == "topup_paypal" && empty($email_paypal)) { 
    $errors[] = "Masukkan email PayPal."; 
  }

  // Jika tidak ada error, proses data
  if (empty($errors)) {
    // Buat link WhatsApp "Click to Chat"
    $your_whatsapp_number = "+628xxxxxxxxxx"; // Ganti dengan nomor WhatsApp Anda
    $pesan = "Halo! Saya ingin memesan layanan $service.\n";

    if (!empty($jumlah)) {
      $pesan .= "Jumlah: $jumlah\n";
    }
    if (!empty($saldo)) { 
      $pesan .= "Isi Saldo: $saldo\n"; 
    }
    if (!empty($region)) {
      $pesan .= "Region: $region\n";
    }
    if (!empty($email_hastag)) {
      $pesan .= "Email/Hastag: $email_hastag\n"; 
    }
    if (!empty($email_paypal)) { 
      $pesan .= "Email PayPal: $email_paypal"; 
    }

    $whatsapp_link = "https://wa.me/$your_whatsapp_number?text=" . urlencode($pesan);

    // Redirect ke chat WhatsApp
    header("Location: $whatsapp_link");
    exit();
  } else {
    // Tampilkan error
    foreach ($errors as $error) {
      echo "<p style='color: red;'>$error</p>";
    }
  }
}
?>