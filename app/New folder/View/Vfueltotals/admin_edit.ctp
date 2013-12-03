<div class="vfueltotals form">
<?php echo $this->Form->create('Vfueltotal'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Vfueltotal'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('periodType');
		echo $this->Form->input('name');
		echo $this->Form->input('periodSeqNum');
		echo $this->Form->input('periodBeginDate');
		echo $this->Form->input('periodEndDate');
		echo $this->Form->input('site');
		echo $this->Form->input('fuelingPositionId');
		echo $this->Form->input('productNumber');
		echo $this->Form->input('name2');
		echo $this->Form->input('fuelVolume');
		echo $this->Form->input('uom');
		echo $this->Form->input('fuelMoney');
		echo $this->Form->input('currency');
		echo $this->Form->input('productID');
		echo $this->Form->input('fuelingPointStatus');
		echo $this->Form->input('station_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Vfueltotal.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Vfueltotal.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Vfueltotals'), array('action' => 'index')); ?></li>
	</ul>
</div>
