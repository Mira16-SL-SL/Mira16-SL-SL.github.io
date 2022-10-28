<?php 

require 'config.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $hapus = mysqli_query($db, "DELETE FROM pembelian WHERE id='$id'");

    if($hapus){
        header("Location:menubeli.php");
    }
}