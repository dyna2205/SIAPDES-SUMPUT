<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.html");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard SIAPDES</title>
</head>
<body>
  <h1>Selamat datang, <?php echo htmlspecialchars($_SESSION['user']); ?>!</h1>
  <p>Ini halaman dashboard setelah login.</p>
  <a href="logout.php">Logout</a>
</body>
</html>
