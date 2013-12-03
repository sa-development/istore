<div class="stores form">
<?php echo $this->Form->create('Store'); ?>
	<fieldset>
		<legend><?php echo __('Edit Store'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('corporation_id');
		echo $this->Form->input('name');
		echo $this->Form->input('business_type_id');
		echo $this->Form->input('state_id');
		echo $this->Form->input('STI_number');
		echo $this->Form->input('general_ledger_number');
		echo $this->Form->input('country_id');
		echo $this->Form->input('fax');
		echo $this->Form->input('city');
		echo $this->Form->input('phone');
		echo $this->Form->input('street');
		echo $this->Form->input('zip');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Store.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Store.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Stores'), array('action' => 'index')); ?></li>
	</ul>
</div>
