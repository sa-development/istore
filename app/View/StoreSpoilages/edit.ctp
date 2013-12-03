<div class="storeSpoilages form">
<?php echo $this->Form->create('StoreSpoilage'); ?>
	<fieldset>
		<legend><?php echo __('Edit Store Spoilage'); ?></legend>
		<Table id='spoilagesItemTable' class="grid" cellpadding=0 cellspacing=0 border=0 width="804">
		<tr>
		    <th>Category</th>
			<th>Item Name</th>
			<th>U P C</th>
			<th>Reason</th>
			<th>Qty</th>
			<th>Retail Per Item</th>
			<th>Amount</th>
			<th></th>
		</tr>
		<tr>
		<td><?php echo $this->Form->input('category_id',array('label'=> false)); ?></td>
		<td><?php echo $this->Form->input('vrubyreptplu_id',array('label'=> false)); ?></td>
		<td><?php echo $this->Form->input('UPC',array('label'=> false)); ?></td>
		<td><?php echo $this->Form->input('reason',array('label'=> false)); ?></td>
		<td><?php echo $this->Form->input('qty',array('label'=> false)); ?></td>
		<td><?php echo $this->Form->input('retail_per_item',array('label'=> false)); ?></td>
		<td><?php echo $this->Form->input('amount',array('label'=> false)); ?></td>
		<td><?php echo $this->Form->input('id'); ?></td>
		</tr>
		</Table>

	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<?php echo $this->element('inventories_action');?>
