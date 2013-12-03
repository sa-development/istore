<div class="employees form">
<?php echo $this->Form->create('Employee'); ?>
	<fieldset>
		<legend><?php echo __('Add Employee'); ?></legend>
	<?php
		echo $this->Form->input('first_name');
		echo $this->Form->input('last_name');
		echo $this->Form->input('sex');
		echo $this->Form->input('language_id');
		echo $this->Form->input('address');
		echo $this->Form->input('fax');
		echo $this->Form->input('phone');
		echo $this->Form->input('email');
		echo $this->Form->input('mobile');
		echo $this->Form->input('city');
		echo $this->Form->input('state_id');
		echo $this->Form->input('SS_hash');
		echo $this->Form->input('birth_date');
		echo $this->Form->input('corporation_id');
		echo $this->Form->input('status');
		echo $this->Form->input('dependants');
		echo $this->Form->input('country_id');
		echo $this->Form->input('local_tax');
		echo $this->Form->input('1099_legible');
		echo $this->Form->input('married');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Employees'), array('action' => 'index')); ?></li>
	</ul>
</div>
