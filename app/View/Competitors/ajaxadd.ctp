<div class="competitors">
<?php echo $this->Form->create('Competitor'); ?>
	<fieldset>
		<legend><?php echo __('Add Competitor'); ?></legend>
	<?php
	/*
		echo $this->Form->input('name');
		echo $this->Form->input('rating');
		echo $this->Form->input('base_near');
		echo $this->Form->input('business_type_id');
		echo $this->Form->input('country_id');
		echo $this->Form->input('state_id');
		echo $this->Form->input('city');
		echo $this->Form->input('zip');
		echo $this->Form->input('address');
		echo $this->Form->input('summary');
	*/
	?>
	<Table id='competitorsTable' class="grid" cellpadding=0 cellspacing=0 border=0 width="804">
				<tr>
					<th>Name</th>
					<th>Rating</th>
					<th>Base Near</th>
					<th>Business Type</th>
					<th>Country</th>
					<th>State</th>
				</tr>
				<tr>
					<td><?php echo $this->Form->input('name', array('label'=>false)); ?></td>
					<td><?php echo $this->Form->input('rating', array('label'=>false)); ?></td>
					<td><?php echo $this->Form->input('base_near', array('label'=>false)); ?></td>
					<td><?php echo $this->Form->input('business_type_id', array('label'=>false)); ?></td>
					<td><?php echo $this->Form->input('country_id', array('label'=>false)); ?></td>
					<td><?php echo $this->Form->input('state_id', array('label'=>false)); ?></td>
				</tr>
				<tr>
					<th>City</th>
					<th>Zip</th>
					<th>Address</th>
					<th>Summary</th>
					<th colspan=2></th>					
				</tr>
				<tr>
					<td><?php echo $this->Form->input('city', array('label'=>false)); ?></td>
					<td><?php echo $this->Form->input('zip', array('label'=>false)); ?></td>
					<td><?php echo $this->Form->input('address', array('label'=>false));?></td>
					<td><?php echo $this->Form->input('summary', array('label'=>false)); ?></td>
					<td colspan=2><?php echo $this->Form->input('id', array('label'=>false)); ?></td>					
				</tr>
	</Table>

	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
