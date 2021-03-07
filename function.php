<?php

$host = "localhost";
$user = "root";
$pass = "";
$db   = "phpdasar";

$conn = mysqli_connect($host, $user, $pass, $db);

// Fungsi Query Handling
function query($query) {
   global $conn;
   $result = mysqli_query($conn, $query);
   $rows = [];
   while($row = mysqli_fetch_assoc($result)) {
      $rows[] = $row;
   }
   return $rows;
}

// Fungsi menambahkan data mahasiswa (add.php)
function addData($data) {
   global $conn;
   
   $NRP = htmlspecialchars($data["NRP"]);
   $Nama = htmlspecialchars($data["Nama"]);
   $Email = htmlspecialchars($data["Email"]);
   $Jurusan = htmlspecialchars($data["Jurusan"]);

   $query = "INSERT INTO mahasiswa VALUES ('', '$NRP', '$Nama', '$Email', '$Jurusan')";
   mysqli_query($conn, $query);
}

//Fungsi menghapus data mahasiswa (delete.php)
function deleteData($id) {
   global $conn;

   mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
   return mysqli_affected_rows($conn);
}

//Fungsi mengeubah data mahasiswa (edit.php)
function editData($data) {
   global $conn;

   $id = $data['ID'];
   $NRP = htmlspecialchars($data["NRP"]);
   $Nama = htmlspecialchars($data["Nama"]);
   $Email = htmlspecialchars($data["Email"]);
   $Jurusan = htmlspecialchars($data["Jurusan"]);

   $query = "UPDATE mahasiswa SET
               NRP = '$NRP', Nama = '$Nama', Email = '$Email', Jurusan = '$Jurusan'
               WHERE ID = '$id' ";

   mysqli_query($conn, $query);
   return mysqli_affected_rows($conn);

}

?>