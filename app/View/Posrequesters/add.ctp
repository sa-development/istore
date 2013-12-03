<?php
$gemcmds = array(
			'banner' => 'banner', 
			'category' => 'category',
			'plu' => 'plu'
		   );

$hours = array();
for($ii=1; $ii<=24;$ii++) {
	$hours[strtotime("+$ii Hour")] = "Every $ii hours";
}
	$hours[strtotime("+1 week")] = "Every week";
?>
<div class="posrequesters form">
<?php echo $this->Form->create('Posrequester'); ?>
	<fieldset>
		<legend><?php echo __('Add Posrequester'); ?></legend>
	<?php
		echo $this->Form->input('station_id');
		echo $this->Form->input('cmd', array('options' => $gemcmds));
		echo $this->Form->input('data');
		echo $this->Form->input('recursive');
		echo $this->Form->input('after_hour', array('options' => $hours));
		//echo $this->Form->input('status', array(''));
		echo $this->Form->hidden('active', array('value' => 1));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Posrequesters'), array('action' => 'index')); ?></li>
	</ul>
</div>
