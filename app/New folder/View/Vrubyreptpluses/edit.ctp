<div class="vrubyreptpluses form">
<?php echo $this->Form->create('Vrubyreptplus'); ?>
	<fieldset>
		<legend><?php echo __('Edit Vrubyreptplus'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('periodType');
		echo $this->Form->input('periodBeginDate');
		echo $this->Form->input('periodEndDate');
		echo $this->Form->input('totalitemCount');
		echo $this->Form->input('totalitemnetSales');
		echo $this->Form->input('totalpercentOfSales');
		echo $this->Form->input('vscashiername');
		echo $this->Form->input('vscashiersysid');
		echo $this->Form->input('upc');
		echo $this->Form->input('modifier');
		echo $this->Form->input('name');
		echo $this->Form->input('salePrice');
		echo $this->Form->input('originalPrice');
		echo $this->Form->input('netsalecount');
		echo $this->Form->input('netsaleamount');
		echo $this->Form->input('netsaleitemCount');
		echo $this->Form->input('percentOfSales');
		echo $this->Form->input('station_id');
		echo $this->Form->input('modfied');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Vrubyreptplus.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Vrubyreptplus.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Vrubyreptpluses'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Stations'), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station'), array('controller' => 'stations', 'action' => 'add')); ?> </li>
	</ul>
</div>
