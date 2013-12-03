<div class="uploadinvoices form">
<?php echo $this->Form->create('Uploadinvoice'); ?>
	<fieldset>
		<legend><?php echo __('Edit Uploadinvoice'); ?></legend>
	<?php
		//echo $this->Form->input('id');
		
		echo $this->Form->input('user_id');
		echo $this->Form->input('file');
		echo $this->Form->input('name');
		echo $this->Form->input('note');
		echo $this->Form->hidden('status', array('value' => 'Process'));
		
	?>
	<!--
	        <Table id='uploadinvoicesTable' class="grid" cellpadding=0 cellspacing=0 border=0 width="804">
				<tr>
					<th></th>
					<th>File</th>
					<th>Name</th>
					<th>Note</th>
					<th></th>
					
				</tr>
				<tr>
					<td><?php //echo $this->Form->input('user_id'); ?></td>
					<td><?php echo $this->Form->input('file', array('type' => 'file','label'=>false)); ?></td>
					<td><?php echo $this->Form->input('name', array('label'=>false)); ?></td>
					<td><?php echo $this->Form->input('note', array('label'=>false)); ?></td>
					<td><?php echo $this->Form->hidden('status', array('value' => 'Pending')); ?></td>			
				</tr>
			</Table>
			-->
	</fieldset>
<?php echo $this->Form->end(__('Processed')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Uploadinvoice.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Uploadinvoice.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Uploadinvoices'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>