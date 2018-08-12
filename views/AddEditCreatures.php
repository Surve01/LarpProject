
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel='stylesheet' href='../main.css'>
        <link rel='stylesheet' href='../CSS/LARPCSS.css'>
        <style>
            radio{
  border: solid;
  border: red;
}
        </style>
        <title>Add/Edit Creatures</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="../js/SaveEditCreature.js"></script>
    </head>
    <body background="../bgimage.jpg">
<div class="typewriter">
  <h1>Never Stop LARPING!</h1>
</div>
        <?php include 'header.php'; ?>

        <div class ="Container">


            <button class="button"  id="showAdd">Add Creature</button>
            <button class="button"  id="showEdit">Edit Creature</button>


            <div    class="addEdit" id="addCreauture">
                <form id='addForm' method ='post' name ='addForm' action="../PDO/SaveNewCreature.php">


                    <div  class="addEdit" id="editCreature">

                        <select   name ="creatureNameSelection" class="creatureInput" id="creatureNameDropDown">


                        </select>

                        <input type="hidden" id="creatureID" value=""><
                    </div>

                    <div id='addEditPair' class='LabeFieldPair'> 
                        <label>Creature Name</label>         <br>
                        <input id='addName' class='addEditText' name='addName' type='text' required>
                    </div>

                    <div id='creatureTypePair' class='LabeFieldPair'> 
                        <label>Creature Type</label>           <br>
                        <input id='addType' class='addEditText' name='addCreatureType' type='text' required>
                    </div>

                    <div  id='monsterBookPair' class='LabeFieldPair'> 
                        <label>From Monster Book</label>          <br> 
                        <input id='addMonsterBook' class='addEditText' type='text' required name='monsterBook'>
                    </div>
                    <div  id='addTerrainPair' class='LabeFieldPair'> 
                        <label>Terrain</label>           <br>
                        <input id='addTerrain' class='addEditText' type='text' required name='terrain'>
                    </div>
                    <div  id='randomMonsterPair' class='LabeFieldPair'> 
                        <label>Random Monster?</label>         
                        <div id='randomMonster' class='addEditRadio' >
                            <div class='addRadioDiv'>    <input class='addRadio' type='radio' required name='randomMonster' value='yes' ><label>Yes</label></div>
                            <div class='addRadioDiv'>     <input class='addRadio' type='radio' required name='randomMonster' value='no' > <label>No</label></div>


                        </div>
                    </div>

                    <div  id='frequencyPair' class='LabeFieldPair'> 
                      <br>    <label>Frequency</label>           <br> 
                        <input id='addFrequency' class='addEditText' type='text' required name='frequency'>
                    </div>

                    <div  id="descriptionPair" class='LabeFieldPair'> 
                        <label>Description</label>         <br>    
                        <textarea name='description' class='addEditTextarea' id='addDescription'></textarea>
                    </div>


                    <div  id="backGroundPair" class='LabeFieldPair'> 
                        <label>Background</label>           <br>
                        <textarea name='background' class='addEditTextarea' id='addbackground'></textarea>
                    </div>

                    <div  id="specialAttacks" class='LabeFieldPair'> 
                        <label>Special Attacks</label>           <br>
                        <textarea name='specialAttacks' class='addEditTextarea' id='addSpecialAttacks'></textarea>
                    </div>

                    <div  id="specialDefense" class='LabeFieldPair'> 
                        <label>Special Defense</label>           <br>
                        <textarea name='specialDefense' class='addEditTextarea' id='addspecialDefense'></textarea>
                    </div>

                    <Button id='submitAddNew' >Submit</button>
                    <button type="reset" value="Reset">Reset</button>
                </form>



            </div>


            <div class="addEdit" id="addEditArchetype">


                <br>
                <br>


            </div>


        </div>


    </body>
</html>
