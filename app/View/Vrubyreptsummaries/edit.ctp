<div class="vrubyreptsummaries form">
<?php echo $this->Form->create('Vrubyreptsummary'); ?>
	<fieldset>
		<legend><?php echo __('Edit Vrubyreptsummary'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('station_id');
		echo $this->Form->input('periodBeginDate');
		echo $this->Form->input('periodEndDate');
		echo $this->Form->input('periodType');
		echo $this->Form->input('netSales');
		echo $this->Form->input('cancelRefund');
		echo $this->Form->input('totalPaymentOut');
		echo $this->Form->input('totalPaymentIn');
		echo $this->Form->input('totalToAccountFor');
		echo $this->Form->input('totalRefundTaxes');
		echo $this->Form->input('totalSalesTaxes');
		echo $this->Form->input('totalTaxes');
		echo $this->Form->input('totalIncludedTaxes');
		echo $this->Form->input('itemCount');
		echo $this->Form->input('customerCount');
		echo $this->Form->input('noSaleCount');
		echo $this->Form->input('drawerViolations');
		echo $this->Form->input('loginOverrides');
		echo $this->Form->input('fuelSales');
		echo $this->Form->input('fuelDiscounts');
		echo $this->Form->input('merchSales');
		echo $this->Form->input('totalDiscounts');
		echo $this->Form->input('totalDiscountscount');
		echo $this->Form->input('payIncount');
		echo $this->Form->input('payIn');
		echo $this->Form->input('payOut');
		echo $this->Form->input('payOutcount');
		echo $this->Form->input('safeDrop');
		echo $this->Form->input('safeDropcount');
		echo $this->Form->input('xmldata');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Vrubyreptsummary.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Vrubyreptsummary.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Vrubyreptsummaries'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Stations'), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station'), array('controller' => 'stations', 'action' => 'add')); ?> </li>
	</ul>
</div>
