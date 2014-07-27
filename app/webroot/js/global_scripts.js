$(document).ready(function(){

if($('.confirm_del').length) {
     
	$('.confirm_del').click(function(){
		
		var result = confirm('Deseja realmente excluir este item?');
				
		// get parent row
		var row = $(this).parents('tr');
		
		// do ajax request
		if(result) {
			$.ajax({
				type:"POST",
				url:$(this).attr('href'),
				dataType: "json",
				success:function(response){
					
					if(response.success == true) {
						row.fadeOut();
					}
					
				}
			});
		}
	return false;
	});
}
});