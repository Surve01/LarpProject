    <?php  
    $link = mysqli_connect("localhost", "root", "");
 
    mysqli_select_db($link, "dropdown");
    if (!mysqli_select_db($link, "dropdown")) {
        echo "database not selected";
}
    if($link == false){
        die("Error:Could not connect.".mysqli_connect_error());
    }
        $Creaturenme=filter_input(INPUT_POST, 'player');
        //$archetype=   mysqli_real_escape_string($link,$_REQUEST['Archetype']);
        $lvl= filter_input(INPUT_POST, 'Level');
        $hp=filter_input(INPUT_POST,'Hit_Points');
        $armor= filter_input(INPUT_POST,'Armor_Type');
        $armorWorn=filter_input(INPUT_POST,'Armor_Worn');
        $weapon=filter_input(INPUT_POST,'Weapon_Type');
        $damage=filter_input(INPUT_POST,'Damage');
                
      $sql= "INSERT INTO players(player,Level,Hit_Points,Armor_Type,Armor_Worn,Weapon_Type,Damage)VALUES('$Creaturenme','$lvl','$hp','$armor','$armorWorn','$weapon','$damage')";
      
    if(mysqli_query($link, $sql)){
        echo "Record inserted successfully";  
      }
    else {
          echo "unsuccessful";
        }
      //mysqli.close($link);
    ?>
