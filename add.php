<?php

   require 'function.php';

   if(isset($_POST["submit"])) {

      if (addData($_POST) >= 0) {
         echo "
            <script>
               alert('Data berhasil ditambahkan!');
               document.location.href = '_home.php';
            </script>
         ";
      } else {
         echo "
            <script>
               alert('Data gagal ditambahkan!');
               document.location.href = '_home.php';
            </script>
         ";
      }

   }

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Tambah Data Mahasiswa</title>
   <link rel="stylesheet" href="styles/secondary.css">
</head>
<body>
    <div class="socials">
      <a href="https://github.com/horuschild" target="_blank"><i class="fab fa-github"></i></a>
      <a href="https://instagram.com/horuschild" target="_blank"><i class="fab fa-instagram"></i></a>
   </div>
   <h1>Tambah Data Mahasiswa</h1>

   <form action="" method="POST">
   <table>
      <tr>
        <!-- <td><label for="NRP">NRP</label></td> -->
        <td><input type="text" placeholder="NRP" id="NRP" name="NRP" required autofocus/></td>
      </tr>
      <tr>
        <!-- <td><label for="Nama">Nama</label></td> -->
        <td><input type="text" placeholder="Nama" id="Nama" name="Nama"  required/></td>
      </tr>
      <tr>
        <!-- <td><label for="Email">Email</label></td> -->
        <td>
          <input type="text" placeholder="Email" id="Email" name="Email" required/>
        </td>
      </tr>
      <tr>
        <!-- <td><label for="Jurusan">Jurusan</label></td> -->
        <td>
          <input type="text" placeholder="Jurusan" id="Jurusan" name="Jurusan" required/>
        </td>
      </tr>
    </table>
    <button type="submit" name="submit">Kirim</button>
   </form>
</body>
</html>