<div class="stationPlulists form">
<?php echo $this->Form->create('StationPlulist'); ?>
	<fieldset>
		<legend><?php echo __('Add Station Plulist'); ?></legend>
	<?php
		echo $this->Form->input('station_id');
		echo $this->Form->input('domain');
		echo $this->Form->input('upc');
		echo $this->Form->input('upcModifier');
		echo $this->Form->input('description');
		echo $this->Form->input('department');
		echo $this->Form->input('fee');
		echo $this->Form->input('pcode');
		echo $this->Form->input('price');
		echo $this->Form->input('SellUnit');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Station Plulists'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Stations'), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station'), array('controller' => 'stations', 'action' => 'add')); ?> </li>
	</ul>
</div>
