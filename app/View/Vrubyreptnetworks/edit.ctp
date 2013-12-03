<div class="vrubyreptnetworks form">
<?php echo $this->Form->create('Vrubyreptnetwork'); ?>
	<fieldset>
		<legend><?php echo __('Edit Vrubyreptnetwork'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('station_id');
		echo $this->Form->input('periodBeginDate');
		echo $this->Form->input('periodEndDate');
		echo $this->Form->input('periodType');
		echo $this->Form->input('cardNumber');
		echo $this->Form->input('cardName');
		echo $this->Form->input('cardCharges');
		echo $this->Form->input('cardChargescount');
		echo $this->Form->input('cardCorrections');
		echo $this->Form->input('cardCorrectionscount');
		echo $this->Form->input('filename');
		echo $this->Form->input('xmldata');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Vrubyreptnetwork.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Vrubyreptnetwork.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Vrubyreptnetworks'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Stations'), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station'), array('controller' => 'stations', 'action' => 'add')); ?> </li>
	</ul>
</div>
