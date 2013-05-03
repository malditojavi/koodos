$(document).ready(function(){ 
	var name = localStorage.getItem("name1");
	$("#name1").val(name); 
	$("#formulario1").submit(function(event){
		event.preventDefault();
console.log("clicked");
		var name = $("#name1").val();
		localStorage.setItem("name1", name);
	});
});