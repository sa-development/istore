<?php
if(!isset($station_id)) {
	$station_id = null;
}
?>
<div class="actions">
	<?php echo $this->Form->create('Report', array('type' => 'GET')); ?>    
	<?php echo $this->Form->input('station_id', array('empty' => 'Select Station', 'selected' => $station_id)); ?>
	<?php echo $this->Form->end(); ?>
<fieldset>
	<h3><?php echo __('Fuel'); ?>	</h3>
	<ul>
		<li><?php 
		echo $this->Html->image("actions/invoice.png", array("alt" => "invoice",'width' => '60px','url' =>  array('controller' => 'fuel_invoices', 'action' => 'index')));?></li>
		
		<li><?php 
		echo $this->Html->image("actions/fuel-tanker.png", array("alt" => "fuel_inventories",'width' => '60px','url' =>  array('controller' => 'fuel_inventories', 'action' => 'index')));?></li>
		<li><?php 
		echo $this->Html->image("actions/1369124255_fuel.png", array("alt" => "fuel_sales",'width' => '60px','url' =>  array('controller' => 'fuel_sales', 'action' => 'index')));?></li>
		
	</ul>
</fieldset>

<fieldset>
	<h3><?php echo __('Store'); ?></h3>
	<ul>
		<li><?php 
		echo $this->Html->image("actions/1369125582_shop.png", array("alt" => "invoice",'width' => '60px','url' =>  array('controller' => 'fuel_invoices', 'action' => 'index')));?></li>
		
		<li><?php 
		echo $this->Html->image("actions/inventory2.png", array("alt" => "invoice",'width' => '60px','url' =>  array('controller' => 'fuel_invoices', 'action' => 'index')));?></li>
		
		<li><?php 
		echo $this->Html->image("actions/inventory2.png", array("alt" => "invoice",'width' => '60px','url' =>  array('controller' => 'fuel_invoices', 'action' => 'index')));?></li>
		
	</ul>
</fieldset>
</div>
