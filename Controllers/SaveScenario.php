<?php include 'CURLcontroller.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
static $url = "http://localhost:8080/LARP/api/scenario/";
$data = Array();

function SaveScenario()
{
     
     global $url;
    $results = json_decode(CallAPI("POST",$url, $data=""),TRUE);  
     $resultList = array();
     
    
        
  return  $resultList;
   
}

