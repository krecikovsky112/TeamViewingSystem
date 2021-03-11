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
    <h2 align="center" class="w3-container w3-lobster"><b><p class="w3-xxxlarge font-effect-shadow-multiple">Spis
                treningów drużyny</p></b></h2>
</head>
<link rel="stylesheet" href="w3.css">
<body background="images/tło3.jpg">

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
    $sql = "SELECT * FROM treningi WHERE id=1";
    $result = $con->query($sql);

    $row = $result->fetch_assoc();
    echo "<table class='p1' frame='box' align='center' style='background-color: black;color: white ;width: 30%;text-align: center;'><tbody><tr><td style='width: 55%; text-align: center'><b style='font-size: 20px'> Trening " . $row["Rodzaj"] . ", długość: " . $row["Dlugosc"] . " min</b></td></tr></tbody></table>";

    $sql = "SELECT * FROM obiekty WHERE id=1";
    $result = $con->query($sql);

    $row = $result->fetch_assoc();
    echo "<table class='p1' frame='vsides' align='center' style='background-color: lightcyan;width: 30%;text-align: center;'><tbody><tr><td style='width: 55%; text-align: center;font-size: 18px'> Trening na " . $row["Rodzaj"] . "ie</td></tr></tbody></table>";

    $sql = "SELECT * FROM trenerzy WHERE treningi_id=1";
    $result = $con->query($sql);

    while ($row = $result->fetch_assoc()) {
        echo "<table class='p1' frame='vsides' align='center' style='background-color: lightcyan;width: 30%;text-align: center;'><tbody><tr><td style='width: 55%; text-align: center;font-size: 18px'>Trener: " . $row["Imie"] . " " . $row["Nazwisko"] . ", " . $row["Specjalnosc"] . "</td></tr></tbody></table>";
    }

    echo '<br>';

    $sql = "SELECT * FROM treningi WHERE id=2";
    $result = $con->query($sql);

    $row = $result->fetch_assoc();
    echo "<table class='p1' frame='box' align='center' style='background-color: black;color: white ;width: 30%;text-align: center;'><tbody><tr><td style='width: 55%; text-align: center'><b style='font-size: 20px'> Trening " . $row["Rodzaj"] . ", długość: " . $row["Dlugosc"] . " min</b></td></tr></tbody></table>";

    $sql = "SELECT * FROM obiekty WHERE id=1";
    $result = $con->query($sql);

    $row = $result->fetch_assoc();
    echo "<table  class='p1' frame='vsides' align='center'  style='background-color: lightcyan;width: 30%;text-align: center;'><tbody><tr><td style='width: 55%; text-align: center;font-size: 18px'> Trening na " . $row["Rodzaj"] . "ie</td></tr></tbody></table>";

    $sql = "SELECT * FROM trenerzy WHERE treningi_id=2";
    $result = $con->query($sql);

    while ($row = $result->fetch_assoc()) {
        echo "<table class='p1' frame='vsides' align='center' style='background-color: lightcyan;width: 30%;text-align: center;'><tbody><tr><td style='width: 55%; text-align: center;font-size: 18px'>Trener: " . $row["Imie"] . " " . $row["Nazwisko"] . ", " . $row["Specjalnosc"] . "</td></tr></tbody></table>";
    }

    echo '<br>';

    $sql = "SELECT * FROM treningi WHERE id=3";
    $result = $con->query($sql);

    $row = $result->fetch_assoc();
    echo "<table class='p1' frame='box' align='center' style='background-color: black;color: white ;width: 30%;text-align: center;'><tbody><tr><td style='width: 55%; text-align: center'><b style='font-size: 20px'> Trening " . $row["Rodzaj"] . ", długość: " . $row["Dlugosc"] . " min</b></td></tr></tbody></table>";

    $sql = "SELECT * FROM obiekty WHERE id=3";
    $result = $con->query($sql);

    $row = $result->fetch_assoc();
    echo "<table class='p1' frame='vsides' align='center' style='background-color: lightcyan;width: 30%;text-align: center;'><tbody><tr><td style='width: 55%; text-align: center;font-size: 18px'> Spotkanie w " . $row["Rodzaj"] . "</td></tr></tbody></table>";

    $sql = "SELECT * FROM trenerzy WHERE treningi_id=3";
    $result = $con->query($sql);

    while ($row = $result->fetch_assoc()) {
        echo "<table class='p1' frame='vsides' align='center'  style='background-color: lightcyan;width: 30%;text-align: center;'><tbody><tr><td style='width: 55%; text-align: center;font-size: 18px'>Psycholog: " . $row["Imie"] . " " . $row["Nazwisko"] . ", " . $row["Specjalnosc"] . "</td></tr></tbody></table>";
    }

    echo '<br>';

    $sql = "SELECT * FROM treningi WHERE id=4";
    $result = $con->query($sql);

    $row = $result->fetch_assoc();
    echo "<table class='p1' frame='box' align='center' style='background-color: black;color: white ;width: 30%;text-align: center'><tbody><tr><td style='width: 55%; text-align: center'><b style='font-size: 20px'> Trening " . $row["Rodzaj"] . ", długość: " . $row["Dlugosc"] . " min</b></td></tr></tbody></table>";

    $sql = "SELECT * FROM obiekty WHERE id=2";
    $result = $con->query($sql);

    $row = $result->fetch_assoc();
    echo "<table class='p1' frame='vsides' align='center'  style='background-color: lightcyan;width: 30%;text-align: center;'><tbody><tr><td style='width: 55%; text-align: center;font-size: 18px'> Trening na " . $row["Rodzaj"] . "</td></tr></tbody></table>";

    $sql = "SELECT * FROM trenerzy WHERE treningi_id=4";
    $result = $con->query($sql);

    while ($row = $result->fetch_assoc()) {
        echo "<table class='p1' frame='vsides' align='center' style='background-color: lightcyan;width: 30%;text-align: center;'><tbody><tr><td style='width: 55%; text-align: center;font-size: 18px'>Trener: " . $row["Imie"] . " " . $row["Nazwisko"] . ", " . $row["Specjalnosc"] . "</td></tr></tbody></table>";
    }

    echo '<br>';

    $sql = "SELECT * FROM treningi WHERE id=5";
    $result = $con->query($sql);

    $row = $result->fetch_assoc();
    echo "<table class='p1' frame='box' align='center' style='background-color: black;color: white ;width: 30%;text-align: center;'><tbody><tr><td style='width: 55%; text-align: center'><b style='font-size: 20px'> Trening " . $row["Rodzaj"] . ", długość: " . $row["Dlugosc"] . " min</b></td></tr></tbody></table>";

    $sql = "SELECT * FROM obiekty WHERE id=1";
    $result = $con->query($sql);

    $row = $result->fetch_assoc();
    echo "<table class='p1' frame='vsides' align='center' style='background-color: lightcyan;width: 30%;text-align: center;'><tbody><tr><td style='width: 55%; text-align: center;font-size: 18px'> Trening na " . $row["Rodzaj"] . "ie</td></tr></tbody></table>";

    $sql = "SELECT * FROM trenerzy WHERE treningi_id=5";
    $result = $con->query($sql);

    while ($row = $result->fetch_assoc()) {
        echo "<table class='p1' frame='vsides' align='center' style='background-color: lightcyan;width: 30%;text-align: center;'><tbody><tr><td style='width: 55%; text-align: center;font-size: 18px'>Trener: " . $row["Imie"] . " " . $row["Nazwisko"] . ", " . $row["Specjalnosc"] . "</td></tr></tbody></table>";
    }

    $con->close();

}

?>
</body>

</html>