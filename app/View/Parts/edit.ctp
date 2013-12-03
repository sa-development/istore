<div class="parts form">
<?php echo $this->Form->create('Part'); ?>
	<fieldset>
		<legend><?php echo __('Edit Part'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('part_no');
		echo $this->Form->input('rev');
		echo $this->Form->input('class');
		echo $this->Form->input('type');
		echo $this->Form->input('description');
		echo $this->Form->input('material_type');
		echo $this->Form->input('source');
		echo $this->Form->input('unit_cost');
		echo $this->Form->input('note');
		echo $this->Form->input('package');
		echo $this->Form->input('active');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Part.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Part.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Parts'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Kitparts'), array('controller' => 'kitparts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Kitpart'), array('controller' => 'kitparts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mfgparts'), array('controller' => 'mfgparts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mfgpart'), array('controller' => 'mfgparts', 'action' => 'add')); ?> </li>
	</ul>
</div>
