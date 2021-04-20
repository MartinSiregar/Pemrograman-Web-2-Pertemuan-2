<!DOCTYPE html>
<html>

<head>
  <title>kalkulator dengan pemrograman bahasa PHP</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
  <?php
  if (isset($_POST['hitung'])) {
    $bil1 = $_POST['bil1'];
    $bil2 = $_POST['bil2'];
    $operasi = $_POST['operasi'];
    switch ($operasi) {
      case 'tambah':
        $hasil = $bil1 + $bil2;
        break;
      case 'kurang':
        $hasil = $bil1 - $bil2;
        break;
      case 'kali':
        $hasil = $bil1 * $bil2;
        break;
      case 'bagi':
        $hasil = $bil1 / $bil2;
        break;
    }
  }
  ?>
  <div align="center">
    <form method="post" action="latihan3.php">
      <span>181011400697 / Martin Siregar</span>
      <br />
      <input type="text" value="<?php echo $bil1; ?>" name="bil1" autocomplete="off" placeholder="Masukkan bilangan pertama">
      <select name="operasi">
        <option value="tambah">+</option>
        <option value="kurang">-</option>
        <option value="kali">x</option>
        <option value="bagi">/</option>
      </select>
      <input type="text" value="<?php echo $bil2; ?>" name="bil2" autocomplete="off" placeholder="Masukkan bilangan kedua">
      <input type="submit" name="hitung" value="Hitung">
    </form>
    <br />
    <?php if (isset($_POST['hitung'])) { ?>
      <input type="text" value="<?php echo $hasil; ?>" placeholder="hasil operator">
    <?php } else { ?>
      <input type="text" value="0" placeholder="hasil tidak diketahui">
    <?php } ?>
  </div>
</body>

</html>