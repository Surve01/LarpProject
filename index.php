
<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta name="viewport" content-type="width=device-width initial-scale=1">
	<title>Labels for Form Elements</title>
        <link rel="stylesheet" type="text/css" href="main.css">

        <script type="text/javascript" src="main.js"></script>
	    
		<script>
		function showHideShipInfo() {
                    if(document.getElementById('crName').checked) {
				document.getElementById('creNmeinfo').style.display='block';
                                
			} else {
                                document.getElementById('creNmeinfo').style.display='none';
				}
                    if(document.getElementById('crType').checked) {
				document.getElementById('creinfo').style.display='block';
                                
			} else {
                                document.getElementById('creinfo').style.display='none';
				}

			if(document.getElementById('shipsame').checked) {
				document.getElementById('shipinfo').style.display='block';
                                
			} else {
                                document.getElementById('shipinfo').style.display='none';
				}
                                
		}

    function selectFunction(wizForm){
            var selIndex=wizForm.lstBx.selectedIndex;
            var selName= wizForm.lstBx.options[selIndex].text;
 
           if (localStorage.getItem(selName))
           {
           var retObject= JSON.parse(localStorage.getItem(selName));
       
            var CTypeGrp = document.getElementsByName('alternative1');
            
            for (var i=0;i<CTypeGrp.length;i++){
                                CTypeGrp[i].checked = false;
            }
            
            CTypeGrp[retObject['alternative1']].checked = true;         

                    var CNameGrp = document.getElementsByName('CreatureName');
                    
                    for (var i=0;i<CNameGrp.length;i++){
                        CNameGrp[i].checked = false;
                    }
                    CNameGrp[retObject["CreatureName"]].checked = true;
                    
            document.getElementsByName('hp')[0].value = retObject['hp'];
        }else{  
            document.getElementsByName('hp')[0].value = 15;
        }
    }
//        function changeValue()
//        {
//             var chx = document.getElementsByName('CreatureName');
//             alert("Change value");
//            for (var i=0;i<chx.length;i++){
//            if(chx[i].type==='radio'){
//
//           document.getElementById("a1_CreNme").checked=true;
//
//            } 
//            }
//        }

            function delCreature(){
                 if (localStorage.getItem("showList"))
           {
                var retList=JSON.parse(localStorage.getItem("showList"));
                var x= document.getElementById("lstBx");
                var item_indx = x.options[x.selectedIndex].index;// + 1;
//                alert(item_indx);
//                var splt= retList;
//                alert("Start Delete: Length " + splt.length + "item_indx: " + item_indx);
//               for(var i=1;i<splt.length;i++)
//                {
//                  if(item_indx===i){
//                     alert(splt[item_indx]); 
//                    alert(retList[item_indx]);
                    localStorage.removeItem(retList[item_indx]);
                     retList.splice(item_indx,1);
//                     alert(retList);
                     
//                     alert("Splt len: " + splt.length);
//                    break;
//                }
//            }
          
//            clrCreature();
//           localStorage.removeItem("showList");
           localStorage.setItem("showList",JSON.stringify(retList));
            recall();
        }
        else{
            alert("no data found for delete");
            }
        }
    
            
            function clrCreature(){
            var x = document.getElementById("lstBx");
            x.innerHTML="";
            localStorage.clear();
            }
            function prntCreature(){
                var selInd= document.getElementById("lstBx").options.selectedIndex;
                var selOpt= document.getElementById("lstBx").options;
                var exctVal= selOpt[selInd].index;
                var exctTxt= selOpt[selInd].text;
                
               if(exctTxt === "")
               {
                   alert("Please select item from list box");
               }
               else
               {
                 var creatureData_print = JSON.parse(localStorage.getItem(exctTxt));
                 document.getElementById("hideDescName").value = creatureData_print["descr"];
                 document.getElementById("hideBckgName").value = creatureData_print["bckg"];
                 document.getElementById("hideRolePName").value = creatureData_print["roleP"];
                 document.getElementById("hideSpAtkName").value = creatureData_print["spAtck"];
                 document.getElementById("hideSpDefName").value = creatureData_print["spDef"];
                 document.getElementById("hideCnoteName").value = creatureData_print["cNote"];
                 document.getElementById("hideScenName").value = creatureData_print["scen"];
//                  alert(document.getElementById("hideCreName").value);
                  
                 document.forms['wizForm'].action="Add_data_1.php";
                 document.forms['wizForm'].submit();
//                 return creatureData_print;
                 
//                $.post("Add_data_1.php",
//                {
//                    creatureData: creatureData
//                },
//                function(data, status){
//                 document.forms['wizForm'].action='Add_data_1.php?param=creatureData';
//                 document.forms['wizForm'].submit();                   
//                });

               }
            }
		</script>
		
	
