<div class="storePricechanges form">
<?php echo $this->Form->create('StorePricechange'); ?>
	<fieldset>
		<legend><?php echo __('Edit Store Pricechange'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('vendor_id');
		echo $this->Form->input('category_id');
		echo $this->Form->input('item_name');
		echo $this->Form->input('qty');
		echo $this->Form->input('chage_retail_item');
		echo $this->Form->input('amount');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('StorePricechange.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('StorePricechange.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Store Pricechanges'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Vendors'), array('controller' => 'vendors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vendor'), array('controller' => 'vendors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
