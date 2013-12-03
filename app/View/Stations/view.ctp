<div class="stations view">
<h2><?php  echo __('Station'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($station['Station']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($station['Station']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Corporation Id'); ?></dt>
		<dd>
			<?php echo h($station['Station']['corporation_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cash Register Brand'); ?></dt>
		<dd>
			<?php echo h($station['Station']['cash_register_brand']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ip Address'); ?></dt>
		<dd>
			<?php echo h($station['Station']['ip_address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Name'); ?></dt>
		<dd>
			<?php echo h($station['Station']['user_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($station['Station']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($station['User']['username'], array('controller' => 'users', 'action' => 'view', $station['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Business Type Id'); ?></dt>
		<dd>
			<?php echo h($station['Station']['business_type_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State Id'); ?></dt>
		<dd>
			<?php echo h($station['Station']['state_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('STI Number'); ?></dt>
		<dd>
			<?php echo h($station['Station']['STI_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('General Ledger Number'); ?></dt>
		<dd>
			<?php echo h($station['Station']['general_ledger_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country Id'); ?></dt>
		<dd>
			<?php echo h($station['Station']['country_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fax'); ?></dt>
		<dd>
			<?php echo h($station['Station']['fax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($station['Station']['city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($station['Station']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Street'); ?></dt>
		<dd>
			<?php echo h($station['Station']['street']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Zip'); ?></dt>
		<dd>
			<?php echo h($station['Station']['zip']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($station['Station']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($station['Station']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>

<?php echo $this->element('station_action'); ?>
