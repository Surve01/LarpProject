/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

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
                    if(document.getElementById('attr').checked) {
				document.getElementById('billinfo').style.display='block';
                                
			} else {
                                document.getElementById('billinfo').style.display='none';
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
        function changeValue()
        {
             var chx = document.getElementsByName('CreatureName');
             alert("Change value");
            for (var i=0;i<chx.length;i++){
            if(chx[i].type==='radio'){

           document.getElementById("a1_CreNme").checked=true;

            } 
            }
        }

            
            function delCreature(){
                 if (localStorage.getItem("showList"))
           {
                var retList= localStorage.getItem("showList");
                var x= document.getElementById("lstBx");
                var item_indx = x.options[x.selectedIndex].index + 1;
//                alert(item_indx);
                var splt= retList.split(",");
//                alert("Start Delete: Length " + splt.length + "item_indx: " + item_indx);
               for(var i=1;i<splt.length;i++)
                {
                  if(item_indx===i){
//                     alert(splt[item_indx]); 
                     splt.splice(i,1);
                     
//                     alert("Splt len: " + splt.length);
                    break;
                }
            }
            clrCreature();
            localStorage.setItem("showList",splt);
            recall();
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
                 document.forms['wizForm'].action='Add_data.php';
                 document.forms['wizForm'].submit();
//                 window.location="Add_data.php";  
               }
            }
