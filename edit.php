<?php

   require 'function.php';

   $id = $_GET["id"];

   $mahasiswa = query("SELECT * FROM mahasiswa WHERE ID = $id")[0];



   if(isset($_POST["submit"])) {

      if (editData($_POST) >= 0) {
         echo "
            <script>
               alert('Data berhasil diubah!');
               document.location.href = 'admin.php';
            </script>
         ";
      } else {
         echo "
            <script>
               alert('Data gagal diubah!');
               document.location.href = 'admin.php';
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
   <title>Ubah Data Mahasiswa</title>
   <link rel="stylesheet" href="styles/secondary.css">
</head>
<body>
   <h1>Ubah Data Mahasiswa</h1>

   <form action="" method="POST">
   <table>
      <input type="hidden" placeholder="ID" id="ID" name="ID" value="<?= $mahasiswa["ID"] ?>" required autofocus/>
      <tr>
        <!-- <td><label for="NRP">NRP</label></td> -->
      </tr>
      <tr>
        <!-- <td><label for="NRP">NRP</label></td> -->
        <td><input type="text" placeholder="NRP" id="NRP" name="NRP" value="<?= $mahasiswa["NRP"] ?>" required autofocus/></td>
      </tr>
      <tr>
        <!-- <td><label for="Nama">Nama</label></td> -->
        <td><input type="text" placeholder="Nama" id="Nama" name="Nama" value="<?= $mahasiswa["Nama"] ?>"  required/></td>
      </tr>
      <tr>
        <!-- <td><label for="Email">Email</label></td> -->
        <td>
          <input type="text" placeholder="Email" id="Email" name="Email" value="<?= $mahasiswa["Email"] ?>" required/>
        </td>
      </tr>
      <tr>
        <!-- <td><label for="Jurusan">Jurusan</label></td> -->
        <td>
          <input type="text" placeholder="Jurusan" id="Jurusan" name="Jurusan" value="<?= $mahasiswa["Jurusan"] ?>" required/>
        </td>
      </tr>
    </table>
    <button type="submit" name="submit">Kirim</button>
   </form>
</body>
</html>