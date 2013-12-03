<div class="stations form">
<?php echo $this->Form->create('Station'); ?>
	<fieldset>
		<legend><?php echo __('Add Station'); ?></legend>
	<?php
		echo $this->Form->input('name');
        echo $this->Form->input('corporation_id');
		echo $this->Form->input('cash_register_brand');
		echo $this->Form->input('ip_address');
		echo $this->Form->input('business_type_id');
		echo $this->Form->input('state_id');
		echo $this->Form->input('STI_number');
		echo $this->Form->input('general_ledger_number');
		echo $this->Form->input('country_id');
		echo $this->Form->input('user_name');
		echo $this->Form->input('password');
		echo $this->Form->input('fax');
		echo $this->Form->input('city');
		echo $this->Form->input('phone');
		echo $this->Form->input('street');
		echo $this->Form->input('zip');
		
		echo $this->Form->hidden('user_id', array('value' => $userId));	
	?>
	<!--
	 <Table id='Table' class="grid" cellpadding=0 cellspacing=0 border=0 width="804">
				<tr>
					<th>Name</th>
					<th>Corporation</th>
					<th>Business Type</th>
					<th>State</th>
					<th>STI Number</th>
					<th>General Ledger Number</th>
				</tr>
				<tr>
					<td><?php echo $this->Form->input('name', array('label'=>false)); ?></td>
					<td><?php echo $this->Form->input('corporation_id', array('label'=>false));	 ?></td>
					<td><?php echo $this->Form->input('business_type_id', array('label'=>false)); ?></td>
					<td><?php echo $this->Form->input('state_id', array('label'=>false)); ?></td>
					<td><?php echo $this->Form->input('STI_number', array('label'=>false)); ?></td>
					<td><?php echo $this->Form->input('general_ledger_number', array('label'=>false));?></td>
				</tr>
				<tr>
					<th>Cash Register Brand</th>
					<th>IP Address</th>
					<th>User Name</th>
					<th>Password</th>
					<th>Country</th>
					<th>Fax</th>
				</tr>
				<tr>
					<td><?php echo $this->Form->input('cash_register_brand', array('label'=>false)); ?></td>
					<td><?php echo $this->Form->input('ip_address', array('label'=>false)); ?></td>
					<td><?php echo $this->Form->input('user_name', array('label'=>false));?></td>
					<td><?php echo $this->Form->input('password', array('label'=>false));?></td>
					<td><?php echo $this->Form->input('country_id', array('label'=>false));?></td>
					<td><?php echo $this->Form->input('fax', array('label'=>false)); ?></td>
				</tr>
				<tr>
					<th>City</th>
					<th>Phone</th>
					<th>Street</th>
					<th>Zip</th>
					<th></th>
					<th></th>
				</tr>
				<tr>
					<td><?php echo $this->Form->input('city', array('label'=>false)); ?></td>
					<td><?php echo $this->Form->input('phone', array('label'=>false)); ?></td>
					<td><?php echo $this->Form->input('street', array('label'=>false)); ?></td>
					<td><?php echo $this->Form->input('zip', array('label'=>false)); ?></td>
					<td><?php echo $this->Form->input('id'); ?></td>
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

		<li><?php echo $this->Html->link(__('List Stations'), array('action' => 'index')); ?></li>
	</ul>
</div>
