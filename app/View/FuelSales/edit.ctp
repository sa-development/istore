<div class="fuelSales form">
<?php echo $this->Form->create('FuelSale'); ?>
	<fieldset>
		<legend><?php echo __('Edit Fuel Sale'); ?></legend>
		 <Table id='fuelSalesTable' class="grid" cellpadding=0 cellspacing=0 border=0 width="804">
					<tr>
					     <td>Fuel Type</td>
						 <td>Volume</td>
						 <td>Retail</td>
						 <td>Amount</td>
						 <td>Adjustment</td>
						 <td>Station</td>
						 <td></td>
					</tr>
					   
					<tr>
					     <td><?php echo $this->Form->input('fuel_type_id',array('label'=> false)); ?></td>
						 <td><?php echo $this->Form->input('volume',array('label'=> false)); ?></td>
						 <td><?php echo $this->Form->input('retail',array('label'=> false)); ?></td>
						 <td><?php echo $this->Form->input('amount',array('label'=> false)); ?></td>
						 <td><?php echo $this->Form->input('adjustment',array('label'=> false)); ?></td>
						 <td><?php echo $this->Form->input('station_id',array('label'=> false)); ?></td>
						 <td><?php echo $this->Form->input('id'); ?></td>
						
					</tr>
		 </Table>
</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<?php echo $this->element('inventories_action');?>