<div class="states form">
<?php echo $this->Form->create('State'); ?>
	<fieldset>
		<legend><?php echo __('Add State'); ?></legend>
	<?php
		echo $this->Form->input('country_id');
		echo $this->Form->input('code');
		echo $this->Form->input('default_name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List States'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country'), array('controller' => 'countries', 'action' => 'add')); ?> </li>
		
		<li><?php echo $this->Html->link(__('List Uses'), array('controller' => 'uses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Use'), array('controller' => 'uses', 'action' => 'add')); ?> </li>
	</ul>
</div>
