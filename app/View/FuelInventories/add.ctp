<div class="fuelInventories form">
<?php echo $this->Form->create('FuelInventory'); ?>
	<fieldset>
		<legend><?php echo __('Add Fuel Inventory'); ?></legend>
		<Table id='fuelInventories' class="grid" cellpadding=0 cellspacing=0 border=0 width="804">
			<tr>
				 <td><?php echo $this->Form->input('station_id'); ?></td>
				 <td><?php echo $this->Form->input('fuel_type_id'); ?></td>
				 <td><?php echo $this->Form->input('open');?></td>
				 <td><?php echo $this->Form->input('purchase');?></td>
				 <td><?php echo $this->Form->input('subtotal');?></td>
				 <td><?php echo $this->Form->input('sales');?></td>
			</tr>
		</Table>
	    <Table id='fuelInventories' class="grid" cellpadding=0 cellspacing=0 border=0 width="804">
		 <tr>
				<td>Today Ending<br>Book Inventory</td>
				<td>Today Ending<br>Stick Reading</td>
				<td>Today Ending<br>Stick Reading Inches</td>
				<td>Water leval</td>
				<td>Short over</td>
				<td>Short over MTD</td>
		</tr>
		<tr>
				
				<td><?php echo $this->Form->input('today_ending_book_inventory',array('label'=> false));?></td>
				<td><?php echo $this->Form->input('today_ending_stick_reading',array('label'=> false));?></td>
				<td><?php echo $this->Form->input('today_ending_stick_reading_inches',array('label'=> false));?></td>
				<td><?php echo $this->Form->input('water_leval',array('label'=> false));?></td>
				<td><?php echo $this->Form->input('short_over',array('label'=> false));?></td>
				<td><?php echo $this->Form->input('short_over_MTD',array('label'=> false));?></td>
		</tr>
		</Table>
		<?php 
			echo $this->Form->input('check_water_level');
			echo $this->Form->input('check_stage_equipment');
		?> 
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<?php echo $this->element('inventories_action');?>
