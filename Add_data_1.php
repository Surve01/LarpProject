<?php
$CreatureName=filter_input(INPUT_POST,'lstBx');
$CreatureType=filter_input(INPUT_POST, 'alternative1');
$Level=filter_input(INPUT_POST, 'lvl');
$HitPoints= filter_input(INPUT_POST, 'hp');      
$ArmorType=filter_input(INPUT_POST, 'aType');
$ArmorWorn=filter_input(INPUT_POST, 'aWorn');
$WeaponType=filter_input(INPUT_POST, 'wType');
$Dmg=filter_input(INPUT_POST, 'dmg');
$Descr=filter_input(INPUT_POST, 'descr');
$RolePl=filter_input(INPUT_POST, 'roleP');
$SpeAttck=filter_input(INPUT_POST, 'spAtck');
$SpeDef=filter_input(INPUT_POST, 'spDef');
$CNote=filter_input(INPUT_POST, 'cNote');

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
        <style>
            	form {
			width: 500px; 	border-radius: 10px; padding: 20px;}
            	fieldset {
			border:  2px solid #333; border-radius: 10px; padding: 10px;
			margin: 15px 0px;}
                .lblBx{
                    float: left; width: 10em; margin-right: 1em; text-align: left;
                        
                }
/*            fieldset label {
			float: left; clear: left; width: 100%; padding-bottom: 1em;
			}*/
        </style>
</head>
<body>
    <form action="add_db.php" method="POST">
    <fieldset>
    <div class="lblBx">
    Creature name:<input type="label" value="<?php echo $CreatureName ?>" name="cName">
    <br>
    <br>
    Archetype  :<input type="label" value="<?php echo $CreatureType ?>" name="Archetype" >
    <br>
    <br>
    Level:<input type="label" value="<?php echo $Level ?>" name="Level">
    <br>
    <br>
    Hit Points:<input type="label" value="<?php echo $HitPoints ?>" name="Hit_Points">
    <br>
    <br>
    Armor:<input type="label" value="<?php echo $ArmorType ?>"name="Armor_Type">
    <br>
    <br>
    Armor:<input type="label" value="<?php echo $ArmorWorn ?>" name="Armor_Worn">
    <br>
    <br>
    Weapon:<input type="label" value="<?php echo $WeaponType ?>"name="Weapon_Type" >
    <br>
    <br>
    Damage:<input type="label"value="<?php echo $Dmg ?>" name="Damage" >
    </div>
    </fieldset>
      
    <p><div><textarea row="90" cols="60" placeholder=" GM comments"></textarea></div>
    <p><div><input type="label" width="200em" height="20em" value="<?php echo $Descr?>" ></div>
    <p><div><input type="label" row="90" cols="60"  value="<?php echo $RolePl ?>" ></div>
    <p><div><input type="label" row="90" cols="60"  value="<?php echo $SpeAttck ?>" ></div>
    <p><div><input type="label" row="90" cols="60"  value="<?php echo  $SpeDef?>" ></div>
    <p><div><input type="label" row="90" cols="60"  value="<?php echo $CNote ?>" ></div>
<!--    <p><div><button type="submit" name="addCreature">Add new Creature</button></div>-->
</form>
</body>
</html>
