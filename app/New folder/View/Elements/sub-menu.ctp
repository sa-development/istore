<?php if ('stations' == $this->params['controller'] && 'posview' == $this->params['action']): ?>

<?php
    if (isset($this->params['params']['query']['station']) && !isset($stationId)) {
        $stationId = $this->params['params']['query']['station'];
    }

    if (isset($this->params->query['station'])) {
        $stationId = $this->params->query['station'];
    }
?>

    <div id="sub-menu">
        <ul class="dropdown">
            <li><?php echo $this->Html->link(__('Department'), array('controller' => 'departments', 'action' => 'index', '?' => array('station' => $stationId))); ?> </li>
            <li><?php echo $this->Html->link(__('Product code'), array('controller' => 'prodcodes', 'action' => 'index', '?' => array('station' => $stationId))); ?> </li>
            <li><?php echo $this->Html->link(__('Category'), array('controller' => 'categories', 'action' => 'index', '?' => array('station' => $stationId))); ?> </li>
            <li><?php echo $this->Html->link(__('PLUS'), array('controller' => 'pluses', 'action' => 'index', '?' => array('station' => $stationId))); ?> </li>
        </ul>
    </div>
<?php endif; ?>
