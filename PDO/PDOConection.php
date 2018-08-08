<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


//foreach($db->query('SELECT * from creature')as $row)
//{
//    echo $row
//}
function GetPDO(){
    
 $dsn ='mysql:host=localhost;dbname=larp_db';
$username = 'root';
$password = 'Password1';
 
        try {
            return new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}


        
}
