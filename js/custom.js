$(function(){
	function checkdelete(){
		return confirm('are you sure to delete?');
	}


	$('#btn-2').on('click',function(){
		$('#section-3').slideToggle(2000);
	})
	$('#btn-3').on('click',function(){
		$('#section-4').slideToggle(2000);
	})
	$('#btn-4').on('click',function(){
		$('#section-5').slideToggle(2000);
	})
	$('#btn-5').on('click',function(){
		$('#section-6').slideToggle(2000);
	})
});