<?php if($station_id): ?>

<div class="inventories index">
	<!-- <div id="step-holder">
		<div class="step-no">1</div>
		<div class="step-dark-left"><a href="">Fuel Inventory</a></div>
		<div class="step-dark-right">&nbsp;</div>
		
		<div class="step-no-off">2</div>
		<div class="step-dark-left">Fuel Invoice</div>
		<div class="step-dark-right">&nbsp;</div>
		
		<div class="step-no-off">3</div>
		<div class="step-dark-left">Fuel Sales</div>
		<div class="step-dark-round">&nbsp;</div>
		<div class="clear"></div>
	</div> -->
	<h2><?php echo __('Inventory'); ?></h2>
	<table cellpadding="0" cellspacing="0" class='grid'>
		<tr dir="ltr">
			<th rowspan="2">Category</th>
			<th rowspan="2">Date of Current Physical</th>
			<th colspan="6" style='text-align:center'>Quantity</th>
			<th style="display: none;"></th>
			<th style="display: none;"></th>
			<th style="display: none;"></th>
			<th style="display: none;"></th>
			<th style="display: none;"></th>
			<th rowspan="2">Per Unit Cost</th>
			<th rowspan="2">Spoilage/Overage</th>
			<th rowspan="2">Date of Last Physical</th>
			
		</tr>
		<tr dir="ltr">
			<th style="display: none;"></th>
			<th style="display: none;"></th>
			<th style="display: none;"></th>
			<th>Book Inventory</th>
			<th>Purchase</th>
			<th>Sales</th>
			<th>Ending Inventory</th>
			<th>Physical Inventory</th>
			<th>Short/Over</th>
			<th style="display: none;"></th>
			<th style="display: none;"></th>
			<th style="display: none;"></th>
		</tr>
	<?php
	foreach ($inventories as $inventory): 
		$action = $this->html->url(array('controller' => 'inventories', 'action' => 'edit', $inventory['Inventory']['id']));
	?>
	<tr>
		<td><?php echo h($inventory['Inventory']['name']); ?></td>
		<td>
			<input value='<?php echo h($inventory['Inventory']['current_physical_date']); ?>' class='inventoryUpdateInput datepicker' action='<?php echo $action; ?>'  name='current_physical_date' type="text" style="width:80px;"  size="12" />
		</td>
		<td>
			<input  action='<?php echo $action; ?>' type='text' class='inventoryUpdateInput' name='book_inventory'  style="width:80px;" value='<?php echo h($inventory['Inventory']['book_inventory']); ?>'>
		</td>
		<td>
			<input  action='<?php echo $action; ?>' type='text' class='inventoryUpdateInput' name='puchase'  style="width:80px;" value='<?php echo h($inventory['Inventory']['puchase']); ?>' >
		</td>
		<td>
			<span id="sales_<?php echo $inventory['Inventory']['id']; ?>"><?php echo h($inventory['Inventory']['sales']); ?></span>
		</td>
		<td><span id="ending_inventory_<?php echo $inventory['Inventory']['id']; ?>"><?php echo h($inventory['Inventory']['ending_inventory']); ?></span></td>
		<td><span id="physical_inventory_<?php echo $inventory['Inventory']['id']; ?>"><?php echo h($inventory['Inventory']['physical_inventory']); ?></span></td>
		<td><span id="short_over_<?php echo $inventory['Inventory']['id']; ?>"><?php echo h($inventory['Inventory']['short_over']); ?></span></td>
		
		<td><span id="per_unit_cost_<?php echo $inventory['Inventory']['id']; ?>"><?php echo h($inventory['Inventory']['per_unit_cost']); ?></span></td>
		<td><span id="spoilage_<?php echo $inventory['Inventory']['id']; ?>"><?php echo h($inventory['Inventory']['spoilage']); ?></span></td>
		<td><span id="last_physical_inventory_date'_<?php echo $inventory['Inventory']['id']; ?>"><?php echo h($inventory['Inventory']['last_physical_inventory_date']); ?></span></td>
		
		<!--<td><?php //echo h($inventory['Inventory']['created']); ?></td>
		<td><?php //echo h($inventory['Inventory']['modified']); ?></td>-->
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<?php endif; ?>

<script type="text/javascript">
	$(document).ready(function(){
	
		$("#ReportStationId").change(function(){
            $('#ReportIndexForm').submit();
            return true;
        });
	
		// Code to show the edit
		$('.inventoryUpdateImage').click(function(){
			var updateElement = this.id +'_input';
			$('#'+updateElement).show();
			$('#'+updateElement).focus();
			return false;
		});
		
		// Hide edit input & save it
		$('.inventoryUpdateInput').blur(function(){
			if (this.value !== '') {
				var updateElement = this.id;
				//var updateElementSpan = this.id.replace('_input','_span');
				var action = $(this).attr('action');
				//var updateElement = this.id +'_input';
				//$('#'+updateElement).hide();
				
				//$('#'+updateElementSpan).html('');
				//$('#'+updateElementSpan).html(this.value);
				$.post(action+ '/' +this.name+':'+this.value, function(data){
					var response = $.parseJSON(data);
					if (response.id > 0 ) {
						$('#ending_inventory_'+response.id).html(response.ending_inventory);
						$('#physical_inventory_'+response.id).html(response.physical_inventory);
						$('#short_over_'+response.id).html(response.short_over);
						$('#per_unit_cost_'+response.id).html(response.per_unit_cost);
						$('#spoilage_'+response.id).html(response.spoilage);
						$('#last_physical_inventory_date'+response.id).val(response.last_physical_inventory_date);
					}
				});
				return false;
			}
		});
		
		$( ".datepicker" ).datepicker({
			onClose: function( selectedDate ) {
				$(this).focus();
			},
			dateFormat: "yy-mm-dd"
		});
	});
</script>

<?php echo $this->element('inventories_action');?>


