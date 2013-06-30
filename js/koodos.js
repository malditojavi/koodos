
$(document).ready(function() {
	
	/*localStorage, if a user has included previously his name, it will appear here.

	var name = localStorage.getItem("name1");
	$("#name1").val(name); 
	$("#formulario1").submit(function(event) {
		//event.preventDefault();
		console.log("clicked");
		var name = $("#name1").val();
		localStorage.setItem("name1", name);
	});*/

//Toggle for View latest non-button
	var loaded = false;
  $("#testclick").click(function(e) {
  	e.preventDefault();
  	
   	//$(this).next(".boxcontent").get("http://localhost:8888/koodos/getdata.php").slideToggle(500);
   	if (loaded == true){
		 		$("#testajax").toggle();
		}
		else {
   		$.get("http://localhost:8888/koodos/getdata.php", function(data){
				$("#testajax").html(data);
				loaded = true;
  		});
   	}
  });

  //Toogle for General Koodos Dashboard
 $("#clickGeneralKoodos").click(function(){
 	$("#clickGeneralKoodos").toogle();
 });


});


//Add Name and Reason to table

	/*$("#button").click(function() {
		var toAdd = $("input[name=name]").val(),
			toAdz = $("input[name=address]").val(); */

	/*$("#button").click(function(){
		$(".list").append("$result");
	};

	}); */
//Add new things above this

