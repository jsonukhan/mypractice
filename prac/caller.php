<?php

   /**
* @author Muhammad Junaid Tariq
*/
    include 'company.php'

    $savegebytes = new company();
    $money = $savagebytes->getProfit();
    echo $money;
?>

