
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <?php  
        include "../PDO/PDOConection.php"?>
        <title>Add/Edit Creatures</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="../js/SaveEditCreature.js"></script>
    </head>
    <body>
        
        
        <div class ="Container">
            
              
            <button class="button"  id="showAdd">Add Creature</button>
            <button class="button"  id="showEdit">Edit Creature</button>
            <button class="button"  id="showArcheType">Add/Edit Archetype</button>
            
            <div    class="addEdit" id="addCreauture">1
                <form id='addForm' method ='post' name ='addForm' action="../PDO/SaveNewCreature.php">
                  
                         
            <div  class="addEdit" id="editCreature">
           
                    <select   name ="creatureNameSelection" class="creatureInput" id="creatureNameDropDown">
                     
            
                      </select>
        
                <input type="hidden" id="creatureID" value=""><
            </div>
                    
                    <div id='addEditPair' class='LabeFieldPair'> 
                      <label>Creature Name</label>         
                    <input id='addName' class='addEditText' name='addName' type='text' required>
                  </div>
                    
                  <div id='creatureTypePair' class='LabeFieldPair'> 
                      <label>Creature Type</label>         
                    <input id='addType' class='addEditText' name='addCreatureType' type='text' required>
                  </div>
                    
                   <div  id='monsterBookPair' class='LabeFieldPair'> 
                      <label>From Monster Book</label>         
                    <input id='addMonsterBook' class='addEditText' type='text' required name='monsterBook'>
                  </div>
                  <div  id='addTerrainPair' class='LabeFieldPair'> 
                      <label>Terrain</label>         
                    <input id='addTerrain' class='addEditText' type='text' required name='terrain'>
                  </div>
                    <div  id='randomMonsterPair' class='LabeFieldPair'> 
                      <label>Random Monster?</label>         
                    <div id='randomMonster' class='addEditRadio' >
                        <label>  <input type='radio' required name='randomMonster' value='yes' >Yes</label>
                        <label>  <input type='radio' required name='randomMonster' value='no' >No</label>

                        
                    </div>
                  </div>
                
                    <div  id='frequencyPair' class='LabeFieldPair'> 
                      <label>Frequency</label>         
                    <input id='addFrequency' class='addEditText' type='text' required name='frequency'>
                  </div>
                    
                    <div  id="descriptionPair" class='LabeFieldPair'> 
                      <label>Description</label>         
                      <textarea name='description' class='addEditTextarea' id='addDescription'></textarea>
                  </div>
                    
                    
                    <div  id="backGroundPair" class='LabeFieldPair'> 
                      <label>Background</label>         
                      <textarea name='background' class='addEditTextarea' id='addbackground'></textarea>
                  </div>
                    
                    <div  id="specialAttacks" class='LabeFieldPair'> 
                      <label>Special Attacks</label>         
                      <textarea name='specialAttacks' class='addEditTextarea' id='addSpecialAttacks'></textarea>
                  </div>
                    
                     <div  id="specialDefense" class='LabeFieldPair'> 
                      <label>Special Defense</label>         
                      <textarea name='specialDefense' class='addEditTextarea' id='addspecialDefense'></textarea>
                  </div>
                    
                      <Button id='submitAddNew' >Submit</button>
                <button type="reset" value="Reset">Reset</button>W
                </form>
                
                
           
            </div>
       
            
            <div class="addEdit" id="addEditArchetype">
                
                <?php
               
                $creatures = GetAllCreatures();
                print_r($creatures);
      ?>
                
                <br>
                <br>
                
                <?php
          //      $archetypes = GetCreatureArchetypes($creature[0]['creatureId']);
                
            //    echo
            //    Print_r($archetypes)
                ?>
                3</div>
             
             
        </div>
        
        <button id='prev' > im a button</button>
        
        <p id ='id1'>THIS IS THE ID
        </p>
        <?php
        // put your code here
        ?>
    </body>
</html>
