<?php 

    if($_POST){
        $username=$_POST['username'];
        $password=$_POST['password'];
        if(empty($username)){
            echo "<script>alert('Username tidak boleh kosong');location.href='login.php';</script>";
        } elseif(empty($password)){
            echo "<script>alert('Password tidak boleh kosong');location.href='login.php';</script>";
        } else {
            include "conect.php";
            session_start();
            $login=mysqli_query($koneksi,"select * from login where username = '".$username."' and password = '".$password."'");
            $cek = mysqli_num_rows($login);
    if($cek > 0) {
    $data = mysqli_fetch_assoc($login);
    if($data['role']=="pembeli"){
        $_SESSION['username'] = $username;
        $_SESSION['role'] = "pembeli";
        header("location:index.php");

    }else if($data['role']=="admin"){
        $_SESSION['username'] = $username;
        $_SESSION['role'] = "admin";
        header("location:indexA.php");
    }
            } 
            else {
                echo "<script>alert('Username dan Password tidak benar');location.href='login.php';</script>";
            }
        }
    }