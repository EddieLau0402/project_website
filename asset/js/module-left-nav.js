$(function() {
	if ($("#left-column").length > 0) 
		$("body").attr({ 
			'data-target': "#left-column", 
			'data-spy': "scroll", 
		});
});