</head>
<body onload="recall()" background="bgimage.jpg">
<div class="typewriter">
  <h1>Never Stop LARPING!</h1>
</div>

      <?php // include("Controllers/GetCreatureData.php"); 
  $CreatureTypeLocal;    
  
  $link=mysqli_connect("localhost","root","");
  mysqli_select_db($link, "larp_db");
  
      mysqli_select_db($link, "larp_db");
    if (!mysqli_select_db($link, "larp_db")) {
        echo "database not selected";
      }
    if($link == false){
        die("Error:Could not connect.".mysqli_connect_error());
    }
    
     function selectCreatureType(){
        global $link;
//        echo 'This is creature type';
        $arrQuery = Array();
        $sql= "SELECT DISTINCT CREATURE_TYPE FROM CREATURE;";
        $result= mysqli_query($link,$sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck>0) {
            $i=0;
            while($row= mysqli_fetch_assoc($result)){
                global $i;
                $arrQuery[$i] =($row["CREATURE_TYPE"]); 
               $i+=1; 
            }        
//            foreach ($arrQuery as $query){
//                echo $query;
//            } 
            }
            
            else {echo "0 result";}
            return  $arrQuery;
        }
       
      ?>


  <div class="logo">
    <img src="LARP.png"/>
</div>

        <div class="topnav">
        <a class="active" href="index.php">Home</a>
        <a href='views/AddEditCreatures.php'>Add/Edit</a>
        <a href="contact.html">Contact</a>
        <a href="about.html">About</a>
</div>
    <br>
    <br>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>


</script>
    <script type="text/javascript">
        var archetypes = Array();
        var archetypeCls=Array();
        var passVal = "";
        var creatueNameArr = Array();
        var selectedCreatureName = "";
        var creatureData = JSON.parse("data");
        
        // This function populates creature names.
        function getCreatureNameJS(){
            var chx = document.getElementsByName('alternative1');
            for(var indx=0;indx<chx.length;indx++)
            {
                if(chx[indx].type==='radio'&& chx[indx].checked)
                {
                   passVal= chx[indx].value.substring(chx[indx].value.lastIndexOf("=")+1);
//                   alert(passVal);
//                    document.getElementById("hideCreName").value = passVal;
//                   alert(document.getElementById("hideCreName").value);
                }
            }
            
    $.post("jQueryTrial.php",
    {
        passVal: passVal
    },
    function(data, status){
         creatueNameArr = JSON.parse(data);
         populateCreatureNames();
    });
  
        }
</script>
<script>
    function populateAtribt(){
            var chx = document.getElementsByName('CreatureName');
            for(var indx=0;indx<chx.length;indx++)
            {
                if(chx[indx].type==='radio'&& chx[indx].checked)
                {
                   selectedCreatureName= chx[indx].value;
//                   alert(selectedCreatureName);
                   break;

                }
            }
            
            $.post("queryValues.php",
            {
                passVal: passVal,
                selectedCreatureName: selectedCreatureName
            },
            function(data, status){             
                creatureData = JSON.parse(data);
                document.getElementById("descr").value=creatureData.CREATURE_DESCRIPTION;
                document.getElementById("bckg").value=creatureData.CREATURE_BACKGROUND;
                document.getElementById("spAtck").value=creatureData.CREATURE_SPECIAL_ATTACKS;
                document.getElementById("spDef").value=creatureData.CREATURE_SPECIAL_DEFENSES;
//                populateArchetypeData();
            });

    }

