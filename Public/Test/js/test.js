
$(document).ready(function(){
  $("#submit").click(function(){
	  //alert("123");
  });
});

$(document).ready(function(){
	$("#text").bind("input propertychange change",function(event){
		var $value = $("#text").val();
		 $("#submit").click(function(){
			  $("#inner").text($value);
		 });
    });
});