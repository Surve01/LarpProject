<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//    $row = Array();
    $creature_id = "";
    $creature_desc = "";
    $creature_type = filter_input(INPUT_POST, "passVal");
    $creature_name = filter_input(INPUT_POST, "selectedCreatureName");
    $link=mysqli_connect("localhost","root","");
    mysqli_select_db($link, "larp_db");          

    // Values from creature table for 
//    $sql= "Select * from CREATURE where CREATURE_TYPE = '".$creature_type."' AND CREATURE_NAME = '".$creature_name."'";
//    $creature_data= mysqli_query($link,$sql);
//    
////    echo("Creature Type: ".$creature_type."Creature Name: ".$creature_name."\n");
//    
//    if (mysqli_num_rows($creature_data) > 0) {
//        
//        while($row= mysqli_fetch_assoc($creature_data)){
//            $creature_id = $row["CREATURE_ID"];
//            echo (json_encode($row));
//            
//        }
//        
//
//        }
//    else {echo "0 result for creature type & creature name";}
   
    
    // Archetypes from Archetype table.
    $sql= "Select ARCHYTYE_CLASS from ARCHTYPES where CREATURE_ID = '".$creature_id."'";
    $archetypes= mysqli_query($link,$sql);
    $arrQuery_1=Array();
    if (mysqli_num_rows($archetypes) > 0) {
        $i=0;
        while ($row1= mysqli_fetch_assoc($archetypes)) {
        global $i;
        $arrQuery_1[$i] =($row1["ARCHYTYE_CLASS"]); 
               $i+=1; 
               
        }
    }
    else {echo "0 result for ARCHYTYE_CLASS";}
//   echo (json_encode($arrQuery_1));
//    
//    // Data for base archetyrpe from Archetype table.
//    $sql= "Select * from ARCHTYPES where CREATURE_ID = '".$creature_id."' AND ARCHYTYE_CLASS = 'Base'";

//    $archetype_data= mysqli_query($link,$sql);
//    $arrQuery_2=Array();
//    if (mysqli_num_rows($archetype_data) > 0) {
//        $i=0;
//        while ($row2= mysqli_fetch_assoc($archetype_data)) {
//            global $p;
//           $arrQuery_2[$p]=($row2[ARCHYTYE_CLASS]);
//           $p+=1;
//        }
//    }
//    else {echo "0 result for base class";}  
//echo (json_encode($arrQuery_2));
    

