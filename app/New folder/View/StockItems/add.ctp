<div class="stockItems form">
<?php echo $this->Form->create('StockItem'); ?>
	<fieldset>
		<legend><?php echo __('Add Stock Item'); ?></legend>
	<?php
		echo $this->Form->input('warehouse');
		echo $this->Form->input('on_hand');
		echo $this->Form->input('mfg_part_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Stock Items'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Mfg Parts'), array('controller' => 'mfg_parts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mfg Part'), array('controller' => 'mfg_parts', 'action' => 'add')); ?> </li>
	</ul>
</div>
