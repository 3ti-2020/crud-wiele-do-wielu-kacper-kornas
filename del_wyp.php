<?php
$conn=new mysqli('remotemysql.com', 'UUonl7aZfV', 'e1PMNo8gnJ', 'UUonl7aZfV', '3306');

$del = "DELETE FROM wyp WHERE id_wyp=".$_POST['id_wyp'];

mysqli_query($conn, $del);

header('Location: index2.php');

?>