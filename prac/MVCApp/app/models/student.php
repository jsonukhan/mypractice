<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of student
 *
 * @author junaid.tariq
 */
class Student extends Model {
    //put your code here
    /**
     * 
     * @return Query result array
     */
    public function getStudents(){
        
        $sql = 'select * from Student';
        return $this->db->query($sql);
    }
    
    /**
     * 
     * @param int $id Integer id of Student
     * @return Returns a specific student
     */
    public function getById($id){
        
        $id = (int)$id;
        $sql = "select * from Student where id = '{$id}' Limit 1";
        $result = $this->db->query($sql);
       
        return isset($result[0]) ? $result[0] : null;
    }
    
    /**
     * 
     * @param array $data
     * @param int $id
     * @return Query result
     * Judges whether it has to add or update a student based on $id param
     */
    public function save($data, $id = null){
         echo "here1";
//        if(!isset($data->name) || !isset($data->age) ||
//                !isset($data->rollno) || !isset($data->semester) || !isset($data->email)){             
//            return false;
//        }
        echo "here";
        $id = (int)$id;
        $name = $this->db->escape($data->name);
        $age = $this->db->escape($data->age);
        $rollno = $this->db->escape($data->rollno);
        $semester = $this->db->escape($data->semester);
        $email = $this->db->escape($data->email);
         echo "here1";
        if(!$id){
           
            $sql = "insert into Student "
                    . "set name = '{$name}', "
                    . "age = '{$age}',"
                    . "rollno = '{$rollno}',"
                    . "semester = '{$semester}',"
                    . "email = '{$email}'";
                    
        }else{
            $sql = "update Student "
                    . "set name = '{$name}',"
                    . "age = '{$age}',"
                    . "rollno = '{$rollno}',"
                    . "semester = '{$semester}',"
                    . "email = '{$email}'"
                    . "where id = '{$id}'";
                   echo $sql;
        }
        return $this->db->query($sql);
    }
    
    /**
     * 
     * @param int $id
     * @return Query result
     * Deletes a specific student
     */
    public function delete($id){
        $id = (int)$id;
        $sql = "delete from Student where id = '{$id}'";
        return $this->db->query($sql);
    }
}
