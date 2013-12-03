<div class="fuelSuppliers view">
<h2><?php  echo __('Fuel Supplier'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($fuelSupplier['FuelSupplier']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($fuelSupplier['FuelSupplier']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Station'); ?></dt>
		<dd>
			<?php echo $this->Html->link($fuelSupplier['Station']['name'], array('controller' => 'stations', 'action' => 'view', $fuelSupplier['Station']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($fuelSupplier['User']['username'], array('controller' => 'users', 'action' => 'view', $fuelSupplier['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($fuelSupplier['FuelSupplier']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($fuelSupplier['FuelSupplier']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Fuel Supplier'), array('action' => 'edit', $fuelSupplier['FuelSupplier']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Fuel Supplier'), array('action' => 'delete', $fuelSupplier['FuelSupplier']['id']), null, __('Are you sure you want to delete # %s?', $fuelSupplier['FuelSupplier']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Fuel Suppliers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fuel Supplier'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stations'), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station'), array('controller' => 'stations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
