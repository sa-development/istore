<div class="vrubyreptcarwashes form">
<?php echo $this->Form->create('Vrubyreptcarwash'); ?>
	<fieldset>
		<legend><?php echo __('Add Vrubyreptcarwash'); ?></legend>
	<?php
		echo $this->Form->input('station_id');
		echo $this->Form->input('periodBeginDate');
		echo $this->Form->input('periodEndDate');
		echo $this->Form->input('periodType');
		echo $this->Form->input('coinRevenue');
		echo $this->Form->input('tokenRevenue');
		echo $this->Form->input('washesUsed');
		echo $this->Form->input('netSales');
		echo $this->Form->input('grossSales');
		echo $this->Form->input('paidTicketsCount');
		echo $this->Form->input('paidTicketsAmount');
		echo $this->Form->input('freeTicketsCount');
		echo $this->Form->input('freeTicketsAmount');
		echo $this->Form->input('fleetTicketsCount');
		echo $this->Form->input('fleetTicketsAmount');
		echo $this->Form->input('cashamount');
		echo $this->Form->input('cashcount');
		echo $this->Form->input('creditamount');
		echo $this->Form->input('creditcount');
		echo $this->Form->input('discounts');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Vrubyreptcarwashes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Stations'), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station'), array('controller' => 'stations', 'action' => 'add')); ?> </li>
	</ul>
</div>
