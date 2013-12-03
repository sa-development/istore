<div class="accountings form">
<?php echo $this->Form->create('Accounting'); ?>
	<fieldset>
		<legend><?php echo __('Add Accounting'); ?></legend>
	<?php
	
		echo $this->Form->input('GL_account');
		echo $this->Form->input('corporation_id');
		echo $this->Form->input('station_id');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		//echo $this->Form->input('subaccount_of_id');
		echo $this->Form->input('account_type_id');
		echo $this->Form->hidden('user_id', array('value' => $userId));
		echo $this->Form->input('active');
	
	?>
	<!--
	<Table id='accountingsTable' class="grid" cellpadding=0 cellspacing=0 border=0 width="804">
				<tr>
					<th></th>
					<th>G L Account</th>
					<th>Corporation</th>
					<th>Station</th>
					<th>Name</th>
					<th>Description</th>
					<th>Account Type</th>
					<th>Active</th>
					<th></th>
				</tr>
				<tr>
				    <td><?php echo $this->Form->input('id'); ?></td>
					<td><?php echo $this->Form->input('GL_account', array('label'=>false)); ?></td>
					<td><?php echo $this->Form->input('corporation_id', array('label'=>false)); ?></td>
					<td><?php echo $this->Form->input('station_id', array('label'=>false)); ?></td>
					<td><?php echo $this->Form->input('name', array('label'=>false)); ?></td>
					<td><?php echo $this->Form->input('description', array('label'=>false)); ?></td>
					<td><?php echo $this->Form->input('account_type_id', array('label'=>false)); ?></td>
					<td><?php echo $this->Form->input('active', array('label'=>false)); ?></td>
					<td><?php echo $this->Form->hidden('user_id', array('value' => $userId)); ?></td>
				</tr>
	 </Table>
	-->
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Accounting'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Corporations'), array('controller' => 'corporations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Account Types'), array('controller' => 'account_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Account Registers'), array('controller' => 'account_registers', 'action' => 'index')); ?> </li>
	</ul>
</div>
