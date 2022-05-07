<!DOCTYPE html>
<html>
    <head>
        <meta charset="'UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="SamFord.css"/>
        <title>Sam Allen Ford</title>
        <!--
            Miguel Gerardo
            4/18/2022
            Lab 1_Spring2022_final-1
        -->
    </head>
    <body>
    
  
        <footer>
        </footer>
        <?php
            echo "<table border =\"1\" style='border-collapse: collapse'>";

            $cars = ["<img src='Cars/BlackSUV.JPG'<h3>Black SUV</h3>",
            "<img src='Cars/BlackTruck.PNG'<h3>Black Truck</h3>",
            "<img src='Cars/BlueCar.JPG'<h3>Blue Sadan</h3>",
            "<img src='Cars/BlueMustang.PNG'<h3>Blue Mustang</h3>",
            "<img src='Cars/convertible.PNG'<h3>Convertible</h3>",
            "<img src='Cars/graySUV.PNG'<h3>Gray SUV</h3>",
            "<img src='Cars/passenger.JPG'<h3>Passenger Van</h3>",
            "<img src= 'Cars/RedHatchback.JPG'<h3>Hatchback</h3>",
            "<img src='Cars/trailer.JPG'<h3>Trailer</h3>",
            "<img src='Cars/whitemustang.PNG'<h3>White Mustang</h3>",
            "<img src='Cars/whitetruck.JPG'<h3>White Truck</h3>",
            "<img src='Cars/whiteVan.JPG'<h3>White Van</h3>"];

            for ($i = 0; $i < count($cars); $i++) {
                echo $cars[$i]."<tr> \n";
            } 
            echo "</table>";
        ?>
    </body>
</html>