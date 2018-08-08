/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function () {
    $('#editCreature').hide();
    $("#addEditArchetype").hide();

    $("#showAdd").click(function () {
        $("#addCreauture").show();
        $("#editCreature").hide();
        $("#addEditArchetype").hide();
    });
    $("#showEdit").click(function () {
        //   $("#addCreauture").hide();
        $("#editCreature").toggle();
        $.ajax({
            contentType: "application/json",
            type: 'get',
            url: '../PDO/GetCreatureNames.php',
            dataType: 'json',

            //     data: JSON.stringify(jsonArray),

            success: function (response) {

                // alert(JSON.stringify(response));
                $editSelect = $("select[id='creatureNameDropDown']");
                var len = response.length;
                $editSelect.append("<option>Choose One</option>");
                for (var i = 0; i < len; i++) {
                    var name = response[i].CREATURE_NAME;
                    var id = response[i].CREATURE_ID;
                    $editSelect.append("<option value='" + id + "'>" + name + "</option>");

                }

            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(xhr.status);
                alert(thrownError);
                // alert(request.responsetext);
                alert('FAIL');
            }
        });

        return false;


        // $("#addEditArchetype").hide();
    });
    $("#showArcheType").click(function () {
        $("#addCreauture").hide();
        $("#editCreature").hide();
        $("#addEditArchetype").show();
    });


    $('#submitAddNew').click(function () {
        var creatureName = $('#addName').val();
        var creatureType = $('#addType').val();
        var creatureMonsterBook = $('#addMonsterBook').val();
        var creatureFrequency = $('#addFrequency').val();
        var creatureRandomMonster = $('input[name=randomMonster]:checked').val();
        var creatureTerrain = $('#addTerrain').val();
        var creatureDescription = $('#addDescription').val();
        var creatureBackground = $('#addbackground').val();
        var creatureSpecialAttacks = $('#addSpecialAttacks').val();
        var creatureSpecialDefenses = $('#addspecialDefense').val();

        var jsonArray = {
            "creatureName": creatureName,
            "creatureType": creatureType,
            "creatureMonsterBook": creatureMonsterBook,
            "creatureFrequency": creatureFrequency,
            "creatureRandomMonster": creatureRandomMonster,
            "creatureTerrain": creatureTerrain,
            "creatureDescription": creatureDescription,
            "creatureBackground": creatureBackground,
            "creatureSpecialAttacks": creatureSpecialAttacks,
            "creatureSpecialDefenses": creatureSpecialDefenses
        };

        //     alert(JSON.stringify(jsonArray));
        $.ajax({
            contentType: "application/json",
            type: 'post',
            url: '../PDO/SaveNewCreature.php',
            // dataType: 'json',

            data: JSON.stringify(jsonArray),

            success: function (response) {

                alert('Creature Saved');
                $('#addForm').trigger('reset');
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(xhr.status);
                alert(thrownError);
                // alert(request.responsetext);
                alert('FAIL');
            }
        });

        return false;

    });

$("select[id='creatureNameDropDown']").change(function(){
    alert("changed");
    var id = $('#creatureNameDropDown').find(":selected").val();
    
   
    
    var jsonArray = {
            "id": id};
    $.ajax({
            contentType: "application/json",
            type: 'post',
            url: '../PDO/GetCreature.php',
             dataType: 'json',

            data: JSON.stringify(jsonArray),

            success: function (response) {

                alert(JSON.stringify(response));
                $('#addForm').trigger('reset');
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(xhr.status);
                alert(thrownError);
                // alert(request.responsetext);
                alert('FAIL');
            }
        });
});

});