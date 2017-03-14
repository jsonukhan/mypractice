<?php

/**
* Provides company's financial details
*/

class company
{
    private $turnOver = 100000;
    /**
    * @return integer The company's net profit
    */
    public function netProfit() {
        return $this->turnOver;
    }

}

?>

