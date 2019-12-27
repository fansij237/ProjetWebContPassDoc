$(document).ready(function(){
	     $("div").hide();
    $(".form").submit(function(){
		var name = $(".champ").val();
		$.post('send.php',{nom:name},function(data){
		    $("div").html(data).show();
			$(".champ").val("");
		});	
      return false;		
	});
});