</script>
<script>
        function recall(){
        if (localStorage.getItem("showList"))
       {
            var retList=JSON.parse(localStorage.getItem("showList"));
            var x= document.getElementById("lstBx");
            var splt= retList;//.split(",");
            x.options.length = 0;
           for(var i=0;i<splt.length;i++)
            {
               var option= document.createElement("option"); 
               option.text=splt[i];
               x.add(option);  
            }
        }
   }
    
</script>
<form action="index.php" name="wizForm" method="post" >
    <input type="hidden" name="hideDescName" id="hideDescName" value="">
    <input type="hidden" name="hideBckgName" id="hideBckgName" value="">
    <input type="hidden" name="hideRolePName" id="hideRolePName" value="">
    <input type="hidden" name="hideSpAtkName" id="hideSpAtkName" value="">
    <input type="hidden" name="hideSpDefName" id="hideSpDefName" value="">
    <input type="hidden" name="hideCnoteName" id="hideCnoteName" value="">
    <input type="hidden" name="hideScenName" id="hideScenName" value="">
    
        <input type="checkbox" id="crType" name="CreatureType" value="yes"
       onclick="showHideShipInfo()">
<label for="CreatureType">Click to see Creature Type</label>
        <fieldset style="display:none" id="creinfo">
	<legend>Creature Type</legend>
        <?php
             $arrCreData= selectCreatureType();
             foreach ($arrCreData as $var){ 
                 if($var!=""){
                 ?>
        
        <input  type="radio" id="CreTpe1" name="alternative1" value="=<?php echo $var ?>" onclick="getCreatureNameJS()"><?php echo $var ?><br>
        
             <?php } }?>
        
        </fieldset>


<div  class="lsBtn" style="width:310px"  >    
<input type="button" onclick="funcAdd()" name="addToScen" value="Add to Scenario">
</div>
<div class= "lsBx" >
    <select id="lstBx"  name="lstBx" size="20" style="width:310px" onchange="selectFunction(this.form)">   
</select>
</div>
<div class="prnBtn">
   <ul style="display: inline-block;vertical-align: top;">
        <li><input  type="button" name="print" value="Print" onclick="prntCreature()"></li>
<!--        <li><input  type="button" name="printall" value="PrintAll"></li>-->
        <li><input  type="button" name="delete" value="Delete Creature" onclick="delCreature()"></li>
        <li><input  type="button" name="clear" value="Clear Creatures" onclick="clrCreature()"></li>
<!--        <li><input  type="button" name="save" value="Save Scenario"></li>
        <li><input  type="button" name="recall" value="Recall Scenario"></li>-->
    </ul>
</div>
<br>
<br>
        <input type="checkbox" id="crName" name="CreChkBx" value="yes"
       onclick="showHideShipInfo()">
<label for="CreChkBx">Click to see Creature Name</label>
        <fieldset style="display:none" id="creNmeinfo">
	<legend>Creature Name</legend>
        <div id="creature_name_div"></div>

       <script>
       function populateCreatureNames(){
//           alert(creatueNameArr.length + " creature Names");
           document.getElementById("creature_name_div").innerHTML="";
           for(var i = 0; i < creatueNameArr.length; i++)
            {
                if(creatueNameArr[i] !== ""){
                document.getElementById("creature_name_div").innerHTML=document.getElementById("creature_name_div").innerHTML+
                "<br><input type='radio' id='a1_CreNme'  value='"+creatueNameArr[i]+"' name='CreatureName' onclick='populateAtribt()'  >"+creatueNameArr[i]+" ";
            }
            }
           }
 
       </script>     
</fieldset>
    <br>
<br> 


<input type="checkbox" id="shipsame" name="shipsame" value="yes"
	   onclick="showHideShipInfo()">
