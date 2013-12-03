<div class="vrubyreptprpricelvls form">
<?php echo $this->Form->create('Vrubyreptprpricelvl'); ?>
	<fieldset>
		<legend><?php echo __('Edit Vrubyreptprpricelvl'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('station_id');
		echo $this->Form->input('periodBeginDate');
		echo $this->Form->input('periodEndDate');
		echo $this->Form->input('periodType');
		echo $this->Form->input('name');
		echo $this->Form->input('cred_fuelInfocount');
		echo $this->Form->input('cred_fuelInfoamount');
		echo $this->Form->input('cred_fuelInfovolume');
		echo $this->Form->input('cash_fuelInfocount');
		echo $this->Form->input('cash_fuelInfoamount');
		echo $this->Form->input('cash_fuelInfovolume');
		echo $this->Form->input('subtotal_count');
		echo $this->Form->input('subtotal_amount');
		echo $this->Form->input('subtotal_volume');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Vrubyreptprpricelvl.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Vrubyreptprpricelvl.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Vrubyreptprpricelvls'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Stations'), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station'), array('controller' => 'stations', 'action' => 'add')); ?> </li>
	</ul>
</div>
