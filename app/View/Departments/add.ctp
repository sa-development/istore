<div class="departments form">
<?php echo $this->Form->create('Department'); ?>
	<fieldset>
		<legend><?php echo __('Add Department'); ?></legend>
	<?php
		echo $this->Form->input('station_id');
		echo $this->Form->input('name');
		echo $this->Form->input('department_type_id', array('empty'=>'-- Department Type --'));
		echo $this->Form->input('minAmt', array('label'=>'Minimum Price'));
		echo $this->Form->input('maxAmt', array('label'=>'Maximum Price'));
		
		echo $this->Form->input('description', array('type'=>'textarea'));
		echo $this->Form->input('default_price');
		
		echo $this->Form->input('default_sales_quantity');
		echo $this->Form->input('minimum_age');
		echo $this->Form->input('fee_charges');
		
		echo $this->Form->input('isAllowFS');
		echo $this->Form->input('isNegative');
		echo $this->Form->input('isFuel');
		echo $this->Form->input('isAllowFQ');
		echo $this->Form->input('isAllowSD');
		echo $this->Form->input('isBL1');
		echo $this->Form->input('isBL2');
		echo $this->Form->input('isMoneyOrder');
		echo $this->Form->input('category_id', array('label'=>'Matching Category', 'empty'=>'-- select category--'));
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

