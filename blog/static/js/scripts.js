$(document).ready(function () {
	$('#dif-billing-address').click(function() {
		event.preventDefault();
		$('#billing-address-form').fadeIn();
	});

	$('#reset-billing-form').click(function() {
		event.preventDefault();
		document.getElementById("bill-form").reset();
		$('#billing-address-form').fadeOut();
	});

	// submit plans form
	submitPlansForm = function(){
	    document.getElementById("plans-form").submit();
	}

	// submit all forms in details
	submitForms = function(){
	    document.getElementById("personal-details").submit();
	    document.getElementById("address-details").submit();
	    document.getElementById("bill-form").submit();
	    document.getElementById("extra-infos").submit();
	}

	// submit order
	submitPlansForm = function(){
	    document.getElementById("payment").submit();
	}

});