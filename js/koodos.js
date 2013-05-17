
$(document).ready(function() { 
	/* 

//localStorage, if a user has included previously his name, it will appear here.

	var name = localStorage.getItem("name1");
	$("#name1").val(name); 
	$("#formulario1").submit(function(event) {
		//event.preventDefault();
		console.log("clicked");
		var name = $("#name1").val();
		localStorage.setItem("name1", name);
	});*/

//Toggle for View latest¿

 	$(".boxcontent").hide();

  $(".latesttitle").click(function() { 
   $(this).next(".boxcontent").slideToggle(500);
	});

//Add Name and Reason to table

	$("#button").click(function() {
		var toAdd = $("input[name=name]").val(),
			toAdz = $("input[name=address]").val();

		$(".list").append('<tr><td class="firstResultName">' + "<b>Koodos</b> to " + "<b>" + toAdd + "</b>" + " for" + '</td><td class="firstResultReason">' + toAdz + "</td></tr>");
	});
});
//Add new things above this

