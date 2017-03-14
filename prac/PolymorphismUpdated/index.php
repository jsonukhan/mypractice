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
            include 'Animal.php';
            include 'Dog.php';
            include 'Cat.php';
            include 'Sheep.php';
	    include 'AnimalFactory.php';
            
            $af = new AnimalFactory();
            $animal = $af->create('Animal');
            $cat = $af->create('Cat');
            $dog = $af->create('Dog');
            $sheep = $af->create('Sheep');
           
            
            
            
            echo $animal->intro() . "<br>";
            echo $cat->intro() . "<br>";
            echo $dog->intro() . "<br>";
            echo $sheep->intro() . "<br>";
        ?>
    </body>
</html>
