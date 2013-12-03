<div class="corporations view">
<h2><?php  echo __('Corporation'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($corporation['Corporation']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($corporation['Corporation']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($corporation['Corporation']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Registration Number'); ?></dt>
		<dd>
			<?php echo h($corporation['Corporation']['registration_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($corporation['Corporation']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fax'); ?></dt>
		<dd>
			<?php echo h($corporation['Corporation']['fax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email Id'); ?></dt>
		<dd>
			<?php echo h($corporation['Corporation']['email_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Zip'); ?></dt>
		<dd>
			<?php echo h($corporation['Corporation']['zip']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Quick Book Path'); ?></dt>
		<dd>
			<?php echo h($corporation['Corporation']['quick_book_path']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tax  Code'); ?></dt>
		<dd>
			<?php echo h($corporation['Corporation']['tax _code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country Id'); ?></dt>
		<dd>
			<?php echo h($corporation['Corporation']['country_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State Id'); ?></dt>
		<dd>
			<?php echo h($corporation['Corporation']['state_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($corporation['Corporation']['city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($corporation['Corporation']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($corporation['Corporation']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Corporation'), array('action' => 'edit', $corporation['Corporation']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Corporation'), array('action' => 'delete', $corporation['Corporation']['id']), null, __('Are you sure you want to delete # %s?', $corporation['Corporation']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Corporations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Corporation'), array('action' => 'add')); ?> </li>
	</ul>
</div>
