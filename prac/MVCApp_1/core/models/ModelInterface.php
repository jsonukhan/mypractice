<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ModelInterface
 *
 * @author junaid.tariq
 */
interface ModelInterface {
    //put your code here
    public function listAll($table);
    public function add($table, $data);
    public function edit($table, $data, $conditions);
    public function delete($table, $conditions);
   
}
