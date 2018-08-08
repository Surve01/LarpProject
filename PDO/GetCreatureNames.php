<?php
require 'PDOConection.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    $db= GetPDO();
 
   $stmt= $db->query('Select CREATURE_ID, CREATURE_NAME from Creature');
   $names = $stmt->fetchall(PDO::FETCH_ASSOC);
   
   print_r(json_encode($names));