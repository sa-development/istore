<div class="prodcodes form">
<?php echo $this->Form->create('Prodcode'); ?>
	<fieldset>
		<legend><?php echo __('Edit Prodcode'); ?></legend>
	<?php
		echo $this->Form->hidden('id');
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
	<h3><?php echo __('Product code'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Prodcode.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Prodcode.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Prodcodes'), array('action' => 'index')); ?></li>
	</ul>
</div>
