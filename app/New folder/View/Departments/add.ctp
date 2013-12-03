<div class="departments form">
<?php echo $this->Form->create('Department'); ?>
	<fieldset>
		<legend><?php echo __('Add Department'); ?></legend>
	<?php
		echo $this->Form->input('station_id');
		echo $this->Form->input('name');
		echo $this->Form->input('minAmt');
		echo $this->Form->input('maxAmt');
		echo $this->Form->input('isAllowFS');
		echo $this->Form->input('isNegative');
		echo $this->Form->input('isFuel');
		echo $this->Form->input('isAllowFQ');
		echo $this->Form->input('isAllowSD');
		echo $this->Form->input('isBL1');
		echo $this->Form->input('isBL2');
		echo $this->Form->input('isMoneyOrder');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>


<div class="actions">
	<h3><?php echo __('Department'); ?></h3>
		<ul>
			<li><?php echo $this->Html->link(__('Back to station'), array( 'controller' => 'stations', 'action' => 'index')); ?></li>                        
			<li><?php echo $this->Html->link(__('Back to pricebook'), array('controller' => 'pricebooks', 'action' => 'index')); ?></li>                        
		</ul>
</div>

