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
        var creatureMonsterBook =$('#addMonsterBook').val();
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
        
        alert(JSON.stringify(jsonArray));
        $.ajax({
            contentType: "application/json",
            type: 'post',
            url: '../PDO/SaveNewCreature.php',
           // dataType: 'json',

            data: JSON.stringify(jsonArray),
            // data: jsonArray,
            success: function (response) {
                // alert(jsonArray);
                alert('Creature Saved');
$('#addForm').trigger('reset');
                $('#id1').html('yay!!!');


            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(xhr.status);
                alert(thrownError);
                //  alert(request.responsetext);
                alert('FAIL');
            }
        });
        
        return false;

    });
});