$('input#zipcode-submit').on('click', function(){
	var zipcode = $('input#zipcode').val();
	if ($.trim(zipcode)!=''){
		$.post('ajax/zipcode.php', {zipcode:zipcode},function(data){
			$('div#zipcode-data').text(data);
			});
	}

});


