<div class="posrequesters form">
<?php echo $this->Form->create('Posrequester'); ?>
	<fieldset>
		<legend><?php echo __('Edit Posrequester'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('station_id');
		echo $this->Form->input('cmd_url');
		echo $this->Form->input('data');
		echo $this->Form->input('status');
		echo $this->Form->input('active');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Posrequester.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Posrequester.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Posrequesters'), array('action' => 'index')); ?></li>
	</ul>
</div>
