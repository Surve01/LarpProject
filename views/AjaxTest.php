<?php
 include "../Controllers/GetCreatureData.php";
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$post =  filter_input(INPUT_POST,$_POST['action'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

echo $post;
      // if(!empty($_POST['action'])){
      //  i//f($_POST['action']==['GetCreatureTypes'])
        //{
      //  print_r(GetCreatureTypes());
        //}
        //if($_POST['action']==['GetCreatureByName'])
    //    {
          //  echo $_POST['action'];
    //    }
        //else {
      //     echo 'broke';
       //}}
        //else{
           // echo 'no go';
//        }
        
 
//    
    
