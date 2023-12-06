<?php
include "conect.php";

if ($_POST) {
    $name = $_POST['name'];
    $tanggal = $_POST['tanggal'];
    $kelamin = $_POST['kelamin'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    if (empty($name) || empty($username) || empty($password)) {
        echo "<script>alert('name, username, dan password tidak boleh kosong');location.href='proses.tambahL.php';</script>";
    } else {
        $insert = mysqli_query($koneksi, "INSERT INTO login (name, tanggal, kelamin, username, password, role) VALUES ('$name', '$tanggal', '$kelamin', '$username', '$password', '$role')");
        if ($insert) {
            echo "<script>alert('Sukses menambahkan siswa');location.href='logintk.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan siswa: " . mysqli_error($koneksi) . "');location.href='tambah_login.php';</script>";
        }
    }
    
}
?>