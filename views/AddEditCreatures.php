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
     //   $("#addCreauture").hide();
        $("#editCreature").toggle();
       // $("#addEditArchetype").hide();
    });
     $("#showArcheType").click(function(){
       $("#addCreauture").hide();
        $("#editCreature").hide();
        $("#addEditArchetype").show();
    });
    
    $('#prev').click(function(){
   // alert('alert');
       $.ajax({
        type: 'post',
        url: 'AjaxTest.php',        
        data: {"action": 'GetCreatureTypes'},
    //   dataType: 'json',
        
        success: function(response){
       
        alert(response);
          
            $('#id1').html(response[1]);
          

    },
   error: function (xhr, ajaxOptions, thrownError) {
        alert(xhr.status);
        alert(thrownError);
      //  alert(request.responsetext);
        alert(data);
   }
    });
   
    });
    
     $('#submitAddNew').click(function(){
            var creatureName = $('#addName').val();
            var creatureType = $('#addType').val();
            var creatureFrequency = $('#addFrequency').val();
            var creatureRandomMonster =$('input[name=randomMonster]:checked').val();
            var creatureTerrain = $('#addTerrain').val();
            var creatureDescription = $('#addDescription').val();
            var creatureBackground = $('#addbackground').val();
            var creatureSpecialAttacks = $('#addSpecialAttacks').val();
            var creatureSpecialDefenses = $('#addspecialDefense').val();
            
            var jsonArray = {
                "creatureName": creatureName,
                "creatureType": creatureType,
                "creatureFrequency": creatureFrequency,
                "creatureRandomMonster": creatureRandomMonster,
                "creatureTerrain": creatureTerrain,
                "creatureDescription": creatureDescription,
                "creatureBackground": creatureBackground,
                "creatureSpecialAttacks": creatureSpecialAttacks,
                "creatureSpecialDefenses": creatureSpecialDefenses              
                                
            };
            alert(JSON.stringify(jsonArray));
                     $.ajax({
                        contentType: "application/json",
        type: 'post',
        url: 'http://localhost:8080/LARP/api/creature',
        dataType: 'json',
       
    data: JSON.stringify(jsonArray),
      // data: jsonArray,
        success: function(response){
      // alert(jsonArray);
        alert('yes');
          
            $('#id1').html('yay!!!');
          

    },
   error: function (xhr, ajaxOptions, thrownError) {
        alert(xhr.status);
        alert(thrownError);
      //  alert(request.responsetext);
        alert('FAIL');
   }
     });
 
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
            
            <div    class="addEdit" id="addCreauture">1
                <form id='addForm' method ='post' name ='addForm'>
                  
                         
            <div  class="addEdit" id="editCreature">
           
                    <select  onselect=""name ="creatureNameSelection" class="creatureInput" id="creatureNameDropDown">
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
                    
                      <Button id='submitAddNew'>Submit</button>
                <button type="reset" value="Reset">Reset</button>W
                </form>
                
                
                <Button id='submitAddNew'>Submit</button>
                <button type="reset" value="Reset">Reset</button>
            </div>
       
            
            <div class="addEdit" id="addEditArchetype">
                
                <?php
                
                 $creature =                          GetCreatureByName("Gnoll");
                
                print_r($creature);
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
