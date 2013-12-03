<?php
if (isset($this->params['params']['query']['station']) && !isset($stationId)) {
    $stationId = $this->params['params']['query']['station'];
}

if (isset($this->params->query['station'])) {
    $stationId = $this->params->query['station'];
}
?>
<div class="actions">
	<h3><?php echo __('Select Reports'); ?></h3>
    <ul>
		<?php if(isset($stationId)): ?>
		 <li><?php echo $this->Html->link(__('Vfueltotals'), array('controller' => 'vfueltotals', 'action' => 'index', '?' => array('station' => $stationId)));?> 
		 <li><?php echo $this->Html->link(__('Vruby Departments'), array('controller' => 'vrubyreptdepartments', 'action' => 'index', '?' => array('station' => $stationId)));?>
		<li><?php echo $this->Html->link(__('Vruby PLU'), array('controller' => 'vrubyreptpluses', 'action' => 'index', '?' => array('station' => $stationId)));?>
        <li><?php echo $this->Html->link(__('Vruby Category'), array('controller' => 'vrubyreptcategories', 'action' => 'index', '?' => array('station' => $stationId)));?>
		<li>..........................</li> 
		<?php endif; ?>
	
	<li><?php echo $this->Html->link(__('Back to station'), array( 'controller' => 'stations', 'action' => 'index')); ?></li>                        
	<li><?php echo $this->Html->link(__('Back to pricebook'), array('controller' => 'pricebooks', 'action' => 'index')); ?></li>   
	<li><?php echo $this->Html->link(__('Back to Dashboard'), array('controller' => 'dashboards', 'action' => 'index')); ?></li>
	
	</ul>
</div>