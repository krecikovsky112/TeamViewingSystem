<!Doctype HTML>
<html lang="pl">
<head>
    <meta charset="x-UTF-16LE-BOM"/>
    <title>System przeglądania drużyny</title>
    <style>
        .w3-lobster {
            font-family: "Lobster", Sans-serif;
        }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster&effect=shadow-multiple">
    <h2 align="center" class="w3-container w3-lobster"><b><p class="w3-xxxlarge font-effect-shadow-multiple">Obiekty</p>
        </b></h2>
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
echo '<br>'
?>
<div class="w3-content w3-display-container">

    <div class="w3-display-container mySlides">
        <img src="images/Stadion2.jpg" style="width:100%;border-radius: 5px">
        <div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-black">
            Stadion
        </div>
    </div>

    <div class="w3-display-container mySlides">
        <img src="images/Stadion3.jpg" style="width:100%;height: 600px;border-radius: 5px">
        <div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-black">
            Stadion
        </div>
    </div>

    <div class="w3-display-container mySlides">
        <img src="images/siłownia.jpg" style="width:100%;height: 600px;border-radius: 5px">
        <div class="w3-display-bottomright w3-large w3-container w3-padding-16 w3-black">
            Siłownia
        </div>
    </div>

    <div class="w3-display-container mySlides">
        <img src="images/Gabinet.jpg" style="width:100%;height: 600px;border-radius: 5px">
        <div class="w3-display-topleft w3-large w3-container w3-padding-16 w3-black">
            Gabinet
        </div>
    </div>

    <button class="w3-button w3-display-left w3-black" onclick="plusDivs(-1)">&#10094;</button>
    <button class="w3-button w3-display-right w3-black" onclick="plusDivs(1)">&#10095;</button>

</div>
<script>
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
        showDivs(slideIndex += n);
    }

    function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        if (n > x.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = x.length
        }
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        x[slideIndex - 1].style.display = "block";
    }
</script>

</body>

</html>
