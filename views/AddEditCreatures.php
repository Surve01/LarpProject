<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <?php include "../Controllers/GetCreatureData.php"; ?>
        <title>Add/Edit Creatures</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
              $('#editCreature').hide();
        $("#addEditArchetype").hide();
            
    $("#showAdd").click(function(){
        $("#addCreauture").show();
     $("#editCreature").hide();
       $("#addEditArchetype").hide();
    });
    $("#showEdit").click(function(){
        $("#addCreauture").hide();
        $("#editCreature").show();
        $("#addEditArchetype").hide();
    });
     $("#showArcheType").click(function(){
       $("#addCreauture").hide();
        $("#editCreature").hide();
        $("#addEditArchetype").show();
    });
});
            
            
            
         </script>
    </head>
    <body>
        
        
        <div class ="Container">
            
                <?php  $nameList = GetCreatureNames();
                          
                        //  print_r($nameList);
                          ?>
            <button class="button"  id="showAdd">Add Creature</button>
            <button class="button"  id="showEdit">Edit Creature</button>
            <button class="button"  id="showArcheType">Add/Edit Archetype</button>
            
            <div   class="addEdit" id="addCreauture">1</div>
            
            <div  class="addEdit" id="editCreature">2
                <form>
                      <select  name ="creatureNameSelection" class="creatureInput" id="creatureNameDropDown">
                          <option selected="selected">Choose one</option>
                          <?php
                          foreach($nameList as $name)
                          {
                              ?>
                          <option value="<?php echo $name; ?>"><?php echo $name; ?></option>
                                  <?php
                          }
                          
                          ?>
                          
                          ?>
            
                      </select>
                </form>
             
            </div>
            
            <div class="addEdit" id="addEditArchetype">3</div>
             
             
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
