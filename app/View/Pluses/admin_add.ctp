<div class="pluses form">
<?php echo $this->Form->create('Plus'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Plus'); ?></legend>
	<?php
		echo $this->Form->input('station_id');
		echo $this->Form->input('page');
		echo $this->Form->input('ofPages');
		echo $this->Form->input('upc');
		echo $this->Form->input('upcModifier');
		echo $this->Form->input('description');
		echo $this->Form->input('department');
		echo $this->Form->input('fee');
		echo $this->Form->input('pcode');
		echo $this->Form->input('price');
		echo $this->Form->input('SellUnit');
		echo $this->Form->input('sysid');
		echo $this->Form->input('sysid2');
		echo $this->Form->input('sysid3');
		echo $this->Form->input('sysid4');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Pluses'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Stations'), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station'), array('controller' => 'stations', 'action' => 'add')); ?> </li>
	</ul>
</div>
