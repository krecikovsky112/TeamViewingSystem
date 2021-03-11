<!Doctype HTML>
<html lang="pl">
<head>
    <style>
        * {
            box-sizing: border-box;
        }

        .column {
            text-align: center;
            float: left;
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
    <h2 align="center" class="w3-container w3-lobster"><b><p class="w3-xxxlarge font-effect-shadow-multiple">
                Dietetycy</p></b></h2>
    <meta charset="x-UTF-16LE-BOM"/>
</head>
<br/><br>
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
echo '<br><br><br><br>';
require_once "connect.php";

$con = new mysqli($host, $db_user, $db_password, $db_name);
if ($con->connect_errno != 0) {
    echo "Error: " . $con->connect_errno;
} else {
    $sql = "SELECT * FROM dietetycy";
    $result = $con->query($sql);

    echo '<div class="row">
  <div class="column">
    <img src="images/userfemale.jpg" style="width:40%">
  </div>
  <div class="column">
    <img src="images/usermale.png"" style="width:40%">
  </div>
  <div class="column">
    <img src="images/usermale.png"" style="width:40%">
  </div>
</div>';
    echo '<div class="row">';
    while ($row = $result->fetch_assoc()) {

        echo "<div class='column p1' style='font-size: 20px'><b style='color: #FEFEFE'><div  style='background-color: #020102;border-radius: 5px'>" . $row["Imie"] . " " . $row["Nazwisko"] . "</div></b></div>";

    }
    echo '</div>';
    $con->close();
}
?>
</body>

</html>