
<?php
require 'PDOCOnection.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$json_str = file_get_contents('php://input');



saveNewCreature($json_str);

function saveNewCreature( $json_str){
    $dataArray = json_decode($json_str, true);
      // print_r($dataArray);
    $conn = GetPDO();
    $id = getNextCreatureID();
    $dataArray['id']=$id;
    
      //print_r($dataArray);
      
    $sql= "INSERT INTO creature VALUES"
            . "(:id, :creatureName, :creatureType, :creatureMonsterBook, :creatureFrequency, :creatureRandomMonster,"
            . " :creatureTerrain, :creatureDescription, :creatureBackground, :creatureSpecialAttacks, :creatureSpecialDefenses"
            . ")";

    
    
    $stmt = $conn->prepare($sql);
    
    $stmt->bindParam(':id', $dataArray['id']);
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
function getNextCreatureID()
{
 $db= GetPDO();
 
   $stmt= $db->query('Select CREATURE_ID from Creature');
   $ids = $stmt->fetchall(PDO::FETCH_COLUMN);

   
   foreach($ids as  &$row)
   {
      $row= substr($row, 1);

       
   }

   
  $str = max($ids)+1;
  if($str < 1000)
  {
      return 1000;
  }
  else
  {
return "C".$str;
  }
}