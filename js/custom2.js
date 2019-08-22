(function() {
	$('#college-enquiry').on('submit', function(e) {
		e.preventDefault();
		var elemArr = $(this).find('input , select');
		var url ="https://www.amecet.in/api/query-institute.php";
		showResult();
		$.ajax({
			type: "post",
			url: url,
			data: elemArr,
			contentType: "application/x-www-form-urlencoded",
			success: function(responseData, textStatus, jqXHR) {			
				clearMessage();	
			},
			error: function(jqXHR, textStatus, errorThrown) {				
				clearMessage();
			}
		})
	})	

	function showResult(){
		$('#college-enquiry-h').hide();
		$("#college-enquiry-s").removeClass("hide");	
	}
})();
(function() {
	$('#question').on('submit', function(e) {
		e.preventDefault();
		var elemArr = $(this).find('input , select');
		var url ="https://www.amecet.in/api/query-institute.php";
		showResult();
		$.ajax({
			type: "post",
			url: url,
			data: elemArr,
			contentType: "application/x-www-form-urlencoded",
			success: function(responseData, textStatus, jqXHR) {			
				clearMessage();	
			},
			error: function(jqXHR, textStatus, errorThrown) {				
				clearMessage();
			}
		})
	})	

	function showResult(){
		$('#question-h').hide();
		$("#question-s").removeClass("hide");	
	}
})();
(function() {
	$('#subscribe').on('submit', function(e) {
		e.preventDefault();
		var elemArr = $(this).find('input , select');
		var url ="https://www.amecet.in/api/query-institute.php";
		showResult();
		$.ajax({
			type: "post",
			url: url,
			data: elemArr,
			contentType: "application/x-www-form-urlencoded",
			success: function(responseData, textStatus, jqXHR) {			
				clearMessage();	
			},
			error: function(jqXHR, textStatus, errorThrown) {				
				clearMessage();
			}
		})
	})	

	function showResult(){
		$('#subscribe-h').hide();
		$("#subscribe-s").removeClass("hide");	
	}
})();
  
  

function isNumberKey(evt) {
var charCode = (evt.which) ? evt.which : event.keyCode
if (charCode > 31 && (charCode < 48 || charCode > 57))
	return false;
return true;
}