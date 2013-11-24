$(document).ready(function(){
	$("#check-username").click(function(){
		if($(".username").val() == ""){
			$(".username").focus();
			return false;
		}else{
			$("#ajax-container").empty();
			$("#ajax-container").append('<img src = "img/ajax-loader.gif">');
			var username = $(".username").val();
			$.ajax({
				type:'post',
				url:"async",
				dataType:'json',
				data:{username: username},
				success:function(message){
					$("#ajax-container").empty();
					if(message == 0){
						$("#ajax-container").append('<sub class = error>Username Invalid</sub>');
					}else{
						$("#ajax-container").append('<sub>Username Valid</sub>');
					}
				},
				error:function(e){
					alert(e);
				}
			});
		}
	});
	
});
