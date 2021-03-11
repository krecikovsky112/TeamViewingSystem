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
            width: 160px;
            background-color: black;
            color: #fff;
            text-align: center;
            border-radius: 6px;
            padding: 5px 0;
            position: absolute;
            z-index: 1;
            bottom: 10%;
            left: 45%;
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
            font-size: 17px;
            width: 33.33%;
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

        .p1 {
            font-family: "Times New Roman", Times, serif;
        }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster&effect=shadow-multiple">
    <h2 align="center" class="w3-container w3-lobster"><b><p class="w3-xxxlarge font-effect-shadow-multiple">Raport
                potreningowy</p></b></h2>
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
                        <a href='zawodnicy.php'>
                            <button type='button'  class='w3-button w3-black w3-round-xlarge' data-dismiss='modal'>Powrót do składu drużyny</button>
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

    $Id = 0;
    if (isset($_POST['id'])) $Id = $_POST['id'];

    $sql = "SELECT * FROM zawodnicy WHERE id=$Id";

    if ($Id < 4) {
        echo "<div style='text-align: center'><img  src='images/BigGoalkeeper.png'></div>";
    } elseif ($Id == 8 || $Id == 13 || $Id == 14) {
        echo "<div style='text-align: center'><img  src='images/BigInjuredPlayer.png'></div>";
    } else {
        echo "<div style='text-align: center'><img  src='images/BigPlayer.png'></div>";
    }

    echo '<div class="row"><div class="column" >
  </div>';
    $result = $con->query($sql);
    $row = $result->fetch_assoc();
    echo "<div class='column p1' style='background-color: black;border-top-left-radius: 10px;border-top-right-radius: 10px'><b style='color: white'>" . $row["Imie"] . " " . $row["Nazwisko"] . "</b></div>";
    echo '<div class="column">
  </div>
</div>';

    echo "<div class='row'><div class='column' >
  </div><div class='column p1' style='background-color: black;'><b style='color: white'>Pozycja: " . $row["Pozycja"] . "</b></div><div class='column'>
  </div>
</div>";
    echo "<div class='row'><div class='column p1' >
  </div><div class='column p1' style='background-color: black;'><b style='color: white'>Stan zdrowia: " . $row["Stan_zdrowia"] . "</b></div><div class='column'>
  </div>
</div>";
    echo "<div class='row'><div class='column' >
  </div><div class='column p1' style='background-color: black;'><b style='color: white'>Stan wagi: " . $row["Stan_wagi"] . "</b></div><div class='column'>
  </div>
</div>";

    $sql = "SELECT * FROM analiza_potreningowa WHERE id=$Id";
    $result = $con->query($sql);
    $row = $result->fetch_assoc();

    echo "<div class='row'><div class='column' >
  </div><div class='column p1' style='background-color: black;'><b style='color: white'>POTRENINGOWE POMIARY</b></div><div class='column'>
  </div>
</div>";
    echo "<div class='row'><div class='column' >
  </div><div class='column p1' style='background-color: black;'><b style='color: white'>Tętno: " . $row["Tetno"] . "</b></div><div class='column'>
  </div>
</div>";
    echo "<div class='row'><div class='column' >
  </div><div class='column p1' style='background-color: black;'><b style='color: white'>Ciśnienie skurczowe: " . $row["Cisnienie_skurczowe"] . "</b></div><div class='column'>
  </div>
</div>";
    echo "<div class='row'><div class='column' >
  </div><div class='column p1' style='background-color: black;border-bottom-left-radius: 10px;border-bottom-right-radius: 10px'><b style='color: white'>Ciśnienie rozkurczowe: " . $row["Cisnienie_rozkurczowe"] . "</b></div><div class='column'>
  </div>
</div>";


    $con->close();
}
?>
</body>

</html>