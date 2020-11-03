
<?php
$conn=new mysqli('remotemysql.com', 'UUonl7aZfV', 'e1PMNo8gnJ', 'UUonl7aZfV', '3306');


$sql1 = "INSERT INTO `autorzy`(`autor`, `id_autor`) VALUES ('".$_POST['autor']."' ,NULL)";
if ($conn->query($sql1) === TRUE) {
    $last_ida = $conn->insert_id;
  }
$sql2 = "INSERT INTO `tytuly`(`tytul`, `id_tytul`) VALUES ('".$_POST['tytul']."' ,NULL)";
if ($conn->query($sql2) === TRUE) {
    $last_idt = $conn->insert_id;
  }
$sql3 = "INSERT INTO `krzyz`(`id_autor`, `id_tytul`, `id_krzyz`) VALUES ($last_ida, $last_idt, NULL)";
$conn->query($sql3);
    

mysqli_close($conn);
    header("Location:index.php");
    
?>