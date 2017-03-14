<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FullTimeEmployee
 *
 * @author junaid.tariq
 */
class FullTimeEmployee extends BaseEmployee{
    //put your code here
    private $annualSalary;
    
    /**
     * 
     * @return double Monthly Salary of FullTimeEmployee
     */
    public function getMonthlySalary(){
        return $this->getAnnualSalary() / 12;
    }
    
    function getAnnualSalary() {
        return $this->annualSalary;
    }

    function setAnnualSalary($annualSalary) {
        $this->annualSalary = $annualSalary;
    }


}
