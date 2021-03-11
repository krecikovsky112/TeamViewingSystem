<!Doctype HTML>
<html lang="pl">
<head>
    <meta charset="x-UTF-16LE-BOM"/>
    <title>System przeglądania drużyny</title>
    <style>
        .w3-lobster {
            font-family: "Lobster", Sans-serif;
        }
        .p1 {
            font-family: "Times New Roman", Times, serif;
        }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster&effect=shadow-multiple">
    <h2 align="center" class="w3-container w3-lobster"><b><p class="w3-xxxlarge font-effect-shadow-multiple">Produkty do
                konkretnych planów jedzeniowych</p></b></h2>
</head>
<br/>
<link rel="stylesheet" href="w3.css">
<body background="images/tło3.jpg">
<br/><br>
<?php
echo "<script>$(document).ready(function(){ $('#myModal').modal('show'); });</script>

        <div align='left' class='modal fade' id='myModal' role='dialog'>
            <div class='modal-dialog modal-lg'>
              <div class='modal-content'>
                <div class='modal-body'>
                </div>
                    <div class='modal-footer'>
                        <a href='index.php'>
                            <button type='button' class='w3-button w3-black w3-round-xlarge' data-dismiss='modal'>Powrót do strony głównej</button>
                         </a>
                    </div>
                </div>
            </div>
        </div>";
echo '<br>';
require_once "connect.php";

$con = new mysqli($host, $db_user, $db_password, $db_name);
if ($con->connect_errno != 0) {
    echo "Error: " . $con->connect_errno;
} else {
    $sql = "SELECT * FROM produkty WHERE plan_jedzeniowy_id='1'";
    $result = $con->query($sql);

    echo "<p class='p1' align='center' style='font-size: 30px'><b>Produkty do planu jedzeniowego pierwszego dla zawodników z nadwagą</b></p>";
    echo "<table align='center' border='2' style='background-color: lightcyan;width: 40%;text-align: center;'><tbody><tr><td style='width: 40%; text-align: center'>Nazwa</td><td style='width: 25%'> Ilosc Kalorii</td><td style='width: 20%'>Indeks Glikemiczny</td><td>Gramatura</td></tr></tbody></table>";
    while ($row = $result->fetch_assoc()) {
        echo "<table align='center' border='2' style='width: 40%;background-color: lightcyan;text-align: center'><tbody><tr><td style='width: 40%;text-align: center'>" . $row["Nazwa"] . "</td><td style='width: 25%'> " . $row["Ilosckalorii"] . "</td><td style='width: 20%'>" . $row["IndeksGlikemiczny"] . "</td><td>" . $row["Gramatura"] . "</td></tr></tbody></table>";

    }

    $sql = "SELECT * FROM produkty WHERE plan_jedzeniowy_id='2'";
    $result = $con->query($sql);

    echo "<p class='p1' align='center' style='font-size: 30px'><b>Produkty do planu jedzeniowego drugiego dla zawodników z dobrą wagą</b></p>";
    echo "<table align='center' border='2' style='background-color: lightcyan;width: 40%;text-align: center;'><tbody><tr><td style='width: 40%; text-align: center'>Nazwa</td><td style='width: 25%'> Ilosc Kalorii</td><td style='width: 20%'>Indeks Glikemiczny</td><td>Gramatura</td></tr></tbody></table>";
    while ($row = $result->fetch_assoc()) {
        echo "<table align='center' border='2' style='width: 40%;background-color: lightcyan;text-align: center'><tbody><tr><td style='width: 40%;text-align: center'>" . $row["Nazwa"] . "</td><td style='width: 25%'> " . $row["Ilosckalorii"] . "</td><td style='width: 20%'>" . $row["IndeksGlikemiczny"] . "</td><td>" . $row["Gramatura"] . "</td></tr></tbody></table>";

    }

    $sql = "SELECT * FROM produkty WHERE plan_jedzeniowy_id='3'";
    $result = $con->query($sql);

    echo "<p class='p1' align='center' style='font-size: 30px'><b>Produkty do planu jedzeniowego trzeciego dla zawodników z niedowagą</b></p>";
    echo "<table align='center' border='2' style='background-color: lightcyan;width: 40%;text-align: center;'><tbody><tr><td style='width: 40%; text-align: center'>Nazwa</td><td style='width: 25%'> Ilosc Kalorii</td><td style='width: 20%'>Indeks Glikemiczny</td><td>Gramatura</td></tr></tbody></table>";
    while ($row = $result->fetch_assoc()) {
        echo "<table align='center' border='2' style='width: 40%;background-color: lightcyan;text-align: center'><tbody><tr><td style='width: 40%;text-align: center'>" . $row["Nazwa"] . "</td><td style='width: 25%'> " . $row["Ilosckalorii"] . "</td><td style='width: 20%'>" . $row["IndeksGlikemiczny"] . "</td><td>" . $row["Gramatura"] . "</td></tr></tbody></table>";

    }
    $con->close();
}
?>
</body>

</html>