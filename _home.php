<?php

require "function.php";
$mahasiswa = query("SELECT * FROM mahasiswa");

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <title>Halaman Admin</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
   <link rel="stylesheet" href="styles/primary.css">
</head>
<body>
   <div class="socials">
      <a href="https://github.com/horuschild" target="_blank"><i class="fab fa-github"></i></a>
      <a href="https://instagram.com/horuschild" target="_blank"><i class="fab fa-instagram"></i></a>
   </div>

   <h1 class="title">Data Mahasiswa</h1>
   
   <table cellpadding="10" cellspacing="0" text-align="center">
      <tr>
         <th>No.</th>
         <th>Option</th>
         <th>NRP</th>
         <th>Nama</th>
         <th>Email</th>
         <th>Jurusan</th>
      </tr>
      <?php $i = 1; ?>
      <?php foreach($mahasiswa as $row) : ?>
      <tr>
         <td><?= $i ?></td>
         <td>
            <a class="opt-link" href="edit.php?id=<?= $row["ID"]; ?>">edit</a> | 
            <a class="opt-link" href="delete.php?id=<?= $row["ID"]; ?>" onclick="return confirm(' yakin menghapus data <?= $row['Nama'] ?>');">delete</a>
         </td>
         <td><?= $row["NRP"]; ?></td>
         <td><?= $row["Nama"]; ?></td>
         <td><?= $row["Email"]; ?></td>
         <td><?= $row["Jurusan"]; ?></td>
      </tr>
      <?php $i++ ?>
      <?php endforeach; ?>
   </table>
   <a href="add.php"><input class="submit-btn" type="button" value="Tambah Data Mahasiswa"></a>
</body>
</html>