<div class="competitors form">
<?php echo $this->Form->create('Competitor'); ?>
	<fieldset>
		<legend><?php echo __('Edit Competitor'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('rating');
		echo $this->Form->input('base_near');
		echo $this->Form->input('business_type_id');
		echo $this->Form->input('country_id');
		echo $this->Form->input('state_id');
		echo $this->Form->input('city');
		echo $this->Form->input('zip');
		echo $this->Form->input('address');
		echo $this->Form->input('summary');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Competitor.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Competitor.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Competitors'), array('action' => 'index')); ?></li>
		
	</ul>
</div>
