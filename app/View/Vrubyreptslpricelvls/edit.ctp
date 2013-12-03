<div class="vrubyreptslpricelvls form">
<?php echo $this->Form->create('Vrubyreptslpricelvl'); ?>
	<fieldset>
		<legend><?php echo __('Edit Vrubyreptslpricelvl'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('station_id');
		echo $this->Form->input('periodBeginDate');
		echo $this->Form->input('periodEndDate');
		echo $this->Form->input('periodType');
		echo $this->Form->input('name');
		echo $this->Form->input('fuelInfoamount');
		echo $this->Form->input('fuelInfocount');
		echo $this->Form->input('filename');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Vrubyreptslpricelvl.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Vrubyreptslpricelvl.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Vrubyreptslpricelvls'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Stations'), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station'), array('controller' => 'stations', 'action' => 'add')); ?> </li>
	</ul>
</div>
