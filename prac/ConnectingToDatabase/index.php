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
            require 'connect.inc.php';
            echo '<br>';
            $query = 'select `emp`.`username` as `User`, `dept`.`name` as `Name` '
                    . 'from `emp` left join `dept` on `emp`.`dept` = `dept`.`id`';
            if ($query_run = mysql_query($query)) {
                while ($query_row = mysql_fetch_assoc($query_run)) {
                    $username = $query_row['User'];
                    $dpt = $query_row['Name'];

                    echo $username . ' belongs to ' . $dpt . ' department.<br>';
                }
            } else {
                echo mysql_error();
            }
        ?>
    </body>
</html>
