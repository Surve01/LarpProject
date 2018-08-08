<?php
include "../PDOConection.php";
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$json_str = file_get_contents('php://input');

$dataArray = json_decode($json_str, true);

if(sizeof($dataArray) > 1 )
{
    getSingleCreatureByID($dataArray);
}
else
{
    
}


function getSingleCreatureByID($idArray)
{
    $conn = GetPDO();
    $sql = "Select * from creature where CREATURE_ID = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $idArray['id']);
  $creature =   $stmt->execute();
    echo(json_encode($creature));
    
}