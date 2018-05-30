<?php 
  $link=mysqli_connect("localhost","root","");
  mysqli_select_db($link, "dropdown");
  
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <table border="2"  >
        <h1><caption>Monster data</caption></h1>
        <br>
        <tr>
        <th>Player</th>
        <th>Level</th>
        <th>Hit Points</th>
        <th>Armor Type</th>
        <th>Armor Worn</th>
        <th>Weapon Type</th>
        <th>Damage</th>
        </tr>
       
        <?php
        
//        if(mysqli_connect_error){
//            die("Connection failed".$link);
//        }
        
        $sql= "Select * from players where player = \"".$_POST['subject']."\"";
       
        $result= mysqli_query($link,$sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck>0) {
            while($row= mysqli_fetch_assoc($result)){
                
                echo "<tr>".
                        "<td>".$row['player']."</td>".
                        "<td>".$row['Level']."</td>".
                        "<td>".$row['Hit_Points']."</td>".
                        "<td>".$row['Armor_Type']."</td>".
                        "<td>".$row['Armor_Worn']."</td>". 
                        "<td>".$row['Weapon_Type']."</td>". 
                        "<td>".$row['Damage']."</td></tr>";
            }
        }
 else {echo "0 result";}
 $link->close();
        ?>
    </table>
</body>
</html>




