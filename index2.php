<!DOCTYPE html>
<html>
  <head>
    <title></title>
  </head>
  <body>
    <table>
      <a href="tambah.php">Tambah Data</a>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Delete</th>
      </tr>
        <?php
        if(!isset($_GET['kirim'])){
          $kirim = '';
        }else{
          $kirim = $_GET['kirim'];
        }

        $konek = mysqli_connect('localhost','root','','merge');
        if($kirim == 'Kirim!'){
          $nm = $_GET['nm'];
          $jk = $_GET['jk'];
          $sql = "INSERT INTO tbl_nama VALUES('', '$nm', '$jk')";
          mysqli_query($konek, $sql);
          header('location:index2.php');
        }else{

        $sql = "SELECT * FROM tbl_nama";
        $query = $konek -> query($sql);
        while($row = $query->fetch_array()){
          echo '<tr>';
          echo '<td>'.$row[0].'</td>';
          echo '<td>'.$row[1].'</td>';
          echo '<td>'.$row[2].'</td>';
          echo '<td><a href="delete.php?id='.$row[0].'">Delete</a></td>';
          echo '</tr>';
        }
      }
        ?>
    </table>
  </body>
</html>
