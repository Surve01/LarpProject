<?php
$link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link, "dropdown");
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script type="text/javascript">
            function addClick(){
                window.location="Add_data.php";
            }
            
            function deleteClick(){
                document.forms['larp'].action='delete_db.php';
                 document.forms['larp'].submit();
            }
   
        </script>
        

        
        

    </head>
    <body>
        
        <form name="larp" action="display_results.php" method="POST">
            
            <select name="subject" id="sub"><option value="Select">Select</option>
        <?php
            $result = mysqli_query($link,"select * from players order by player asc");
            while($row= mysqli_fetch_array($result))
            {
                ?>
    <option><?php echo $row["player"]; ?></option>
        <?php
            }
        ?>
    </select>

            <p>
            Click Show data :
            <input type="submit"  value="Show">
            <br><hr>
            </p>
            
            <p>
            Click Delete data:
            <input type="submit" value="Delete" name="delete" onclick="deleteClick()"/>  
            <br><hr>
            </p>
            <?php 
            
            ?>
    </form>
            Click Add data :
            <input type="button"  value="Add Data" onclick="addClick()">
            <br><hr>

    </body>
</html>
