<div class="vendors">
<?php echo $this->Form->create('Vendor'); ?>
	<fieldset>
		<legend><?php echo __('Add Vendor'); ?></legend>
	<?php
	/*
		echo $this->Form->input('Station');
		echo $this->Form->hidden('user_id', array('value' => $userId));
		echo $this->Form->input('name');
		echo $this->Form->input('address');
		echo $this->Form->input('city');
		echo $this->Form->input('state_id');
		echo $this->Form->input('active');
		echo $this->Form->input('zip');
		echo $this->Form->input('phone');
		echo $this->Form->input('fax');
		echo $this->Form->input('email');
		echo $this->Form->input('contact_person');
		echo $this->Form->input('account_number');
		echo $this->Form->input('GL#');
		echo $this->Form->input('Terms');
		echo $this->Form->input('use_negotiated_cost_in_invoices');
		echo $this->Form->input('EDI_parser');
		echo $this->Form->input('VendorsType');
		*/
	?>
	 <Table id='vendorsTable' class="grid" cellpadding=0 cellspacing=0 border=0 width="804">
				<tr>
					<th>Station</th>
					<th>Name</th>
					<th>Address</th>
					<th>City</th>
					<th>State</th>
					<th>Active</th>
				</tr>	
				<tr>
					<td><?php echo $this->Form->input('Station', array('label'=>false)); ?></td>
					<td><?php echo $this->Form->input('name', array('label'=>false)); ?></td>
					<td><?php echo $this->Form->input('address', array('label'=>false)); ?></td>
					<td><?php echo $this->Form->input('city', array('label'=>false)); ?></td>
					<td><?php echo $this->Form->input('state_id', array('label'=>false)); ?></td>
					<td><?php echo $this->Form->input('active', array('label'=>false));?></td>
				</tr>
				<tr>
					<th>Zip</th>
					<th>Phone</th>
					<th>Fax</th>
					<th>Email</th>
					<th>Contact Person</th>
					<th>Account Number</th>
				</tr>	
				<tr>
					<td><?php echo $this->Form->input('zip', array('label'=>false)); ?></td>
					<td><?php echo $this->Form->input('phone', array('label'=>false)); ?></td>
					<td><?php echo $this->Form->input('fax', array('label'=>false)); ?></td>
					<td><?php echo $this->Form->input('email', array('label'=>false)); ?></td>
					<td><?php echo $this->Form->input('contact_person', array('label'=>false)); ?></td>
					<td><?php echo $this->Form->input('account_number', array('label'=>false));?></td>
				</tr>
				<tr>
					<th>G L#</th>
					<th>Terms</th>
					<th>Use Negotiated Cost In Invoices</th>
					<th>E D I Parser</th>
					<th>Vendors Type</th>
					<th></th>
				</tr>	
				<tr>
					<td><?php echo $this->Form->input('GL#', array('label'=>false)); ?></td>
					<td><?php echo $this->Form->input('Terms', array('label'=>false)); ?></td>
					<td><?php echo $this->Form->input('use_negotiated_cost_in_invoices', array('label'=>false)); ?></td>
					<td><?php echo $this->Form->input('EDI_parser', array('label'=>false)); ?></td>
					<td><?php echo $this->Form->input('VendorsType', array('label'=>false)); ?></td>
					<td><?php echo $this->Form->hidden('user_id', array('value' => $userId)); ?></td>
				</tr>
	</Table>
		
		
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
