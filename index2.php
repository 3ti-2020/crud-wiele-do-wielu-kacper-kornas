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
<h2>Kacper Kornas Gr.2</h2>
<h2>Dodaj Książkę</h2>
          <form action="insert1.php" method="post">
              <input type="text" name="autor" placeholder="Autor" class="inp" >
              <br> 
              <input type="text" name="tytul" placeholder="Tytuł" class="inp" >
              <br>
              <input type="submit" value="Zapisz" class="zapisz">
          </form>

          
        </div>

<div class="box box2">
</div>
<div class="box box4">
        <button class="btn"><a  href="index.php">Wyloguj</a></button>
        <button class="btn"><a  href="kartki.html">Salon Samochodowy</a></button>

    </div>
<div class="box box5">
<button class="btn"><a href="https://github.com/3ti-2020/crud-wiele-do-wielu-kacper-kornas">Powrót Do Github</a></button>

<form action="instert_wyp.php" method="post">
              <input type="text" name="Imie" placeholder="Imie" class="inp" >
              <br> 
              <input type="text" name="Nazwisko" placeholder="Nazwisko" class="inp" >
              <br>
              <select name="tytul">
                <option>Bolesław Prus - Lalka</option>
                <option>Stefan Żeromski - Ludzie Bezdomni</option>
                <option>Juliusz Słowacki - Lalka</option>
                <option>Henryk Sienkiewicz - W pustyni i w puszczy</option>
            </select>
              <br>
              <input type="date" name="DataW" placeholder="Data Wyp" class="inp" >
              <br>
              <input type="submit" value="Zapisz" class="Dodaj">
          </form>

</div>
<div class="box box3">
<?php
    $conn=new mysqli('remotemysql.com', 'UUonl7aZfV', 'e1PMNo8gnJ', 'UUonl7aZfV', '3306');
    $result = $conn->query("SELECT id_krzyz, autor, tytul FROM krzyz, autorzy, tytuly WHERE krzyz.id_autor=autorzy.id_autor AND krzyz.id_tytul=tytuly.id_tytul");
            
    echo("<table class='tabelka'");
    echo("<tr>
    <th>ID Książki</th>
    <th>Autor</th>
    <th>Tytuł</th>
    <th>Del</th>
    </tr>");

    while($row=$result->fetch_assoc() ){
        echo("<tr>");
        echo("<td>".$row['id_krzyz']."</td>");
        echo("<td>".$row['autor']."</td>");
        echo("<td>".$row['tytul']."</td>");
        echo("<td><form action='delete.php' method='POST'>
        <input style='display: none' value=".$row['id_krzyz']." name='id_krzyz'>
        <input class='del' type='submit' value='X'>
        </form></td>");
        echo("</tr>");
    }

    $result2 = $conn->query("SELECT * FROM wyporzyczenia");
            
    echo("<table class='tabelka'");
    echo("<tr>
    <th>Imie</th>
    <th>Nazwisko</th>
    <th>Tytuł</th>
    <th>Data Wyp</th>
    <th>Oddaj</th>
    </tr>");

    while($row=$result2->fetch_assoc() ){
        echo("<tr>");
        echo("<td>".$row['Imie']."</td>");
        echo("<td>".$row['Nazwisko']."</td>");
        echo("<td>".$row['tytul']."</td>");
        echo("<td>".$row['Data_wyp']."</td>");
        echo("<td><form action='delete.php' method='POST'>
        <input style='display: none' value=".$row['id_krzyz']." name='id_krzyz'>
        <input class='del' type='submit' value='Oddaj'>
        </form></td>");
        echo("</tr>");
    }
    ?>
</div>
</div>
</div>
</body>
<script src="script.js"></script>
</html>