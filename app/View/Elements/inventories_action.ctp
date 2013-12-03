<?php
if(!isset($station_id)) {
	$station_id = null;
}
?>
<div class="actions no-css">
<fieldset>
	<h3><?php echo __('Fuel'); ?>	</h3>
	<ul>
		<li><?php echo $this->Html->link('Invoices',array('controller' => 'fuel_invoices', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link('Inventories',array('controller' => 'fuel_inventories', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link('Sales',array('controller' => 'fuel_sales', 'action' => 'index')); ?></li>
	</ul>
</fieldset>

<fieldset>
	<h3><?php echo __('Store'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link('Invoices',array('controller' => 'store_invoices', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link('Spoilages',array('controller' => 'store_spoilages', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link('Purches',array('controller' => 'store_purches', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link('Buydowns',array('controller' => 'store_buydowns', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link('Pricechanges',array('controller' => 'store_pricechanges', 'action' => 'index')); ?></li>
	</ul>
</fieldset>
</div>
