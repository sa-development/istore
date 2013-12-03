<?php
//$this->requestAction('vrubyreptdepartments/index', array('pass' => array('station' => 1)));
//print_r($this->params->params['pass']);
if (in_array('fule_sales', $this->params->params['pass']) && in_array('department', $this->params->params['pass'])) {
	echo $this->requestAction(
		array('controller' => 'vrubyreptdepartments', 'action' => 'index/', implode('/', $this->params->params['pass'])),
		array('return')
	);
} else if (in_array('fule_sales', $this->params->params['pass']) && in_array('category', $this->params->params['pass'])) {
	echo $this->requestAction(
		array('controller' => 'vrubyreptcategories', 'action' => 'index/', implode('/', $this->params->params['pass'])),
		array('return')
	);
} else if (in_array('fule_sales', $this->params->params['pass']) && in_array('total', $this->params->params['pass'])) {
	echo $this->requestAction(
		array('controller' => 'vfueltotals', 'action' => 'index/', implode('/', $this->params->params['pass'])),
		array('return')
	);
} else if (in_array('fule_sales', $this->params->params['pass']) && in_array('tank_report', $this->params->params['pass'])) {
	echo $this->requestAction(
		array('controller' => 'vrubyrepttanks', 'action' => 'index/', implode('/', $this->params->params['pass'])),
		array('return')
	);
} else if (in_array('fule_sales', $this->params->params['pass']) && in_array('tax', $this->params->params['pass'])) {
	echo $this->requestAction(
		array('controller' => 'vrubyrepttaxes', 'action' => 'index/', implode('/', $this->params->params['pass'])),
		array('return')
	);
}  else if (in_array('fule_sales', $this->params->params['pass']) && in_array('priceslevel', $this->params->params['pass'])) {
	echo $this->requestAction(
		array('controller' => 'vrubyreptprpricelvls', 'action' => 'index/', implode('/', $this->params->params['pass'])),
		array('return')
	);
} else if (in_array('fule_sales', $this->params->params['pass']) && in_array('categorysales', $this->params->params['pass'])) {
	echo $this->requestAction(
		array('controller' => 'vfueltotals', 'action' => 'categorysales/', implode('/', $this->params->params['pass'])),
		array('return')
	);
} else if (in_array('fule_sales', $this->params->params['pass']) && in_array('network', $this->params->params['pass'])) {
	echo $this->requestAction(
		array('controller' => 'vrubyreptnetworks', 'action' => 'index/', implode('/', $this->params->params['pass'])),
		array('return')
	);
} else if (in_array('fule_sales', $this->params->params['pass']) && in_array('dcrstatic', $this->params->params['pass'])) {
	echo $this->requestAction(
		array('controller' => 'vfueltotals', 'action' => 'dcrstatic/', implode('/', $this->params->params['pass'])),
		array('return')
	);
} else if (in_array('fule_sales', $this->params->params['pass']) && in_array('summary', $this->params->params['pass'])) {
	echo $this->requestAction(
		array('controller' => 'vfueltotals', 'action' => 'summary/', implode('/', $this->params->params['pass'])),
		array('return')
	);
} else if (in_array('fule_sales', $this->params->params['pass']) && in_array('department_sales_history', $this->params->params['pass'])) {
	echo $this->requestAction(
		array('controller' => 'vfueltotals', 'action' => 'departmentsaleshistory/', implode('/', $this->params->params['pass'])),
		array('return')
	);
} else if (in_array('fule_sales', $this->params->params['pass']) && in_array('deal', $this->params->params['pass'])) {
	echo $this->requestAction(
		array('controller' => 'vrubyreptdeals', 'action' => 'index/', implode('/', $this->params->params['pass'])),
		array('return')
	);
} else if (in_array('fule_sales', $this->params->params['pass']) && in_array('tierproduct', $this->params->params['pass'])) {
	echo $this->requestAction(
		array('controller' => 'vrubyrepttierproducts', 'action' => 'index/', implode('/', $this->params->params['pass'])),
		array('return')
	);
}  else if (in_array('fule_sales', $this->params->params['pass']) && in_array('carwash', $this->params->params['pass'])) {
	echo $this->requestAction(
		array('controller' => 'vrubyreptcarwashes', 'action' => 'index/', implode('/', $this->params->params['pass'])),
		array('return')
	);

} else if (in_array('store', $this->params->params['pass']) && in_array('department', $this->params->params['pass'])) {
	echo $this->requestAction(
		array('controller' => 'vrubyreptdepartments', 'action' => 'index/', implode('/', $this->params->params['pass'])),
		array('return')
	);
} else if (in_array('store', $this->params->params['pass']) && in_array('category', $this->params->params['pass'])) {
	echo $this->requestAction(
		array('controller' => 'vrubyreptcategories', 'action' => 'index/', implode('/', $this->params->params['pass'])),
		array('return')
	);
}  else {
	echo $this->requestAction(
		array('controller' => $this->params->params['pass'][1], 'action' => $this->params->params['pass'][2].$this->params->params['pass'][3], $this->params->params['pass'][0]),
		array('return')
	);
	//echo "<H1>No Report Data Available!!!</H1>";
}
?>