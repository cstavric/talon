$(window).load(function(){

    if(document.getElementById('game_invisible_action') != null)
    {
        if(document.getElementById('game_invisible_action').value == 'edit')
        {
            $(".form_title").text("Edit game");
            $(".submit_game_modal").val("Update game");
            $(".select_sport").hide();
            var d1 = new Date();
            var d2 = new Date(document.getElementById('hidden_game_date').value);
            if(d1>d2)
            {
                $('.past_game').show();
                $('.future_game').hide();
                console.log('1');
            }
            else
            {
                $('.past_game').hide();
                $('.future_game').show();
                console.log('2');
            }
        }
        else
        {
            $('.past_game').hide();
            $('.future_game').show();
            $('#photo').hide();
            $(".form_title").text("Add game");
            $(".submit_game_modal").val("Add game");

        }

    }

    $("#add_new_game").click(function() {
        $('#game_sport_id').val($(".selected_sport_id").text());
        $('#game_level_id').val($(".selected_level_id").text());
        $('.past_game').hide();
        $('.future_game').show();
        document.getElementById('game_invisible_id').value="";
        document.getElementById('opponent').value="" ;
        document.getElementById('game_date').value="";
        document.getElementById('home_or_away').value="" ;
        document.getElementById('game_preview').value="";
        document.getElementById('game_recap').value="" ;
        document.getElementById('video').value="" ;
        document.getElementById('our_score').value="" ;
        document.getElementById('opponents_score').value="" ;
        document.getElementById('game_invisible_image').value="" ;
        document.getElementById('game_invisible_action').value="add" ;
        $('#photo').hide();
        $(".form_title").text("Add game");
        $(".submit_game_modal").val("Add game");
        $('#photo').attr('src',"");
    });

    $(".edit_new_game").click(function() {
        $(".select_sport").hide();
        $(".submit_game_modal").val("Update game");
        var $row = $(this).closest("tr");    // Find the row
        var $opponent = $row.find(".opponents_id").text();
        var $game_date = $row.find(".game_date").text();
        var $home_or_away = $row.find(".home_or_away").text();
        var $game_preview = $row.find(".game_preview").text();
        var $game_recap = $row.find(".game_recap").text();
        var $video = $row.find(".video").text();
        var $our_score = $row.find(".our_score").text();
        var $opponents_score = $row.find(".opponents_score").text();
        var $src=$row.find(".photo").text(); //Find the text $('.event').children('img').attr('src'
        //document.getElementById('first_name').value=$first_name ;
        //document.getElementById('jersey').value=$jersey ;
        var d1 = new Date();
        var d2 = new Date($row.find(".game_date").text());

        if(d1>d2)
        {
            $('.past_game').show();
            $('.future_game').hide();
        }
        else
        {
            $('.past_game').hide();
            $('.future_game').show();
        }

        $('#photo').attr('src',$src);
        $('#photo').show();
        document.getElementById('game_invisible_id').value=$(this).data('id');
        document.getElementById('opponent').value = $opponent;
        document.getElementById('game_date').value= $game_date;
        document.getElementById('home_or_away').value=$home_or_away;
        document.getElementById('game_preview').value=$game_preview;
        document.getElementById('game_recap').value=$game_recap;
        document.getElementById('video').value=$video;
        document.getElementById('our_score').value=$our_score;
        document.getElementById('opponents_score').value=$opponents_score;
        document.getElementById('game_invisible_image').value=$src ;
        document.getElementById('game_invisible_action').value="edit";
        document.getElementById('hidden_game_date').value=$game_date;
        $(".form_title").text("Edit game");
    });


});//]]>


