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
        include 'Person.php';
        include 'Student.php';
        // put your code here
            $person = new Person("Ali", 15);
            $person->intro();
        ?>
    </body>
</html>
