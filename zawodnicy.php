<!Doctype HTML>
<html lang="pl">
<head>
    <style>
        .tooltip {
            position: relative;
            display: inline-block;
        }

        .tooltip .tooltiptext {
            visibility: hidden;
            width: 120px;
            background-color: black;
            color: #fff;
            text-align: center;
            border-radius: 6px;
            padding: 5px 0;
            position: absolute;
            z-index: 1;
            bottom: 10%;
            left: 50%;
            margin-left: -60px;

            /* Fade in tooltip - takes 1 second to go from 0% to 100% opac: */
            opacity: 0;
            transition: opacity 1s;
        }

        .tooltip:hover .tooltiptext {
            visibility: visible;
            opacity: 1;
        }

        * {
            box-sizing: border-box;
        }

        .column {
            text-align: center;
            float: left;
            width: 20%;
            padding: 5px;
        }

        /* Clearfix (clear floats) */
        .row::after {
            content: "";
            clear: both;
            display: table;
        }

        .w3-lobster {
            font-family: "Lobster", Sans-serif;
        }
        .column2{
            text-align: center;
            float: left;
            width: 12.5%;
            padding: 5px;
        }
        .p1 {
            font-family: "Times New Roman", Times, serif;
        }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster&effect=shadow-multiple">
    <h2 align="center" class="w3-container w3-lobster"><b><p class="w3-xxxlarge font-effect-shadow-multiple">Skład drużyny</p></b></h2>
    <meta charset="x-UTF-16LE-BOM"/>
    <title>System przeglądania drużyny</title>
</head>
<body background="images/tło3.jpg">
<link rel="stylesheet" href="w3.css">
<br><br>
<?php
echo "<script>$(document).ready(function(){ $('#myModal').modal('show'); });</script>

        <div align='left' class='modal fade' id='myModal' role='dialog'>
            <div class='modal-dialog modal-lg'>
              <div class='modal-content'>
                <div class='modal-body'>
                </div>
                    <div class='modal-footer'>
                        <a href='index.php'>
                            <button type='button'  class='w3-button w3-black w3-round-xlarge' data-dismiss='modal'>Powrót do strony głównej</button>
                         </a>
                    </div>
                </div>
            </div>
        </div><br>";
require_once "connect.php";

$con = new mysqli($host, $db_user, $db_password, $db_name);
if ($con->connect_errno != 0) {
    echo "Error: " . $con->connect_errno;
} else {

    echo '<div class="p1" align="center" style="background-color: black;color: white;font-size: 20px "><b>Bramkarze</b></div>';
    echo '<div style="background-color: #7D9C45" class="row"><div class="column" >
  </div>';
    $sql = "SELECT * FROM zawodnicy WHERE id=1 OR id=2 OR id=3";
    $result = $con->query($sql);

    while ($row = $result->fetch_assoc()) {
        echo "<div class='column tooltip'>
    <img src='images/goalkeeper.png'>
    <span class='tooltiptext'>" . $row["Imie"] . " " . $row["Nazwisko"] . "</span>
  </div>";
    }
    echo '<div class="column">
  </div>
</div>';

    echo '<div style="background-color: #7D9C45" class="row"><div class="column" >
  </div>';
    $sql = "SELECT * FROM zawodnicy WHERE id=1 OR id=2 OR id=3";
    $i = 1;
    $result = $con->query($sql);
    while ($row = $result->fetch_assoc()) {
        echo "<div class='column'>
<form action='Player.php' method='post'>
    <input type='submit' value='Raport zdrowotny' style='width: 150px;background-color: black;color: white;font-size: 12px' /></div>
    <input type='hidden' value='$i' name='id'>
</form>";

        $i++;
    }
    echo '<div class="column">
  </div>
</div>';

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////
    echo '<div class="p1" align="center" style="background-color: black;color: white;font-size: 20px "><b>Obrońcy</b></div>';
    echo '<div style="background-color: #7D9C45" class="row"><div class="column2" >
  </div>';
    $sql = "SELECT * FROM zawodnicy WHERE Pozycja LIKE 'Obrońca'";
    $result = $con->query($sql);
    while ($row = $result->fetch_assoc()) {
        echo "<div class='column2 tooltip'>
    <img src='images/player.png'>
    <span class='tooltiptext'>" . $row["Imie"] . " " . $row["Nazwisko"] . "</span>
  </div>";
    }
    echo '<div class="column2">
  </div>
</div>';


    echo '<div style="background-color: #7D9C45" class="row"><div class="column2" >
  </div>';
    $sql = "SELECT * FROM zawodnicy WHERE Pozycja LIKE 'Obrońca'";
    $result = $con->query($sql);
    while ($row = $result->fetch_assoc()) {
        echo "<div class='column2'>
<form action='Player.php' method='post'>
    <input type='submit' value='Raport zdrowotny' style='width: 150px;background-color: black;color: white;font-size: 12px' /></div>
    <input type='hidden' value='$i' name='id'>
</form>";
        $i++;
    }
    echo '<div class="column2">
  </div>
</div>';

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////
    echo '<div class="p1" align="center" style="background-color: black;color: white;font-size: 20px "><b>Pomocnicy</b></div>';
    echo '<div style="background-color: #7D9C45" class="row"><div class="column2" >
  </div>';
    $sql = "SELECT * FROM zawodnicy WHERE Pozycja LIKE 'Pomocnik'";
    $result = $con->query($sql);
    while ($row = $result->fetch_assoc()) {
        echo "<div class='column2 tooltip'>
    <img src='images/player.png'>
    <span class='tooltiptext'>" . $row["Imie"] . " " . $row["Nazwisko"] . "</span>
  </div>";

    }
    echo '<div class="column2">
  </div>
</div>';

    echo '<div style="background-color: #7D9C45" class="row"><div class="column2" >
  </div>';
    $sql = "SELECT * FROM zawodnicy WHERE Pozycja LIKE 'Pomocnik'";
    $result = $con->query($sql);
    while ($row = $result->fetch_assoc()) {
        echo "<div class='column2'>
<form action='Player.php' method='post'>
    <input type='submit' value='Raport zdrowotny' style='width: 150px;background-color: black;color: white;font-size: 12px' /></div>
    <input type='hidden' value='$i' name='id'>
</form>";
        $i++;
    }
    echo '<div class="column2">
  </div>
</div>';

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////
    echo '<div class="p1" align="center" style="background-color: black;color: white;font-size: 20px "><b>Napastnicy</b></div>';
    echo '<div style="background-color: #7D9C45" class="row"><div class="column" >
  </div>';
    $sql = "SELECT * FROM zawodnicy WHERE Pozycja LIKE 'Napastnik'";
    $result = $con->query($sql);
    while ($row = $result->fetch_assoc()) {
        echo "<div class='column tooltip'>
    <img src='images/player.png'>
    <span class='tooltiptext'>" . $row["Imie"] . " " . $row["Nazwisko"] . "</span>
  </div>";
    }
    echo '<div class="column">
  </div>
</div>';

    echo '<div style="background-color: #7D9C45" class="row"><div class="column" >
  </div>';
    $sql = "SELECT * FROM zawodnicy WHERE Pozycja LIKE 'Napastnik'";
    $result = $con->query($sql);
    while ($row = $result->fetch_assoc()) {
        echo "<div class='column'>
<form action='Player.php' method='post'>
    <input type='submit' value='Raport zdrowotny' style='width: 150px;background-color: black;color: white;font-size: 12px' /></div>
    <input type='hidden' value='$i' name='id'>
</form>";
        $i++;
    }
    echo '<div class="column">
  </div>
</div>';

    $con->close();
}
?>
</body>

</html>