<div class="storePurches form">
<?php echo $this->Form->create('StorePurch'); ?>
	<fieldset>
		<legend><?php echo __('Edit Store Purch'); ?></legend>
		<Table id='storePurchesTable' class="grid" cellpadding=0 cellspacing=0 border=0 width="804">
				<tr>
					<th>Vendor</th>
					<th>Category</th>
					<th>Cost</th>
					<th>Retail</th>
					<th>Payment Method</th>
					<th>G P M</th>
					<th>Profit</th>
					<th></th>
				</tr>
				<tr>
				<td><?php echo $this->Form->input('vendor_id',array('label'=> false)); ?></td>
				<td><?php echo $this->Form->input('category_id',array('label'=> false)); ?></td>
				<td><?php echo $this->Form->input('cost',array('label'=> false)); ?></td>
				<td><?php echo $this->Form->input('retail',array('label'=> false)); ?></td>
				<td><?php echo $this->Form->input('payment_method',array('label'=> false)); ?></td>
				<td><?php echo $this->Form->input('GPM',array('label'=> false)); ?></td>
				<td><?php echo $this->Form->input('profit',array('label'=> false)); ?></td>
				<td><?php echo $this->Form->input('id'); ?></td>
				</tr>
	</Table>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<?php echo $this->element('inventories_action');?>
