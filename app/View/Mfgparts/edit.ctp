<div class="mfgparts form">
<?php echo $this->Form->create('Mfgpart'); ?>
	<fieldset>
		<legend><?php echo __('Edit Mfgpart'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('mfgr');
		echo $this->Form->input('pref');
		echo $this->Form->input('mfg_part_no');
		echo $this->Form->input('part_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Mfgpart.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Mfgpart.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Mfgparts'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Parts'), array('controller' => 'parts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Part'), array('controller' => 'parts', 'action' => 'add')); ?> </li>
	</ul>
</div>
