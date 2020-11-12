<?php
$conn=new mysqli('remotemysql.com', 'UUonl7aZfV', 'e1PMNo8gnJ', 'UUonl7aZfV', '3306');
              
          
$Imie=$_POST['Imie'];
$Nazwisko=$_POST['Nazwisko'];
$tytul=$_POST['tytul'];
$data_wyp=$_POST['Data_wyp'];
        

$sql="INSERT INTO wyporzyczenia (id_wyp, Imie, Nazwisko, tytul, Data_wyp) VALUES (NULL ,$imie ,$nazwisko ,$tytul ,$data_wyp)";

echo("$sql");
mysqli_query($conn,$sql);
header("location:index2.php");
            ?>