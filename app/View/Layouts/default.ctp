<?php
/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.libs.view.templates.layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 * 
 * Template mod by Sebastian Nilsson. http://sebastiannilsson.com
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php echo $this->Html->charset(); ?>
        <title>
            <?php __('CakePHP: the rapid development php framework:'); ?>
            <?php echo $title_for_layout; ?>
        </title>
      
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"> </script>
	
        <title>HOME</title>
        </head>
        <body>
            <div id="container">
                <div id="header">
                    <div id="logo"><a href="<?php echo $this->Html->url(array('controller' => 'dashboards', 'action' => 'index'));?>"><?php echo $this->Html->image('istore-offc-logo.jpg'); ?></a></div>
                    <div id="info">
					<span class="logout-links"><a href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'logout'));?>"><?php echo $this->Html->image('logout-h.png', array('width' => '20')); ?></a></span>
					<a class="home-link" href="<?php echo $this->Html->url(array('controller' => 'dashboards', 'action' => 'index'));?>"><?php echo $this->Html->image('home_w.png', array('width' => '20')); ?></a>
                    <?php
                    $userInfo = $this->Session->read('Auth.User');
                    if (isset($userInfo['id']) && $userInfo['id'] > 0) {
                        //echo 'Welcome ' . $userInfo['username'] . ' | ' . $userInfo['first_name'] . ' ' . $userInfo['last_name'] . '<BR>';
						echo '<span class="welcome-user">Welcome ' . $userInfo['username'] . ' | ';
						?></span>
						
				<?php
						
						//echo '<BR>';
						
						
                    ?>
                    <span class="date-time">
					<?php echo date("D M d"); ?>
                        <span id=curTime></span></span>
                        <script type="text/javascript">

                            <!-- Put the following code in your JS file or Head Tags ---->
                            <!--

                            function DisplayTime(){
                                if (!document.all && !document.getElementById)
                                    return
                                timeElement=document.getElementById? document.getElementById("curTime"): document.all.tick2
                                var CurrentDate=new Date()
                                var hours=CurrentDate.getHours()
                                var minutes=CurrentDate.getMinutes()
                                var seconds=CurrentDate.getSeconds()
                                var DayNight="PM"
                                if (hours<12) DayNight="AM";
                                if (hours>12) hours=hours-12;
                                if (hours==0) hours=12;
                                if (minutes<=9) minutes="0"+minutes;
                                if (seconds<=9) seconds="0"+seconds;
                                var currentTime=hours+":"+minutes+":"+seconds+" "+DayNight;
                                timeElement.innerHTML="<span class='time'>"+currentTime+"</span>"
                                setTimeout("DisplayTime()",1000)
                            }    
                            window.onload=DisplayTime
                        </script>
                    <?php
                    }
                    ?>					
                </div>
				<div id="station">
     					<?php echo $this->element('station_list'); ?>
	                </div>
            </div>
            <div id="menu">
                <?php
					if (isset($userInfo['id']) && $userInfo['id'] > 0) {
						echo $this->element('menu');
					}
                ?>
                </div>
            <?php echo $this->element('sub-menu');?>
                    <div id="content">

                <?php echo $this->Session->flash(); ?>

         <?php
			echo $this->Html->meta('icon');

			echo $this->Html->css(array('thickbox','cake.generic.treplex-v4'));
			
			echo $this->Html->script(array('jquery-1.3.2', 'thickbox'));

			echo $scripts_for_layout;
        ?>               

			   <?php 
				
				echo $content_for_layout; ?>

                </div>
                <div id="footer">
                <?php echo $this->html->link('copyright @istoreoffice.inc', '#', array('target' => '_blank')); ?>
                </div>
            </div>
    </body>
</html>