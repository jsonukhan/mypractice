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
            include 'MySingleton.php';
            $sing = MySingleton::getInstance();
            $sing2 = MySingleton::getInstance();
            
            if($sing === $sing2) {
                echo "true";
            }else {
                echo "false";
            }
        ?>
    </body>
</html>
