<div class="accountReceivables form">
<?php echo $this->Form->create('AccountReceivable'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Account Receivable'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('corporation_id');
		echo $this->Form->input('station_id');
		echo $this->Form->input('payee');
		echo $this->Form->input('memo');
		echo $this->Form->input('increase');
		echo $this->Form->input('decrease');
		echo $this->Form->input('amount_to_rec');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('AccountReceivable.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('AccountReceivable.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Account Receivables'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Corporations'), array('controller' => 'corporations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Corporation'), array('controller' => 'corporations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stations'), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station'), array('controller' => 'stations', 'action' => 'add')); ?> </li>
	</ul>
</div>
