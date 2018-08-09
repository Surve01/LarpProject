<?php
include 'PDOConection.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$json_str = file_get_contents('php://input');
//echo json_encode($json_str);


editCreature($json_str);

function editCreature( $json_str){
    $dataArray = json_decode($json_str, true);
     // print_r($dataArray);
    $conn = GetPDO();
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
    
      //print_r($dataArray);
      
    $sql= "UPDATE creature SET CREATURE_NAME = :creatureName, CREATURE_TYPE = :creatureType, CREATURE_MONSTER_BOOK = :creatureMonsterBook,"
            . "CREATURE_FREQUENCY = :creatureFrequency, CREATURE_RANDOM_MONSTER = :creatureRandomMonster,"
            . " CREATURE_TERRAIN = :creatureTerrain, CREATURE_DESCRIPTION = :creatureDescription,"
            . " CREATURE_BACKGROUND = :creatureBackground,CREATURE_SPECIAL_ATTACKS = :creatureSpecialAttacks, CREATURE_SPECIAL_DEFENSES = :creatureSpecialDefenses WHERE CREATURE_ID = :id";

    
    
    $stmt = $conn->prepare($sql);
    
    $stmt->bindParam(':id', $dataArray['creatureID']);
     $stmt->bindParam(':creatureName', $dataArray['creatureName']);
      $stmt->bindParam(':creatureType', $dataArray['creatureType']);
       $stmt->bindParam(':creatureMonsterBook', $dataArray['creatureMonsterBook']);
        $stmt->bindParam(':creatureFrequency', $dataArray['creatureFrequency']);
         $stmt->bindParam(':creatureRandomMonster', $dataArray['creatureRandomMonster']);
          $stmt->bindParam(':creatureTerrain', $dataArray['creatureTerrain']);
           $stmt->bindParam(':creatureDescription', $dataArray['creatureDescription']);
            $stmt->bindParam(':creatureBackground', $dataArray['creatureBackground']);
             $stmt->bindParam(':creatureSpecialAttacks', $dataArray['creatureSpecialAttacks']);
              $stmt->bindParam(':creatureSpecialDefenses', $dataArray['creatureSpecialDefenses']);
    try{
    $stmt -> execute();}
 catch (PDOException $ex){
     echo $ex->getMessage();
 }
    
    
}