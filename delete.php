<?php

  if(!isset($_GET['id'])){
    $id = 0;
  }

  $id = $_GET['id'];

  $konek = mysqli_connect('localhost','root','','merge');
  $sql = "DELETE FROM tbl_nama WHERE id=$id";
  $query = mysqli_query($konek,$sql);

  if($query){
    header('location:index2.php');
  }else{
    echo 'Delete gagal';
  }

 ?>
