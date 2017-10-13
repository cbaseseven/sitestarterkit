(function () {
	'use strict';

	$(document).foundation();

	$('form#contact_form').validate({
	  messages: { },
	  submitHandler: function(form) {
		$.ajax({
		  type: 'POST',
		  url: 'send.php',
		  data: $(form).serialize(),
		  success: function(data) {
			if(data.match(/success/)) {
			  $(form).trigger('reset');
			  $('#thanks').show().fadeOut(5000);
			}
		  }
		});
		return false;
	  }
	});
	
	$(".tipue_search_icon").click(function(){
	   $(".search-bar").addClass("show");
	});
	
	$('.search-bar').click(function() {
		  $('.search-bar').removeClass("show");
	});

	$('.search-bar-form').click(function(event){
		  event.stopPropagation();
	});
	

	

	
}());
