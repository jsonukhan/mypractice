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
            include 'Cat.php';
            include 'Dog.php';
            include 'TypeGuesser.php';
            
            $type = new TypeGuesser();
            $animal = new Animal();
            $dog = new Dog();
            $cat = new Cat();
            
            $type->guess($animal);
            $type->guess($dog);
            $type->guess($cat);
        ?>
    </body>
</html>
