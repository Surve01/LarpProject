<?php include 'CURLcontroller.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of GetCreatureData
 *
 * @author aejan
 */
static $url = "http://localhost:8080/LARP/api/";
$data = Array();

 function GetCreatureTypes()
{
     
     global $url, $data;
    return CallAPI("GET", $url+"getCreatureData", $data );
    
}
           
?>