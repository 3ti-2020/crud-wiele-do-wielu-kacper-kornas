<?php
$conn = mysqli_connect('remotemysql.com', 'UUonl7aZfV', 'e1PMNo8gnJ', 'UUonl7aZfV', '3306');
 
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];
$tytul = $_POST['tytul'];

$sql = "INSERT INTO wyp (imie, nazwisko, tytul, data_wyp) VALUES ('$imie', '$nazwisko', '$tytul', curdate())";
mysqli_query($conn, $sql);


mysqli_close($conn);
header("Location:index2.php");
?>