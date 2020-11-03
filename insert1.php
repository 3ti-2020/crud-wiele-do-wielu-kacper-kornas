
<?php
$conn=new mysqli('remotemysql.com', 'UUonl7aZfV', 'e1PMNo8gnJ', 'UUonl7aZfV', '3306');
    $sql = "INSERT INTO `tytuly`(`id_tytul`, `tytul`) VALUES (NULL, '".$_POST['tytul']."')";
  
    mysqli_query($conn, $sql);
    mysqli_close($conn);
    header("Location:index.php");
    
?>