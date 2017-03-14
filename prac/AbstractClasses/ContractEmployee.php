<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ContractEmployee
 *
 * @author junaid.tariq
 */
class ContractEmployee extends BaseEmployee{
    //put your code here
    private $hourlyRate;
    private $totalHours;
    
    /**
     * 
     * @return double Monthly Salary of ContractEmployee
     */
    public function getMonthlySalary(){
        return $this->getHourlyRate() * $this->getTotalHours();
    }
    
    function getHourlyRate() {
        return $this->hourlyRate;
    }

    function getTotalHours() {
        return $this->totalHours;
    }

    function setHourlyRate($hourlyRate) {
        $this->hourlyRate = $hourlyRate;
    }

    function setTotalHours($totalHours) {
        $this->totalHours = $totalHours;
    }


}
