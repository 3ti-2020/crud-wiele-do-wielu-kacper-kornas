<?php
$conn=new mysqli('remotemysql.com', 'UUonl7aZfV', 'e1PMNo8gnJ', 'UUonl7aZfV', '3306');

$del = "DELETE FROM krzyz WHERE id_krzyz=".$_POST['id_krzyz'];

mysqli_query($conn, $del);

header('Location: index2.php');

?>