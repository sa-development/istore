<?php
	/*
	$stationId = 0;
	if (isset($this->params['params']['query']['station']) && !isset($stationId)) {
		$stationId = $this->params['params']['query']['station'];
	}

	if (isset($this->params->query['station'])) {
		$stationId = $this->params->query['station'];
	}*/
	$stationId = $this->Session->read('Station.Station.id');
?>
<script type="text/javascript"> var stationId = '<?php echo $stationId; ?>';</script>
<?php
echo $this->Html->script(array('jquery.cookie','jquery.treeview'));
echo $this->Html->css(array('jquery.treeview'));

$reportArr = array(
					'Gasoline'    => array(
										'Sales'     => array('Competitors Gas Prices','Daily Sales Comparison','Fuel Margins','Fuel Margins Consolidated','Fuel Sales Comparison','Gas Sales Comparison','Gasoline Prices','Gasoline Prices Management','Gasoline Projection','Gasoline Rebate','Gasoline Sales Detailed','Gasoline Sales History','Kerosene/Diesel Sales','OPIS Wholesale','Pacific Pride Sales','Rebate Counter','Sales History'),
										'Purchase'  => array('Fuel BOLs','Gasoline Purchases','Kerosene/Diesel Purchases','Order Gasoline','Todays Gas Orders'),
										'Inventory' => array('Consolidated Fuel Inventory', 'Daily Fuel Inventory', 'Diesel SIR', 'Gasoline Inventory By Station', 'Regular SIR', 'SIR for All Products', 'Super SIR')
									),
					'Store' 	  => array(
											'Sales'     => array(				  
																 'Sales and Profit Comparison ',
																 'BuyDowns ',
																 'Store Projection ',
																 'Item Sales by Tags ',
																 'Item Sales Comparison',
																 'Scanning ',
																 'Category Sales ',
																 'Consolidated Tax Sales',
																 'Departments Meters',
																 'Loss Prevention ',
																 'Promotions Report ',
																 'Net Price Change ',
																 '6 Weeks Sales Analysis',
																 'Departments Taxes History'
																),
										 
					'Deliveries and Invoices' =>array(
																			  'Pending Consolidated ',
																			  'Store Purchases ',
																			  'Store Purchases Comparison',
																			  'Inventory Transfer New'
																			  ),
											'Maintenance'=>array(
																 'Find and Replace',
																 'No Purchased Items ',
																 'Spoilage ',
																 'Spoilage by Tags',
																 'Price Change by Tags',
																 'McLane Counter ',
																 'Not Sold Items'
																),
											'GPM'		  => array(
																	'GPM Comparison',
																	'Company GPM',
																	'Store GPM',
																	'Profit Contribution'
																   ),
											'Inventory'   => array(
																   'Shortages',
																   'Volume and state'
																   )
                                         
										 
	              ),
				  'Accounting' => array('Reports' => array("Authorization Agreement(CCD)-Debit","CR Credit Card Batches ","Card Type Product Report ","Cash Reconciliation ","Cash Reconciliation Consolidated ","Commission agent report ","Commission agent report (MHE) ","Consolidated Daily Deposit ","Consolidated Income ","Credit Card Details ","Credit Card Statement ","Credit/Debit Cards Summary ","Daily Sales ","Daily Sales Goodway ","Daily Sales for Accounts Group ","Deposit Report ","Food Stamps ","House Accounts ","Inventory Variation ","MOP Sales Consolidated Report ","Merchandise Loyalty Report ","NRGT ","Operating Profit Estimates (Profit & Loss) ","Reconcile Deposits ","Royalty Calculator ","Royalty Free Items ","Sales Summary ","Shift Changes History ","Weekly Sales")),
					'Pricebook' => array(
											'Deliveries and Invoices' =>array(
																			  'Pending Consolidated ',
																			  'Store Purchases ',
																			  'Store Purchases Comparison',
																			  'Inventory Transfer New'
																			  ),
											'Maintenance'=>array(
																 'Find and Replace',
																 'No Purchased Items ',
																 'Spoilage ',
																 'Spoilage by Tags',
																 'Price Change by Tags',
																 'McLane Counter ',
																 'Not Sold Items'
																),
											'GPM'		  => array(
																	'GPM Comparison',
																	'Company GPM',
																	'Store GPM',
																	'Profit Contribution'
																   ),
											'Inventory'   => array(
																   'Shortages',
																   'Volume and state'
																   )
                                         )
				  );

