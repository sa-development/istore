<div class="storePricechanges form">
<?php echo $this->Form->create('StorePricechange'); ?>
	<fieldset>
		<legend><?php echo __('Edit Store Pricechange'); ?></legend>
		 <Table id='storePricechangesTable' class="grid" cellpadding=0 cellspacing=0 border=0 width="804">
			<tr>
				<th>Vendor</th>
				<th>Category</th>
				<th>Item name</th>
				<th>Q T Y</th>
				<th>Retail Per Item</th>
				<th>Amount</th>
				<th></th>
			</tr>
			<tr>
			<td><?php echo $this->Form->input('vendor_id',array('label'=> false)); ?></td>
			<td><?php echo $this->Form->input('category_id',array('label'=> false)); ?></td>
			<td><?php echo $this->Form->input('vrubyreptplu_id',array('label'=> false)); ?></td>
			<td><?php echo $this->Form->input('qty',array('label'=> false)); ?></td>
			<td><?php echo $this->Form->input('chage_retail_item',array('label'=> false)); ?></td>
			<td><?php echo $this->Form->input('amount',array('label'=> false)); ?></td>
			<td><?php echo $this->Form->input('id'); ?></td>
			</tr>
			</table>
</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<?php echo $this->element('inventories_action');?>
