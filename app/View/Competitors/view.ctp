<div class="competitors view">
<h2><?php  echo __('Competitor'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($competitor['Competitor']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($competitor['Competitor']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rating'); ?></dt>
		<dd>
			<?php echo h($competitor['Competitor']['rating']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Base Near'); ?></dt>
		<dd>
			<?php echo h($competitor['Competitor']['base_near']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Business Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($competitor['BusinessType']['name'], array('controller' => 'business_types', 'action' => 'view', $competitor['BusinessType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country'); ?></dt>
		<dd>
			<?php echo $this->Html->link($competitor['Country']['name'], array('controller' => 'countries', 'action' => 'view', $competitor['Country']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State'); ?></dt>
		<dd>
			<?php echo $this->Html->link($competitor['State']['id'], array('controller' => 'states', 'action' => 'view', $competitor['State']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($competitor['Competitor']['city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Zip'); ?></dt>
		<dd>
			<?php echo h($competitor['Competitor']['zip']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($competitor['Competitor']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Summary'); ?></dt>
		<dd>
			<?php echo h($competitor['Competitor']['summary']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($competitor['Competitor']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($competitor['Competitor']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Competitor'), array('action' => 'edit', $competitor['Competitor']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Competitor'), array('action' => 'delete', $competitor['Competitor']['id']), null, __('Are you sure you want to delete # %s?', $competitor['Competitor']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Competitors'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Competitor'), array('action' => 'add')); ?> </li>
	
	</ul>
</div>
