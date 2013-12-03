<div >
    <?php echo $this->Form->create('Report', array('type' => 'GET')); ?>    
	<?php echo $this->Form->input('station_id', array('empty' => 'Select Station', 'selected' => $station_id)); ?>
	<?php echo $this->Form->end(); ?>
</div>

<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

<?php if($station_id): ?>

<div class="inventories index">
	<h2><?php echo __('Inventory'); ?></h2>
	<table cellpadding="0" cellspacing="0" class='grid'>
		<tr dir="ltr">
			<th rowspan="2">Category</th>
			<th rowspan="2">Date of Last Physical</th>
			<th colspan="6" style='text-align:center'>Quantity</th>
			<th style="display: none;"></th>
			<th style="display: none;"></th>
			<th style="display: none;"></th>
			<th style="display: none;"></th>
			<th style="display: none;"></th>
			<th rowspan="2">Per Unit Cost</th>
			<th rowspan="2">Spoilage/Overage</th>
			<th rowspan="2">Date of Current Physical</th>
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
	foreach ($inventories as $inventory): ?>
	<tr>
		<td><?php echo h($inventory['Inventory']['name']); ?></td>
		<td>
			<input value='<?php echo h($inventory['Inventory']['last_physical_inventory_date']); ?>' class='inventoryUpdateInput datepicker' name='last_physical_inventory_date' type="text" style="width:80px;"  size="12" id="last_physical_inventory_date" />
		</td>
		<td>
			<input type='text' class='inventoryUpdateInput' name='book_inventory'  style="width:80px;" value='<?php echo h($inventory['Inventory']['book_inventory']); ?>'>
		</td>
		<td>
			<input type='text' class='inventoryUpdateInput' name='puchase'  style="width:80px;" value='<?php echo h($inventory['Inventory']['puchase']); ?>' >
		</td>
		<td><?php echo h($inventory['Inventory']['sales']); ?></td>
		<td><?php echo h($inventory['Inventory']['ending_inventory']); ?></td>
		<td><?php echo h($inventory['Inventory']['physical_inventory']); ?></td>
		<td><?php echo h($inventory['Inventory']['short_over']); ?></td>
		
		<td><?php echo h($inventory['Inventory']['per_unit_cost']); ?></td>
		<td><?php echo h($inventory['Inventory']['spoilage']); ?></td>
		<td><?php echo h($inventory['Inventory']['current_physical_date']); ?></td>
		
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
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Inventory'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Stations'), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station'), array('controller' => 'stations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Departments'), array('controller' => 'departments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Department'), array('controller' => 'departments', 'action' => 'add')); ?> </li>
	</ul>
</div>

<script type="text/javascript">
	$(document).ready(function(){
	
		var action='<?php echo $this->html->url(array('controller' => 'inventories', 'action' => 'edit', $inventory['Inventory']['id']));?>'; 
	
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
			var updateElement = this.id;
			$.post(action+ '/' +this.name+':'+this.value);
			return false;
		});
		
		$( ".datepicker" ).datepicker({
			onClose: function( selectedDate ) {
				$(this).focus();
			},
			dateFormat: "yy-mm-dd"
		});
	});
</script>

