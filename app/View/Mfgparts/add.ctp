<div class="mfgparts form">
<?php echo $this->Form->create('Mfgpart'); ?>
	<fieldset>
		<legend><?php echo __('Add Mfgpart'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Mfgparts'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Parts'), array('controller' => 'parts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Part'), array('controller' => 'parts', 'action' => 'add')); ?> </li>
	</ul>
</div>
