<div class="pluses view">
<h2><?php  echo __('Plus'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($plus['Plus']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Station'); ?></dt>
		<dd>
			<?php echo $this->Html->link($plus['Station']['name'], array('controller' => 'stations', 'action' => 'view', $plus['Station']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Page'); ?></dt>
		<dd>
			<?php echo h($plus['Plus']['page']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('OfPages'); ?></dt>
		<dd>
			<?php echo h($plus['Plus']['ofPages']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Upc'); ?></dt>
		<dd>
			<?php echo h($plus['Plus']['upc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UpcModifier'); ?></dt>
		<dd>
			<?php echo h($plus['Plus']['upcModifier']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($plus['Plus']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Department'); ?></dt>
		<dd>
			<?php echo h($plus['Plus']['department']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fee'); ?></dt>
		<dd>
			<?php echo h($plus['Plus']['fee']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pcode'); ?></dt>
		<dd>
			<?php echo h($plus['Plus']['pcode']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($plus['Plus']['price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('SellUnit'); ?></dt>
		<dd>
			<?php echo h($plus['Plus']['SellUnit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sysid'); ?></dt>
		<dd>
			<?php echo h($plus['Plus']['sysid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sysid2'); ?></dt>
		<dd>
			<?php echo h($plus['Plus']['sysid2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sysid3'); ?></dt>
		<dd>
			<?php echo h($plus['Plus']['sysid3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sysid4'); ?></dt>
		<dd>
			<?php echo h($plus['Plus']['sysid4']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($plus['Plus']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($plus['Plus']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Plus'), array('action' => 'edit', $plus['Plus']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Plus'), array('action' => 'delete', $plus['Plus']['id']), null, __('Are you sure you want to delete # %s?', $plus['Plus']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Pluses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Plus'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stations'), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station'), array('controller' => 'stations', 'action' => 'add')); ?> </li>
	</ul>
</div>
