<div class="inventories form">
<?php echo $this->Form->create('Inventory'); ?>
	<fieldset>
		<legend><?php echo __('Add Inventory'); ?></legend>
	<?php
		echo $this->Form->input('station_id');
		echo $this->Form->input('department_id');
		echo $this->Form->input('plus');
		echo $this->Form->input('ticket_adjustment');
		echo $this->Form->input('book_inventory');
		echo $this->Form->input('physical_inventory');
		echo $this->Form->input('quantity');
		echo $this->Form->input('short_over');
		echo $this->Form->input('time');
		echo $this->Form->input('last_physical');
		echo $this->Form->input('puchase');
		echo $this->Form->input('sales');
		echo $this->Form->input('buydown');
		echo $this->Form->input('price_change');
		echo $this->Form->input('spoilage');
		echo $this->Form->input('cost_of_inventory');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Inventories'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Stations'), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station'), array('controller' => 'stations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Departments'), array('controller' => 'departments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Department'), array('controller' => 'departments', 'action' => 'add')); ?> </li>
	</ul>
</div>
