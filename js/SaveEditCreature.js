/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function () {
    var action = 'add';
    $('#editCreature').hide();
    $("#addEditArchetype").hide();

    $("#showAdd").click(function () {
        action = 'add';
      $('#addForm').trigger('reset');
        $("#addCreauture").show();
        $("#editCreature").hide();
        $("#addEditArchetype").hide();
    });
    $("#showEdit").click(function () {
        $('#addForm').trigger('reset');//   $("#addCreauture").hide();
        action = 'edit';
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
                $editSelect.empty()
                        .append("<option value='choose'>Choose One</option>");
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

    $("select[id='creatureNameDropDown']").change(function () {

        var id = $('#creatureNameDropDown').find(":selected").val();
        if (id === 'choose')
        {
            $('#addForm').trigger('reset');
            return false;
        } else
        {


            var jsonArray = {"id": id};
            alert(jsonArray);
            $.ajax({
                contentType: "application/json",
                type: 'post',
                url: '../PDO/GetCreature.php',
                dataType: 'json',

                data: JSON.stringify(jsonArray),

                success: function (response) {
                    var randomMonster =response.CREATURE_RANDOM_MONSTER;
                    randomMonster= randomMonster.toLowerCase();
                    alert(JSON.stringify(response));
                    $('#addName').val(response.CREATURE_NAME);
                    $('#addType').val(response.CREATURE_TYPE);
                    $('#addMonsterBook').val(response.CREATURE_MONSTER_BOOK);
                    $('#addFrequency').val(response.CREATURE_FREQUENCY);
                    $('input[name=randomMonster][value="'+randomMonster+'"]').prop('checked',true);
                    $('#addTerrain').val(response.CREATURE_TERRAIN);
                    $('#addDescription').val(response.CREATURE_DESCRIPTION);
                    $('#addbackground').val(response.CREATURE_BACKGROUND);
                    $('#addSpecialAttacks').val(response.CREATURE_SPECIAL_ATTACKS);
                    $('#addspecialDefense').val(response.CREATURE_SPECIAL_DEFENSES);
                    $('#creatureID').val(response.CREATURE_ID);
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    alert(xhr.status);
                    alert(thrownError);
                    // alert(request.responsetext);
                    alert('FAIL');
                }
            });
        }
    });

});