<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    $creature_id = "";
    $link=mysqli_connect("localhost","root","");
    mysqli_select_db($link, "larp_db");          

    // Values from creature table for 
    $sql= "Select * from CREATURE where CREATURE_TYPE = '".$_POST['passVal']."' AND CREATURE_NAME = '".$_POST['selectedCreatureName']."'";
    $result= mysqli_query($link,$sql);

    $resultCheck = mysqli_num_rows($result);   
    if ($resultCheck>0) {
        $creature_id = $result['CREATURE_ID'];
    }
    else {echo "0 result for creature type & creature name";}
    
    // Archetypes from Archetype table.
    $sql= "Select ARCHYTYE_CLASS from ARCHTYPES where CREATURE_ID = '".$creature_id."'";
    $result= mysqli_query($link,$sql);

    $resultCheck = mysqli_num_rows($result);   
    if ($resultCheck>0) {

    }
    else {echo "0 result for ARCHYTYE_CLASS";}
    
    // Data for base archetyrpe from Archetype table.
    $sql= "Select * from ARCHTYPES where CREATURE_ID = '".$creature_id."' AND ARCHYTYE_CLASS = 'Base'";
    $result= mysqli_query($link,$sql);

    $resultCheck = mysqli_num_rows($result);   
    if ($resultCheck>0) {

    }
    else {echo "0 result for base class";}
    
    

