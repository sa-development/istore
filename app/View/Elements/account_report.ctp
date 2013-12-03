<div id='cssmenu'>
<ul>

   
   <li>
		<a href='#'><span>Purchase Invoice</span></a>
            <ul>
				<li class=""><a title="Fuel Invoice" id='account_1' class='linkAccount' href="fuel_invoices/index">Fuel Invoice</a></li>
				<li class=""><a title="Store Invoice" id='account_2' class='linkAccount' href="store_invoices/index">Store Invoice</a></li>
				<li class=""><a title="Fuel Invoice" id='account_3' class='linkAccount' href="accounts/index.php/entry/show/payment">Other Bills</a></li>
				<li class=""><a title="Payables" id='account_4' class='linkAccount' href="Paybills/payable">Payables</a></li>
				<li class=""><a title="paybills" id='account_5' class='linkAccount' href="Paybills/index">Paybills</a></li>
			</ul>
	</li>
	
	<li>
		<a href='#'><span>Sale</span></a>
            <ul>
				<li class=""><a title="Fuel Invoice" id='account_6' class='linkAccount' href="store_invoices/indext">Fuel Sales</a></li>
				<li class=""><a title="Fuel Invoice" id='account_7' class='linkAccount' href="store_invoices/index">Store Sales</a></li>
				<li class=""><a title="Fuel Invoice" id='account_8' class='linkAccount' href="accounts/index.php/entry/show/receipt">Other</a></li>
			</ul>
	</li>
	
	<li>
		<a href='#'><span>Journal Entries</span></a>
            <ul>
				<li class=""><a title="journal" id='account_9' class='linkAccount' href="accounts/index.php/entry/show/journal">journal</a></li>
				<li class=""><a title="Entry" id='account_10' class='linkAccount' href="accounts/index.php/entry/show/journal">Entry</a></li>
			</ul>
	</li>
	
	<li>
		<a href='#'><span>Report</span></a>
            <ul>
			    <li id='account_11' class=""><a  title="Chart of accounts" class='linkAccount' href="accounts/index.php/account">Account Of Chart</a></li>
				<li class=""><a id='account_12' title="Balance Sheet" class='linkAccount' href="accounts/index.php/report/balancesheet">Balance Sheet</a></li>
				<li class=""><a id='account_13' title="Entry" class='linkAccount' href="accounts/index.php/report/profitandloss"> Profit & loss</a></li>
				<li class=""><a id='account_14' title="Entry" class='linkAccount' href="accounts/index.php/report/trialbalance"> Trial Balance</a></li>
				<li class=""><a id='account_15' title="Entry" class='linkAccount' href="accounts/index.php/report/ledgerst"> ledgerst</a></li>
				<li class=""><a id='account_16' title="Reconciliation" class='linkAccount' href="accounts/index.php/report/reconciliation/pending"> Reconciliation</a></li>
			</ul>
	</li>
	
	
</ul>
</div>


<style>
@import url(http://fonts.googleapis.com/css?family=Open+Sans:400,600,300);
@charset 'UTF-8';
/* Base Styles */
#cssmenu,
#cssmenu ul,
#cssmenu li,
#cssmenu a {
  margin: 0;
  padding: 0;
  border: 0;
  list-style: none;
  font-weight: normal;
  text-decoration: none;
  line-height: 1;
  font-family: 'Open Sans', sans-serif;'/
  font-size: 14px;
  position: relative;
}
#cssmenu a {
  line-height: 1.3;
}
#cssmenu {
  width: 250px;
}
#cssmenu > ul > li > a {
  padding-right: 40px;
  font-size: 25px;
  font-weight: bold;
  display: block;
  background: #3f3235;
  color: #ffffff;
  border-bottom: 1px solid #060505;
  text-transform: uppercase;
}
#cssmenu > ul > li > a > span {
  background: #5c484d;
  padding: 10px;
  display: block;
  font-size: 13px;
  font-weight: 300;
}
#cssmenu > ul > li > a:hover {
  text-decoration: none;
}
#cssmenu > ul > li.active {
  border-bottom: none;
}
#cssmenu > ul > li.active > a {
  color: #fff;
}
#cssmenu > ul > li.active > a span {
  background: #3f3235;
}
#cssmenu span.cnt {
  position: absolute;
  top: 8px;
  right: 15px;
  padding: 0;
  margin: 0;
  background: none;
}
/* Sub menu */
#cssmenu ul ul {
  display: none;
}
#cssmenu ul ul li {
  border: 1px solid #e0e0e0;
  border-top: 0;
}
#cssmenu ul ul a {
  padding: 10px;
  display: block;
  color: #1c1013;
  font-size: 13px;
}
#cssmenu ul ul a:hover {
  color: #bab21e;
}
#cssmenu ul ul li.odd {
  background: #f4f4f4;
}
#cssmenu ul ul li.even {
  background: #fff;
}
</style>

<script type="text/javascript">	
$(document).ready(function(){
	$('#cssmenu > ul > li ul').each(function(index, element){
	var count = $(element).find('li').length;
	var content = '<span class="cnt">' + count + '</span>';
	$(element).closest('li').children('a').append(content);
});
});

$('#cssmenu ul ul li:odd').addClass('odd');
$('#cssmenu ul ul li:even').addClass('even');

$('#cssmenu > ul > li > a').click(function() {

  var checkElement = $(this).next();

  $('#cssmenu li').removeClass('active');
  $(this).closest('li').addClass('active'); 

  if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
    $(this).closest('li').removeClass('active');
    checkElement.slideUp('normal');
  }
  if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
    $('#cssmenu ul ul:visible').slideUp('normal');
    checkElement.slideDown('normal');
  }

  if($(this).closest('li').find('ul').children().length == 0) {
    return true;
  } else {
    return false; 
  }
  
  $('#defaultLink').click();
});

</script>

