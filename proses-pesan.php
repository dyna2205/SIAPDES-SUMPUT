<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = htmlspecialchars($_POST['nama']);
    $email = htmlspecialchars($_POST['email']);
    $pesan = htmlspecialchars($_POST['pesan']);

    // Simpan ke file, database, atau kirim email (sesuai kebutuhan)
    $file = fopen("pesan.txt", "a");
    fwrite($file, "Nama: $nama\nEmail: $email\nPesan: $pesan\n---\n");
    fclose($file);

    // Redirect ke halaman konfirmasi
    header("Location: bantuankonfirm.html");
    exit;
}
?>
