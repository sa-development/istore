<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('erp.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
	
		<div id="header">
			<h1>
			<?php echo ' | ' . $this->Html->link(__('Dashboard'), array('controller' => 'dashboards', 'action' => 'index')); ?>
			<?php echo ' | ' . $this->Html->link(__('BusinessTypes'), array('controller' => 'business_types', 'action' => 'index')); ?>
			<?php echo ' | ' . $this->Html->link(__('Users'), array('controller' => 'users', 'action' => 'index')); ?>
			<?php echo ' | ' . $this->Html->link(__('State'), array('controller' => 'states', 'action' => 'index')); ?>
			<?php echo ' | ' . $this->Html->link(__('Countries'), array('controller' => 'countries', 'action' => 'index')); ?>
			<?php echo ' | ' . $this->Html->link(__('Groups'), array('controller' => 'groups', 'action' => 'index')); ?>
				
			<?php
			if (isset($current_user) && ($current_user != "")) {
				if ($current_user_superadmin != "") {
					//echo ' and are superadmin.';
				}
				echo '[  X-' . $this->Html->link(__('Logout'), array('controller' => 'users', 'action' => 'logout')). ' ]';
			}
			?>
			</h1>
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			Version 1.0
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>