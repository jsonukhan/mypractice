<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Filing
 *
 * @author junaid.tariq
 */
class Filing {
    //put your code here
    function __construct() {
        
    }
    
    /**
     * 
     * @param string $filename Name of file
     */
    public function readFile($filename){
        $fileResource = fopen($filename, 'r');
        $fileSize = filesize($filename);
        $fileText = fread($fileResource, $fileSize);
        fclose($fileResource);
        print $fileText;
    }
    
    /**
     * 
     * @param string $filename Name of file
     * @param string $fileText Text that is to be written in file
     */
    public function writeFile($filename, $fileText){
        $fileResource = fopen($filename, 'w');
        fwrite($fileResource, $fileText);
        fclose($fileResource);
    }
    
    /**
     * 
     * @param string $filename Name of file
     * @param string $fileText Text that is to be appended in file
     */
    public function appendFile($filename, $fileText){
        $fileResource = fopen($filename, 'a');
        fwrite($fileResource, $fileText);
        fclose($fileResource);
	$count = 1;
	$readin = file($filename);
	$readin_count = count($readin);

	foreach ($readin as $line){
		echo trim($line);
		if($count < $readin_count){
			echo ", ";
		}	
		$count++;
	}
    }

}
