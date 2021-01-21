$(document).ready(function() {
    $("#teams").change(function(){
        $(".names").empty();
        $(".btn").remove();
        var n_teams = $("#teams").val();
        if(n_teams<21 && n_teams>2){
            $(".h3").removeClass("invisible");
            var div = document.createElement("div");
            for(var i=0; i<n_teams; i++){
                var input = document.createElement("input");
                input.setAttribute("type","text");
                input.setAttribute("class","inputs");
                input.setAttribute("name","team_names[]");
                input.setAttribute("placeholder","Name of the Team");
                input.required = true;
                div.append(input);
            }
            $(".names").append(div);
            var btn = document.createElement("input");
            btn.type = "submit";
            btn.name = "findMatches";
            btn.value = "Generate Combination";
            btn.classList.add("btn","btn-primary");
            $("form").append(btn);
        }else{
            window.alert("Number of teams must be more than 2 but not more than 20");
            $(".btn").addClass("invisible");
            $(".h3").addClass("invisible");
        }
    });
});
