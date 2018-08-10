<?php

$CreatureName=filter_input(INPUT_POST,'lstBx');
$CreatureType=filter_input(INPUT_POST, 'alternative1');
$Descr=filter_input(INPUT_POST, 'hideDescName');
$Bckg=filter_input(INPUT_POST, 'hideBckgName');
$RolePl=filter_input(INPUT_POST, 'hideRolePName');
$SpeAttck=filter_input(INPUT_POST, 'hideSpAtkName');
$SpeDef=filter_input(INPUT_POST, 'hideSpDefName');
$CNote=filter_input(INPUT_POST, 'hideCnoteName');


//$creatureData=filter_input(INPUT_POST,"creatureData");
//if($creatureData1!=null)
//{
// echo($creatureData);
//}
 //echo (json_encode($creatureData));
//$CreatureName=$creatureData["CreatureName"];//filter_input(INPUT_POST,'CreatureName');
//$CreatureType=$creatureData["alternative1"];//filter_input(INPUT_POST, 'alternative1');
//$Descr=$creatureData["descr"];//filter_input(INPUT_POST, 'descr');
//$RolePl=$creatureData["roleP"];//filter_input(INPUT_POST, 'roleP');
//$SpeAttck=$creatureData["spAtck"];//filter_input(INPUT_POST, 'spAtck');
//$SpeDef=$creatureData["spDef"];//filter_input(INPUT_POST, 'spDef');
//$CNote=$creatureData["cNote"];//filter_input(INPUT_POST, 'cNote');-->

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
        
        <style>
            	form {
			width: 1000px; 	border-radius: 10px; padding: 20px; background-color:blanchedalmond}
            	fieldset {
			border:  2px solid #333; border-radius: 10px; padding: 10px;
			margin: 15px 0px;}

                .lblBx{
                     width: 50em; margin-right: 1em;
                     float: left;
                     font-size: 20px;
                     width: 100%;
                }
            fieldset label {
                        width:200px; 
			float: right; 
                        position: relative;
                        font-size: 20px;
                        width: 100%; 
                        padding-bottom: 1em;
			}
        </style>
</head>
<body>
    <form action="add_db.php" method="POST">
    <fieldset>
    <div class="lblBx">
        <table>
            
            <tr>
                <td><label>Creature Name:</label></td>
                <td><label><?php echo $CreatureName?></label></td>
            </tr>
            <tr>
                <td><label>Creature Type:</label></td>
                <td><label> <?php echo substr($CreatureType, 1)   ?></label></td>
            </tr>
            
            <tr>
                <td><label>Creature Description:</label></td>
                <td><label> <?php echo $Descr?> </label></td>
            </tr>
            
            <tr>
                <td><label>Creature Background:</label></td>
                <td><label> <?php echo $Bckg?> </label></td>
            </tr>
            
            <tr>
                <td><label>Creature Role Play:</label></td>
                <td><label> <?php echo $RolePl?> </label></td>
            </tr>
            
            <tr>
                <td><label>Creature Special Attack:</label></td>
                <td><label> <?php echo $SpeAttck?> </label></td>
            </tr>
            
            <tr>
                <td><label>Creature Special Defense:</label></td>
                <td><label> <?php echo $SpeDef?> </label></td>
            </tr>
            
            <tr>
                <td><label>Creature Class Notes:</label></td>
                <td><label> <?php echo $CNote?> </label></td>
            </tr>
            
        </table>
        
 
        
    </div>
    <div class="lblAns"

    </div>
    </fieldset>

 
</form>
</body>
</html>
