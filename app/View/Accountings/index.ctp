<script type="text/javascript" src="/js/thickbox.js"></script>
<link rel="stylesheet" type="text/css" href="/css/thickbox.css" />

<div id='accountInfo' class="reports report" link=''></div>

<?php echo $this->element('account_report'); ?>	
				
<script type="text/javascript">
/* Loading JQuery Superfish menu */
$(document).ready(function() {
	
	$('#account_11').click();
	
	$('.linkAccount').click(function(){
		
		$("#accountInfo").attr('link', this.id);
		$("#accountInfo").html('<div style="vertical-align:middle; text-align:center"><img src="ajax-loader.gif"></div>');
		
		$.post($(this).attr('href'), function(response){
			$('#accountInfo').html(response);
			tb_init('a.thickbox');//pass where to apply thickbox
		
		});
		return false;
	});
	
	refreshResponseDiv = function(){
		//alert("Testing")
		var iId =  $("#accountInfo").attr('link');
		alert(iId);
		$("#account_1").click();
		
		return false;
	}
	
	/*function refreshResponseDiv()
	{
		alert('asasasasa');
		$('#'+$("#accountInfo").attr('link')).click();
		return false;
	}*/
	
	$('.PurchaseInvoice').change(function(){
		alert(this.value);
		$.post(this.value, function(response){
			$('#accountInfo').html(response);
		});
		return false;
	});
	
	
});
</script>