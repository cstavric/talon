$(window).load(function(){
    if(document.getElementById('invisible_action') != null)
    {
        if(document.getElementById('invisible_action').value == 'edit')
        {

            $(".select_sport").hide();
        }
        else
        {
            $('#photo').hide();
            $(".form_title").text("Add player");
            $(".submit_roster_modal").val("Add player");
        }
    }

    $("#add_new").click(function() {
        console.log($(".selected_level_id").text());
        $('#sport_id').val($(".selected_sport_id").text());
        $('#level_id').val($(".selected_level_id").text());

        document.getElementById('invisible_id').value="";
        document.getElementById('first_name').value="" ;
        document.getElementById('jersey').value="";
        document.getElementById('position').value="" ;
        document.getElementById('height_feet').value="" ;
        document.getElementById('height_inches').value="";
        document.getElementById('weight').value="" ;
        document.getElementById('hometown').value="" ;
        document.getElementById('verse').value="" ;
        document.getElementById('food').value="" ;
        document.getElementById('years_at_sfc').value="" ;
        document.getElementById('invisible_image').value="" ;
        document.getElementById('invisible_action').value='add' ;
        $('#photo').hide();
        $(".form_title").text("Add player");
        $(".submit_roster_modal").val("Add player");
        $(".select_sport").show();
        $('#photo').attr('src',"");
    });

    $(".use-address").click(function() {
        var $row = $(this).closest("tr");    // Find the row
        var $first_name = $row.find(".first_name").text();
        var $jersey = $row.find(".jersey").text();
        var $position = $row.find(".position").text();
        var $height_feet = $row.find(".height_feet").text();
        var $height_inches = $row.find(".height_inches").text();
        var $weight = $row.find(".weight").text();
        var $hometown = $row.find(".hometown").text();
        var $verse = $row.find(".verse").text();
        var $food = $row.find(".food").text();
        var $years_at_sfc = $row.find(".years_at_sfc").text();
        var $src=$row.find("td img").attr('src'); //Find the text $('.event').children('img').attr('src'
        //document.getElementById('first_name').value=$first_name ;
        //document.getElementById('jersey').value=$jersey ;
        $('#photo').attr('src',$src);
        $('#photo').show();
        document.getElementById('invisible_id').value=$(this).data('id') ;
        document.getElementById('first_name').value=$first_name ;
        document.getElementById('jersey').value=$jersey ;
        document.getElementById('position').value=$position ;
        document.getElementById('height_feet').value=$height_feet ;
        document.getElementById('height_inches').value=$height_inches ;
        document.getElementById('weight').value=$weight ;
        document.getElementById('hometown').value=$hometown ;
        document.getElementById('verse').value=$verse ;
        document.getElementById('food').value=$food ;
        document.getElementById('years_at_sfc').value=$years_at_sfc ;
        document.getElementById('invisible_image').value=$src ;
        document.getElementById('invisible_action').value='edit';
        $(".form_title").text("Edit player");
        $(".submit_roster_modal").val("Update player");
        $(".select_sport").hide();
        //document.getElementById('photo').src=$photo ;
        // Let's test it out
        //alert($text+ ' ' +$shit);
    });
});//]]>


