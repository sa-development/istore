<div class="fuelSales view">
<h2><?php  echo __('Fuel Sale'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($fuelSale['FuelSale']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product Type'); ?></dt>
		<dd>
			<?php echo h($fuelSale['FuelSale']['product_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Volume'); ?></dt>
		<dd>
			<?php echo h($fuelSale['FuelSale']['volume']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Retail'); ?></dt>
		<dd>
			<?php echo h($fuelSale['FuelSale']['retail']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amount'); ?></dt>
		<dd>
			<?php echo h($fuelSale['FuelSale']['amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Adjustment'); ?></dt>
		<dd>
			<?php echo h($fuelSale['FuelSale']['adjustment']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Station'); ?></dt>
		<dd>
			<?php echo $this->Html->link($fuelSale['Station']['name'], array('controller' => 'stations', 'action' => 'view', $fuelSale['Station']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($fuelSale['FuelSale']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($fuelSale['FuelSale']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Fuel Sale'), array('action' => 'edit', $fuelSale['FuelSale']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Fuel Sale'), array('action' => 'delete', $fuelSale['FuelSale']['id']), null, __('Are you sure you want to delete # %s?', $fuelSale['FuelSale']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Fuel Sales'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fuel Sale'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stations'), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station'), array('controller' => 'stations', 'action' => 'add')); ?> </li>
	</ul>
</div>
