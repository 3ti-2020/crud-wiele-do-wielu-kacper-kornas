<?php
 		$conn=new mysqli('remotemysql.com', 'UUonl7aZfV', 'e1PMNo8gnJ', 'UUonl7aZfV', '3306');
		$autor = $_POST['auts'];
        $tytul = $_POST['tyts'];
        
		
		$sql= "INSERT INTO `krzyz` (`id_autor`, `id_tytul`, `id_krzyz`) VALUES ('$autor', '$tytul', NULL)";
		mysqli_query($conn, $sql);
    mysqli_close($conn);
    header("Location:index.php");
?>