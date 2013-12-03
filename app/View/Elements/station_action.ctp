<?php
if (isset($this->params['params']['query']['station']) && !isset($stationId)) {
    $stationId = $this->params['params']['query']['station'];
}

if (isset($this->params->query['station'])) {
    $stationId = $this->params->query['station'];
}
?>
<?php if(isset($stationId)): ?>
<div class="actions">
    <h3><?php echo __('Station'); ?></h3>
    <ul>
		<li><?php echo $this->Html->link(__('Back to station'), array( 'controller' => 'stations', 'action' => 'index')); ?></li>                        
		<li><?php echo $this->Html->link(__('Back to pricebook'), array('controller' => 'pricebooks', 'action' => 'index')); ?></li>   
		<li><?php echo $this->Html->link(__('Back to Dashboard'), array('controller' => 'dashboards', 'action' => 'index')); ?></li>
		
        <li><?php echo $this->Html->link(__('New Station'), array('controller' => 'stations', 'action' => 'add')); ?> </li>
		
        <li><?php echo $this->Html->link(__('Department'), array('controller' => 'departments', 'action' => 'index', '?' => array('station' => $stationId))); ?> </li>
        <li><?php echo $this->Html->link(__('Product code'), array('controller' => 'prodcodes', 'action' => 'index', '?' => array('station' => $stationId))); ?> </li>
        <li><?php echo $this->Html->link(__('Category'), array('controller' => 'categories', 'action' => 'index', '?' => array('station' => $stationId))); ?> </li>
        <li><?php echo $this->Html->link(__('PLUS'), array('controller' => 'pluses', 'action' => 'index', '?' => array('station' => $stationId))); ?> </li>
		
		
    </ul>
</div>
<?php endif; ?>