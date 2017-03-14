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
            include 'BaseEmployee.php';
            include 'FullTimeEmployee.php';
            include 'ContractEmployee.php';
            $fullEmp = new FullTimeEmployee("Junaid", "Tariq");
            $fullEmp->getFullName();
            
            $contractEmp = new ContractEmployee("Contract", "Employee");
            $contractEmp->getFullName();
            
            $fullEmp->setAnnualSalary(50000.00);
            echo $fullEmp->getMonthlySalary();
            echo "<br>";
            $contractEmp->setHourlyRate(20);
            $contractEmp->setTotalHours(160);
            echo $contractEmp->getMonthlySalary();
        ?>
    </body>
</html>
