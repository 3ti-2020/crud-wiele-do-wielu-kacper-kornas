<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Kacper Kornas</title>
</head>
<body>

<div class="container">
<div class="box box1">
<h2>Dodaj Książkę</h2>
          <form action="insert1.php" method="post">
              <input type="text" name="autor" placeholder="Autor" class="inp" >
              <br> 
              <input type="text" name="tytul" placeholder="Tytuł" class="inp" >
              <br>
              <input type="submit" value="Zapisz" class="zapisz">
          </form>
        </div>

<div class="box box2"></div>
<div class="box box4">
        <button class="btn"><a  href="index.php">Wyloguj</a></button>
        <button class="btn"><a  href="kartki.html">Salon Samochodowy</a></button>

    </div>
<div class="box box5"></div>
<div class="box box3">
<?php
    $conn=new mysqli('remotemysql.com', 'UUonl7aZfV', 'e1PMNo8gnJ', 'UUonl7aZfV', '3306');
    $result = $conn->query("SELECT id_krzyz, autor, tytul FROM krzyz, autorzy, tytuly WHERE krzyz.id_autor=autorzy.id_autor AND krzyz.id_tytul=tytuly.id_tytul");
            
    echo("<table class='tabelka'");
    echo("<tr>
    <th>ID Książki</th>
    <th>Autor</th>
    <th>Tytuł</th>
    </tr>");

    while($row=$result->fetch_assoc() ){
        echo("<tr>");
        echo("<td>".$row['id_krzyz']."</td>");
        echo("<td>".$row['autor']."</td>");
        echo("<td>".$row['tytul']."</td>");
   
        echo("</tr>");
    }
?>
</div>
</div>
</div>
</body>
</html>