<label for="shipsame">Click to see Notes</label>

<fieldset style="display:none" id="shipinfo">
	<legend>Notes</legend>
	<label for="descr">Description</label> 
        <input type="text" id="descr" value="" name="descr"><br>
	<label for="bckg">Background</label> 
        <input type="text" id="bckg" name="bckg"><br>
	<label for="roleP">Role Playing</label> 
        <input type="text" id="roleP" name="roleP"><br>
	<label for="spAtck">Spe Attacks</label> 
        <input type="text" id="spAtck" name="spAtck"><br>
        <label for="spDef">Spe Defense</label> 
        <input type="text" id="spDef" name="spDef"><br>
	<label for="cNote">class Notes</label>
        <input type="text" id="cNote" name="cNote"><br>
        <label for="scen">Scenario notes </label> 
        <textarea rows="10" cols="40" id="scen" name="scen"></textarea><br>
        
</fieldset>
<br>


<!--<input type="submit" value="Next - Confirm Order">-->

</form>
    <script>
                   var tempObject={'alternative1':'','CreatureName':'',
                'descr':'','bckg':'','roleP':'','spAtck':''
                ,'spDef':'','cNote':'','scen':''};
                
                
		function funcAdd(){
//                    var recallList=JSON.parse(localStorage.getItem("showList"));
//                    recallList = JSON.parse(localStorage.getItem("showList"));
                    var recallList = [];
                    if(localStorage.getItem("showList"))
                    {
                        recallList=JSON.parse(localStorage.getItem("showList"));
                    }
                    var temp;
                    var chx = document.getElementsByName('CreatureName');
                    var chx2= document.getElementsByName('alternative1');
                    
                    var indx=0;
                    for(;indx<chx2.length;indx++){
                        if(chx2[indx].type==='radio'&& chx2[indx].checked){
                              
                    for (var i=0;i<chx.length;i++){
                    
                    if(chx[i].type==='radio' && chx[i].checked){   
                    
                    var x= document.getElementById("lstBx");
                    var option;
                    var count = 0;
                    if ((x.options.length !== 0 )){
                        var len = x.options.length;
                        
                    for(var y=0; y<len;y++){
                        if(x.options[y].text.match(chx[i].value))
                        {
                            if (x.options[y].text.lastIndexOf("_") < 0)
                            {
                                count = 0;
                            }
                            else
                            {
                                count = parseInt(x.options[y].text.substring(x.options[y].text.lastIndexOf("_") + 1),10) + 1;
                            }

                        }
                        else
                        {
//                            recallList[y] = x.options[y].text;
                        }
                    }
                }
                    var option= document.createElement("option"); 
                    
                    option.text= chx[i].value + '_'+ count;
                    x.add(option);                 
                    if(localStorage.getItem("showList"))
                    {
                        recallList[recallList.length]=option.text;
                    }
                    else
                    {
                        recallList[0]=option.text;
                    }

//                     recallList[x.options.length]=option.text;
//                     alert(recallList);

                var listText =option.text;
                var indxText=chx2[indx].value;             

             tempObject['CreatureName']=i;
             tempObject['alternative1']=indx;
             
          
            tempObject['descr']=document.getElementsByName('descr')[0].value;
            tempObject['bckg']=document.getElementsByName('bckg')[0].value;
            tempObject['roleP']=document.getElementsByName('roleP')[0].value;
            tempObject['spAtck']=document.getElementsByName('spAtck')[0].value;
            tempObject['spDef']=document.getElementsByName('spDef')[0].value;
            tempObject['cNote']=document.getElementsByName('cNote')[0].value;
            tempObject['scen']=document.getElementsByName('scen')[0].value;
           
            
            localStorage.setItem(listText,JSON.stringify(tempObject));
            
            localStorage.setItem("showList",JSON.stringify(recallList));
            
             break;   
            }
                
                    }
                        
                    
                    }
  
                 }  
                    
        }


</script>
</body>
</html>	









