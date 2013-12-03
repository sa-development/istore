<?php

$istoreMenus = array(
	'reports' => array('label' => 'Reports', 'url' => array('controller' => 'reports', 'action' => 'index')),
	'dataentry' => array('label' => 'Data Entry', 'url' => array('controller' => 'dataentries', 'action' => 'index')),
	'accounting' => array('label' => 'Accounting', 'url' => array('controller' => 'accounts', 'action' => 'index')),
	'pricebook' => array('label' => 'Price Book', 'url' => array('controller' => 'pricebooks', 'action' => 'index')),
	'admintools' => array('label' => 'Admin Tools', 'url' => array('controller' => 'settings', 'action' => 'index')),
);

//$istoreMenus['company']['submenu'][] = array('label' => 'sublink1', 'url' => '#');
//$istoreMenus['company']['submenu'][] = array('label' => 'sublink2', 'url' => '#');
?>


<div
	class="nav-outer-repeat"><!--  start nav-outer -->
<div class="nav-outer"><!--  start nav -->
<div class="nav">
<div class="table"><?php foreach($istoreMenus as $mKey => $mvalue): ?>
<ul class="select">
	<li><?php echo $this->Html->link($mvalue['label'], array(
    'controller' => $mvalue['url']['controller'],
    'action' => $mvalue['url']['action'],
	1)
	);
	?> <?php //echo $this->Html->link($mvalue['label'], $mvalue['url']); ?>
	<!--[if lte IE 6]><table><tr><td><![endif]-->
	<div class="select_sub">
	<ul class="sub">
	<?php if (isset($mvalue['submenu'])) { ?>
	<?php foreach($mvalue['submenu'] as $sKey => $svalue): ?>
		<li><?php echo $this->Html->link($svalue['label'], $svalue['url']); ?>
		</li>
		<?php endforeach;?>
		<?php }  ?>
	</ul>
	</div>
	<!--[if lte IE 6]></td></tr></table></a><![endif]--></li>
</ul>
<div class="nav-divider">&nbsp;</div>
		<?php endforeach;?>


<div class="clear"></div>
</div>
<div class="clear"></div>
</div>
<!--  start nav --></div>
<div class="clear"></div>
<!--  start nav-outer --></div>
