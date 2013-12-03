
<ul class="dropdown">
	<li><?php echo $this->Html->link(__('Dashboard'), array('controller' => 'dashboards', 'action' => 'index'), array('class' => ($this->params['controller']=='dashboards') ?'active':'')); ?></li>
	
	<li><?php echo $this->Html->link(__('Employees'), array('controller' => 'employees', 'action' => 'index'), array('class' => ($this->params['controller']=='employees') ?'active':'')); ?></li>
	
	<li><?php echo $this->Html->link(__('Corporation'), array('controller' => 'Corporations', 'action' => 'index'), array('class' => ($this->params['controller']=='Corporations') ?'active':'')); ?></li>
	
	
	<li><?php echo $this->Html->link(__('Competitors'), array('controller' => 'competitors', 'action' => 'index'), array('class' => ($this->params['controller']=='competitors') ?'active':'')); ?></li>
	
    <li><?php echo $this->Html->link(__('Reports'), array('controller' => 'reports', 'action' => 'index'), array('class' => ($this->params['controller']=='reports') ?'active':'')); ?></li>
	
    <li><?php echo $this->Html->link(__('Stations'), array('controller' => 'stations', 'action' => 'index'), array('class' => ($this->params['controller']=='stations') ?'active':'')); ?></li>
	
	<li><?php echo $this->Html->link(__('PriceBook'), array('controller' => 'pricebooks', 'action' => 'index'), array('class' => ($this->params['controller']=='pricebooks') ?'active':'')); ?></li>
	
	<li><?php echo $this->Html->link(__('Accounting'), array('controller' => 'accountings', 'action' => 'index'), array('class' => ($this->params['controller']=='accountings') ?'active':'')); ?></li>
	
	<li><?php echo $this->Html->link(__('Upload Invoices'), array('controller' => 'uploadinvoices', 'action' => 'index'), array('class' => ($this->params['controller']=='uploadinvoices') ?'active':'')); ?></li>
	
	<li><?php echo $this->Html->link(__('Inventory'), array('controller' => 'inventories', 'action' => 'index'), array('class' => ($this->params['controller']=='inventories') ?'active':'')); ?></li>
	
	<li><?php echo $this->Html->link(__('Vendors'), array('controller' => 'vendors', 'action' => 'index'), array('class' => ($this->params['controller']=='vendors') ?'active':'')); ?></li>
</ul>

