<!--Author: Luke Adam Brannock
Date: Feb. 16 2024
File: circle.php
Purpose: PHP Practice
-->
<html>
    <head>
        <title> Circle Calculation</title>
        </html>
        <body>

        <h1>Circle Calculation</title>

        <?php
        $radius = $_POST['radius'];
        $area = pi() * pow ($radius, 2);
        $circumference = 2 * pi() * $radius;

        Print("<p>A circle with a radius of $radius has an area of 
        $area and a circumference of $circumferece.</p>");

        ?>
        <p><a href="circle.html">Calculate another circle?</a></p>

</body>
</html>