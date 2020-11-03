<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kacper Kornas</title>
</head>
<body>

<div class="container">
<h1>Witam<h1>

<div class="box box1">
<h3>Dodaj Książkę</h3>
          <form action="insert1.php" method="post">
              <input type="text" name="autor" >
              <input type="text" name="tytul" >
              <input type="submit" value="Zapisz">
          </form>
          </div>

<div class="box box2"></div>
<div class="box box3"></div>
<div class="box box4">

</div>
<div class="box box5"></div>

    <?php


    $conn=new mysqli('remotemysql.com', 'UUonl7aZfV', 'e1PMNo8gnJ', 'UUonl7aZfV', '3306');
    $result = $conn->query("SELECT id_krzyz, autor, tytul FROM krzyz, autorzy, tytuly WHERE krzyz.id_autor=autorzy.id_autor AND krzyz.id_tytul=tytuly.id_tytul");
            
    echo("<table class='tabelka' border=1");
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
</body>
</html>