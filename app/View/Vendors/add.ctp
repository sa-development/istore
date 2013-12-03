<div class="vendors form">
<?php echo $this->Form->create('Vendor'); ?>
	<fieldset>
		<legend><?php echo __('Add Vendor'); ?></legend>
	<?php
		echo $this->Form->input('Station');
		echo $this->Form->hidden('user_id', array('value' => $userId));
		echo $this->Form->input('name');
		echo $this->Form->input('address');
		echo $this->Form->input('city');
		echo $this->Form->input('state_id');
		echo $this->Form->input('active', array('options' => array('1' => 'Yes', '0' => 'No')));
		echo $this->Form->input('zip');
		echo $this->Form->input('phone');
		echo $this->Form->input('fax');
		echo $this->Form->input('email');
		echo $this->Form->input('contact_person');
		//echo $this->Form->input('account_number');
		echo $this->Form->hidden('group_id', array('value' => 8));
		echo $this->Form->input('GL#', array('label' => 'GL [Name in accounting]'));
		echo $this->Form->input('Terms');
		echo $this->Form->input('use_negotiated_cost_in_invoices', array('options' => array('1' => 'Yes', '0' => 'No')));
		echo $this->Form->input('EDI_parser', array('options' => array('1' => 'Yes', '0' => 'No')));
		echo $this->Form->input('VendorsType');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Vendors'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Inventories'), array('controller' => 'inventories', 'action' => 'index')); ?> </li>
	</ul>
</div>
