<div class="stockItems view">
<h2><?php  echo __('Stock Item'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($stockItem['StockItem']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Warehouse'); ?></dt>
		<dd>
			<?php echo h($stockItem['StockItem']['warehouse']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('On Hand'); ?></dt>
		<dd>
			<?php echo h($stockItem['StockItem']['on_hand']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mfg Part'); ?></dt>
		<dd>
			<?php echo $this->Html->link($stockItem['MfgPart']['mfg_part_no'], array('controller' => 'mfg_parts', 'action' => 'view', $stockItem['MfgPart']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Stock Item'), array('action' => 'edit', $stockItem['StockItem']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Stock Item'), array('action' => 'delete', $stockItem['StockItem']['id']), null, __('Are you sure you want to delete # %s?', $stockItem['StockItem']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Stock Items'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Stock Item'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mfg Parts'), array('controller' => 'mfg_parts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mfg Part'), array('controller' => 'mfg_parts', 'action' => 'add')); ?> </li>
	</ul>
</div>
