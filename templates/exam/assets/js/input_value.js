$('.head_form input').on('blur', function() {
	if($(this).val() != ''){
		$(this).addClass("with_value");
	} else {
		$(this).removeClass("with_value");
	}
})