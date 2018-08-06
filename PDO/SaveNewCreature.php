<?php
require 'PDOCOnection.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//$db= GetPDO();
getNextCreatureID();
//$stmt=$db->prepare(INSERT into creature ());

function getNextCreatureID()
{
 $db= GetPDO();
 
   $stmt= $db->query('Select CREATURE_ID from Creature');
   $ids = $stmt->fetchall(PDO::FETCH_COLUMN);
   //print_r($ids);
   
   foreach($ids as  &$row)
   {
      $row= substr($row, 1);
   //    echo $row;
       
   }
   print_r($ids);
   
  $str = max($ids);
  
$str= "C".$str;
echo $str;
  return $str;
 // print_r($ids);
}