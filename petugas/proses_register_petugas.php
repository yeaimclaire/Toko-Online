<?php
	if($_POST){
		$nama_petugas=$_POST['nama_petugas'];
        $username=$_POST['username'];
		$password=$_POST['password'];
		$level=$_POST['level'];
		
		if(empty($nama_petugas)){
			echo "<script>alert('nama petugas tidak boleh kosong');location.href='register_petugas.php';</script>";
        } elseif(empty($username)){
			echo "<script>alert('username tidak boleh kosong');location.href='register_petugas.php';</script>";
		} elseif(empty($password)){
			echo "<script>alert('password tidak boleh kosong');location.href='register_petugas.php';</script>";
		} elseif(empty($level)){
			echo "<script>alert('level tidak boleh kosong');location.href='register_petugas.php';</script>";
		} else {
			include "koneksi.php";
			$insert=mysqli_query($koneksi,"insert into petugas (nama_petugas,username,password, level) value ('".$nama_petugas."','".$username."','".md5($password)."', '".$level."')");
            
			if($insert){
				echo "<script>alert('Sukses menambahkan petugas');location.href='login_petugas.php';</script>";
			} else {
				echo "<script>alert('Gagal menambahkan petugas');location.href='register_petugas.php';</script>";
			}
		}
	}
?>