$(document).ready(function(){ 
	var name = localStorage.getItem("name1");
	$("#name1").val(name); 
	$("#formulario1").submit(function(event){
		event.preventDefault();
console.log("clicked");
		var name = $("#name1").val();
		localStorage.setItem("name1", name);
	});
 $(document).ready(function() {
 	$(".boxcontent").hide();
 		//toggle the componenet with class msg_body
  $(".latesttitle").click(function()
   {
   $(this).next(".boxcontent").slideToggle(500);
   });
	});

});

