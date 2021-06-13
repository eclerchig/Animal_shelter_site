if ($("#pop_down").css("display")=="block")
{

	$("#t_log").css({
        "background-color" : "transparent",
        "color" : "#FFFFFF"
    });
    $("#t_reg").css({
        "border" : "none",
        "color" : "#FFFFFF"
    });	

    $("#t_log, #t_reg").css({
        "box-shadow" : "none",
    });
}

$(window).resize(function(){
  var dis = $("#pop_down").css("display");
  if (dis == "none") {
  	$("#t_log").css({
        "background-color" : "#94D3D4",
        "color" : "#2D2D2E"
    });
    $("#t_reg").css({
    	"border" : "2px solid #FFFFFF",
    	"color" : "#FFFFFF"
    });
  }
  else
  {
  	$("#t_log").css({
        "background-color" : "transparent",
        "color" : "#FFFFFF"
    });
    $("#t_reg").css({
        "border" : "none",
        "color" : "#FFFFFF"
    });

    $("#t_log, #t_reg").css({
        "box-shadow" : "none",
    });
  }
});



