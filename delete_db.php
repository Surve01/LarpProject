<?php
$page= filter_input(INPUT_POST, 'subject');
switch ($page) {
    case 1:


        break;

    default:
        break;
}
$link = mysqli_connect("localhost", "root", "");
 
    mysqli_select_db($link, "dropdown");
    if (!mysqli_select_db($link, "dropdown")) {
        echo "database not selected";
}
    if($link == false){
        die("Error:Could not connect.".mysqli_connect_error());
    }

    //$delval=filter_input(INPUT_POST, 'delete');
   // echo $_POST['delete'];
    
$canVal=filter_input(INPUT_POST, 'subject');
echo $canVal;
$sql= "Delete from players where player = '$canVal';";
//$sql= "Delete from players where player = \"".$_POST['subject']."\";";
    
   // $sql= "DELETE FROM players WHERE player =\"".$_POST['subject']."\"";
   // user_first='Akshata';";
   //$query = "Delete from players where player = \"".$_POST['delete']."\"";
    //$sql= "INSERT INTO players(player,Level,Hit_Points,Armor_Type,Armor_Worn,Weapon_Type,Damage)VALUES('$Creaturenme','$lvl','$hp','$armor','$armorWorn','$weapon','$damage')";    $query = "Delete from players where player = Monster";
    
    //$result= mysqli_query($connect, $query);
    
    if(mysqli_query($link, $sql)){
        echo "Record deleted successfully";  
      }
    else {
          echo "unsuccess";
    }   


//$delval=filter_input(INPUT_POST, 'delete');
//

//    
//    $hostname="localhost";
//    $username="root";
//    $password="";
//    $database="dropdown";
//    
//    $connect= mysqli_connect($hostname, $username, $password, $database);
//    $query= "DELETE FROM players WHERE Numbers = 1";
//   //$query = "Delete from players where player = \"".$_POST['delete']."\"";
//    $result= mysqli_query($connect, $query);
//    
//    if(mysqli_query($link, $result)){
//        echo "Record deleted successfully";  
//      }
//    else {
//          echo "unsuccess";
//    }
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>