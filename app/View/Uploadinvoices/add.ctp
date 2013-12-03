<div class="uploadinvoices form">
<?php echo $this->Form->create('Uploadinvoice', array('type'=>'file')); ?>
	<fieldset>
		<legend><?php echo __('Add Uploadinvoice'); ?></legend>
	<?php
		//echo $this->Form->input('user_id');
		
		echo $this->Form->input('file', array('type' => 'file'));
		echo $this->Form->input('name');
		echo $this->Form->input('note');
		echo $this->Form->hidden('status', array('value' => 'Pending'));
		
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
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Uploadinvoices'), array('action' => 'index')); ?></li>
	</ul>
</div>
