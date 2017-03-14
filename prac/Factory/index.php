<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
            include 'Shape.php';
            include 'ShapeFactory.php';
            include 'Triangle.php';
            include 'Circle.php';
            
            function doStuff(Shape $shape) {
                echo $shape->draw() . "<br>";
            }


            $shapeFac = new ShapeFactory();
            $circle = $shapeFac->create("Circle");
            $triangle = $shapeFac->create("Triangle");
            doStuff($circle);
            doStuff($triangle);
            
        
        ?>
    </body>
</html>
