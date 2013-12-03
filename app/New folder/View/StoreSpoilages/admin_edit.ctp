<div class="storeSpoilages form">
<?php echo $this->Form->create('StoreSpoilage'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Store Spoilage'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('item_name');
		echo $this->Form->input('category_id');
		echo $this->Form->input('UPC');
		echo $this->Form->input('reason');
		echo $this->Form->input('qty');
		echo $this->Form->input('retail_per_item');
		echo $this->Form->input('amount');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('StoreSpoilage.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('StoreSpoilage.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Store Spoilages'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
