<div class="storePurches form">
<?php echo $this->Form->create('StorePurch'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Store Purch'); ?></legend>
	<?php
		echo $this->Form->input('vendor_id');
		echo $this->Form->input('category_id');
		echo $this->Form->input('cost');
		echo $this->Form->input('retail');
		echo $this->Form->input('payment_method');
		echo $this->Form->input('GPM');
		echo $this->Form->input('profit');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Store Purches'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Vendors'), array('controller' => 'vendors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vendor'), array('controller' => 'vendors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
