<!Doctype HTML>
<html lang="pl">

<head>
    <meta charset="x-UTF-16LE-BOM"/>
    <title>System przeglądania drużyny</title>
    <style>
        .container {
            text-align: center;
        }

        .w3-lobster {
            font-family: "Lobster", Sans-serif;
        }

        .p1 {
            font-family: "Times New Roman", Times, serif;
            font-size: 19px;
        }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster&effect=shadow-multiple">
    <h2 align="center" class="w3-container w3-lobster"><b><p class="w3-xxxlarge font-effect-shadow-multiple">System
                przeglądania drużyny</p></b></h2>
</head>
<link rel="stylesheet" href="w3.css">
<body background="images/tło3.jpg">
<h1 style="text-align: center;font-style: italic"><b>Kategorie:</b></h1>
<br>
<form action="Dietetycy.php">
    <div class="container p1"><input type="submit" value="Dietetycy"
                                     style="width: 220px;background-color: black;color: white;font-size: 16px "/></div>
</form>
<form action="Fizjo.php">
    <div class="container p1"><input type="submit" value="Fizjoterapeuci i masażyści"
                                     style="width: 220px;background-color: black;color: white;font-size: 16px "/></div>
</form>
<form action="Obiekty.php">
    <div class="container p1"><input type="submit" value="Obiekty"
                                     style="width: 220px;background-color: black;color: white;font-size: 16px "/></div>
</form>
<form action="plany_jedzeniowe.php">
    <div class="container p1"><input type="submit" value="Plany jedzeniowe"
                                     style="width: 220px;background-color: black;color: white ;font-size: 16px"/></div>
</form>
<form action="Produkty.php">
    <div class="container p1"><input type="submit" value="Produkty"
                                     style="width: 220px;background-color: black;color: white ;font-size: 16px"/></div>
</form>
<form action="trenerzy.php">
    <div class="container p1"><input type="submit" value="Trenerzy"
                                     style="width: 220px;background-color: black;color: white ;font-size: 16px"/></div>
</form>
<form action="treningi.php">
    <div class="container p1"><input type="submit" value="Treningi"
                                     style="width: 220px;background-color: black;color: white ;font-size: 16px"/></div>
</form>
<form action="zawodnicy.php">
    <div class="container p1"><input type="submit" value="Skład"
                                     style="width: 220px;background-color: black;color: white ;font-size: 16px"/></div>
</form>
<br>
<div class="w3-content w3-section" style="max-width:500px">
    <img class="mySlides" src="images/logo.jpg" style="width:100%;height: 370px;border-radius: 10px">
    <img class="mySlides" src="images/piłka.jpg" style="width:100%;height: 370px;border-radius: 10px">
    <img class="mySlides" src="images/piłkarze.jpg" style="width:100%;height: 370px;border-radius: 10px"
    <img class="mySlides" src="images/logo.jpg" style="width:100%;height: 370px;border-radius: 10px">
    <img class="mySlides" src="images/stadion.jpg" style="width:100%;height: 370px;border-radius: 10px">
</div>
<script>
    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {
            myIndex = 1
        }
        x[myIndex - 1].style.display = "block";
        setTimeout(carousel, 2000); // Change image every 2 seconds
    }
</script>
</body>

</html>