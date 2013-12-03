<div class="stationCmds form">
<?php echo $this->Form->create('StationCmd'); ?>
	<fieldset>
		<legend><?php echo __('Edit Station Cmd'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('station_id');
		echo $this->Form->input('cmd_url');
		echo $this->Form->input('data');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('StationCmd.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('StationCmd.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Station Cmds'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Stations'), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station'), array('controller' => 'stations', 'action' => 'add')); ?> </li>
	</ul>
</div>
