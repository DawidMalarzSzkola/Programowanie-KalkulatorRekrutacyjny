<?php
   include('backend/session.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Lo-Niepolomice</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/dashboard.css">
</head>
<body>
    <div class="navbar">
        <h1>Zespół Szkół im. Ojca Świętego Jana Pawła II w Niepołomicach</h1>
    </div>
    <div class="container">
        <div class="box">
                <h3 class="logout"><a href = "backend/logout.php">Wyloguj</a></h3>
        </div>
        
        <div class="box">
            <div class="header">
                <h2>Kandydaci TI:</h2>
            </div>
            <div class="content">
            <table>
                <tr>
                    <th>Imię</th>
                    <th>Nazwisko</th>
                    <th>Liczba punktów</th>
                </tr>
                <?php 
                    $sql = "SELECT * FROM kandydaci WHERE klasa_wybor1 = 'TI' ORDER BY Punkty DESC LIMIT 6 ";
                    $values=mysqli_query($db,$sql);			
                    while($row=mysqli_fetch_row($values))
                    {
                        echo("<tr><td>$row[1]</td><td>$row[2]</td><td>$row[5]</td></tr>");
                    }	
                ?>
            </table>
                
            
            </div>  
        </div>
        <div class="box">
            <div class="header">
                <h2>Najlepsi z egzaminu:</h2>
                <h1>TO-DO</h1>
            </div>
        </div>
        <div class="box3">
        <table>
                <tr>
                    <th>Imię</th>
                    <th>Nazwisko</th>
                    <th>Wybór 1</th>
                    <th>Wybór 2</th>
                    <th>Liczba punktów</th>
                </tr>
                <?php 
                    $sql = "SELECT * FROM kandydaci ORDER BY Punkty DESC ";
                    $values=mysqli_query($db,$sql);			
                    while($row=mysqli_fetch_row($values))
                    {
                        echo("<tr><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td></tr>");
                    }	
                ?>
            </table>
        </div>
        
    </div>
</body>
</html>