$data = ClassRegistry::init('Station')->find('all');


 $newData = array();
	foreach ($data as $key => $sdata ){
		$newData[$sdata['State']['default_name']][$sdata['Station']['id']] = $sdata['Station']['name'];
	}
//print_r($newData);exit;
?>

<div class="station-report">
	
<script type="text/javascript">
    $(document).ready(function() {

        $("#ReportStationId").change(function(){
            $('#ReportIndexForm').submit();
            return true;
        });

    });
</script>

<div id="sidetree">
  
  <div class="treeheader">&nbsp;</div>
  <ul class="treeview" id="tree">
	<?php foreach($reportArr as $rkey => $values) { ?>
	<li class="expandable"><div class="hitarea reportFirstMenu expandable-hitarea"></div><div style="color:#D0C400;font-size:12px;"><strong><?php echo $rkey; ?></strong></div>
		<ul style="display: none;">
			<?php foreach($values as $vkey => $value)  { ?>
			<li class="expandable"><div class="hitarea expandable-hitarea"></div><?php echo $vkey; ?>
				<ul style="display: none;">
					<?php foreach($value as $t2key => $lvalue)  { 
					$rkey_ = strtolower(str_replace(' ', '_', $rkey));
					$vkey_ = strtolower(str_replace(' ', '_', $vkey));
					?>					
					<?php if(is_array($lvalue) && count($lvalue) > 0) { ?>
									 <li class="expandable"><div class="hitarea expandable-hitarea"></div><?php echo $t2key; ?>
					                 <ul style="display: none;">
									<?php foreach($lvalue as $t3key => $t3value)  { 
									$rkey_ = strtolower(str_replace(' ', '_', $rkey));
									$vkey_ = strtolower(str_replace(' ', '_', $vkey));
									$t2key_ = strtolower(str_replace(' ', '_', $t2key));
									$t3value_ = strtolower(str_replace(' ', '_', $t3value));
									
									?>
					                <li>
										<?php echo $this->Html->link($t3value, array( 'controller' => $rkey_, 'action' => $vkey_. $t2key_ .$t3value_), array('class' => 'fetchreport')); ?></li>										
					<?php } ?>
					               </ul>
					               </li>					
					<?php } else {
						$lvalue_ = strtolower(str_replace(' ', '_', $lvalue));
					?>
					<li><?php echo $this->Html->link($lvalue, array( 'controller' => $rkey_, 'action' => $vkey_.$lvalue_),array('class' => 'fetchreport')); ?></li>
					<?php } ?>
					<?php } ?>
				</ul>
			</li>
			<?php } ?>
		</ul>
	</li>
	<?php } ?>

</ul>
</div>
</div>

<script type="text/javascript">
		$(function() {
		
			
			$("#tree").treeview({
				collapsed: true,
				animated: "slow",
				control:"#sidetreecontrol",
				prerendered: true,
				persist: "location"
			}).find('div.reportFirstMenu').click();
			
			//$("#renderReportFilter").hide();
			$('#filterReportButton').click(function(){
				
				$("#renderReport").html('Filtering records... <img src="http://www.istoreoffice.net/img/ajax-loader.gif">');
				
				$.ajax({
				  url: $("#reporttreeurl").val() + '/' +'/'+ $('#filterTo').val(),
				  success: function(data){
					$("#renderReport").html(data);
				  }
				});
				return false
			});
			
			$('.expandable').click(function(){
				if (!$('#stationSelector').val()) {
					alert('Please select the station to view reports');
					return false;
				}
			});
			
			$(".fetchreport").css('color','black');
			$(".fetchreport").css('text-decoration','none');
			
			
			$(".fetchreport").click(function(){
				
				if (!$('#stationSelector').val()) {
					alert('Please select the station to view reports');
					return false;
				}
				$(".fetchreport").css('color','black');
				$(this).css('color','red');
				
				
				$("#renderReport").html('Fetching data from POS. <img src="http://www.istoreoffice.net/img/ajax-loader.gif">');
				//var remoteURL = $(this).attr('href') + '/'+ $('#filterFrom').val() + '/' + $('#filterTo').val();
				var remoteURL = $(this).attr('href') + '/'+ '/' + $('#filterTo').val();
				var remoteURL_ = $(this).attr('href');
				
				//alert(remoteURL);
				
				$.ajax({
				  url: remoteURL,
				  success: function(data){
					$("#renderReport").html(data);
					//$("#renderReportFilter").show();
					$("#reporttreeurl").val(remoteURL_);
				  }
				});
				return false;
			});
			
		})		
</script>