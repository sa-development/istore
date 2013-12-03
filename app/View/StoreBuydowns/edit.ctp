<div class="storeBuydowns form">
<?php echo $this->Form->create('StoreBuydown'); ?>
	<fieldset>
		<legend><?php echo __('Edit Store Buydown'); ?></legend>
		 <Table id='storeBuydownsTable' class="grid" cellpadding=0 cellspacing=0 border=0 width="804">
					<tr>
					   
						<th>Vendor</th>
						<th>Category</th>
						<th>Item name</th>
						<th>Q T Y</th>
						<th>Retail Per Item</th>
						<th>Amount</th>						
					</tr>
					<tr>
					     
						 <td><?php echo $this->Form->input('vendor_id',array('label'=> false)); ?></td>
						 <td><?php echo $this->Form->input('category_id',array('label'=> false));?></td>
						 <td><?php echo $this->Form->input('vrubyreptplu_id',array('label'=> false)); ?></td>
						 <td><?php echo $this->Form->input('qty',array('label'=> false)); ?></td>
						 <td><?php echo $this->Form->input('change_retail_item',array('label'=> false)); ?></td>
						 <td><?php echo $this->Form->input('amount',array('label'=> false)); ?></td>
						 <td><?php echo $this->Form->input('id',array('label'=> false)); ?></td>
					</tr>
		</Table>			
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<?php echo $this->element('inventories_action');?>