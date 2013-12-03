<div class="vrubyreptdepartments form">
<?php echo $this->Form->create('Vrubyreptdepartment'); ?>
	<fieldset>
		<legend><?php echo __('Add Vrubyreptdepartment'); ?></legend>
	<?php
		echo $this->Form->input('periodType');
		echo $this->Form->input('name');
		echo $this->Form->input('periodSeqNum');
		echo $this->Form->input('periodBeginDate');
		echo $this->Form->input('periodEndDate');
		echo $this->Form->input('vsdeptBasename');
		echo $this->Form->input('netSalesamount');
		echo $this->Form->input('netSalesitemCount');
		echo $this->Form->input('refundsamount');
		echo $this->Form->input('discountstotalamount');
		echo $this->Form->input('discountspromotionsamount');
		echo $this->Form->input('manualDiscountsamount');
		echo $this->Form->input('grossSales');
		echo $this->Form->input('percentOfSales');
		echo $this->Form->input('station_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Vrubyreptdepartments'), array('action' => 'index')); ?></li>
	</ul>
</div>
