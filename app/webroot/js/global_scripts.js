$(document).ready(function(){

		if($('.confirm_del').length) {
			 
			$('.confirm_del').click(function(){
				
				var result = confirm('Deseja realmente excluir esta atividade?');
				
				$('#flashMessage').fadeOut();
				
				var row = $(this).parents('tr');
				
				if(result) {
					$.ajax({
						type:"POST",
						url:$(this).attr('href'),
						dataType: "json",
						success:function(response){
							if(response.success == true) {
								row.fadeOut();
												
							} else {
								$('#flashMessage').addClass('alert-danger');
								$('#flashMessage').html( response.msg ).show();
								$('#flashMessage').fadeOut(4000);
							}
						}
					});
				}
			return false;
			});
		}
		
		$(".order_date").click(function(){
		  if ( $(this).hasClass( "asc" ) ){
		 	 order('date','asc',this);
		  }else{
			 order('date','desc',this);  
	      }
				
		});
		
		$(".order_string").click(function(){
		  if ( $(this).hasClass( "asc" ) ){
		 	 order('string','asc',this);
		  }else{
			 order('string','desc',this);  
	      }
				
		});
		
		
});


var order = function(mode,action, elem){ 

	jQuery.ajax({
	   type: "POST",
	   url: '/cakephp/agendas/order',
	   dataType: "html",
	   data:  "action="+action+"&mode="+mode,
	   success: function(response){
		   
			$(elem).toggleClass(function() {
			  if ( $(this).is( '.glyphicon-sort-by-attributes' ) ) {
				 $(this).removeClass('glyphicon-sort-by-attributes');
				 $(this).removeClass('asc');
				 return "glyphicon-sort-by-attributes-alt desc";
			  } else {
				$(this).removeClass('glyphicon-sort-by-attributes-alt');
				 $(this).removeClass('desc');
				return "glyphicon-sort-by-attributes asc";
			  }
			});
			
		   $('tbody').html(response).fadeIn();
		 
		   		
	   },
	   error: function(){
		  alert("Ocorreu um erro durante a requisi\u00E7\u00E3o.");
	   }
 	});
		
}