<div class="inventories view">
<h2><?php  echo __('Inventory'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($inventory['Inventory']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Station'); ?></dt>
		<dd>
			<?php echo $this->Html->link($inventory['Station']['name'], array('controller' => 'stations', 'action' => 'view', $inventory['Station']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Department'); ?></dt>
		<dd>
			<?php echo $this->Html->link($inventory['Department']['name'], array('controller' => 'departments', 'action' => 'view', $inventory['Department']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Plus'); ?></dt>
		<dd>
			<?php echo h($inventory['Inventory']['plus']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ticket Adjustment'); ?></dt>
		<dd>
			<?php echo h($inventory['Inventory']['ticket_adjustment']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Book Inventory'); ?></dt>
		<dd>
			<?php echo h($inventory['Inventory']['book_inventory']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Physical Inventory'); ?></dt>
		<dd>
			<?php echo h($inventory['Inventory']['physical_inventory']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Quantity'); ?></dt>
		<dd>
			<?php echo h($inventory['Inventory']['quantity']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Short Over'); ?></dt>
		<dd>
			<?php echo h($inventory['Inventory']['short_over']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Time'); ?></dt>
		<dd>
			<?php echo h($inventory['Inventory']['time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Physical'); ?></dt>
		<dd>
			<?php echo h($inventory['Inventory']['last_physical']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Puchase'); ?></dt>
		<dd>
			<?php echo h($inventory['Inventory']['puchase']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sales'); ?></dt>
		<dd>
			<?php echo h($inventory['Inventory']['sales']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Buydown'); ?></dt>
		<dd>
			<?php echo h($inventory['Inventory']['buydown']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price Change'); ?></dt>
		<dd>
			<?php echo h($inventory['Inventory']['price_change']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Spoilage'); ?></dt>
		<dd>
			<?php echo h($inventory['Inventory']['spoilage']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cost Of Inventory'); ?></dt>
		<dd>
			<?php echo h($inventory['Inventory']['cost_of_inventory']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($inventory['Inventory']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($inventory['Inventory']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Inventory'), array('action' => 'edit', $inventory['Inventory']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Inventory'), array('action' => 'delete', $inventory['Inventory']['id']), null, __('Are you sure you want to delete # %s?', $inventory['Inventory']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Inventories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inventory'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stations'), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station'), array('controller' => 'stations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Departments'), array('controller' => 'departments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Department'), array('controller' => 'departments', 'action' => 'add')); ?> </li>
	</ul>
</div>
