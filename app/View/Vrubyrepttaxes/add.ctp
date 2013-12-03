<div class="vrubyrepttaxes form">
<?php echo $this->Form->create('Vrubyrepttax'); ?>
	<fieldset>
		<legend><?php echo __('Add Vrubyrepttax'); ?></legend>
	<?php
		echo $this->Form->input('station_id');
		echo $this->Form->input('periodBeginDate');
		echo $this->Form->input('periodEndDate');
		echo $this->Form->input('periodType');
		echo $this->Form->input('actualTaxRate');
		echo $this->Form->input('taxableSales');
		echo $this->Form->input('nonTaxableSales');
		echo $this->Form->input('salesTax');
		echo $this->Form->input('refundTax');
		echo $this->Form->input('netTax');
		echo $this->Form->input('vrubyrepttaxName');
		echo $this->Form->input('taxRate');
		echo $this->Form->input('byRegister_totals_actualTaxRate');
		echo $this->Form->input('byRegister_taxableSales');
		echo $this->Form->input('byRegister_nonTaxableSales');
		echo $this->Form->input('byRegister_salesTax');
		echo $this->Form->input('byRegister_refundTax');
		echo $this->Form->input('byRegister_netTax');
		echo $this->Form->input('byRegister_name');
		echo $this->Form->input('byRegister_taxRate');
		echo $this->Form->input('byCashier_totals_actualTaxRate');
		echo $this->Form->input('byCashier_taxableSales');
		echo $this->Form->input('byCashier_nonTaxableSales');
		echo $this->Form->input('byCashier_salesTax');
		echo $this->Form->input('byCashier_refundTax');
		echo $this->Form->input('byCashier_netTax');
		echo $this->Form->input('byCashier_name');
		echo $this->Form->input('byCashier_taxRate');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Vrubyrepttaxes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Stations'), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station'), array('controller' => 'stations', 'action' => 'add')); ?> </li>
	</ul>
</div>
