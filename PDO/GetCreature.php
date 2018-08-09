<?php
include "PDOConection.php";
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$json_str = file_get_contents('php://input');
//echo json_encode($json_str);
$dataArray = json_decode($json_str, true);


//echo sizeof($dataArray);
if(sizeof($dataArray) == 1 )
{
    getSingleCreatureByID($dataArray);
}
else
{
    
}

//print_r($dataArray);


//getSingleCreatureByID($dataArray);

function getSingleCreatureByID($idArray)
{ 
    $conn = GetPDO();
    //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM creature WHERE CREATURE_ID = ?";
    $stmt = $conn->prepare($sql);
    //echo $idArray['id'];
   $stmt->bindParam(1, $idArray['id']);
   $stmt->execute();
    try{
    $creature =   $stmt->fetch(PDO::FETCH_OBJ);}
 catch (PDOException $ex)
 {
     echo $ex->getMessage();
 }
   if($creature === false)
   {
       echo(json_encode(array('fail'=>"no such creature found")));
   }
   else
   {
        echo(json_encode($creature));
   }
   
    
}