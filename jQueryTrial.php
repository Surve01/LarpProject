<?php
 

            $link=mysqli_connect("localhost","root","");
            mysqli_select_db($link, "larp_db");
            $arrQuery = Array();           

        $sql= "Select CREATURE_NAME from CREATURE where CREATURE_TYPE = '".$_POST['passVal']."'";
        $result= mysqli_query($link,$sql);
        
        $resultCheck = mysqli_num_rows($result);    
//        echo $sql;
        if ($resultCheck>0) {
            $i=0;
            while($row= mysqli_fetch_assoc($result)){
                global $i;
                $arrQuery[$i] =($row["CREATURE_NAME"]); 
               $i+=1; 
            }    
//            echo $i;
            }            
            else {echo "0 result";}
            
            echo (json_encode($arrQuery));             

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

