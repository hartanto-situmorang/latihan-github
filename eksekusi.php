<?php 
    include 'database.php';
    $db = new database();

    $tindakan = $_GET['tindakan'];
        if($tindakan == "tambah"){
        	$db->input($_POST['prodi'], $_POST['nama'], $_POST['email']);
        	header("location:tampil.php");
        }else if($tindakan == "hapus"){ 	
        	$db->hapus($_GET['id']);
            header("location:tampil.php");
        }else if($tindakan == "update"){
        	$db->update($_POST['id'],$_POST['prodi'],$_POST['nama'],$_POST['email']);
        	header("location:tampil.php");
        }
?>