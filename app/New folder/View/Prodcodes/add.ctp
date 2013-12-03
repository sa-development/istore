<div class="prodcodes form">
<?php echo $this->Form->create('Prodcode'); ?>
	<fieldset>
		<legend><?php echo __('Add Prodcode'); ?></legend>
	<?php
		//echo $this->Form->input('sysid');
		echo $this->Form->input('name');
		$yesNoArray = array('0' => 'No', '1' => 'Yes');
		echo $this->Form->input('isNotSold', array('type' => 'select', 'selected' => false, 'options' => $yesNoArray));
		echo $this->Form->input('isFuel', array('type' => 'select', 'selected' => false, 'options' => $yesNoArray));
		echo $this->Form->input('station_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

<?php echo $this->element('station_action'); ?>

<div class="actions">
	<h3><?php echo __('Prodcodes'); ?></h3>
		<ul>
			<li><?php echo $this->Html->link(__('Back to station'), array( 'controller' => 'stations', 'action' => 'index')); ?></li>                        
			<li><?php echo $this->Html->link(__('Back to pricebook'), array('controller' => 'pricebooks', 'action' => 'index')); ?></li>                        
		</ul>
</div>

