<div class="corporations">
<?php echo $this->Form->create('Corporation'); ?>
	<fieldset>
		<legend><?php echo __('Edit Corporation'); ?></legend>
	<?php
	  /*
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('address');
		echo $this->Form->input('registration_number');
		echo $this->Form->input('phone');
		echo $this->Form->input('fax');
		echo $this->Form->input('email_id');
		echo $this->Form->input('zip');
		echo $this->Form->input('quick_book_path');
		echo $this->Form->input('tax _code');
		echo $this->Form->input('country_id');
		echo $this->Form->input('state_id');
		echo $this->Form->input('city');
	*/
	?>
	 <Table id='corporationsTable' class="grid" cellpadding=0 cellspacing=0 border=0 width="804">
				<tr>
					<th>Name</th>
					<th>Address</th>
					<th>Reg. Number</th>
					<th>Phone</th>
					<th>Fax</th>
					<th>Email</th>
				</tr>
				<tr>
					<td><?php echo $this->Form->input('name', array('label'=>false)); ?></td>
					<td><?php echo $this->Form->input('address', array('label'=>false)); ?></td>
					<td><?php echo $this->Form->input('registration_number', array('label'=>false)); ?></td>
					<td><?php echo $this->Form->input('phone', array('label'=>false)); ?></td>
					<td><?php echo $this->Form->input('fax', array('label'=>false)); ?></td>
					<td><?php echo $this->Form->input('email', array('label'=>false)); ?></td>
				</tr>
				<tr>
					<th>Zip</th>
					<th>Quick Book Path</th>
					<th>Tax Code</th>
					<th>City</th>
					<th>Country</th>
					<th>State</th>
				</tr>
				<tr>
					<td><?php echo $this->Form->input('zip', array('label'=>false)); ?></td>
					<td><?php echo $this->Form->input('quick_book_path', array('label'=>false)); ?></td>
					<td><?php echo $this->Form->input('tax _code', array('label'=>false)); ?></td>
					<td><?php echo $this->Form->input('city', array('label'=>false)); ?></td>
					<td><?php echo $this->Form->input('country_id', array('label'=>false)); ?></td>
					<td><?php echo $this->Form->input('state_id', array('label'=>false)); ?></td>
				</tr>
	</Table>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
