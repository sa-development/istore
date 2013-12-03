<div class="storeBuydowns form">
<?php echo $this->Form->create('StoreBuydown'); ?>
	<fieldset>
		<legend><?php echo __('Add Store Buydown'); ?></legend>
	<?php
		echo $this->Form->input('vendor_id');
		echo $this->Form->input('category_id');
		echo $this->Form->input('item_name');
		echo $this->Form->input('qty');
		echo $this->Form->input('change_retail_item');
		echo $this->Form->input('amount');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Store Buydowns'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Vendors'), array('controller' => 'vendors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vendor'), array('controller' => 'vendors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
