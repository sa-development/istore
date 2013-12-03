<?php
//print_r($_SERVER);exit;
if(!isset($stationId) || !$stationId) {
	$stationId = 1;
}
echo $this->Html->script(array('jquery.cookie','jquery.treeview'));
echo $this->Html->css(array('jquery.treeview'));

$reportArr = array(
					'Gasoline'    => array(
											'Fule Sales'     => array(
																	 'Department',
																	 'Category',
																	 'Total',
																	 'Tank Report',
																	 'Tax',
																	 'PricesLevel',
																	 'Network',
																	 'Deal',
																	 'CarWash',
																	 'Tierproduct',
																	 'Dcrstatic',
																	 'summary',
																	 'Department Sales History'
																),
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
										 
					'Merchandise' => array(
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
	<li class="expandable"><div class="hitarea expandable-hitarea"></div><?php echo $rkey; ?>
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
					                <li><?php echo $this->Html->link($t3value, array( 'controller' => 'reports', 'action' => 'view', $stationId,$rkey_, $vkey_, $t2key_,$t3value_), array('class' => 'fetchreport')); ?></li>										
					<?php } ?>
					               </ul>
					               </li>					
					<?php } else {
						$lvalue_ = strtolower(str_replace(' ', '_', $lvalue));
					?>
					<li><?php echo $this->Html->link($lvalue, array( 'controller' => 'reports', 'action' => 'view',$stationId, $rkey_, $vkey_, $lvalue_),array('class' => 'fetchreport')); ?></li>
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
				animated: "fast",
				control:"#sidetreecontrol",
				prerendered: true,
				persist: "location"
			});
			
			//$("#renderReportFilter").hide();
			$('#filterReportButton').click(function(){
				
				$("#renderReport").html('Filtering records... <img src="http://www.istoreoffice.net/img/ajax-loader.gif">');
				
				$.ajax({
				  url: $("#reporttreeurl").val() + '/' +'BeginDate:'+ $('#filterFrom').val() + '/' +'EndDate:'+ $('#filterTo').val(),
				  success: function(data){
					$("#renderReport").html(data);
				  }
				});
				return false
			});
			
			
			$(".fetchreport").click(function(){
				$("#renderReport").html('Fetching data from POS. <img src="http://www.istoreoffice.net/img/ajax-loader.gif">');
				//var remoteURL = $(this).attr('href') + '/' +'BeginDate:'+ $('#filterFrom').val() + '/' +'EndDate:'+ $('#filterTo').val();
				var remoteURL = $(this).attr('href');
				
				$.ajax({
				  url: $(this).attr('href'),
				  success: function(data){
					$("#renderReport").html(data);
					//$("#renderReportFilter").show();
					$("#reporttreeurl").val(remoteURL);
				  }
				});
				return false;
			});
			
		})		
</script>