<div class="vrubyrepttanks form">
<?php echo $this->Form->create('Vrubyrepttank'); ?>
	<fieldset>
		<legend><?php echo __('Add Vrubyrepttank'); ?></legend>
	<?php
		echo $this->Form->input('station_id');
		echo $this->Form->input('periodBeginDate');
		echo $this->Form->input('periodEndDate');
		echo $this->Form->input('periodType');
		echo $this->Form->input('fuelfuelTank');
		echo $this->Form->input('fuelInfocount');
		echo $this->Form->input('fuelInfoamount');
		echo $this->Form->input('fuelInfovolume');
		echo $this->Form->input('filename');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Vrubyrepttanks'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Stations'), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station'), array('controller' => 'stations', 'action' => 'add')); ?> </li>
	</ul>
</div>
